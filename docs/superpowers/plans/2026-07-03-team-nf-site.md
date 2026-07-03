# Team NF (9029) Site Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Stand up `~/team-nf-9029.com`, a static Vite+React public site structurally identical to team25153.com's public pages, reskinned black/green/white for Team NF 9029, placeholder content except awards/team facts (real, from Obsidian).

**Architecture:** Port the public-site slice of team25153.com (Navbar/Footer/pages/JSON content, excludes CMS/LMS/Moodle/Descartes) into a new repo, applying one mechanical transform table (colors, copy, logo) across every ported file.

**Tech Stack:** React 19, Vite 8, Tailwind 3, react-router-dom 7, lucide-react, react-icons. Source repo for porting: `/Users/oguzhan/team25153.com`.

## Global Constraints

- New repo root: `/Users/oguzhan/team-nf-9029.com`, own git init, own package.json (name `team-nf-9029.com`).
- No CMS (`src/admin`, `server/*`), no LMS/Moodle, no Descartes chat — do not port these files or their imports/routes.
- Color transform table (apply to every ported file that references these tokens):
  | old (team25153) | new (Team NF) |
  |---|---|
  | `crimson` (all shades, `#832a22`/`#6a1f1a`/`#a33329`/`#fdf2f1`/`#fce4e2`/`#f9cac7`/`#4a120d`) | `green` (`#1a9e63`/`#0f7a4a`/`#34d399`/`#f0fdf9`/`#d7f7ea`/`#a8ecd0`/`#052e1c`) |
  | `navy` (`#002147`/`#374b6b`/`#1A3B61`/`#f0f4f9`) | `ink` (`#0a0a0a`/`#1f1f1f`/`#171717`/`#f2f2f2`) |
  | `gold` (`#FDC800`/`#d4a800`/`#fdd84d`) | dropped — replace any `gold` class usage with `green-light` or `white`, whichever the surrounding element pairs with (accent underline/badge → `green-light`; text-on-dark emphasis → `white`) |
  | Cartesian logo files (`cartesian-logo.png`, `cartesian-logo-transparent.png`) | `nf-logo.png` (the provided `TEAM NF` mark) |
  | Team name copy ("Cartesian", "Cartesian Robotics", "25153", "FTC") | "Team NF", "9029", "FRC" — FTC→FRC only where referring to the competition program, not literal quoted award names |
- No test framework introduced. Verification bar matches team25153.com: `npm run lint` clean + manual `npm run dev` route smoke check (Task 9).
- Every ported JS/JSX file: apply the transform table, nothing else changes structurally (same JSX tree, same component logic, same class layout) — this is what "same layout same format" means.

---

### Task 1: Scaffold repo + build config

**Files:**
- Create: `/Users/oguzhan/team-nf-9029.com/package.json`
- Create: `/Users/oguzhan/team-nf-9029.com/vite.config.js`
- Create: `/Users/oguzhan/team-nf-9029.com/tailwind.config.js`
- Create: `/Users/oguzhan/team-nf-9029.com/postcss.config.js`
- Create: `/Users/oguzhan/team-nf-9029.com/eslint.config.js`
- Create: `/Users/oguzhan/team-nf-9029.com/index.html`
- Create: `/Users/oguzhan/team-nf-9029.com/.gitignore`
- Read (source, do not modify): `/Users/oguzhan/team25153.com/vite.config.js`, `/Users/oguzhan/team25153.com/postcss.config.js`, `/Users/oguzhan/team25153.com/eslint.config.js`, `/Users/oguzhan/team25153.com/index.html`, `/Users/oguzhan/team25153.com/.gitignore`

**Interfaces:**
- Produces: a runnable Vite project shell (`npm run dev` serves blank React root) that Task 2+ mount content into.

- [ ] **Step 1: `git init` and copy build-tool configs verbatim**

```bash
mkdir -p /Users/oguzhan/team-nf-9029.com
cd /Users/oguzhan/team-nf-9029.com
git init
cp /Users/oguzhan/team25153.com/vite.config.js .
cp /Users/oguzhan/team25153.com/postcss.config.js .
cp /Users/oguzhan/team25153.com/eslint.config.js .
cp /Users/oguzhan/team25153.com/.gitignore .
```

These four files have zero project-specific content (no colors, no team name) — copy as-is, no edits.

- [ ] **Step 2: Write `package.json`** (trimmed: drop `server`/CMS-only deps — `bcryptjs`, `cors`, `express`, `jsonwebtoken`, `multer`, `marked`, `concurrently` — and their npm scripts, since there's no CMS/LMS backend in this repo)

```json
{
  "name": "team-nf-9029.com",
  "private": true,
  "version": "0.0.0",
  "type": "module",
  "scripts": {
    "dev": "vite",
    "build": "vite build",
    "lint": "eslint .",
    "preview": "vite preview"
  },
  "dependencies": {
    "lucide-react": "^1.14.0",
    "react": "^19.2.6",
    "react-dom": "^19.2.6",
    "react-icons": "^5.6.0",
    "react-router-dom": "^7.15.0"
  },
  "devDependencies": {
    "@eslint/js": "^10.0.1",
    "@types/react": "^19.2.14",
    "@types/react-dom": "^19.2.3",
    "@vitejs/plugin-react": "^6.0.1",
    "autoprefixer": "^10.5.0",
    "eslint": "^10.3.0",
    "eslint-plugin-react-hooks": "^7.1.1",
    "eslint-plugin-react-refresh": "^0.5.2",
    "globals": "^17.6.0",
    "postcss": "^8.5.14",
    "tailwindcss": "^3.4.19",
    "vite": "^8.0.12"
  }
}
```

- [ ] **Step 3: Write `tailwind.config.js`** (source file structure kept, colors swapped per Global Constraints table)

```js
/** @type {import('tailwindcss').Config} */
export default {
  content: ['./index.html', './src/**/*.{js,jsx,ts,tsx}'],
  theme: {
    extend: {
      colors: {
        green: {
          DEFAULT: '#1a9e63',
          dark: '#0f7a4a',
          light: '#34d399',
          50: '#f0fdf9',
          100: '#d7f7ea',
          200: '#a8ecd0',
          900: '#052e1c',
        },
        ink: {
          DEFAULT: '#0a0a0a',
          mid: '#1f1f1f',
          light: '#171717',
          50: '#f2f2f2',
        },
      },
      fontFamily: {
        roboto: ['Roboto', 'sans-serif'],
      },
      animation: {
        'scroll-left': 'scrollLeft 30s linear infinite',
        'fade-up': 'fadeUp 0.6s ease forwards',
        'fade-in': 'fadeIn 0.5s ease forwards',
      },
      keyframes: {
        scrollLeft: {
          '0%': { transform: 'translateX(0)' },
          '100%': { transform: 'translateX(-50%)' },
        },
        fadeUp: {
          '0%': { opacity: '0', transform: 'translateY(24px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
      },
      backgroundImage: {
        'green-gradient': 'linear-gradient(135deg, #1a9e63 0%, #0f7a4a 100%)',
        'ink-gradient': 'linear-gradient(135deg, #0a0a0a 0%, #1f1f1f 100%)',
        'hero-gradient': 'linear-gradient(to right, rgba(10,10,10,0.95) 0%, rgba(10,10,10,0.6) 60%, transparent 100%)',
      },
    },
  },
  plugins: [],
}
```

- [ ] **Step 4: Write `index.html`** (copy source, swap title/favicon reference)

```bash
cat /Users/oguzhan/team25153.com/index.html
```
Copy the output verbatim, then change `<title>` to `Team NF 9029` and `<link rel="icon">` href to `/nf-favicon.svg` (created in Task 2).

- [ ] **Step 5: Verify scaffold**

```bash
cd /Users/oguzhan/team-nf-9029.com
npm install
```
Expected: installs cleanly, no peer-dep errors.

- [ ] **Step 6: Commit**

```bash
git add -A
git commit -m "chore: scaffold Team NF site (Vite+React+Tailwind, ported build config)"
```

---

### Task 2: Logo, favicon, global styles, entrypoint

**Files:**
- Create: `/Users/oguzhan/team-nf-9029.com/public/nf-logo.png` (copy of provided logo)
- Create: `/Users/oguzhan/team-nf-9029.com/public/nf-favicon.svg`
- Create: `/Users/oguzhan/team-nf-9029.com/src/main.jsx`
- Create: `/Users/oguzhan/team-nf-9029.com/src/index.css`
- Create: `/Users/oguzhan/team-nf-9029.com/src/App.css`
- Read (source): `/Users/oguzhan/team25153.com/src/main.jsx`, `/Users/oguzhan/team25153.com/src/index.css`, `/Users/oguzhan/team25153.com/src/App.css`, `/Users/oguzhan/team25153.com/public/favicon.svg`

**Interfaces:**
- Produces: `main.jsx` mounts `<App/>` from `src/App.jsx` (written in Task 8) into `#root`.

- [ ] **Step 1: Copy the logo**

```bash
mkdir -p /Users/oguzhan/team-nf-9029.com/public /Users/oguzhan/team-nf-9029.com/src/assets
cp "/Users/oguzhan/.claude/image-cache/a8ed5390-c86b-42db-8922-9a720b6f3f01/1.png" /Users/oguzhan/team-nf-9029.com/public/nf-logo.png
```

- [ ] **Step 2: Write `public/nf-favicon.svg`** — black square, green "NF" wordmark, matching logo's block-letter feel

```xml
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
  <rect width="64" height="64" rx="8" fill="#0a0a0a"/>
  <text x="32" y="42" font-family="Arial, sans-serif" font-weight="900" font-size="28" fill="#34d399" text-anchor="middle">NF</text>
</svg>
```

- [ ] **Step 3: Copy `main.jsx` verbatim** (no team-specific content in this file)

```bash
cp /Users/oguzhan/team25153.com/src/main.jsx /Users/oguzhan/team-nf-9029.com/src/main.jsx
```

- [ ] **Step 4: Port `index.css`**

```bash
cat /Users/oguzhan/team25153.com/src/index.css
```
Copy output, apply Global Constraints color transform table (any `crimson`/`navy`/`gold` custom property or class reference → `green`/`ink`/dropped) to `/Users/oguzhan/team-nf-9029.com/src/index.css`.

- [ ] **Step 5: Port `App.css`**

```bash
cat /Users/oguzhan/team25153.com/src/App.css
```
Copy output, apply the same color transform table to `/Users/oguzhan/team-nf-9029.com/src/App.css`.

- [ ] **Step 6: Verify dev server boots**

```bash
cd /Users/oguzhan/team-nf-9029.com && timeout 8 npm run dev || true
```
Expected: Vite prints `Local: http://localhost:5173/` with no error (App.jsx doesn't exist yet so this will actually fail to compile — that's expected until Task 8; just confirm the failure is an import-not-found for `./App.jsx`, not a config error).

- [ ] **Step 7: Commit**

```bash
git add -A
git commit -m "chore: add NF logo/favicon and ported global styles"
```

---

### Task 3: Content JSON (navigation, home, robots, awards, portfolios, resources, sponsorship, blog)

**Files:**
- Create: `/Users/oguzhan/team-nf-9029.com/src/content/navigation.json`
- Create: `/Users/oguzhan/team-nf-9029.com/src/content/home.json`
- Create: `/Users/oguzhan/team-nf-9029.com/src/content/robots.json`
- Create: `/Users/oguzhan/team-nf-9029.com/src/content/awards.json`
- Create: `/Users/oguzhan/team-nf-9029.com/src/content/portfolios.json`
- Create: `/Users/oguzhan/team-nf-9029.com/src/content/resources.json`
- Create: `/Users/oguzhan/team-nf-9029.com/src/content/sponsorship.json`
- Create: `/Users/oguzhan/team-nf-9029.com/src/content/blog/placeholder-post-1.md`
- Create: `/Users/oguzhan/team-nf-9029.com/src/content/blog/placeholder-post-2.md`
- Read (source, for shape reference only — values are NOT copied, only JSON structure/keys): every file under `/Users/oguzhan/team25153.com/src/content/`

**Interfaces:**
- Produces: JSON shapes consumed by Task 6/7 pages — key names below are exact and must match what pages import.

- [ ] **Step 1: `navigation.json`** — same key shape as source (`navItems[].label/to/children`, `footerLinks[].label/to`), robot/portfolio slugs renamed generic since NF's real names aren't known

```json
{
  "navItems": [
    {
      "label": "Team",
      "children": [
        { "label": "Team Overview", "to": "/team" },
        {
          "label": "Our Robots",
          "children": [
            { "label": "2025-26 Robot", "to": "/robots/2025-26" },
            { "label": "2024-25 Robot", "to": "/robots/2024-25" },
            { "label": "2023-24 Robot", "to": "/robots/2023-24" }
          ]
        },
        { "label": "Our Awards", "to": "/awards" }
      ]
    },
    {
      "label": "Resources",
      "children": [
        { "label": "All Resources", "to": "/resources" },
        { "label": "Getting Started with FRC", "to": "/resources/getting-started" },
        { "label": "Software", "to": "/resources/software" },
        { "label": "CAD & Modeling", "to": "/resources/cad" }
      ]
    },
    {
      "label": "Portfolio",
      "children": [
        { "label": "2025-26 Season", "to": "/portfolio/2025-26" },
        { "label": "2024-25 Season", "to": "/portfolio/2024-25" },
        { "label": "2023-24 Season", "to": "/portfolio/2023-24" }
      ]
    },
    { "label": "Blog", "to": "/blog" },
    { "label": "Sponsorship", "to": "/sponsorship" },
    { "label": "Contact Us", "to": "/contact" }
  ],
  "footerLinks": [
    { "label": "Team Overview", "to": "/team" },
    { "label": "Our Robots", "to": "/robots/2025-26" },
    { "label": "Portfolio", "to": "/portfolio/2025-26" },
    { "label": "Resources", "to": "/resources/getting-started" },
    { "label": "Blog", "to": "/blog" },
    { "label": "Sponsorship", "to": "/sponsorship" },
    { "label": "Join Us", "to": "/join" },
    { "label": "Contact Us", "to": "/contact" }
  ]
}
```

- [ ] **Step 2: `home.json`** — real stats (team #9029, rookie 2023, Ankara/Çankaya, 10 awards per Obsidian note), placeholder robot cards

```json
{
  "robots": [
    { "year": "2025 – 26", "name": "Placeholder Robot", "competition": "FRC REEFSCAPE", "image": "/nf-logo.png", "link": "/robots/2025-26", "blendMode": true },
    { "year": "2024 – 25", "name": "Placeholder Robot", "competition": "FRC CRESCENDO", "image": "/nf-logo.png", "link": "/robots/2024-25", "blendMode": true },
    { "year": "2023 – 24", "name": "Placeholder Robot", "competition": "FRC CHARGED UP", "image": "/nf-logo.png", "link": "/robots/2023-24", "blendMode": true }
  ],
  "stats": [
    { "number": "4", "label": "FRC Seasons" },
    { "number": "9029", "label": "Team Number" },
    { "number": "10", "label": "Awards Won" },
    { "number": "2023", "label": "Rookie Year" }
  ]
}
```

- [ ] **Step 3: `robots.json`** — placeholder per-robot detail records, one per slug used in navigation.json

```json
{
  "2025-26": {
    "name": "Placeholder Robot",
    "season": "REEFSCAPE presented by Haas",
    "year": "2025 – 26",
    "image": "/nf-logo.png",
    "description": "Placeholder description — Team NF's 2025-26 competition robot. Replace with real robot writeup, mechanisms, and photos.",
    "specs": [
      { "label": "Drivetrain", "value": "Placeholder" },
      { "label": "Weight", "value": "Placeholder" },
      { "label": "Height", "value": "Placeholder" }
    ]
  },
  "2024-25": {
    "name": "Placeholder Robot",
    "season": "CRESCENDO",
    "year": "2024 – 25",
    "image": "/nf-logo.png",
    "description": "Placeholder description — Team NF's 2024-25 competition robot.",
    "specs": [
      { "label": "Drivetrain", "value": "Placeholder" },
      { "label": "Weight", "value": "Placeholder" },
      { "label": "Height", "value": "Placeholder" }
    ]
  },
  "2023-24": {
    "name": "Placeholder Robot",
    "season": "CHARGED UP presented by Haas",
    "year": "2023 – 24",
    "image": "/nf-logo.png",
    "description": "Placeholder description — Team NF's rookie-season robot.",
    "specs": [
      { "label": "Drivetrain", "value": "Placeholder" },
      { "label": "Weight", "value": "Placeholder" },
      { "label": "Height", "value": "Placeholder" }
    ]
  }
}
```

- [ ] **Step 4: `awards.json`** — REAL data, transcribed from Obsidian note `wiki/entities/Team NF 9029.md`

```json
{
  "notable": [
    { "year": "2026", "event": "Başkent Regional", "award": "Gracious Professionalism Award" },
    { "year": "2025", "event": "Ankara Regional", "award": "Gracious Professionalism Award" },
    { "year": "2025", "event": "Ankara Regional", "award": "Industrial Design Award — Winner" },
    { "year": "2025", "event": "Ankara Regional", "award": "Regional Winners (Championship Qualifying)" },
    { "year": "2025", "event": "FIRST Championship", "award": "Dean's List Award" },
    { "year": "2025", "event": "FIRST Championship", "award": "Gracious Professionalism Award" },
    { "year": "2022", "event": "İstanbul Regional", "award": "Winner" }
  ],
  "history": [
    {
      "season": "2025 REEFSCAPE presented by Haas",
      "events": [
        { "name": "İstanbul Regional", "result": "Innovation in Control Award (nVent); Regional Finalists" },
        { "name": "Ankara Regional", "result": "FIRST Leadership Award Finalist, Industrial Design Award; Regional Finalists" },
        { "name": "FIRST Championship – Newton Division", "result": "No awards" }
      ]
    },
    {
      "season": "2024 CRESCENDO",
      "events": [
        { "name": "Ankara Regional", "result": "FIRST Dean's List Finalist Award, Industrial Design Award (General Motors); Regional Winners, Championship Qualifying" },
        { "name": "FIRST Championship – Milstein Division", "result": "Gracious Professionalism Award" },
        { "name": "Bosphorus Regional", "result": "No awards" },
        { "name": "Marmara Regional", "result": "No awards" }
      ]
    },
    {
      "season": "2023 CHARGED UP presented by Haas",
      "events": [
        { "name": "Istanbul Regional", "result": "No awards (rookie season)" }
      ]
    }
  ]
}
```

- [ ] **Step 5: `portfolios.json`** — placeholder, one entry per portfolio slug in navigation.json

```json
{
  "2025-26": { "title": "2025-26 Season Portfolio", "season": "REEFSCAPE", "description": "Placeholder — engineering notebook / season portfolio summary for the 2025-26 season.", "pdf": null },
  "2024-25": { "title": "2024-25 Season Portfolio", "season": "CRESCENDO", "description": "Placeholder — engineering notebook / season portfolio summary for the 2024-25 season.", "pdf": null },
  "2023-24": { "title": "2023-24 Season Portfolio", "season": "CHARGED UP", "description": "Placeholder — engineering notebook / season portfolio summary for the rookie 2023-24 season.", "pdf": null }
}
```

- [ ] **Step 6: `resources.json`** — placeholder, one entry per resource slug in navigation.json

```json
{
  "getting-started": { "title": "Getting Started with FRC", "summary": "Placeholder — intro guide for new Team NF members on how FRC season works.", "body": "Placeholder body content." },
  "software": { "title": "Software", "summary": "Placeholder — Team NF's software stack and repos.", "body": "Placeholder body content." },
  "cad": { "title": "CAD & Modeling", "summary": "Placeholder — CAD tools and modeling workflow.", "body": "Placeholder body content." }
}
```

- [ ] **Step 7: `sponsorship.json`** — real sponsor names from Obsidian note, placeholder tier copy

```json
{
  "intro": "Team NF 9029 competes in FIRST Robotics Competition representing ODTÜ Geliştirme Vakfı Özel Ankara Lisesi. Placeholder sponsorship pitch copy.",
  "sponsors": [
    "ODTÜ Geliştirme Vakfı Okulları",
    "Ergün Avukatlık Bürosu",
    "Pasifik Teknoloji",
    "NFR Products",
    "Öztekin Beta Tools",
    "Yamantürk Vakfı",
    "Faymer Makina",
    "Onshape"
  ],
  "tiers": [
    { "name": "Bronze", "amount": "Placeholder", "benefits": ["Placeholder benefit"] },
    { "name": "Silver", "amount": "Placeholder", "benefits": ["Placeholder benefit", "Placeholder benefit"] },
    { "name": "Gold", "amount": "Placeholder", "benefits": ["Placeholder benefit", "Placeholder benefit", "Placeholder benefit"] }
  ]
}
```

- [ ] **Step 8: Two placeholder blog posts** (matches source's markdown-file-per-post pattern)

```bash
mkdir -p /Users/oguzhan/team-nf-9029.com/src/content/blog
```

`src/content/blog/placeholder-post-1.md`:
```markdown
---
title: "Welcome to the Team NF Blog"
date: "2026-01-01"
slug: "welcome"
excerpt: "Placeholder introductory post."
---

Placeholder blog post body. Replace with real season updates.
```

`src/content/blog/placeholder-post-2.md`:
```markdown
---
title: "Placeholder Season Update"
date: "2026-02-01"
slug: "season-update"
excerpt: "Placeholder mid-season update."
---

Placeholder blog post body.
```

- [ ] **Step 9: Commit**

```bash
cd /Users/oguzhan/team-nf-9029.com
git add -A
git commit -m "content: add Team NF placeholder content JSON, real awards/sponsors from team record"
```

---

### Task 4: Layout components (Navbar, Footer)

**Files:**
- Create: `/Users/oguzhan/team-nf-9029.com/src/components/layout/Navbar.jsx`
- Create: `/Users/oguzhan/team-nf-9029.com/src/components/layout/Footer.jsx`
- Read (source): `/Users/oguzhan/team25153.com/src/components/layout/Navbar.jsx`, `/Users/oguzhan/team25153.com/src/components/layout/Footer.jsx`

**Interfaces:**
- Consumes: `src/content/navigation.json` (Task 3) — `navItems`, `footerLinks`.
- Produces: `Navbar` and `Footer` default exports, mounted in `App.jsx` (Task 8).

- [ ] **Step 1: Port Navbar.jsx**

```bash
cat /Users/oguzhan/team25153.com/src/components/layout/Navbar.jsx
```
Copy output to `/Users/oguzhan/team-nf-9029.com/src/components/layout/Navbar.jsx`. Apply Global Constraints transform table: `crimson-*`→`green-*`, `navy-*`→`ink-*`, `gold-*`→`green-light` or `white` per the table's guidance, Cartesian logo `<img>` src → `/nf-logo.png`, any "Cartesian"/"25153" text → "Team NF"/"9029". Remove any `/lms` or `/cms` links if present (out of scope per spec) — check for these before removing anything else.

- [ ] **Step 2: Port Footer.jsx**

```bash
cat /Users/oguzhan/team25153.com/src/components/layout/Footer.jsx
```
Copy output to `/Users/oguzhan/team-nf-9029.com/src/components/layout/Footer.jsx`, same transform table, remove `/lms` link if present.

- [ ] **Step 3: Commit**

```bash
cd /Users/oguzhan/team-nf-9029.com
git add -A
git commit -m "feat: port Navbar/Footer, recolored for Team NF"
```

---

### Task 5: Shared UI components (PageBanner, RobotCard, LogoCarousel, ContactForm)

**Files:**
- Create: `/Users/oguzhan/team-nf-9029.com/src/components/ui/PageBanner.jsx`
- Create: `/Users/oguzhan/team-nf-9029.com/src/components/ui/RobotCard.jsx`
- Create: `/Users/oguzhan/team-nf-9029.com/src/components/ui/LogoCarousel.jsx`
- Create: `/Users/oguzhan/team-nf-9029.com/src/components/ui/ContactForm.jsx`
- Read (source): matching files under `/Users/oguzhan/team25153.com/src/components/ui/`

**Interfaces:**
- Produces: same prop signatures as source components (props unchanged — only internal color classes and any hardcoded team copy change). Consumed by pages in Task 6/7.

- [ ] **Step 1: Port each file** — for each of the four files, `cat` the source, copy to the matching destination path, apply the Global Constraints color transform table. No prop/behavior changes.

```bash
for f in PageBanner RobotCard LogoCarousel ContactForm; do
  cat "/Users/oguzhan/team25153.com/src/components/ui/$f.jsx"
done
```
(Read each output, write the recolored version to the corresponding new-repo path.)

- [ ] **Step 2: ContactForm — check for backend dependency**

`ContactForm.jsx` in source may `fetch()` to `server/index.js`'s contact endpoint. Since this repo has no server (spec: static site only), replace any `fetch('/api/...')` submit handler with a `console.log('placeholder submit', formData)` stub plus a `// ponytail: no backend yet, wire to a real endpoint when one exists` comment. Keep the form UI/validation as-is.

- [ ] **Step 3: Commit**

```bash
cd /Users/oguzhan/team-nf-9029.com
git add -A
git commit -m "feat: port shared UI components, recolored, ContactForm submit stubbed"
```

---

### Task 6: Core pages (Home, TeamOverview, RobotPage, Awards)

**Files:**
- Create: `/Users/oguzhan/team-nf-9029.com/src/pages/Home.jsx`
- Create: `/Users/oguzhan/team-nf-9029.com/src/pages/TeamOverview.jsx`
- Create: `/Users/oguzhan/team-nf-9029.com/src/pages/RobotPage.jsx`
- Create: `/Users/oguzhan/team-nf-9029.com/src/pages/Awards.jsx`
- Read (source): matching files under `/Users/oguzhan/team25153.com/src/pages/`

**Interfaces:**
- Consumes: `src/content/home.json`, `robots.json`, `awards.json` (Task 3); `PageBanner`, `RobotCard` (Task 5).
- Produces: default exports mounted as routes in `App.jsx` (Task 8): `/`, `/team`, `/robots/:slug`, `/awards`.

- [ ] **Step 1: Port Home.jsx** — `cat` source, copy + recolor, verify it imports `home.json` (not hardcoded stats) and any team-name copy → "Team NF 9029".

- [ ] **Step 2: Port TeamOverview.jsx** — same pattern. Replace any ODTÜ Koleji / Cartesian-specific bio copy with placeholder team description text (school name ODTÜ GV Özel Ankara Lisesi is real, per spec, keep that; personal bios/roster are placeholder).

- [ ] **Step 3: Port RobotPage.jsx** — verify it reads `:slug` route param and looks up `robots.json[slug]` (adjust the lookup key path if source used array `.find()` — this repo's `robots.json` from Task 3 is an object keyed by slug, so use `robotsData[slug]` not `.find(r => r.slug === slug)`).

- [ ] **Step 4: Port Awards.jsx** — verify it reads from `awards.json`'s `notable`/`history` shape (Task 3 Step 4); adjust any field-name mismatch (source may use different key names — align to `notable[].year/event/award` and `history[].season/events[].name/result`).

- [ ] **Step 5: Commit**

```bash
cd /Users/oguzhan/team-nf-9029.com
git add -A
git commit -m "feat: port Home/TeamOverview/RobotPage/Awards pages"
```

---

### Task 7: Remaining pages (Resources, ResourceDetail, PortfolioDetail, Blog, BlogPost, Sponsorship, Contact, Join)

**Files:**
- Create: `/Users/oguzhan/team-nf-9029.com/src/pages/Resources.jsx`
- Create: `/Users/oguzhan/team-nf-9029.com/src/pages/ResourceDetail.jsx`
- Create: `/Users/oguzhan/team-nf-9029.com/src/pages/PortfolioDetail.jsx`
- Create: `/Users/oguzhan/team-nf-9029.com/src/pages/Blog.jsx`
- Create: `/Users/oguzhan/team-nf-9029.com/src/pages/BlogPost.jsx`
- Create: `/Users/oguzhan/team-nf-9029.com/src/pages/Sponsorship.jsx`
- Create: `/Users/oguzhan/team-nf-9029.com/src/pages/Contact.jsx`
- Create: `/Users/oguzhan/team-nf-9029.com/src/pages/Join.jsx`
- Read (source): matching files under `/Users/oguzhan/team25153.com/src/pages/`

**Interfaces:**
- Consumes: `resources.json`, `portfolios.json`, `sponsorship.json`, blog markdown files (Task 3); `ContactForm` (Task 5).
- Produces: default exports mounted as routes in `App.jsx` (Task 8): `/resources`, `/resources/:slug`, `/portfolio/:slug`, `/blog`, `/blog/:slug`, `/sponsorship`, `/contact`, `/join`.

- [ ] **Step 1: Port Resources.jsx + ResourceDetail.jsx** — align to `resources.json`'s object-keyed-by-slug shape from Task 3.

- [ ] **Step 2: Port PortfolioDetail.jsx** — align to `portfolios.json`'s object-keyed-by-slug shape. If source renders an embedded PDF viewer for the portfolio (team25153.com has a Worlds Portfolio PDF), replace with a placeholder "Portfolio PDF coming soon" panel since Task 3's `pdf` field is `null` — no PDF viewer wiring without a real file.

- [ ] **Step 3: Port Blog.jsx + BlogPost.jsx** — verify they read markdown frontmatter (`title`/`date`/`slug`/`excerpt`) matching Task 3 Step 8's format.

- [ ] **Step 4: Port Sponsorship.jsx** — align to `sponsorship.json`'s `intro`/`sponsors`/`tiers` shape.

- [ ] **Step 5: Port Contact.jsx** — mounts `ContactForm` (Task 5, submit already stubbed there).

- [ ] **Step 6: Port Join.jsx** — copy + recolor, placeholder copy for how-to-join instructions.

- [ ] **Step 7: Commit**

```bash
cd /Users/oguzhan/team-nf-9029.com
git add -A
git commit -m "feat: port Resources/Portfolio/Blog/Sponsorship/Contact/Join pages"
```

---

### Task 8: App shell, routing, 404

**Files:**
- Create: `/Users/oguzhan/team-nf-9029.com/src/App.jsx`
- Read (source): `/Users/oguzhan/team25153.com/src/App.jsx`

**Interfaces:**
- Consumes: every page component from Tasks 6-7, `Navbar`/`Footer` from Task 4.
- Produces: `App` default export, mounted by `main.jsx` (Task 2).

- [ ] **Step 1: Write trimmed `App.jsx`** — same `ScrollToTop`/lazy-route/prefetch pattern as source, but only the 12 public routes (no `/cms`, no `/admin`, no `/lms`, no `DescartesChat`, no `AdminApp`/`MoodleAdmin`):

```jsx
import { lazy, Suspense, useEffect, useState } from 'react'
import { BrowserRouter, Routes, Route, useLocation } from 'react-router-dom'
import Navbar from './components/layout/Navbar'
import Footer from './components/layout/Footer'
import Home from './pages/Home'

const routeImports = [
  () => import('./pages/TeamOverview'),
  () => import('./pages/RobotPage'),
  () => import('./pages/Awards'),
  () => import('./pages/Blog'),
  () => import('./pages/BlogPost'),
  () => import('./pages/Sponsorship'),
  () => import('./pages/Contact'),
  () => import('./pages/Resources'),
  () => import('./pages/ResourceDetail'),
  () => import('./pages/PortfolioDetail'),
  () => import('./pages/Join'),
]
const [
  importTeamOverview,
  importRobotPage,
  importAwards,
  importBlog,
  importBlogPost,
  importSponsorship,
  importContact,
  importResources,
  importResourceDetail,
  importPortfolioDetail,
  importJoin,
] = routeImports

const TeamOverview = lazy(importTeamOverview)
const RobotPage = lazy(importRobotPage)
const Awards = lazy(importAwards)
const Blog = lazy(importBlog)
const BlogPost = lazy(importBlogPost)
const Sponsorship = lazy(importSponsorship)
const Contact = lazy(importContact)
const Resources = lazy(importResources)
const ResourceDetail = lazy(importResourceDetail)
const PortfolioDetail = lazy(importPortfolioDetail)
const Join = lazy(importJoin)

function ScrollToTop() {
  const { pathname } = useLocation()
  useEffect(() => {
    window.scrollTo(0, 0)
  }, [pathname])
  return null
}

function RouteFallback() {
  return <div className="min-h-screen" aria-hidden="true" />
}

function prefetchRoutes() {
  const idle = window.requestIdleCallback || ((cb) => setTimeout(cb, 200))
  let i = 0
  const next = () => {
    if (i >= routeImports.length) return
    routeImports[i++]().catch(() => {})
    idle(next)
  }
  idle(next)
}

function useRoutePrefetch() {
  useEffect(() => {
    if (typeof navigator !== 'undefined' && navigator.onLine === false) return
    const timer = setTimeout(prefetchRoutes, 1500)
    return () => clearTimeout(timer)
  }, [])
}

const NotFound = (
  <div className="min-h-screen flex items-center justify-center bg-ink">
    <div className="text-center px-6">
      <div className="text-8xl font-bold text-green/20 mb-4">404</div>
      <h1 className="text-2xl font-medium text-white mb-2">Page Not Found</h1>
      <p className="text-gray-400 text-sm mb-6">The page you're looking for doesn't exist.</p>
      <a href="/" className="btn-primary">Go Home</a>
    </div>
  </div>
)

export default function App() {
  return (
    <BrowserRouter>
      <PublicSite />
    </BrowserRouter>
  )
}

function PublicSite() {
  useRoutePrefetch()
  return (
    <>
      <ScrollToTop />
      <div className="flex flex-col min-h-screen font-roboto">
        <Navbar />
        <main className="flex-1">
          <Suspense fallback={<RouteFallback />}>
            <Routes>
              <Route path="/" element={<Home />} />
              <Route path="/team" element={<TeamOverview />} />
              <Route path="/robots/:slug" element={<RobotPage />} />
              <Route path="/awards" element={<Awards />} />
              <Route path="/resources" element={<Resources />} />
              <Route path="/resources/:slug" element={<ResourceDetail />} />
              <Route path="/portfolio/:slug" element={<PortfolioDetail />} />
              <Route path="/blog" element={<Blog />} />
              <Route path="/blog/:slug" element={<BlogPost />} />
              <Route path="/sponsorship" element={<Sponsorship />} />
              <Route path="/contact" element={<Contact />} />
              <Route path="/join" element={<Join />} />
              <Route path="*" element={NotFound} />
            </Routes>
          </Suspense>
        </main>
        <Footer />
      </div>
    </>
  )
}
```

- [ ] **Step 2: Boot check**

```bash
cd /Users/oguzhan/team-nf-9029.com
timeout 8 npm run dev || true
```
Expected: `Local: http://localhost:5173/` printed, no compile error. (If a page component from Task 6/7 has an import error, fix it before proceeding — App.jsx itself doesn't change.)

- [ ] **Step 3: Commit**

```bash
git add -A
git commit -m "feat: wire App shell and public routes (CMS/LMS/Descartes excluded)"
```

---

### Task 9: Final verification

**Files:** none created — verification only.

- [ ] **Step 1: Lint**

```bash
cd /Users/oguzhan/team-nf-9029.com
npm run lint
```
Expected: exits 0, no errors.

- [ ] **Step 2: Production build**

```bash
npm run build
```
Expected: `vite build` completes, `dist/` produced, no errors.

- [ ] **Step 3: Manual route smoke test**

```bash
npm run dev
```
Then fetch every route once and confirm HTTP 200 + non-empty body:
```bash
for path in / /team /robots/2025-26 /awards /resources /resources/getting-started /portfolio/2025-26 /blog /sponsorship /contact /join; do
  curl -s -o /dev/null -w "%{http_code} $path\n" "http://localhost:5173$path"
done
```
Expected: `200` for every path (SPA fallback serves `index.html` for all client routes under Vite dev server).

- [ ] **Step 4: Visual check** — open `http://localhost:5173/` in a browser, confirm: black background, green accents, NF logo in navbar, no Cartesian/25153 references remain (`grep -ri "cartesian\|25153" src/` returns nothing).

```bash
grep -ri "cartesian\|25153" -r /Users/oguzhan/team-nf-9029.com/src/ || echo "clean"
```
Expected: `clean`.

- [ ] **Step 5: Commit any final fixes, stop dev server**
