import { lazy, Suspense, useEffect, useState } from 'react'
import { BrowserRouter, Routes, Route, Navigate, useLocation } from 'react-router-dom'
import { Toaster } from 'sonner'
import Navbar from './components/layout/Navbar'
import Footer from './components/layout/Footer'
import Home from './pages/Home'
import Loader from './components/ui/Loader'
import useDocumentMeta from './lib/useDocumentMeta'

// Route-level code splitting: every page below ships as its own chunk and is
// only fetched when the user navigates to it. Home stays in the main bundle so
// the landing page paints without a second round-trip. Each import thunk is
// shared between lazy() and the idle prefetcher (see prefetchRoutes) so a chunk
// is fetched at most once.
// Blog is deliberately not wired up right now — see the Blog section below
// for why. The pages and content are left in place, just unreferenced.
const routeImports = [
  () => import('./pages/RobotPage'),
  () => import('./pages/Awards'),
  () => import('./pages/Sponsorship'),
  () => import('./pages/Contact'),
  () => import('./pages/Resources'),
  () => import('./pages/ResourceDetail'),
  () => import('./pages/PortfolioDetail'),
  () => import('./pages/Join'),
  () => import('./pages/LMS'),
  () => import('./pages/NotFound'),
]
const [
  importRobotPage,
  importAwards,
  importSponsorship,
  importContact,
  importResources,
  importResourceDetail,
  importPortfolioDetail,
  importJoin,
  importLMS,
  importNotFound,
] = routeImports

const RobotPage = lazy(importRobotPage)
const Awards = lazy(importAwards)
const Sponsorship = lazy(importSponsorship)
const Contact = lazy(importContact)
const Resources = lazy(importResources)
const ResourceDetail = lazy(importResourceDetail)
const PortfolioDetail = lazy(importPortfolioDetail)
const Join = lazy(importJoin)
const LMS = lazy(importLMS)
const NotFound = lazy(importNotFound)

// The Descartes chat widget bundles an Adobe PDF viewer, an LLM client and a
// 350 KB+ search index. It is closed by default, so we keep it out of the
// critical path entirely and mount it after the page is interactive.
const DescartesChat = lazy(() => import('./components/descartes/DescartesChat'))

// The CMS panel is a separate app tree, lazy-loaded so its code never ships to
// public visitors. It renders full-screen without the site chrome.
const AdminApp = lazy(() => import('./admin/AdminApp'))
const MoodleAdmin = lazy(() => import('./pages/MoodleAdmin'))

// The flipbook viewer opens in its own tab straight from the Portfolio menu,
// full-screen with no site chrome — same pattern as the admin panels above.
const FlipbookView = lazy(() => import('./pages/FlipbookView'))

function ScrollToTop() {
  const { pathname } = useLocation()
  useEffect(() => {
    window.scrollTo(0, 0)
  }, [pathname])
  return null
}

// Mounts its children once the browser is idle (or after a short fallback),
// so deferred, non-critical UI never competes with first paint.
function DeferredMount({ children }) {
  const [ready, setReady] = useState(false)
  useEffect(() => {
    const idle = window.requestIdleCallback || ((cb) => setTimeout(cb, 1))
    const cancelIdle = window.cancelIdleCallback || clearTimeout
    const handle = idle(() => setReady(true), { timeout: 2000 })
    return () => cancelIdle(handle)
  }, [])
  return ready ? children : null
}

function RouteFallback() {
  return <Loader />
}

// Once the landing page is idle, warm the cache with every route chunk in the
// background. They're tiny (2–20 KB each) and downloading them ahead of time
// makes subsequent navigations resolve instantly instead of waiting on a fetch.
// Runs one import per idle slice so it never blocks the main thread for long.
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
    // Defer past first paint; offline visitors gain nothing from prefetching.
    if (typeof navigator !== 'undefined' && navigator.onLine === false) return
    const timer = setTimeout(prefetchRoutes, 1500)
    return () => clearTimeout(timer)
  }, [])
}

export default function App() {
  return (
    <BrowserRouter>
      <Toaster position="bottom-right" richColors closeButton />
      <AppShell />
    </BrowserRouter>
  )
}

function AppShell() {
  const { pathname } = useLocation()
  useDocumentMeta()

  // The CMS panel owns everything under /cms and renders without site chrome.
  if (pathname.startsWith('/cms')) {
    return (
      <Suspense fallback={<RouteFallback />}>
        <AdminApp />
      </Suspense>
    )
  }

  // /flipbook/:slug renders the portfolio viewer full-screen, no site chrome —
  // this is what opens in the new tab from the Portfolio menu.
  if (pathname.startsWith('/flipbook/')) {
    return (
      <Suspense fallback={<RouteFallback />}>
        <Routes>
          <Route path="/flipbook/:slug" element={<FlipbookView />} />
        </Routes>
      </Suspense>
    )
  }

  // /admin renders the Moodle admin panel full-screen, no site chrome.
  if (pathname === '/admin') {
    return (
      <Suspense fallback={<RouteFallback />}>
        <MoodleAdmin />
      </Suspense>
    )
  }

  return <PublicSite />
}

function PublicSite() {
  useRoutePrefetch()
  const location = useLocation()
  return (
    <>
      <ScrollToTop />
      <div className="flex flex-col min-h-screen font-roboto">
        <Navbar />
        <main className="flex-1">
          <Suspense fallback={<RouteFallback />}>
            <Routes location={location}>
              <Route path="/" element={<Home />} />

              {/* Team */}
              <Route path="/team" element={<Navigate to="/awards" replace />} />
              <Route path="/robots/:slug" element={<RobotPage />} />
              <Route path="/awards" element={<Awards />} />

              {/* Resources */}
              <Route path="/resources" element={<Resources />} />
              <Route path="/resources/:slug" element={<ResourceDetail />} />

              {/* Portfolio */}
              <Route path="/portfolio/:slug" element={<PortfolioDetail />} />

              {/* Blog is off for now — pages, content and markdown are all
                  still in the repo, just unrouted. Re-add the two routes
                  above (and the Blog/BlogPost imports near the top of this
                  file) to bring it back. */}

              {/* Other */}
              <Route path="/sponsorship" element={<Sponsorship />} />
              <Route path="/contact" element={<Contact />} />
              <Route path="/join" element={<Join />} />
              <Route path="/lms" element={<LMS />} />

              {/* 404 */}
              <Route path="*" element={<NotFound />} />
            </Routes>
          </Suspense>
        </main>
        <Footer />
        <DeferredMount>
          <Suspense fallback={null}>
            <DescartesChat />
          </Suspense>
        </DeferredMount>
      </div>
    </>
  )
}
