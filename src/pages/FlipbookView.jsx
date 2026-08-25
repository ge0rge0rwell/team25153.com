import { useParams, Link } from 'react-router-dom'
import { useEffect, useRef } from 'react'
import { loadFlipbook } from '../utils/loadFlipbook'
import { useCollection } from '../context/ContentContext'

// Bare, full-viewport flipbook — no navbar, no banner, no info strip.
// Opened in a new tab from the Portfolio menu so the reader lands directly
// in the viewer instead of a page they'd have to click through.
//
// key={slug} on the outer element (see PortfolioDetail for the same
// pattern) forces a full remount if this ever gets a client-side nav
// between two different slugs, so a fresh dFlip instance is always bound
// to a fresh DOM node rather than reusing stale listeners.
function Flipbook({ portfolio }) {
  const containerRef = useRef(null)

  useEffect(() => {
    if (!containerRef.current) return
    let cancelled = false

    loadFlipbook()
      .then(() => {
        if (cancelled || !containerRef.current) return
        window.jQuery(containerRef.current).flipBook({
          pdfUrl: portfolio.pdfUrl,
          lightBox: false,
          rootFolder: '/dflip/',
          name: portfolio.title,
          btnDownloadPdf: {
            enabled: true,
            url: portfolio.pdfUrl,
            forceDownload: true,
            name: `${portfolio.slug}.pdf`,
          },
        })
      })
      .catch((err) => console.error('Flipbook failed to load:', err))

    return () => { cancelled = true }
  }, [portfolio])

  return <div ref={containerRef} className="w-screen h-screen" />
}

export default function FlipbookView() {
  const { slug } = useParams()
  const portfolio = useCollection('portfolios').portfolios.find((p) => p.slug === slug)

  if (!portfolio) {
    return (
      <div className="w-screen h-screen flex items-center justify-center bg-navy text-white">
        <div className="text-center px-6">
          <h1 className="text-2xl font-medium mb-4">Portfolio Not Found</h1>
          <Link to="/" className="text-gold underline">Go Home</Link>
        </div>
      </div>
    )
  }

  return (
    <div key={slug} className="bg-gray-900">
      <Flipbook portfolio={portfolio} />
    </div>
  )
}
