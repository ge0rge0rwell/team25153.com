import { useParams, Link } from 'react-router-dom'
import PageBanner from '../components/ui/PageBanner'
import { ArrowLeft, Maximize2 } from 'lucide-react'
import { useEffect, useRef } from 'react'
import { loadFlipbook } from '../utils/loadFlipbook'
import { useCollection } from '../context/ContentContext'

export default function PortfolioDetail() {
  const { slug } = useParams()
  const portfolio = useCollection('portfolios').portfolios.find((p) => p.slug === slug)

  const buttonRef = useRef(null)

  useEffect(() => {
    if (!portfolio || !buttonRef.current) return
    let cancelled = false

    // Lazily fetch the ~2.7 MB flipbook engine only when this page mounts,
    // then bind it to the button once ready.
    loadFlipbook()
      .then(() => {
        if (cancelled || !buttonRef.current) return
        window.jQuery(buttonRef.current).flipBook({
          pdfUrl: portfolio.pdfUrl,
          lightBox: true,
          rootFolder: '/dflip/',
          name: portfolio.title,
          lightboxBackground: '#000000',
        })
      })
      .catch((err) => console.error('Flipbook failed to load:', err))

    return () => { cancelled = true }
  }, [portfolio])

  if (!portfolio) {
    return (
      <div className="min-h-screen flex items-center justify-center bg-gray-50">
        <div className="text-center px-6">
          <h1 className="text-2xl font-medium text-navy mb-2">Portfolio Not Found</h1>
          <Link to="/portfolio" className="btn-primary mt-4">Back to Portfolios</Link>
        </div>
      </div>
    )
  }

  return (
    <div>
      <style>{`
        .flipbook-lightbox-overlay {
          background: #000000 !important;
          z-index: 9999999 !important;
        }
      `}</style>
      <PageBanner
        title={portfolio.title}
        breadcrumbs={[
          { label: 'Portfolio', to: '/portfolio' },
          { label: portfolio.title },
        ]}
      />
      
      <section className="py-20 bg-white">
        <div className="max-w-4xl mx-auto px-6">
          <Link to="/portfolio" className="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-crimson mb-8 transition-colors">
            <ArrowLeft size={16} /> Back to Portfolios
          </Link>
          <div className="bg-gray-50 rounded-2xl p-8 border border-gray-100 shadow-sm flex flex-col md:flex-row gap-8 items-center">
            <div className="w-full md:w-1/3 flex justify-center">
              <img src={portfolio.image} alt={portfolio.title} className="w-48 h-48 object-contain mix-blend-multiply drop-shadow-xl" />
            </div>
            <div className="w-full md:w-2/3">
              <span className="text-xs font-bold text-crimson uppercase tracking-widest">{portfolio.season}</span>
              <h2 className="text-3xl font-bold text-navy mt-2 mb-4">{portfolio.title}</h2>
              <p className="text-gray-600 leading-relaxed text-lg">{portfolio.content}</p>
              
              <div className="mt-8 pt-6 border-t border-gray-200">
                <button 
                  ref={buttonRef}
                  className="btn-primary flex items-center gap-2"
                >
                  <Maximize2 size={18} />
                  Open Full Page 3D Flipbook
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  )
}
