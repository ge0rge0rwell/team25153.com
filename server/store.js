// Content store: reads and writes the editable content on disk.
//
// Content lives in DATA_DIR/content (a persistent volume in production) so edits
// survive restarts and redeploys. On first boot the directory is seeded from the
// version-controlled src/content so a fresh deploy starts with the current site.
import fs from 'node:fs'
import fsp from 'node:fs/promises'
import path from 'node:path'
import { fileURLToPath } from 'node:url'
import { collections, fileCollections } from './collections.js'

const __dirname = path.dirname(fileURLToPath(import.meta.url))
const ROOT = path.resolve(__dirname, '..')

export const DATA_DIR = process.env.DATA_DIR
  ? path.resolve(process.env.DATA_DIR)
  : path.join(ROOT, 'data')

export const CONTENT_DIR = path.join(DATA_DIR, 'content')
export const MEDIA_DIR = path.join(DATA_DIR, 'media')
const SEED_DIR = path.join(ROOT, 'src', 'content')

// ── Frontmatter (Markdown) ────────────────────────────────────────────────
function parseFrontmatter(raw) {
  const match = /^---\s*\n([\s\S]*?)\n---\s*\n?([\s\S]*)$/.exec(raw)
  if (!match) return { data: {}, body: raw }
  const data = {}
  for (const line of match[1].split('\n')) {
    const m = /^([A-Za-z0-9_]+):\s*(.*)$/.exec(line.trim())
    if (!m) continue
    let value = m[2].trim()
    if (
      (value.startsWith('"') && value.endsWith('"')) ||
      (value.startsWith("'") && value.endsWith("'"))
    ) {
      value = value.slice(1, -1)
    }
    data[m[1]] = value
  }
  return { data, body: match[2] }
}

function serializeFrontmatter(data, body) {
  const lines = Object.entries(data)
    .filter(([k]) => k !== 'body' && k !== 'slug')
    .map(([k, v]) => {
      if (typeof v === 'number' || typeof v === 'boolean') return `${k}: ${v}`
      return `${k}: ${JSON.stringify(String(v ?? ''))}`
    })
  return `---\n${lines.join('\n')}\n---\n\n${(body || '').trim()}\n`
}

// ── Seeding ────────────────────────────────────────────────────────────────
export async function ensureSeed() {
  await fsp.mkdir(CONTENT_DIR, { recursive: true })
  await fsp.mkdir(MEDIA_DIR, { recursive: true })
  await fsp.mkdir(path.join(CONTENT_DIR, 'blog'), { recursive: true })

  // Seed file collections that don't exist yet.
  for (const name of fileCollections) {
    const dest = path.join(CONTENT_DIR, collections[name].file)
    if (!fs.existsSync(dest)) {
      const src = path.join(SEED_DIR, collections[name].file)
      if (fs.existsSync(src)) await fsp.copyFile(src, dest)
    }
  }

  // Seed blog posts if the blog directory is empty.
  const blogDir = path.join(CONTENT_DIR, 'blog')
  const existing = (await fsp.readdir(blogDir)).filter((f) => f.endsWith('.md'))
  if (existing.length === 0) {
    const seedBlog = path.join(SEED_DIR, 'blog')
    if (fs.existsSync(seedBlog)) {
      for (const f of await fsp.readdir(seedBlog)) {
        if (f.endsWith('.md')) {
          await fsp.copyFile(path.join(seedBlog, f), path.join(blogDir, f))
        }
      }
    }
  }
}

// ── One-time content migrations ────────────────────────────────────────────
// ensureSeed only ever copies src/content into DATA_DIR on the very first
// boot — every deploy after that keeps whatever's already on the persistent
// volume, so a later edit to a seed file (like navigation.json) never
// reaches production on its own. Each migration below patches one specific,
// narrow thing directly in the live collection and is written to be a no-op
// once applied, so it's safe to leave running on every boot.
export async function runContentMigrations() {
  await migratePortfolioMenuToFlipbook()
  await migrateRemoveBlogNavLinks()
}

async function migratePortfolioMenuToFlipbook() {
  const file = path.join(CONTENT_DIR, collections.navigation.file)
  if (!fs.existsSync(file)) return

  const data = JSON.parse(await fsp.readFile(file, 'utf8'))
  const portfolioItem = (data.navItems || []).find((item) => item.label === 'Portfolio')
  if (!portfolioItem?.children) return

  let changed = false
  for (const child of portfolioItem.children) {
    if (typeof child.to === 'string' && child.to.startsWith('/portfolio/')) {
      child.to = child.to.replace('/portfolio/', '/flipbook/')
      child.newTab = true
      changed = true
    }
  }

  if (changed) {
    await fsp.writeFile(file, JSON.stringify(data, null, 2) + '\n', 'utf8')
    console.log('  ✦ Migrated Portfolio menu links to /flipbook (new tab)')
  }
}

// Blog is unwired for now (App.jsx has no /blog route), so its nav/footer
// links would otherwise dead-end in a 404. Removing them, not the
// underlying blog collection or markdown files — those are untouched.
async function migrateRemoveBlogNavLinks() {
  const file = path.join(CONTENT_DIR, collections.navigation.file)
  if (!fs.existsSync(file)) return

  const data = JSON.parse(await fsp.readFile(file, 'utf8'))
  let changed = false

  for (const key of ['navItems', 'footerLinks']) {
    const list = data[key]
    if (!Array.isArray(list)) continue
    const next = list.filter((item) => item.label !== 'Blog')
    if (next.length !== list.length) {
      data[key] = next
      changed = true
    }
  }

  if (changed) {
    await fsp.writeFile(file, JSON.stringify(data, null, 2) + '\n', 'utf8')
    console.log('  ✦ Removed Blog links from live navigation (content untouched)')
  }
}

// ── File collections ───────────────────────────────────────────────────────
export async function readCollection(name) {
  const col = collections[name]
  if (!col || col.type !== 'file') throw new Error(`Unknown file collection: ${name}`)
  const raw = await fsp.readFile(path.join(CONTENT_DIR, col.file), 'utf8')
  return JSON.parse(raw)
}

export async function writeCollection(name, data) {
  const col = collections[name]
  if (!col || col.type !== 'file') throw new Error(`Unknown file collection: ${name}`)
  await fsp.writeFile(
    path.join(CONTENT_DIR, col.file),
    JSON.stringify(data, null, 2) + '\n',
    'utf8',
  )
  return data
}

// ── Blog (folder collection) ─────────────────────────────────────────────────
const BLOG_DIR = () => path.join(CONTENT_DIR, 'blog')
const slugSafe = (s) =>
  String(s)
    .toLowerCase()
    .replace(/[^a-z0-9]+/g, '-')
    .replace(/^-+|-+$/g, '')

export async function listPosts() {
  const dir = BLOG_DIR()
  const files = (await fsp.readdir(dir)).filter((f) => f.endsWith('.md'))
  const posts = await Promise.all(
    files.map(async (f) => {
      const raw = await fsp.readFile(path.join(dir, f), 'utf8')
      const { data, body } = parseFrontmatter(raw)
      return { slug: f.replace(/\.md$/, ''), body, ...data, order: Number(data.order) || 0 }
    }),
  )
  return posts.sort((a, b) => a.order - b.order)
}

export async function getPost(slug) {
  const posts = await listPosts()
  return posts.find((p) => p.slug === slug) || null
}

export async function savePost(slug, payload) {
  const finalSlug = slugSafe(payload.slug || slug || payload.title)
  const { body, ...data } = payload
  delete data.slug
  await fsp.writeFile(
    path.join(BLOG_DIR(), `${finalSlug}.md`),
    serializeFrontmatter(data, body),
    'utf8',
  )
  // If the slug changed on an existing post, remove the old file.
  if (slug && slug !== finalSlug) {
    const old = path.join(BLOG_DIR(), `${slug}.md`)
    if (fs.existsSync(old)) await fsp.unlink(old)
  }
  return getPost(finalSlug)
}

export async function deletePost(slug) {
  const file = path.join(BLOG_DIR(), `${slugSafe(slug)}.md`)
  if (fs.existsSync(file)) await fsp.unlink(file)
}

// ── Aggregate for the public site ────────────────────────────────────────────
export async function getAllContent() {
  const out = {}
  for (const name of fileCollections) out[name] = await readCollection(name)
  out.blog = await listPosts()
  return out
}
