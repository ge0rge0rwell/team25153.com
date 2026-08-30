import { Component } from 'react'
import { RefreshCw, Home, AlertTriangle } from 'lucide-react'

// Chunk-load failures are their own category and by far the most likely error
// here: every route is lazy(), so when the site redeploys, any tab that was
// already open still holds the OLD chunk filenames. Those files no longer
// exist, so the next navigation rejects the dynamic import and React unmounts
// the whole tree — a blank white page with no explanation. A reload fixes it
// completely, because it fetches the new index.html and its new hashes.
function isChunkLoadError(error) {
  const msg = `${error?.name ?? ''} ${error?.message ?? ''}`
  return (
    /ChunkLoadError/i.test(msg) ||
    /Loading( CSS)? chunk .* failed/i.test(msg) ||
    /Failed to fetch dynamically imported module/i.test(msg) ||
    /error loading dynamically imported module/i.test(msg) ||
    /Importing a module script failed/i.test(msg)
  )
}

// Guards against a reload loop: if reloading didn't fix it, the error isn't a
// stale chunk and we should show the message instead of refreshing forever.
const RELOAD_FLAG = 'cr:chunk-reload'

export default class ErrorBoundary extends Component {
  constructor(props) {
    super(props)
    this.state = { error: null }
  }

  static getDerivedStateFromError(error) {
    return { error }
  }

  componentDidCatch(error, info) {
    console.error('Unhandled UI error:', error, info)

    if (isChunkLoadError(error)) {
      let alreadyTried = false
      try {
        alreadyTried = sessionStorage.getItem(RELOAD_FLAG) === '1'
        sessionStorage.setItem(RELOAD_FLAG, '1')
      } catch {
        // sessionStorage can throw in private mode — fall through to the UI.
      }
      if (!alreadyTried) window.location.reload()
    }
  }

  componentDidMount() {
    // Got here without erroring, so any previous stale-chunk reload worked.
    try { sessionStorage.removeItem(RELOAD_FLAG) } catch { /* ignore */ }
  }

  render() {
    const { error } = this.state
    if (!error) return this.props.children

    const stale = isChunkLoadError(error)

    return (
      <div className="min-h-[60vh] flex items-center justify-center px-6 py-20 bg-gray-50">
        <div className="max-w-md text-center">
          <div className="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-crimson/10 text-crimson mb-5">
            <AlertTriangle size={26} />
          </div>
          <h1 className="text-2xl font-medium text-navy mb-3">
            {stale ? 'The site was just updated' : 'Something went wrong'}
          </h1>
          <p className="text-gray-600 text-sm leading-relaxed mb-8">
            {stale
              ? 'This page was loaded from an older version of the site. Reloading will pick up the latest one.'
              : "This part of the page failed to load. Reloading usually clears it — if it keeps happening, let us know."}
          </p>
          <div className="flex flex-wrap items-center justify-center gap-3">
            <button onClick={() => window.location.reload()} className="btn-primary">
              <RefreshCw size={16} aria-hidden="true" /> Reload page
            </button>
            <a href="/" className="btn-outline">
              <Home size={16} aria-hidden="true" /> Go home
            </a>
          </div>
        </div>
      </div>
    )
  }
}
