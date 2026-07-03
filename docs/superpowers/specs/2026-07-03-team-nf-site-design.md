# Team NF (9029) site — design spec

## Goal
Stand up a placeholder-content website for FRC Team NF 9029, structurally identical (layout, nav, page set, routing, content-driven architecture) to team25153.com, reskinned to NF's black/green/white logo palette.

## Location
New sibling folder: `~/team-nf-9029.com`, own git repo. Not a subfolder of team25153.com, not shared deploy.

## Stack (copied 1:1 from team25153.com)
- React 19 + Vite + Tailwind 3 + react-router-dom 7
- JSON-driven content (`src/content/*.json`) consumed by page components — no hardcoded copy in JSX
- lucide-react / react-icons for icons (already-installed deps, reused)

## Explicitly out of scope
- CMS (`src/admin`, `server/*`, `data/*`) — team25153.com's editor backend, not part of "layout"
- LMS / Moodle proxy (`pages/LMS.jsx`, `pages/MoodleAdmin.jsx`, `scripts/moodle`, moodle docker services)
- Descartes AI chat widget (`components/descartes/*`) — Gemini-backed manual search, team25153-specific content
- Docker/nginx/deployment plumbing — static site only for now, no server component

## Pages (same routes as team25153.com)
`/`, `/team`, `/robots/:slug`, `/awards`, `/resources`, `/resources/:slug`, `/portfolio/:slug`, `/blog`, `/blog/:slug`, `/sponsorship`, `/contact`, `/join`

Nav/Footer structure copied from `src/content/navigation.json`, relabeled for NF (FRC not FTC terminology, robot/portfolio slugs renamed to be generic placeholders since NF's actual robot names aren't in the source note).

## Content
- **Awards / team facts**: real, pulled from Obsidian note `Team NF 9029` — team #9029, ODTÜ GV Özel Ankara Lisesi, rookie 2023, sponsor list, event history, notable results (2025 Ankara Regional Winners, 2025 FIRST Championship Dean's List, etc.)
- **Everything else** (robot names/descriptions, portfolio blurbs, resource articles, blog posts, sponsorship tiers, contact details): placeholder/lorem-equivalent text, clearly structured so real content can be swapped in later without touching components.

## Visual identity
Sampled from provided logo (`TEAM NF` white/mint outline on black circle):
- `bg` black `#0a0a0a` (replaces navy `#002147`)
- `green` DEFAULT `#1a9e63`, light/mint `#34d399` (replaces crimson)
- white stays white/primary text
- gold accent dropped — no third color in source logo; white fills that role
- Font: keep Roboto (team25153.com choice, not logo-specific)

Logo file: `/Users/oguzhan/.claude/image-cache/a8ed5390-c86b-42db-8922-9a720b6f3f01/1.png` → copied into new repo's `public/`/`src/assets/` as the site logo, replacing Cartesian logo in Navbar/Footer/favicon.

## Components
Reuse existing plain-Tailwind components structurally (Navbar, Footer, RobotCard, PageBanner, LogoCarousel, ContactForm) recolored to new palette — these aren't 21st.dev-sourced today, so "modify existing 21st components" doesn't apply to them as-is.
Where a component is rebuilt/new (hero section, stat tiles) pull the nearest match from 21st.dev via MCP (`21st_magic_component_builder` / `_inspiration`) and restyle to the black/green palette rather than hand-rolling from scratch — satisfies "use 21st.dev, only existing components, modified."

## Testing
No test suite exists in team25153.com beyond eslint; matching that bar — `npm run lint` clean, manual `npm run dev` smoke check that all routes render, is the acceptance bar. No new test framework introduced (YAGNI).

## Non-goals / deferred
- Real robot/portfolio/blog content — placeholder only, ticket for later
- Deployment (Docker/nginx/Coolify) — not requested, skip until asked
- LMS/CMS/AI chat — explicitly excluded above
