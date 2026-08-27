// Per-route SEO metadata — the single source of truth shared by BOTH the
// Express server (which injects real tags into the HTML it serves, so crawlers
// see them without executing JS) and the client (which updates the tab title on
// SPA navigation). Keeping one module means the two can never drift apart.
//
// Why this matters: every URL used to serve a byte-identical <head>. Search
// engines index URLs, not apps — when 20 URLs carry the same title, canonical
// and description, they get consolidated and only the homepage surfaces. Giving
// each page its own metadata is what makes a search for "Cerberon" land on
// /robots/cerberon instead of the front page.

export const SITE = {
  origin: 'https://team25153.com',
  name: 'Cartesian Robotics',
  team: '25153',
  locality: 'Ankara',
  country: 'Türkiye',
  motto: 'I think, therefore I can.',
  founded: '2022',
  ogImage: '/og-cover.png',
}

const DEFAULT_DESC =
  'Cartesian Robotics #25153 is a student-led FIRST Tech Challenge (FTC) and FRC robotics team from Ankara, Türkiye. Inspire Award winners and FIRST World Championship competitors.'

// Search snippets get cut around 155-160 characters; trim on a word boundary so
// descriptions never end mid-word.
function clamp(text, max = 158) {
  const clean = String(text || '').replace(/\s+/g, ' ').trim()
  if (clean.length <= max) return clean
  // lastIndexOf returns -1 for a single unbroken token; fall back to a hard cut
  // so we never slice(0, -1) and silently drop the final character.
  const cut = clean.lastIndexOf(' ', max - 1)
  return clean.slice(0, cut > 0 ? cut : max - 1).replace(/[,;:.\s]+$/, '') + '…'
}

function titleFor(pageTitle) {
  if (!pageTitle) return `${SITE.name} #${SITE.team}`
  const suffix = ` | ${SITE.name} #${SITE.team}`
  return pageTitle.length + suffix.length > 65 ? pageTitle : pageTitle + suffix
}

// Blog frontmatter stores human dates ("January 2026"). Structured data needs
// ISO-8601, so parse what we can and omit the field when we can't.
const MONTHS = {
  january: '01', february: '02', march: '03', april: '04', may: '05', june: '06',
  july: '07', august: '08', september: '09', october: '10', november: '11', december: '12',
}
export function toIsoDate(value) {
  if (!value) return null
  const raw = String(value).trim()
  if (/^\d{4}-\d{2}-\d{2}/.test(raw)) return raw.slice(0, 10)
  const m = /^([A-Za-z]+)\s+(\d{4})$/.exec(raw)
  if (m && MONTHS[m[1].toLowerCase()]) return `${m[2]}-${MONTHS[m[1].toLowerCase()]}-01`
  const d = new Date(raw)
  return Number.isNaN(d.getTime()) ? null : d.toISOString().slice(0, 10)
}

function absolute(url) {
  if (!url) return SITE.origin + SITE.ogImage
  if (/^https?:\/\//i.test(url)) return url
  return SITE.origin + (url.startsWith('/') ? url : '/' + url)
}

// ── Static routes ──────────────────────────────────────────────────────────
// Written to read naturally while carrying the terms people actually search:
// robot names, award names, season names, and the team's city.
const STATIC = {
  '/': {
    // No title here: titleFor()'s no-argument branch already renders the bare
    // "Cartesian Robotics #25153" — passing that same string through would
    // hit the OTHER branch and append " | Cartesian Robotics #25153" again.
    title: null,
    description: DEFAULT_DESC,
  },
  '/awards': {
    title: 'Awards & Team',
    description:
      'Awards won by FTC team #25153: the Sustain Award at the FIRST World Championship Franklin Division, Inspire Awards at Piri Reis Regional and the Türkiye Championship, plus Think, Control, Design and Innovate Awards.',
  },
  '/resources': {
    title: 'FTC Resources & Guides',
    description:
      'Free FTC resources from team #25153: game analysis and strategy guides, the Java FTC SDK software stack, Onshape CAD tutorials, and a curated engineering library.',
  },
  // '/blog' intentionally omitted — the route is unwired for now (see
  // App.jsx). Leaving a STATIC entry here would make the server report it
  // as a real, indexable 200 page even though the client renders NotFound.
  '/sponsorship': {
    title: 'Sponsor Our Team',
    description:
      'Partner with Cartesian Robotics #25153. Sponsorship tiers, benefits and budget breakdown for our FTC and FRC seasons — plus in-kind technical partnerships.',
  },
  '/contact': {
    title: 'Contact Us',
    description: `Get in touch with Cartesian Robotics #25153, an FTC and FRC robotics team based in ${SITE.locality}, ${SITE.country}.`,
  },
  '/join': {
    title: 'Join the Team',
    description:
      'Apply to join Cartesian Robotics #25153. We welcome students interested in engineering, programming, CAD, strategy and outreach.',
  },
  '/lms': {
    title: 'Learn — FTC Courses',
    description:
      'Our learning platform: structured FTC courses covering robot programming, CAD and engineering fundamentals, taught by team #25153.',
  },
}

// ── Dynamic route resolvers ────────────────────────────────────────────────
function robotMeta(slug, content) {
  const robot = (content?.robots?.robots || []).find((r) => r.slug === slug)
  if (!robot) return null
  const season = robot.competition || robot.gameTitle || 'FTC'
  return {
    title: `${robot.name} — ${season} Robot (${robot.year})`,
    description: clamp(
      `${robot.name} is Cartesian Robotics #${SITE.team}'s ${season} competition robot for the ${robot.year} season. ${robot.description || robot.robotOverview || ''}`,
    ),
    image: robot.image,
    type: 'article',
    jsonLd: [
      {
        '@context': 'https://schema.org',
        '@type': 'CreativeWork',
        name: robot.name,
        alternateName: `${robot.name} FTC robot`,
        headline: `${robot.name} — ${season}`,
        description: robot.description || robot.robotOverview,
        image: absolute(robot.image),
        url: `${SITE.origin}/robots/${slug}`,
        dateCreated: String(robot.year || '').slice(0, 4) || undefined,
        creator: { '@type': 'SportsTeam', name: `${SITE.name} #${SITE.team}` },
        about: robot.gameTitle || season,
      },
    ],
  }
}

function portfolioMeta(slug, content) {
  const p = (content?.portfolios?.portfolios || []).find((x) => x.slug === slug)
  if (!p) return null
  return {
    title: `${p.title} — Engineering Portfolio`,
    description: clamp(`${p.season ? p.season + '. ' : ''}${p.content || ''}`),
    image: p.image,
    type: 'article',
  }
}

function resourceMeta(slug, content) {
  const r = (content?.resources?.resources || []).find((x) => x.slug === slug)
  if (!r) return null
  return {
    title: `${r.title} — FTC ${r.tag || 'Resource'}`,
    description: clamp(r.description || r.content),
    type: 'article',
  }
}

function blogMeta(slug, content) {
  const post = (content?.blog || []).find((p) => p.slug === slug)
  if (!post) return null
  const published = toIsoDate(post.date)
  return {
    title: post.title,
    description: clamp(post.excerpt || post.body),
    image: post.image,
    type: 'article',
    jsonLd: [
      {
        '@context': 'https://schema.org',
        '@type': 'BlogPosting',
        headline: post.title,
        description: post.excerpt,
        image: absolute(post.image),
        url: `${SITE.origin}/blog/${slug}`,
        ...(published ? { datePublished: published, dateModified: published } : {}),
        author: { '@type': 'Organization', name: `${SITE.name} #${SITE.team}` },
        publisher: {
          '@type': 'Organization',
          name: `${SITE.name} #${SITE.team}`,
          logo: { '@type': 'ImageObject', url: SITE.origin + '/cartesian-logo.png' },
        },
        mainEntityOfPage: { '@type': 'WebPage', '@id': `${SITE.origin}/blog/${slug}` },
        ...(post.tag ? { articleSection: post.tag } : {}),
      },
    ],
  }
}

// Organization schema, emitted on every page. The award list is what gives
// searches like "FTC Inspire Award Türkiye" or "Franklin Division Sustain
// Award" something concrete on this domain to match against.
function organizationJsonLd(content) {
  const awards = []
  for (const season of content?.awards?.seasons || []) {
    for (const a of season.awards || []) {
      awards.push(`${a.title} — ${a.event} (${season.year})`)
    }
  }
  return {
    '@context': 'https://schema.org',
    '@type': 'SportsTeam',
    name: `${SITE.name} #${SITE.team}`,
    alternateName: [
      `FTC Team ${SITE.team}`,
      `FIRST Tech Challenge Team ${SITE.team}`,
      SITE.name,
    ],
    url: SITE.origin,
    logo: SITE.origin + '/cartesian-logo.png',
    image: SITE.origin + SITE.ogImage,
    description: DEFAULT_DESC,
    slogan: SITE.motto,
    foundingDate: SITE.founded,
    sport: 'Robotics',
    memberOf: { '@type': 'Organization', name: 'FIRST Tech Challenge', url: 'https://www.firstinspires.org/robotics/ftc' },
    address: {
      '@type': 'PostalAddress',
      addressLocality: SITE.locality,
      addressCountry: 'TR',
    },
    ...(awards.length ? { award: awards } : {}),
  }
}

function breadcrumbJsonLd(pathname, title) {
  if (pathname === '/') return null
  const parts = pathname.split('/').filter(Boolean)
  const items = [{ '@type': 'ListItem', position: 1, name: 'Home', item: SITE.origin }]
  let acc = ''
  parts.forEach((part, i) => {
    acc += '/' + part
    items.push({
      '@type': 'ListItem',
      position: i + 2,
      name: i === parts.length - 1 ? title : part.replace(/-/g, ' '),
      item: SITE.origin + acc,
    })
  })
  return { '@context': 'https://schema.org', '@type': 'BreadcrumbList', itemListElement: items }
}

/**
 * Resolve full metadata for a pathname.
 * @param {string} pathname e.g. "/robots/cerberon"
 * @param {object} content  the content tree (same shape the CMS serves)
 */
export function buildMeta(pathname, content = {}) {
  const path = pathname.replace(/\/+$/, '') || '/'

  let meta = STATIC[path] || null
  let noindex = false

  if (!meta) {
    const [, section, slug] = path.split('/')
    if (section === 'robots' && slug) meta = robotMeta(slug, content)
    else if (section === 'portfolio' && slug) meta = portfolioMeta(slug, content)
    else if (section === 'resources' && slug) meta = resourceMeta(slug, content)
    // 'blog' intentionally not dispatched here — route is unwired for now,
    // so /blog/:slug should fall through to the unknown-path 404 below,
    // same as any other dead URL.
    // /flipbook/:slug is the bare, no-chrome viewer opened in a new tab from
    // the Portfolio menu — a real page (valid, 200), just not one we want
    // Google indexing as its own result alongside the real /portfolio/:slug.
    else if (section === 'flipbook' && slug) {
      meta = portfolioMeta(slug, content)
      if (meta) noindex = true
    }
  }

  // Unknown URL (404) or an admin screen — give it a title but keep it out of
  // the index so thin/duplicate pages never dilute the real ones.
  if (!meta) {
    noindex = true
    meta = { title: 'Page Not Found', description: DEFAULT_DESC }
  }
  if (path.startsWith('/admin') || path.startsWith('/cms') || path.startsWith('/ozi')) {
    noindex = true
  }

  const title = titleFor(meta.title)
  const description = clamp(meta.description || DEFAULT_DESC)
  const canonical = SITE.origin + (path === '/' ? '/' : path)

  const jsonLd = [organizationJsonLd(content), ...(meta.jsonLd || [])]
  const crumbs = breadcrumbJsonLd(path, meta.title)
  if (crumbs) jsonLd.push(crumbs)

  return {
    title,
    description,
    canonical,
    noindex,
    image: absolute(meta.image),
    type: meta.type || 'website',
    jsonLd: jsonLd.filter(Boolean),
  }
}

/**
 * Every indexable URL, for sitemap.xml. Driven by live content so new
 * robots etc. added through the CMS appear automatically.
 * ('/blog' and its posts are left out while the route is unwired — see
 * App.jsx — so the sitemap never advertises a URL that 404s.)
 */
export function sitemapEntries(content = {}) {
  const entries = [
    { path: '/', priority: '1.0', changefreq: 'weekly' },
    { path: '/awards', priority: '0.9', changefreq: 'monthly' },
    { path: '/resources', priority: '0.8', changefreq: 'monthly' },
    { path: '/sponsorship', priority: '0.7', changefreq: 'monthly' },
    { path: '/join', priority: '0.6', changefreq: 'monthly' },
    { path: '/contact', priority: '0.6', changefreq: 'yearly' },
    { path: '/lms', priority: '0.6', changefreq: 'monthly' },
  ]
  for (const r of content?.robots?.robots || []) {
    entries.push({ path: `/robots/${r.slug}`, priority: '0.9', changefreq: 'monthly' })
  }
  for (const p of content?.portfolios?.portfolios || []) {
    entries.push({ path: `/portfolio/${p.slug}`, priority: '0.8', changefreq: 'monthly' })
  }
  for (const r of content?.resources?.resources || []) {
    entries.push({ path: `/resources/${r.slug}`, priority: '0.7', changefreq: 'monthly' })
  }
  return entries
}
