import { useState } from 'react'
import PageBanner from '../components/ui/PageBanner'
import { X, ChevronLeft, ChevronRight } from 'lucide-react'
import { FaInstagram } from 'react-icons/fa'

const groups = [
  {
    id: 'regional1',
    label: 'Piri Reis Regional 1',
    date: 'November 1, 2025',
    photos: [
      '/media/WhatsApp-Image-2025-11-01-at-10.04.46.jpeg',
      '/media/WhatsApp-Image-2025-11-01-at-14.40.58.jpeg',
      '/media/WhatsApp-Image-2025-11-01-at-19.43.57.jpeg',
    ],
  },
  {
    id: 'regional2',
    label: 'Piri Reis Regional 2',
    date: 'November 2, 2025',
    photos: [
      '/media/WhatsApp-Image-2025-11-02-at-09.28.37.jpeg',
      '/media/WhatsApp-Image-2025-11-02-at-09.28.55.jpeg',
      '/media/WhatsApp-Image-2025-11-02-at-10.12.14.jpeg',
      '/media/WhatsApp-Image-2025-11-02-at-10.13.06.jpeg',
      '/media/WhatsApp-Image-2025-11-02-at-10.15.32.jpeg',
      '/media/WhatsApp-Image-2025-11-02-at-16.46.48.jpeg',
      '/media/WhatsApp-Image-2025-11-02-at-18.03.06.jpeg',
    ],
  },
]

const allPhotos = groups.flatMap((g) => g.photos.map((src) => ({ src, group: g.label })))

export default function Media() {
  const [activeGroup, setActiveGroup] = useState('all')
  const [lightbox, setLightbox] = useState(null) // index into filtered list

  const filtered =
    activeGroup === 'all'
      ? allPhotos
      : allPhotos.filter((p) => p.group === groups.find((g) => g.id === activeGroup)?.label)

  const openLightbox = (i) => setLightbox(i)
  const closeLightbox = () => setLightbox(null)
  const prev = () => setLightbox((i) => (i - 1 + filtered.length) % filtered.length)
  const next = () => setLightbox((i) => (i + 1) % filtered.length)

  return (
    <div>
      <PageBanner
        title="Media"
        breadcrumbs={[{ label: 'Team', to: '/team' }, { label: 'Media' }]}
      />

      {/* ── Filter Tabs ─────────────────────────── */}
      <div className="bg-white border-b border-gray-100 sticky top-0 z-20">
        <div className="max-w-6xl mx-auto px-6">
          <div className="flex gap-1 overflow-x-auto py-3">
            {[{ id: 'all', label: 'All Photos' }, ...groups].map((g) => (
              <button
                key={g.id}
                onClick={() => setActiveGroup(g.id)}
                className={`flex-shrink-0 px-5 py-2 rounded-full text-xs font-bold uppercase tracking-widest transition-all duration-200 ${
                  activeGroup === g.id
                    ? 'bg-crimson text-white shadow-md'
                    : 'bg-gray-100 text-gray-500 hover:bg-gray-200'
                }`}
              >
                {g.label}
              </button>
            ))}
          </div>
        </div>
      </div>

      {/* ── Gallery ─────────────────────────────── */}
      <section className="py-16 bg-gray-50 min-h-[60vh]">
        <div className="max-w-6xl mx-auto px-6">

          {/* Group headers when showing all */}
          {activeGroup === 'all' ? (
            groups.map((group) => (
              <div key={group.id} className="mb-14">
                <div className="flex items-center gap-4 mb-6">
                  <div>
                    <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-0.5">{group.date}</p>
                    <h2 className="text-2xl font-bold text-navy">{group.label}</h2>
                  </div>
                  <div className="flex-1 h-px bg-gray-200" />
                  <span className="text-xs text-gray-400 font-medium">{group.photos.length} photos</span>
                </div>
                <div className="columns-1 sm:columns-2 lg:columns-3 gap-3 space-y-3">
                  {group.photos.map((src, i) => {
                    const globalIdx = allPhotos.findIndex((p) => p.src === src)
                    return (
                      <div
                        key={i}
                        className="break-inside-avoid overflow-hidden rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 cursor-zoom-in group relative"
                        onClick={() => openLightbox(globalIdx)}
                      >
                        <img
                          src={src}
                          alt={`${group.label} photo ${i + 1}`}
                          className="w-full object-cover group-hover:scale-105 transition-transform duration-500"
                          loading="lazy"
                        />
                        <div className="absolute inset-0 bg-navy/0 group-hover:bg-navy/20 transition-colors duration-300 flex items-center justify-center">
                          <span className="opacity-0 group-hover:opacity-100 transition-opacity bg-white/90 text-navy text-xs font-bold px-3 py-1.5 rounded-full">
                            View
                          </span>
                        </div>
                      </div>
                    )
                  })}
                </div>
              </div>
            ))
          ) : (
            <div>
              {(() => {
                const group = groups.find((g) => g.id === activeGroup)
                return (
                  <div className="mb-6 flex items-center gap-4">
                    <div>
                      <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-0.5">{group.date}</p>
                      <h2 className="text-2xl font-bold text-navy">{group.label}</h2>
                    </div>
                    <div className="flex-1 h-px bg-gray-200" />
                    <span className="text-xs text-gray-400 font-medium">{group.photos.length} photos</span>
                  </div>
                )
              })()}
              <div className="columns-1 sm:columns-2 lg:columns-3 gap-3 space-y-3">
                {filtered.map((photo, i) => (
                  <div
                    key={i}
                    className="break-inside-avoid overflow-hidden rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 cursor-zoom-in group relative"
                    onClick={() => openLightbox(i)}
                  >
                    <img
                      src={photo.src}
                      alt={`Photo ${i + 1}`}
                      className="w-full object-cover group-hover:scale-105 transition-transform duration-500"
                      loading="lazy"
                    />
                    <div className="absolute inset-0 bg-navy/0 group-hover:bg-navy/20 transition-colors duration-300 flex items-center justify-center">
                      <span className="opacity-0 group-hover:opacity-100 transition-opacity bg-white/90 text-navy text-xs font-bold px-3 py-1.5 rounded-full">
                        View
                      </span>
                    </div>
                  </div>
                ))}
              </div>
            </div>
          )}
        </div>

        {/* Instagram CTA */}
        <div className="max-w-6xl mx-auto px-6 mt-16 text-center">
          <p className="text-gray-500 text-sm mb-4">Follow us on Instagram for more photos and updates</p>
          <a
            href="https://www.instagram.com/cartesian25153/"
            target="_blank"
            rel="noopener noreferrer"
            className="inline-flex items-center gap-2 bg-crimson text-white px-6 py-3 rounded-full font-bold text-sm uppercase tracking-widest hover:bg-crimson-dark transition-colors"
          >
            <FaInstagram size={16} />
            @cartesian25153
          </a>
        </div>
      </section>

      {/* ── Lightbox ─────────────────────────────── */}
      {lightbox !== null && (
        <div
          className="fixed inset-0 z-50 bg-black/95 flex items-center justify-center"
          onClick={closeLightbox}
        >
          {/* Close */}
          <button
            className="absolute top-5 right-5 text-white/70 hover:text-white bg-white/10 hover:bg-white/20 rounded-full p-2 transition-all"
            onClick={closeLightbox}
          >
            <X size={22} />
          </button>

          {/* Counter */}
          <div className="absolute top-5 left-1/2 -translate-x-1/2 text-white/60 text-xs font-bold uppercase tracking-widest">
            {lightbox + 1} / {filtered.length}
            <span className="ml-3 text-white/40">{filtered[lightbox].group}</span>
          </div>

          {/* Prev */}
          <button
            className="absolute left-4 text-white/70 hover:text-white bg-white/10 hover:bg-white/20 rounded-full p-3 transition-all"
            onClick={(e) => { e.stopPropagation(); prev() }}
          >
            <ChevronLeft size={24} />
          </button>

          {/* Image */}
          <img
            src={filtered[lightbox].src}
            alt={`Photo ${lightbox + 1}`}
            className="max-h-[85vh] max-w-[90vw] object-contain rounded-xl shadow-2xl"
            onClick={(e) => e.stopPropagation()}
          />

          {/* Next */}
          <button
            className="absolute right-4 text-white/70 hover:text-white bg-white/10 hover:bg-white/20 rounded-full p-3 transition-all"
            onClick={(e) => { e.stopPropagation(); next() }}
          >
            <ChevronRight size={24} />
          </button>
        </div>
      )}
    </div>
  )
}
