import PageBanner from '../components/ui/PageBanner'
import { Trophy, Eye, X } from 'lucide-react'
import { useParams } from 'react-router-dom'
import { useState } from 'react'

const allSeasons = [
  {
    year: '2025',
    game: 'DECODE',
    slug: 'decode',
    robot: 'Cerberon',
    awards: [
      { 
        title: 'Sustain Award', 
        event: 'FIRST Championship – Franklin Division', 
        tier: 'championship',
        image: '/media/sustain-award.png'
      },
      { title: 'Inspire Award', event: '1. Piri Reis Turnuvası', tier: 'regional' },
      { title: 'Inspire Award 2nd Place', event: '2. Piri Reis Turnuvası', tier: 'regional' },
      { title: 'Inspire Award', event: 'Türkiye Şampiyonası', tier: 'national' },
      { title: 'Finalist Alliance – Captain', event: 'Türkiye Şampiyonası', tier: 'national' },
    ],
  },
  {
    year: '2024',
    game: 'INTO THE DEEP',
    slug: 'into-the-deep',
    robot: 'HILDA',
    awards: [
      { title: 'Control Award', event: 'Uluslararası FTC 1. Üsküdar Turnuvası', tier: 'regional' },
      { title: 'Inspire Award 2nd Place', event: 'Uluslararası FTC 2. Üsküdar Turnuvası', tier: 'regional' },
      { title: 'Finalist Alliance – 1st Team Selected', event: 'Uluslararası FTC 2. Üsküdar Turnuvası', tier: 'regional' },
      { title: 'Winning Alliance – Captain', event: 'Türkiye Championship', tier: 'national' },
      { title: 'Think Award', event: 'Türkiye Championship', tier: 'national' },
    ],
  },
  {
    year: '2023',
    game: 'CENTERSTAGE',
    slug: 'centerstage',
    robot: 'X & Y',
    awards: [
      { title: 'Think Award 3rd Place', event: 'Greece National FTC Championship 2024', tier: 'international' },
      { title: 'Innovate Award sponsored by RTX 2nd Place', event: 'Greece National FTC Championship 2024', tier: 'international' },
    ],
  },
]

// Badge colors per tier — all crimson / navy variants, no gold
const tierBadge = {
  championship: 'bg-[#5a1a14] text-white',
  national:     'bg-crimson text-white',
  regional:     'bg-crimson/15 text-crimson',
  international:'bg-navy text-white',
}
const tierLabel = {
  championship: 'World',
  national:     'National',
  regional:     'Regional',
  international:'International',
}

export default function Awards() {
  const { season } = useParams()
  const [lightboxImage, setLightboxImage] = useState(null)
  
  const displaySeasons = season 
    ? allSeasons.filter(s => s.slug === season)
    : allSeasons

  const total = displaySeasons.reduce((sum, s) => sum + s.awards.length, 0)
  
  const pageTitle = season && displaySeasons.length > 0 
    ? `${displaySeasons[0].game} Awards` 
    : "Our Awards"

  const breadcrumbs = season 
    ? [
        { label: 'Team', to: '/team' }, 
        { label: 'Our Awards', to: '/awards' }, 
        { label: displaySeasons[0]?.game }
      ]
    : [
        { label: 'Team', to: '/team' }, 
        { label: 'Our Awards' }
      ]

  return (
    <div>
      <PageBanner
        title={pageTitle}
        breadcrumbs={breadcrumbs}
      />

      {/* Total count strip */}
      <div className="bg-crimson text-white py-6">
        <div className="max-w-5xl mx-auto px-6 flex items-center gap-4">
          <Trophy size={28} className="text-white/70" />
          <div>
            <p className="text-white/70 text-xs font-bold uppercase tracking-widest">Total Awards</p>
            <p className="text-3xl font-black leading-none">{total}</p>
          </div>
          <div className="flex-1 h-px bg-white/20 mx-4" />
          <div className="flex gap-6 flex-wrap">
            {Object.entries(tierLabel).map(([tier, label]) => (
              <div key={tier} className="text-center">
                <p className="text-2xl font-black">
                  {displaySeasons.reduce((sum, s) => sum + s.awards.filter(a => a.tier === tier).length, 0)}
                </p>
                <p className="text-white/60 text-xs uppercase tracking-wider">{label}</p>
              </div>
            ))}
          </div>
        </div>
      </div>

      <section className="py-16 bg-gray-50">
        <div className="max-w-5xl mx-auto px-6 space-y-14">
          {displaySeasons.map((season) => (
            <div key={season.year}>
              {/* Season header */}
              <div className="flex items-center gap-4 mb-6">
                <div className="flex-shrink-0">
                  <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-0.5">Season</p>
                  <h2 className="text-2xl font-black text-navy">
                    {season.game}
                    <span className="text-navy/40 font-normal text-base ml-2">— {season.robot}</span>
                  </h2>
                </div>
                <div className="flex-1 h-px bg-gray-200" />
                <span className="text-xs text-gray-400 font-bold bg-white border border-gray-200 rounded-full px-3 py-1">
                  {season.year}
                </span>
              </div>

              {/* Awards table */}
              <div className="bg-white rounded-2xl shadow-sm ring-1 ring-gray-100 overflow-hidden">
                {/* Table header */}
                <div className="grid grid-cols-[auto_1fr_auto] gap-4 px-6 py-3 bg-gray-50 border-b border-gray-100">
                  <span className="text-xs font-bold uppercase tracking-widest text-gray-400">#</span>
                  <span className="text-xs font-bold uppercase tracking-widest text-gray-400">Award</span>
                  <span className="text-xs font-bold uppercase tracking-widest text-gray-400">Event</span>
                </div>

                {season.awards.map((award, i) => (
                  <div
                    key={i}
                    className={`grid grid-cols-[auto_1fr] sm:grid-cols-[auto_1fr_auto] gap-x-4 gap-y-1 items-center px-6 py-4 ${
                      i !== season.awards.length - 1 ? 'border-b border-gray-50' : ''
                    } hover:bg-crimson/3 transition-colors group`}
                  >
                    {/* Number */}
                    <span className="text-gray-300 font-black text-sm w-6 text-center">{i + 1}</span>

                    {/* Award name + tier badge */}
                    <div className="flex flex-col gap-2">
                      <div className="flex items-center gap-3 flex-wrap">
                        <Trophy size={14} className="text-crimson flex-shrink-0 opacity-60 group-hover:opacity-100 transition-opacity" />
                        <span className="font-bold text-navy text-sm">{award.title}</span>
                        <span className={`text-xs font-bold px-2.5 py-0.5 rounded-full flex-shrink-0 ${tierBadge[award.tier]}`}>
                          {tierLabel[award.tier]}
                        </span>
                      </div>

                      {award.image && (
                        <div 
                          onClick={() => setLightboxImage({ src: award.image, title: award.title })}
                          className="mt-2 max-w-xs group cursor-zoom-in"
                        >
                          <img 
                            src={award.image} 
                            alt={`${award.title} Physical Trophy`} 
                            className="w-auto h-48 object-contain group-hover:scale-105 transition-transform duration-500"
                            loading="lazy"
                          />
                        </div>
                      )}
                    </div>

                    {/* Event */}
                    <div className="col-start-2 sm:col-start-3 pl-5 sm:pl-0">
                      <span className="text-gray-500 text-xs">{award.event}</span>
                    </div>
                  </div>
                ))}
              </div>
            </div>
          ))}
        </div>
      </section>

      {/* Lightbox Modal */}
      {lightboxImage && (
        <div 
          className="fixed inset-0 z-50 flex items-center justify-center bg-black/85 backdrop-blur-md p-4 cursor-pointer"
          onClick={() => setLightboxImage(null)}
        >
          <button 
            onClick={() => setLightboxImage(null)}
            className="absolute top-6 right-6 text-white/70 hover:text-white bg-white/10 hover:bg-white/20 p-2.5 rounded-full transition-all duration-200 cursor-pointer z-50"
          >
            <X size={24} />
          </button>
          <div 
            className="relative max-w-4xl w-full flex flex-col items-center justify-center cursor-default"
            onClick={(e) => e.stopPropagation()}
          >
            <img 
              src={lightboxImage.src} 
              alt={lightboxImage.title} 
              className="max-h-[85vh] max-w-full object-contain rounded-xl shadow-2xl"
            />
            <div className="mt-4 text-center">
              <p className="text-crimson text-xs font-black uppercase tracking-widest mb-1">Physical Award Photo</p>
              <h3 className="text-white font-black text-xl">{lightboxImage.title}</h3>
            </div>
          </div>
        </div>
      )}
    </div>
  )
}
