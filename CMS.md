# Cartesian CMS — content management for team25153.com

A built-in, WordPress-style admin panel. Editors log in at **`/admin`** from any
device, edit content and menus through forms, and changes go **live instantly** —
no rebuild, no git, no third-party service.

## How it works

```
            ┌──────────────── one Node server ────────────────┐
Visitor  →  │  dist/ (React site)   /api/* (content + auth)    │
Editor   →  │  /admin (same React app)   /uploads/* (media)    │
            └──────────────────────┬──────────────────────────┘
                                   │ reads/writes
                            data/  │  content/*.json + blog/*.md
                                   │  media/   (uploaded images)
                                   │  users.json (bcrypt hashes)
```

- The **public site** fetches `/api/content` at runtime, so saved edits appear on
  refresh. The version-controlled files in `src/content/` are bundled as a seed so
  the first paint is instant and the site still works if the API is down.
- The **admin panel** (`src/admin/`) is a lazy-loaded part of the same React app —
  its code never ships to public visitors.
- **Content lives in `data/`** (git-ignored), seeded from `src/content/` on first
  boot. In production this should be a **persistent disk** so edits survive
  restarts.

## Run locally

```bash
npm install
npm run dev:full      # Vite (web) + API server together
```

- Site: http://localhost:5173
- Admin: http://localhost:5173/admin

First boot creates an admin user. Default login is **`admin` / `changeme`** —
set `ADMIN_PASSWORD` to choose your own, and change it under **Settings** after
logging in.

To run the two processes separately: `npm run dev` (web) and `npm run server` (API).

## Build & run in production

```bash
npm run build         # builds dist/
npm start             # serves dist/ + API on PORT (default 4000)
```

`npm start` serves everything from one process on one port.

### Environment variables

| Variable | Purpose | Default |
|---|---|---|
| `PORT` | Port to listen on | `4000` |
| `DATA_DIR` | Where content/media/users are stored | `./data` |
| `ADMIN_USERNAME` | First admin's username (first boot only) | `admin` |
| `ADMIN_PASSWORD` | First admin's password (first boot only) | `changeme` |
| `JWT_SECRET` | Session signing secret | auto-generated in `DATA_DIR/.jwt-secret` |

## Deploying

Because editors log in from anywhere, this needs a host that **runs Node 24/7**
and gives you a **persistent disk** for `DATA_DIR` (so content and uploads
survive redeploys). Good free/cheap options: **Render**, **Railway**, **Fly.io**,
or any small VPS.

Typical setup on a platform like Render:

1. New **Web Service** from the GitHub repo.
2. Build command: `npm install && npm run build`
3. Start command: `npm start`
4. Add a **persistent disk** mounted at e.g. `/data`, and set `DATA_DIR=/data`.
5. Set `ADMIN_PASSWORD` (and optionally `JWT_SECRET`).
6. Point your domain at the service; the platform handles HTTPS.

> Keep a disk attached. Without `DATA_DIR` on a persistent volume, content resets
> to the seed on every redeploy.

## For editors

1. Go to **`/admin`** and log in.
2. Pick a section in the sidebar:
   - **Content** — Home, Menus, Robots, Awards, Resources, Portfolios, Sponsorship
   - **Blog Posts** — write/edit posts (Markdown body with live preview)
   - **Media** — upload images, copy their URLs
   - **Users** — admins add or remove editors
   - **Settings** — change your own password
3. Edit the form fields and click **Save**. The change is live immediately.

Menus (navbar + footer) are fully editable under **Menus**, including nested
dropdowns — add, remove, and reorder items.

## Where things live

| Path | What |
|---|---|
| `server/` | Express server: API, auth, content store |
| `src/admin/` | The admin panel (React) |
| `src/context/ContentContext.jsx` | Runtime content provider for the public site |
| `src/content/` | Seed content (committed; copied into `data/` on first boot) |
| `data/` | Live content, media, users — **git-ignored**, created at runtime |
