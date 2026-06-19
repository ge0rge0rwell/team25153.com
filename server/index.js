// Single application server.
//   • /api/*      — auth + content management API (the admin panel talks to this)
//   • /uploads/*  — media uploaded through the admin
//   • everything else — the built React site (dist/), with SPA fallback
import express from 'express'
import cors from 'cors'
import multer from 'multer'
import path from 'node:path'
import fs from 'node:fs'
import fsp from 'node:fs/promises'
import crypto from 'node:crypto'
import { fileURLToPath } from 'node:url'

import { collections, fileCollections } from './collections.js'
import {
  ensureSeed,
  DATA_DIR,
  MEDIA_DIR,
  readCollection,
  writeCollection,
  getAllContent,
  listPosts,
  getPost,
  savePost,
  deletePost,
} from './store.js'
import {
  ensureAdmin,
  login,
  requireAuth,
  getMe,
  listUsers,
  createUser,
  deleteUser,
  changePassword,
} from './auth.js'

const __dirname = path.dirname(fileURLToPath(import.meta.url))
const ROOT = path.resolve(__dirname, '..')
const DIST = path.join(ROOT, 'dist')
const PORT = process.env.PORT || 4000

await ensureSeed()
await ensureAdmin()

const app = express()
app.use(cors())
app.use(express.json({ limit: '5mb' }))

const api = express.Router()

// ── Auth ─────────────────────────────────────────────────────────────────
api.post('/auth/login', async (req, res) => {
  const { username, password } = req.body || {}
  const result = await login(username, password)
  if (!result) return res.status(401).json({ error: 'Wrong username or password' })
  res.json(result)
})

api.get('/auth/me', requireAuth, async (req, res) => {
  res.json(await getMe(req.user.username))
})

api.post('/auth/password', requireAuth, async (req, res) => {
  const { password } = req.body || {}
  if (!password || password.length < 6) {
    return res.status(400).json({ error: 'Password must be at least 6 characters' })
  }
  await changePassword(req.user.username, password)
  res.json({ ok: true })
})

// ── Public content (read-only, used by the live site) ──────────────────────
api.get('/content', async (_req, res) => {
  res.json(await getAllContent())
})

// ── Content management (auth required) ─────────────────────────────────────
api.get('/collections/:name', requireAuth, async (req, res, next) => {
  try {
    const { name } = req.params
    if (name === 'blog') return res.json(await listPosts())
    if (!fileCollections.includes(name)) return res.status(404).json({ error: 'Unknown collection' })
    res.json(await readCollection(name))
  } catch (e) {
    next(e)
  }
})

api.put('/collections/:name', requireAuth, async (req, res, next) => {
  try {
    const { name } = req.params
    if (!fileCollections.includes(name)) return res.status(404).json({ error: 'Unknown collection' })
    res.json(await writeCollection(name, req.body))
  } catch (e) {
    next(e)
  }
})

// Blog posts
api.get('/blog', requireAuth, async (_req, res, next) => {
  try {
    res.json(await listPosts())
  } catch (e) {
    next(e)
  }
})
api.get('/blog/:slug', requireAuth, async (req, res, next) => {
  try {
    const post = await getPost(req.params.slug)
    if (!post) return res.status(404).json({ error: 'Post not found' })
    res.json(post)
  } catch (e) {
    next(e)
  }
})
api.post('/blog', requireAuth, async (req, res, next) => {
  try {
    res.json(await savePost(null, req.body))
  } catch (e) {
    next(e)
  }
})
api.put('/blog/:slug', requireAuth, async (req, res, next) => {
  try {
    res.json(await savePost(req.params.slug, req.body))
  } catch (e) {
    next(e)
  }
})
api.delete('/blog/:slug', requireAuth, async (req, res, next) => {
  try {
    await deletePost(req.params.slug)
    res.json({ ok: true })
  } catch (e) {
    next(e)
  }
})

// ── Users ──────────────────────────────────────────────────────────────────
api.get('/users', requireAuth, async (_req, res) => res.json(await listUsers()))
api.post('/users', requireAuth, async (req, res, next) => {
  try {
    const { username, name, password } = req.body || {}
    if (!username || !password || password.length < 6) {
      return res.status(400).json({ error: 'Username and a 6+ character password are required' })
    }
    res.json(await createUser({ username, name, password }))
  } catch (e) {
    res.status(e.status || 500).json({ error: e.message })
  }
})
api.delete('/users/:username', requireAuth, async (req, res, next) => {
  try {
    await deleteUser(req.params.username)
    res.json({ ok: true })
  } catch (e) {
    res.status(e.status || 500).json({ error: e.message })
  }
})

// ── Media upload ───────────────────────────────────────────────────────────
const storage = multer.diskStorage({
  destination: (_req, _file, cb) => cb(null, MEDIA_DIR),
  filename: (_req, file, cb) => {
    const ext = path.extname(file.originalname).toLowerCase()
    const base = path
      .basename(file.originalname, ext)
      .toLowerCase()
      .replace(/[^a-z0-9]+/g, '-')
      .replace(/^-+|-+$/g, '')
      .slice(0, 40)
    const id = crypto.randomBytes(4).toString('hex')
    cb(null, `${base || 'file'}-${id}${ext}`)
  },
})
const upload = multer({ storage, limits: { fileSize: 15 * 1024 * 1024 } })

api.get('/media', requireAuth, async (_req, res) => {
  const files = fs
    .readdirSync(MEDIA_DIR)
    .filter((f) => !f.startsWith('.'))
    .map((f) => ({ name: f, url: `/uploads/${f}` }))
    .reverse()
  res.json(files)
})
api.post('/media', requireAuth, upload.single('file'), (req, res) => {
  if (!req.file) return res.status(400).json({ error: 'No file uploaded' })
  res.json({ name: req.file.filename, url: `/uploads/${req.file.filename}` })
})

// ── Membership applications ────────────────────────────────────────────────
const APPLICATIONS_FILE = path.join(DATA_DIR, 'applications.json')

function readApplications() {
  try {
    return JSON.parse(fs.readFileSync(APPLICATIONS_FILE, 'utf8'))
  } catch {
    return []
  }
}

api.post('/applications', async (req, res, next) => {
  try {
    const { name, email, grade, interest, message } = req.body || {}
    if (!name?.trim() || !email?.trim() || !grade || !interest) {
      return res.status(400).json({ error: 'Name, email, grade, and area of interest are required.' })
    }
    const entry = {
      id: crypto.randomBytes(8).toString('hex'),
      name: name.trim(),
      email: email.trim().toLowerCase(),
      grade,
      interest,
      message: (message || '').trim(),
      submittedAt: new Date().toISOString(),
    }
    const existing = readApplications()
    existing.push(entry)
    await fsp.writeFile(APPLICATIONS_FILE, JSON.stringify(existing, null, 2) + '\n', 'utf8')
    res.status(201).json({ ok: true })
  } catch (e) {
    next(e)
  }
})

api.get('/applications', requireAuth, async (_req, res, next) => {
  try {
    res.json(readApplications())
  } catch (e) {
    next(e)
  }
})

api.use((err, _req, res, _next) => {
  console.error('API error:', err)
  res.status(500).json({ error: err.message || 'Server error' })
})

app.use('/api', api)
app.use('/uploads', express.static(MEDIA_DIR))

// ── Static site + SPA fallback ───────────────────────────────────────────────
if (fs.existsSync(DIST)) {
  app.use('/ozi', express.static(DIST))
  // Redirect bare root to the app
  app.get('/', (_req, res) => res.redirect('/ozi/'))
  // SPA fallback: any /ozi/* path that isn't an asset serves index.html
  app.get(/^\/ozi(\/.*)?$/, (_req, res) => {
    res.sendFile(path.join(DIST, 'index.html'))
  })
} else {
  app.get('/', (_req, res) =>
    res.send('Run `npm run build` to generate the site. The API is live at /api.'),
  )
}

app.listen(PORT, () => {
  console.log(`\n  ➜  Server running at http://localhost:${PORT}\n     CMS panel:    http://localhost:${PORT}/cms\n     Moodle admin: http://localhost:${PORT}/admin\n`)
})
