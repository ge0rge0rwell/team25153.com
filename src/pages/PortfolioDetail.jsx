import { useParams, Link } from 'react-router-dom'
import PageBanner from '../components/ui/PageBanner'
import { ArrowLeft } from 'lucide-react'
import { useEffect, useRef } from 'react'
import { openFlipbook } from '../utils/loadFlipbook'
import { useCollection } from '../context/ContentContext'

// Renders the actual flipbook. Keyed by slug from the parent so React fully
// unmounts/remounts this on every portfolio change — that's what guarantees
// a fresh container element and a fresh dFlip instance instead of reusing a
// stale one (dFlip has no destroy() API, and re-invoking .flipBook() on an
// element React reused across a param-only route change was binding a
// second, redundant instance on top of the first — which is why the first
// portfolio ever opened kept reappearing on every other one until a full
// page refresh reset the JS state).
function FlipbookViewer({ portfolio }) {
  const containerRef = useRef(null)

  useEffect(() => {
    if (!containerRef.current) return
    openFlipbook(containerRef, portfolio).catch((err) =>
      console.error('Flipbook failed to load:', err),
    )
  }, [portfolio])

  return <div ref={containerRef} className="w-full h-[75vh] min-h-[500px]" />
}

export default function PortfolioDetail() {
  const { slug } = useParams()
  const portfolio = useCollection('portfolios').portfolios.find((p) => p.slug === slug)

  if (!portfolio) {
    return (
      <div className="min-h-screen flex items-center justify-center bg-gray-50">
        <div className="text-center px-6">
          <h1 className="text-2xl font-medium text-navy mb-2">Portfolio Not Found</h1>
          <Link to="/" className="btn-primary mt-4">Go Home</Link>
        </div>
      </div>
    )
  }

  return (
    // key=slug forces a clean remount per portfolio — see FlipbookViewer comment.
    <div key={slug}>
      <PageBanner
        title={portfolio.title}
        breadcrumbs={[{ label: portfolio.title }]}
      />

      <section className="py-8 md:py-12 bg-white">
        <div className="max-w-6xl mx-auto px-6">
          <Link to="/" className="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-crimson mb-6 transition-colors">
            <ArrowLeft size={16} /> Home
          </Link>

          <div className="flex flex-col sm:flex-row gap-5 items-start mb-6">
            <img
              src={portfolio.image}
              alt={portfolio.title}
              className="w-20 h-20 object-contain mix-blend-multiply flex-shrink-0"
            />
            <div>
              <span className="text-xs font-bold text-crimson uppercase tracking-widest">{portfolio.season}</span>
              <p className="text-gray-600 leading-relaxed mt-1">{portfolio.content}</p>
            </div>
          </div>

          <div className="rounded-2xl overflow-hidden ring-1 ring-gray-100 shadow-sm bg-gray-900">
            <FlipbookViewer portfolio={portfolio} />
          </div>
        </div>
      </section>
    </div>
  )
}
