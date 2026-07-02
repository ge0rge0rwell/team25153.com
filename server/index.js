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

// ── Course submissions ─────────────────────────────────────────────────────
const SUBMISSIONS_DIR = path.join(DATA_DIR, 'course-submissions')
const SUBMISSIONS_FILE = path.join(DATA_DIR, 'course-submissions.json')

if (!fs.existsSync(SUBMISSIONS_DIR)) fs.mkdirSync(SUBMISSIONS_DIR, { recursive: true })

const submissionStorage = multer.diskStorage({
  destination: (_req, _file, cb) => cb(null, SUBMISSIONS_DIR),
  filename: (_req, file, cb) => {
    const ext = path.extname(file.originalname).toLowerCase()
    const base = path.basename(file.originalname, ext).toLowerCase().replace(/[^a-z0-9]+/g, '-').slice(0, 40)
    cb(null, `${base}-${crypto.randomBytes(6).toString('hex')}${ext}`)
  },
})
const submissionUpload = multer({ storage: submissionStorage, limits: { fileSize: 20 * 1024 * 1024 } })

function readSubmissions() {
  try { return JSON.parse(fs.readFileSync(SUBMISSIONS_FILE, 'utf8')) } catch { return [] }
}

api.post('/course-submissions', submissionUpload.single('file'), async (req, res, next) => {
  try {
    const { name, email, message, courseId, courseName } = req.body || {}
    if (!name?.trim() || !email?.trim() || !courseId) {
      return res.status(400).json({ error: 'Name, email, and course are required.' })
    }
    const entry = {
      id: crypto.randomBytes(8).toString('hex'),
      name: name.trim(),
      email: email.trim().toLowerCase(),
      message: (message || '').trim(),
      courseId,
      courseName: (courseName || '').trim(),
      file: req.file ? { name: req.file.originalname, stored: req.file.filename, size: req.file.size } : null,
      submittedAt: new Date().toISOString(),
    }
    const all = readSubmissions()
    all.push(entry)
    await fsp.writeFile(SUBMISSIONS_FILE, JSON.stringify(all, null, 2) + '\n', 'utf8')
    res.status(201).json({ ok: true })
  } catch (e) { next(e) }
})

api.get('/course-submissions', requireAuth, (_req, res) => res.json(readSubmissions()))

app.get('/course-files/:filename', (req, res, next) => {
  // Accept token from Authorization header OR ?token= query param (for direct download links)
  const header = req.headers.authorization
  if (!header && req.query.token) {
    req.headers.authorization = `Bearer ${req.query.token}`
  }
  next()
}, requireAuth, (req, res) => {
  const filename = path.basename(req.params.filename)
  res.sendFile(path.join(SUBMISSIONS_DIR, filename))
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

// ── Moodle LMS helpers ────────────────────────────────────────────────────────
const MOODLE_ORIGIN = process.env.MOODLE_URL || 'http://localhost:8081'
const MOODLE_ADMIN_TOKEN = process.env.MOODLE_ADMIN_TOKEN || ''

app.post('/api/lms/change-password', express.json(), async (req, res) => {
  const { userToken, newPassword } = req.body || {}
  if (!userToken || !newPassword) return res.status(400).json({ error: 'Missing fields' })
  try {
    // Verify user token is valid and get user id
    const infoRes = await fetch(`${MOODLE_ORIGIN}/webservice/rest/server.php?wstoken=${userToken}&wsfunction=core_webservice_get_site_info&moodlewsrestformat=json`)
    const info = await infoRes.json()
    if (info?.exception) return res.status(401).json({ error: 'Invalid session' })

    // Update password via admin token
    const body = new URLSearchParams({
      wstoken: MOODLE_ADMIN_TOKEN,
      wsfunction: 'core_user_update_users',
      moodlewsrestformat: 'json',
      'users[0][id]': info.userid,
      'users[0][password]': newPassword,
    })
    const updRes = await fetch(`${MOODLE_ORIGIN}/webservice/rest/server.php`, {
      method: 'POST',
      headers: { 'content-type': 'application/x-www-form-urlencoded' },
      body: body.toString(),
    })
    const result = await updRes.json()
    if (result?.exception) return res.status(400).json({ error: result.message })
    res.json({ ok: true, username: info.username })
  } catch (e) {
    res.status(500).json({ error: e.message })
  }
})

app.post('/api/lms/register', express.json(), async (req, res) => {
  const { username, password, firstname, lastname, email } = req.body || {}
  if (!username || !password || !firstname || !lastname || !email) {
    return res.status(400).json({ error: 'Missing fields' })
  }
  if (!MOODLE_ADMIN_TOKEN) return res.status(503).json({ error: 'Registration service is not configured (MOODLE_ADMIN_TOKEN missing)' })
  const wsCall = async (wsfunction, params) => {
    const body = new URLSearchParams({ wstoken: MOODLE_ADMIN_TOKEN, wsfunction, moodlewsrestformat: 'json', ...params })
    const r = await fetch(`${MOODLE_ORIGIN}/webservice/rest/server.php`, {
      method: 'POST',
      headers: { 'content-type': 'application/x-www-form-urlencoded' },
      body: body.toString(),
    })
    const data = await r.json()
    if (data?.exception) throw new Error(data.message || wsfunction + ' failed')
    return data
  }
  try {
    const created = await wsCall('core_user_create_users', {
      'users[0][username]': username,
      'users[0][password]': password,
      'users[0][firstname]': firstname,
      'users[0][lastname]': lastname,
      'users[0][email]': email,
    })
    const userId = created[0].id

    const courses = await wsCall('core_course_get_courses_by_field', { field: 'shortname', value: 'FTC101' })
    const course = courses.courses?.[0]
    if (course) {
      await wsCall('enrol_manual_enrol_users', {
        'enrolments[0][roleid]': 5, // student
        'enrolments[0][userid]': userId,
        'enrolments[0][courseid]': course.id,
      })
    }
    res.json({ ok: true, username })
  } catch (e) {
    res.status(400).json({ error: e.message })
  }
})

// ── Moodle API proxy (avoids CORS) ───────────────────────────────────────────
app.use('/moodle-api', async (req, res, next) => {
  try {
    const qs = new URLSearchParams(req.query).toString()
    const target = `${MOODLE_ORIGIN}${req.path}${qs ? `?${qs}` : ''}`
    const upstream = await fetch(target)
    const body = await upstream.text()
    res.status(upstream.status).set('content-type', upstream.headers.get('content-type') || 'application/json').send(body)
  } catch (e) {
    next(e)
  }
})

// ── Static site + SPA fallback ───────────────────────────────────────────────
if (fs.existsSync(DIST)) {
  app.use(express.static(DIST))
  // SPA fallback
  app.use((_req, res) => {
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
