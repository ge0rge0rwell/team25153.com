import { useParams, Link } from 'react-router-dom'
import { Trophy, ChevronRight } from 'lucide-react'
import { useCollection } from '../context/ContentContext'

export default function RobotPage() {
  const { slug } = useParams()
  const robot = useCollection('robots').robots.find((r) => r.slug === slug)

  if (!robot) return (
    <div className="min-h-screen flex items-center justify-center bg-gray-50">
      <div className="text-center">
        <h2 className="text-2xl font-medium text-navy mb-3">Robot not found</h2>
        <Link to="/" className="btn-primary">Go Home</Link>
      </div>
    </div>
  )

  return (
    <div className="bg-white">

      {/* ══════════════════════════════════════════
          HERO — solid navy, clean & sharp
      ══════════════════════════════════════════ */}
      <section className="relative overflow-hidden bg-navy" style={{ minHeight: '70vh' }}>
        {/* Dot-grid texture */}
        <div
          className="absolute inset-0 opacity-5"
          style={{
            backgroundImage: 'radial-gradient(circle, rgba(255,255,255,0.8) 1px, transparent 1px)',
            backgroundSize: '28px 28px',
          }}
        />
        {/* Crimson accent bar left edge */}
        <div className="absolute left-0 top-0 bottom-0 w-1 bg-crimson" />

        <div className="relative max-w-6xl mx-auto px-6 py-20 flex flex-col lg:flex-row items-center gap-12">
          {/* Left: text */}
          <div className="flex-1 text-white z-10">
            {/* Breadcrumb */}
            <div className="flex items-center gap-2 text-white/50 text-xs uppercase tracking-widest mb-6">
              <Link to="/" className="hover:text-white transition-colors">Home</Link>
              <ChevronRight size={12} />
              <Link to="/team" className="hover:text-white transition-colors">Team</Link>
              <ChevronRight size={12} />
              <span className="text-gold font-bold">{robot.name}</span>
            </div>


            <h1
              className="text-7xl md:text-8xl font-black uppercase leading-none mb-4 text-white"
              style={{ fontFamily: 'Rajdhani, Roboto, sans-serif', letterSpacing: '-0.02em' }}
            >
              {robot.name}
            </h1>

            <div className="w-16 h-0.5 bg-gold mb-5" />

            <p className="text-white/60 italic mb-6 text-base">
              "{robot.tagline}"
            </p>

            <p className="text-white/70 leading-relaxed max-w-lg text-sm">
              {robot.description}
            </p>


          </div>

          {/* Right: robot image — clean, no glow ring */}
          <div className="flex-1 flex justify-center lg:justify-end z-10">
            <img
              src={robot.image}
              alt={robot.name}
              className="w-64 h-64 lg:w-80 lg:h-80 object-contain drop-shadow-2xl"
              decoding="async"
              style={{ mixBlendMode: robot.heroBgBlend }}
            />
          </div>
        </div>
      </section>

      {/* ══════════════════════════════════════════
          ROBOT BREAKDOWN IMAGE
      ══════════════════════════════════════════ */}
      {robot.breakdownImage && (
        <section className="py-16 bg-white border-t border-gray-100">
          <div className="max-w-5xl mx-auto px-6">
            <img
              src={robot.breakdownImage}
              alt={`${robot.name} component breakdown`}
              className="w-full object-contain rounded-2xl"
              loading="lazy"
              decoding="async"
            />
          </div>
        </section>
      )}

      {/* ══════════════════════════════════════════
          ROBOT OVERVIEW + QUICK FACTS
      ══════════════════════════════════════════ */}
      {(robot.robotOverview || robot.specs || robot.abilities) && (
        <section className="py-20 bg-gray-50">
          <div className="max-w-6xl mx-auto px-6">
            <div className="mb-10">
              <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2">The Robot</p>
              <h2 className="text-3xl font-bold text-navy mb-1">Quick Facts</h2>
              <div className="w-10 h-0.5 bg-gold" />
            </div>

            <div className="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">
              {/* Left: overview + specs */}
              <div className="flex flex-col gap-6">
                {robot.robotOverview && (
                  <div className="bg-white rounded-2xl p-7 ring-1 ring-gray-100">
                    <p className="text-gray-700 leading-relaxed text-base">{robot.robotOverview}</p>
                  </div>
                )}
                {robot.specs && (
                  <div className="bg-navy rounded-2xl p-7">
                    <p className="text-gold text-xs font-bold uppercase tracking-[0.3em] mb-5">Specifications</p>
                    <div className="flex flex-col gap-3">
                      {Object.entries(robot.specs).map(([key, val]) => (
                        <div key={key} className="flex items-center justify-between border-b border-white/10 pb-3 last:border-0 last:pb-0">
                          <span className="text-white/50 text-xs uppercase tracking-widest font-semibold">{key}</span>
                          <span className="text-white font-bold text-sm">{val}</span>
                        </div>
                      ))}
                    </div>
                  </div>
                )}
              </div>

              {/* Right: abilities */}
              {robot.abilities && (
                <div className="bg-white rounded-2xl p-7 ring-1 ring-gray-100">
                  <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-5">Abilities</p>
                  <div className="flex flex-col gap-3">
                    {robot.abilities.map((ability, i) =>
                      typeof ability === 'string' ? (
                        <div key={i} className="flex items-start gap-4 bg-gray-50 rounded-xl px-5 py-3.5 ring-1 ring-gray-100 shadow-sm">
                          <span className="text-crimson font-black text-sm w-6 flex-shrink-0 mt-0.5">
                            {String(i + 1).padStart(2, '0')}
                          </span>
                          <span className="text-gray-700 text-sm leading-relaxed">{ability}</span>
                        </div>
                      ) : (
                        <div key={i} className="bg-gray-50 rounded-xl px-5 py-4 ring-1 ring-gray-100 shadow-sm">
                          <div className="flex items-center gap-3 mb-2">
                            <span className="text-crimson font-black text-sm w-6 flex-shrink-0">
                              {String(i + 1).padStart(2, '0')}
                            </span>
                            <span className="text-navy font-bold text-sm">{ability.name}</span>
                          </div>
                          <p className="text-gray-600 text-sm leading-relaxed pl-9">{ability.desc}</p>
                        </div>
                      )
                    )}
                  </div>
                </div>
              )}
            </div>
          </div>
        </section>
      )}


      {/* ══════════════════════════════════════════
          WHY NAMED + PARTICIPATED — two column
      ══════════════════════════════════════════ */}
      <section className="py-20 bg-white">
        <div className="max-w-6xl mx-auto px-6">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-8">

            {/* Why card */}
            <div className="bg-gray-50 rounded-2xl p-8 ring-1 ring-gray-100">
              <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-3">Naming Story</p>
              <h3 className="text-2xl font-bold text-navy mb-4">{robot.whyTitle}</h3>
              <p className="text-gray-600 leading-relaxed">{robot.whyText}</p>
            </div>

            {/* Participated In — vertical crimson list */}
            <div className="bg-gray-50 rounded-2xl p-8 ring-1 ring-gray-100">
              <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-3">
                <Trophy size={12} className="inline mr-1 mb-0.5" />
                Events
              </p>
              <h3 className="text-2xl font-bold text-navy mb-6">Participated In</h3>
              <div className="flex flex-col gap-3">
                {robot.participated.map((event, i) => (
                  <a
                    key={event.name}
                    href={event.url}
                    target="_blank"
                    rel="noopener noreferrer"
                    className="flex items-center gap-4 bg-crimson hover:bg-crimson-dark text-white rounded-xl px-5 py-3 font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg group"
                  >
                    <span className="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center text-xs font-black flex-shrink-0">
                      {i + 1}
                    </span>
                    <span className="flex-1">{event.name}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" className="w-3.5 h-3.5 opacity-60 group-hover:opacity-100 transition-opacity" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                      <path strokeLinecap="round" strokeLinejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                  </a>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>




    </div>
  )
}
