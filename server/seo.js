// Server-rendered SEO: robots.txt, sitemap.xml, and per-route <head> injection.
//
// The site is a client-rendered SPA, so without this every URL shipped the same
// static <head> from index.html. Google can execute JS, but it does so on a
// second, much-delayed pass — and identical titles/canonicals across URLs get
// deduplicated long before that. Injecting the real tags into the HTML we serve
// means crawlers (and every social/link preview bot, none of which run JS) see
// correct per-page metadata on the very first byte.
import fs from 'node:fs'
import path from 'node:path'

import { getAllContent } from './store.js'
import { buildMeta, sitemapEntries, SITE } from '../src/lib/seoMeta.js'

// Content is CMS-editable, so treat every interpolated value as untrusted and
// escape it before it lands in an HTML attribute.
function esc(value) {
  return String(value ?? '')
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;')
}

// JSON-LD sits inside <script>, where the only way out is a literal "</script>".
// Escaping "<" closes that hole without breaking the JSON.
function jsonLdScript(data) {
  const json = JSON.stringify(data).replace(/</g, '\\u003c')
  return `<script type="application/ld+json">${json}</script>`
}

function renderTags(meta) {
  const tags = [
    `<title>${esc(meta.title)}</title>`,
    `<meta name="description" content="${esc(meta.description)}" />`,
    `<link rel="canonical" href="${esc(meta.canonical)}" />`,
    meta.noindex
      ? `<meta name="robots" content="noindex,follow" />`
      : `<meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1" />`,

    `<meta property="og:type" content="${esc(meta.type)}" />`,
    `<meta property="og:site_name" content="${esc(SITE.name)} #${esc(SITE.team)}" />`,
    `<meta property="og:title" content="${esc(meta.title)}" />`,
    `<meta property="og:description" content="${esc(meta.description)}" />`,
    `<meta property="og:url" content="${esc(meta.canonical)}" />`,
    `<meta property="og:image" content="${esc(meta.image)}" />`,
    `<meta property="og:locale" content="en_US" />`,

    `<meta name="twitter:card" content="summary_large_image" />`,
    `<meta name="twitter:title" content="${esc(meta.title)}" />`,
    `<meta name="twitter:description" content="${esc(meta.description)}" />`,
    `<meta name="twitter:image" content="${esc(meta.image)}" />`,
  ]
  for (const block of meta.jsonLd) tags.push(jsonLdScript(block))
  return tags.join('\n    ')
}

const MARKER = /<!--seo:start-->[\s\S]*?<!--seo:end-->/

export function registerSeoRoutes(app) {
  // /team renders as a client-side <Navigate> to /awards. Answering with a real
  // 301 here means crawlers follow it and pass link equity to /awards, which a
  // JS redirect does not.
  app.get('/team', (_req, res) => res.redirect(301, '/awards'))

  app.get('/robots.txt', (_req, res) => {
    res.type('text/plain').send(
      [
        'User-agent: *',
        'Allow: /',
        '',
        '# Admin surfaces hold no public content',
        'Disallow: /admin',
        'Disallow: /cms',
        'Disallow: /api/',
        '',
        `Sitemap: ${SITE.origin}/sitemap.xml`,
        '',
      ].join('\n'),
    )
  })

  app.get('/sitemap.xml', async (_req, res, next) => {
    try {
      const content = await getAllContent()
      const urls = sitemapEntries(content)
        .map(({ path: p, priority, changefreq, lastmod }) =>
          [
            '  <url>',
            `    <loc>${esc(SITE.origin + p)}</loc>`,
            lastmod ? `    <lastmod>${esc(lastmod)}</lastmod>` : null,
            `    <changefreq>${changefreq}</changefreq>`,
            `    <priority>${priority}</priority>`,
            '  </url>',
          ]
            .filter(Boolean)
            .join('\n'),
        )
        .join('\n')

      res.type('application/xml').send(
        `<?xml version="1.0" encoding="UTF-8"?>\n<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">\n${urls}\n</urlset>\n`,
      )
    } catch (e) {
      next(e)
    }
  })
}

/**
 * SPA fallback that injects per-route metadata into index.html.
 * Replaces whatever sits between the <!--seo:start--> / <!--seo:end--> markers;
 * if the markers are missing or anything throws, the untouched HTML (which
 * still carries sane defaults) is served rather than erroring the page.
 */
export function seoFallback(DIST) {
  const indexPath = path.join(DIST, 'index.html')

  return async function handleSeoFallback(req, res, next) {
    let html
    try {
      html = fs.readFileSync(indexPath, 'utf8')
    } catch {
      return next()
    }

    // This handler sits on the path of every single page view, so it must never
    // be able to take the site down. Any failure below falls back to serving the
    // unmodified HTML — the app still boots and renders, it just loses the
    // injected metadata for that request.
    try {
      if (!MARKER.test(html)) return res.type('html').send(html)

      const content = await getAllContent()
      const meta = buildMeta(req.path, content)
      const injected = html.replace(MARKER, renderTags(meta))

      // 404s must answer with a 404 — a soft-404 (unknown URL returning 200)
      // lets junk URLs into the index and dilutes the real pages.
      res.status(meta.noindex && !isKnownNoindex(req.path) ? 404 : 200)
      res.type('html').send(injected)
    } catch (e) {
      console.error('SEO injection failed, serving plain HTML:', e)
      if (!res.headersSent) res.type('html').send(html)
    }
  }
}

// Admin surfaces are deliberately noindex but are perfectly valid pages, so
// they must not be reported as 404.
function isKnownNoindex(pathname) {
  return /^\/(admin|cms|ozi|flipbook)(\/|$)/.test(pathname)
}
