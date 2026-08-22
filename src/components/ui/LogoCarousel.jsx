import { Handshake } from 'lucide-react'
import Reveal from '../motion/Reveal'
import useReducedMotion from '../../lib/useReducedMotion'

// tier: 1 = Ergün (biggest), 2 = Pasifik (second), 3 = standard
const sponsors = [
  { src: '/sponsors/1.jpg', alt: 'Ergün',               tier: 1 },
  { src: '/sponsors/7.jpg', alt: 'Pasifik Teknoloji',   tier: 2 },
  { src: '/sponsors/2.jpg', alt: 'KOZKA İnşaat',        tier: 3 },
  { src: '/sponsors/3.jpg', alt: 'Fikret Yüksel Vakfı', tier: 3 },
  { src: '/sponsors/4.jpg', alt: 'Yamantürk Vakfı',     tier: 3 },
  { src: '/sponsors/5.jpg', alt: 'Öztekin Beta',         tier: 3 },
  { src: '/sponsors/6.jpg', alt: 'Kemron',               tier: 3 },
]

const majors = sponsors.filter((s) => s.tier <= 2)
const community = sponsors.filter((s) => s.tier === 3)

// Card sizing per tier
const tierStyle = {
  1: { card: 'w-72 h-36', logo: 'max-h-24' },
  2: { card: 'w-60 h-32', logo: 'max-h-20' },
  3: { card: 'w-44 h-24', logo: 'max-h-12' },
}

function Row({ items, direction, speed, label }) {
  const reducedMotion = useReducedMotion()
  // Exactly two copies + translate 50% = seamless loop with no jump.
  const track = [...items, ...items]

  if (reducedMotion) {
    return (
      <div className="flex flex-wrap items-center justify-center gap-5">
        {items.map((s, i) => (
          <LogoCard key={i} sponsor={s} />
        ))}
      </div>
    )
  }

  return (
    <div className="group/row relative">
      {label && (
        <p className="text-white/40 text-[10px] font-bold uppercase tracking-[0.3em] mb-3 text-center">
          {label}
        </p>
      )}
      <div
        className="relative overflow-hidden"
        style={{
          WebkitMaskImage: 'linear-gradient(to right, transparent, black 8%, black 92%, transparent)',
          maskImage: 'linear-gradient(to right, transparent, black 8%, black 92%, transparent)',
        }}
      >
        <div
          className={`flex items-center gap-6 ${direction === 'left' ? 'animate-scroll-left' : 'animate-scroll-right'} group-hover/row:[animation-play-state:paused]`}
          style={{ width: 'max-content', animationDuration: `${speed}s` }}
        >
          {track.map((s, i) => (
            <LogoCard key={i} sponsor={s} />
          ))}
        </div>
      </div>
    </div>
  )
}

function LogoCard({ sponsor: s }) {
  const { card, logo } = tierStyle[s.tier]
  return (
    <div
      className={`group/card relative flex-shrink-0 flex items-center justify-center ${card}
                  bg-white rounded-2xl px-4 shadow-md ring-1 ring-black/5
                  transition-all duration-300 ease-out
                  hover:-translate-y-1.5 hover:shadow-xl hover:ring-2 hover:ring-gold/70`}
    >
      <img
        src={s.src}
        alt={s.alt}
        loading="lazy"
        decoding="async"
        className={`${logo} max-w-full object-contain grayscale opacity-80
                    transition-all duration-300 ease-out
                    group-hover/card:grayscale-0 group-hover/card:opacity-100`}
      />
      {/* Name label — slides in under the card on hover */}
      <span
        className="absolute -bottom-2 left-1/2 -translate-x-1/2 translate-y-full
                   opacity-0 group-hover/card:opacity-100
                   bg-navy text-white text-[10px] font-semibold uppercase tracking-wide
                   px-2.5 py-1 rounded-md whitespace-nowrap shadow-lg pointer-events-none
                   transition-all duration-200"
      >
        {s.alt}
      </span>
    </div>
  )
}

export default function LogoCarousel() {
  return (
    <section className="bg-crimson-gradient py-16 md:py-20 overflow-hidden relative">
      {/* Gold accent lines */}
      <div className="absolute top-0 left-0 right-0 h-0.5 bg-gold/60" />
      <div className="absolute bottom-0 left-0 right-0 h-0.5 bg-gold/60" />

      {/* Faint dot-grid texture, consistent with hero sections elsewhere */}
      <div
        className="absolute inset-0 opacity-[0.06] pointer-events-none"
        style={{
          backgroundImage: 'radial-gradient(circle, rgba(255,255,255,0.8) 1px, transparent 1px)',
          backgroundSize: '26px 26px',
        }}
      />

      <div className="relative max-w-6xl mx-auto px-6">
        <Reveal direction="scale" className="text-center mb-12">
          <p className="text-white/60 text-xs font-bold uppercase tracking-[0.35em] mb-3 flex items-center justify-center gap-2">
            <Handshake size={14} className="text-gold" />
            Proudly Supported By
          </p>
          <h2 className="text-2xl md:text-3xl font-bold text-white mb-3">
            Our Sponsors &amp; Partners
          </h2>
          <div className="w-10 h-0.5 bg-gold mx-auto" />
        </Reveal>

        <div className="flex flex-col gap-10">
          <Row items={majors} direction="left" speed={22} label="Major Partners" />
          <Row items={community} direction="right" speed={34} label="Community Supporters" />
        </div>
      </div>
    </section>
  )
}
