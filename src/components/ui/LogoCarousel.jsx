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

// Card & logo sizing per tier
const tierStyle = {
  1: { card: 'w-72 h-36',  logo: 'max-h-24' }, // Ergün — biggest
  2: { card: 'w-60 h-32',  logo: 'max-h-20' }, // Pasifik — second
  3: { card: 'w-48 h-28',  logo: 'max-h-14'  }, // others — standard
}

// Triple for seamless infinite loop
const track = [...sponsors, ...sponsors, ...sponsors]

export default function LogoCarousel() {
  return (
    <section className="bg-crimson py-14 overflow-hidden relative">
      {/* Gold accent lines */}
      <div className="absolute top-0 left-0 right-0 h-0.5 bg-gold/60" />
      <div className="absolute bottom-0 left-0 right-0 h-0.5 bg-gold/60" />

      {/* Label */}
      <div className="text-center mb-8">
        <p className="text-white/60 text-xs font-bold uppercase tracking-[0.35em]">
          Proudly Supported By
        </p>
      </div>

      {/* Scroll track */}
      <div className="relative">
        {/* Fade masks — exact hex match to prevent colour glitch */}
        <div
          className="absolute left-0 top-0 bottom-0 w-20 z-10 pointer-events-none"
          style={{ background: 'linear-gradient(to right, #832a22 40%, transparent 100%)' }}
        />
        <div
          className="absolute right-0 top-0 bottom-0 w-20 z-10 pointer-events-none"
          style={{ background: 'linear-gradient(to left, #832a22 40%, transparent 100%)' }}
        />

        <div
          className="flex items-center gap-6 animate-scroll-left"
          style={{ width: 'max-content' }}
        >
          {track.map((s, i) => {
            const { card, logo } = tierStyle[s.tier]
            return (
              <div
                key={i}
                className={`flex-shrink-0 flex items-center justify-center ${card}
                            bg-white rounded-xl px-3 shadow-md
                            hover:scale-105 transition-transform duration-300 cursor-default`}
              >
                <img
                  src={s.src}
                  alt={s.alt}
                  loading="lazy"
                  decoding="async"
                  className={`${logo} max-w-full object-contain`}
                />
              </div>
            )
          })}
        </div>
      </div>
    </section>
  )
}
