// Loads blog posts from Markdown files in src/content/blog/*.md.
// Each post has YAML-ish frontmatter (title, date, order, readTime, tag, excerpt, image)
// followed by a Markdown body. New posts created by the CMS appear here automatically.

// Minimal frontmatter parser — supports `key: "value"` / `key: value` string pairs.
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

// Eagerly bundle every Markdown file as a raw string at build time.
const files = import.meta.glob('../content/blog/*.md', {
  query: '?raw',
  import: 'default',
  eager: true,
})

const posts = Object.entries(files)
  .map(([path, raw]) => {
    const { data, body } = parseFrontmatter(raw)
    const slug = path.split('/').pop().replace(/\.md$/, '')
    return { slug, body, ...data, order: Number(data.order) || 0 }
  })
  .sort((a, b) => a.order - b.order)

export function getAllPosts() {
  return posts
}

export function getPostBySlug(slug) {
  return posts.find((p) => p.slug === slug) || null
}
