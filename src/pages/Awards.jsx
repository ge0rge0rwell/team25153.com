import PageBanner from '../components/ui/PageBanner'
import { Trophy } from 'lucide-react'
import { useState } from 'react'
import { DialogContent, DialogTitle } from '../components/ui/dialog'
import Reveal from '../components/motion/Reveal'
import { StaggerGroup, StaggerItem } from '../components/motion/Stagger'
import GsapCountUp from '../components/motion/GsapCountUp'
import { useCollection } from '../context/ContentContext'

// Badge colors per tier — all crimson / navy variants, no gold
const tierBadge = {
  championship: 'bg-[#5a1a14] text-white',
  national:     'bg-crimson text-white',
  regional:     'bg-crimson/15 text-crimson',
  international:'bg-navy text-white',
  offseason:    'bg-navy/15 text-navy',
}
const tierLabel = {
  championship: 'World',
  national:     'National',
  regional:     'Regional',
  international:'International',
  offseason:    'Off-Season',
}

export default function Awards() {
  const [lightboxImage, setLightboxImage] = useState(null)

  const displaySeasons = useCollection('awards').seasons

  const total = displaySeasons.reduce((sum, s) => sum + s.awards.length, 0)
  
  const pageTitle = "Team & Awards"

  const breadcrumbs = [
    { label: 'Team & Awards' }
  ]

  return (
    <div>
      <PageBanner
        title={pageTitle}
        breadcrumbs={breadcrumbs}
      >
        <div className="flex gap-6 sm:gap-8 items-center justify-end flex-wrap md:flex-nowrap">
          <img
            src="/media/banner-2.png"
            alt="2025 Turkey Championship — Inspire Award"
            decoding="async"
            onClick={() => setLightboxImage({ src: '/media/banner-2.png', title: '2025 Turkey Championship — Inspire Award Banner' })}
            className="h-44 sm:h-52 md:h-64 w-auto object-contain cursor-zoom-in hover:scale-105 hover:-translate-y-2 transition-all duration-300 drop-shadow-[0_8px_20px_rgba(0,0,0,0.5)]"
          />
          <img
            src="/media/banner-3.png"
            alt="2025 Piri Reis Regional I — Inspire Award"
            decoding="async"
            onClick={() => setLightboxImage({ src: '/media/banner-3.png', title: '2025 Piri Reis Regional I — Inspire Award Banner' })}
            className="h-44 sm:h-52 md:h-64 w-auto object-contain cursor-zoom-in hover:scale-105 hover:-translate-y-2 transition-all duration-300 drop-shadow-[0_8px_20px_rgba(0,0,0,0.5)]"
          />
          <img
            src="/media/banner-1.png"
            alt="2024 Turkey Championship — Winner"
            decoding="async"
            onClick={() => setLightboxImage({ src: '/media/banner-1.png', title: '2024 Turkey Championship — Winner Banner' })}
            className="h-44 sm:h-52 md:h-64 w-auto object-contain cursor-zoom-in hover:scale-105 hover:-translate-y-2 transition-all duration-300 drop-shadow-[0_8px_20px_rgba(0,0,0,0.5)]"
          />
        </div>
      </PageBanner>

      {/* Team overview */}
      <section className="py-10 md:py-14 bg-white border-b border-gray-100">
        <Reveal className="max-w-5xl mx-auto px-6">
          <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2 flex items-center gap-2">
            <span className="w-6 h-px bg-crimson" /> About Us
          </p>
          <h2 className="text-2xl font-medium text-navy mb-4">Team Overview</h2>
          <p className="text-gray-700 leading-relaxed max-w-3xl">
            <strong>Cartesian Robotics #25153</strong> is a student-led team of over 25 students, guided by our motto <em>"I think, therefore I can."</em> We aim to develop middle school students' skills in engineering, creativity, strategy, and teamwork while spreading STEM culture within our community — and we measure our success by the people we impact.
          </p>
        </Reveal>
      </section>

      {/* Total count strip */}
      <div className="bg-crimson text-white py-6">
        <StaggerGroup as="div" staggerChildren={0.08} className="max-w-5xl mx-auto px-6 flex flex-wrap items-center gap-4">
          <StaggerItem className="flex items-center gap-4">
            <Trophy size={28} className="text-white/70" />
            <div>
              <p className="text-white/70 text-xs font-bold uppercase tracking-widest">Total Awards</p>
              <p className="text-3xl font-black leading-none"><GsapCountUp value={total} /></p>
            </div>
          </StaggerItem>
          <div className="flex-1 h-px bg-white/20 mx-4" />
          <div className="flex gap-6 flex-wrap">
            {Object.entries(tierLabel).map(([tier, label]) => (
              <StaggerItem key={tier} className="text-center">
                <p className="text-2xl font-black">
                  {displaySeasons.reduce((sum, s) => sum + s.awards.filter(a => a.tier === tier).length, 0)}
                </p>
                <p className="text-white/60 text-xs uppercase tracking-wider">{label}</p>
              </StaggerItem>
            ))}
          </div>
        </StaggerGroup>
      </div>

      <section className="py-10 md:py-16 bg-gray-50">
        <div className="max-w-5xl mx-auto px-6 space-y-14">
          {displaySeasons.map((season) => (
            <Reveal key={season.year} as="div" amount={0.1}>
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

                <StaggerGroup as="div" staggerChildren={0.05} amount={0.1}>
                {season.awards.map((award, i) => (
                  <StaggerItem
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
                  </StaggerItem>
                ))}
                </StaggerGroup>
              </div>
            </Reveal>
          ))}
        </div>
      </section>

      {/* Lightbox Modal — shadcn Dialog primitive (Radix a11y) + framer-motion visuals */}
      <DialogContent open={!!lightboxImage} onOpenChange={(o) => !o && setLightboxImage(null)}>
        {lightboxImage && (
          <>
            <img
              src={lightboxImage.src}
              alt={lightboxImage.title}
              decoding="async"
              className="max-h-[85vh] max-w-full object-contain rounded-xl shadow-2xl"
            />
            <div className="mt-4 text-center">
              <p className="text-crimson text-xs font-black uppercase tracking-widest mb-1">Physical Award Photo</p>
              <DialogTitle className="text-white font-black text-xl">{lightboxImage.title}</DialogTitle>
            </div>
          </>
        )}
      </DialogContent>
    </div>
  )
}
