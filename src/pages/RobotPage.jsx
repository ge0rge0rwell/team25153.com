import { useParams, Link } from 'react-router-dom'
import { Trophy, Cpu, ChevronRight } from 'lucide-react'

const robotData = {
  cerberon: {
    name: 'Cerberon',
    year: '2025 – 26',
    competition: 'FTC Decode',
    tagline: 'Power. Precision. Three Heads Forward.',
    description: 'Cerberon is our most advanced robot to date, designed for the 2025–26 FTC Decode season. Built with a deep analysis of the game, Cerberon combines speed, accuracy, and reliability to compete at the highest level domestically and internationally.',
    whyTitle: 'Why Cerberon?',
    whyText: 'This season, we named our robot Cerberon, inspired by Cerberus — the mythological three-headed guardian — and cannon, symbolizing power and precision.',
    image: 'https://team25153.com/wp-content/uploads/2026/04/logo-removebg-preview-300x300.png',
    seasonImage: '/decode-season.png',
    heroBgBlend: 'normal',
    youtubeId: 'LCqWA6gSCXA',
    youtubeTitle: '2025-2026 DECODE presented by RTX Game Animation',
    gameTitle: 'DECODE — 2025–2026',
    gameDescription: 'Two alliances of three robots each work to score foam balls into goals. At the end of the match, robots climb a structure to earn additional points.',
    participated: [
      { name: 'Piri Reis Regional 1', url: 'https://ftc-events.firstinspires.org/2025/TRTUQ1' },
      { name: 'Piri Reis Regional 2', url: 'https://ftc-events.firstinspires.org/2025/TRTUQ2' },
      { name: 'Türkiye Championship', url: 'https://ftc-events.firstinspires.org/2025/TRTUCH' },
    ],
    features: [
      'High-speed Intake Mechanism',
      'Precise Autonomous Routines',
      'Robust Climbing System',
      'Modular Chassis Design',
    ],
    prev: null,
    next: { label: 'HILDA', to: '/robots/hilda' },
  },
  hilda: {
    name: 'HILDA',
    year: '2024 – 25',
    competition: 'FTC Into The Deep',
    tagline: 'Into the Deep, Beyond All Limits.',
    description: 'HILDA was built for the 2024–25 FTC Into The Deep season. Featuring an innovative arm and intake system designed for submersible game pieces, HILDA demonstrated exceptional performance throughout the season.',
    whyTitle: 'Why HILDA?',
    whyText: 'HILDA stands for Highly Intelligent Linear Drive Assembly. The name captures both the clever engineering and the season\'s deep-sea theme, built to retrieve game pieces from below the surface.',
    image: 'https://team25153.com/wp-content/uploads/2026/04/Screenshot_2026-04-03_at_17.28.40-removebg-preview-300x247.png',
    seasonImage: '/into-the-deep-season.jpg',
    heroBgBlend: 'normal',
    youtubeId: 'ewlDPvRK4U4',
    youtubeTitle: '2024-2025 FIRST Tech Challenge Into The Deep Game Animation',
    gameTitle: 'INTO THE DEEP — 2024–2025',
    gameDescription: 'Two alliances compete to collect and deliver samples, score specimens on the chamber, and ascend the submersible structure at the end of the match.',
    participated: [
      { name: 'Türkiye Regional', url: 'https://ftc-events.firstinspires.org/2024/TRTUQ1' },
      { name: 'Türkiye Championship', url: 'https://ftc-events.firstinspires.org/2024/TRTUCH' },
    ],
    features: [
      'Submersible Intake Arm',
      'Advanced Sensor Integration',
      'Autonomous Path Planning',
      'Lightweight Carbon Fiber Frame',
    ],
    prev: { label: 'X & Y', to: '/robots/centerstage' },
    next: { label: 'Cerberon', to: '/robots/cerberon' },
  },
  centerstage: {
    name: 'X & Y',
    year: '2023 – 24',
    competition: 'FTC Centerstage',
    tagline: 'Precision on Every Axis.',
    description: 'X & Y was our breakthrough robot for the 2023–24 FTC Centerstage season. Named after the Cartesian coordinate axes, it embodies our team\'s identity through precise, coordinate-based movement and strategic gameplay.',
    whyTitle: 'Why X & Y?',
    whyText: 'X & Y is named after the Cartesian axes — a direct nod to our team identity. The name reflects our philosophy: every move is calculated, every position is precise, and every strategy is data-driven.',
    image: 'https://team25153.com/wp-content/uploads/2026/04/Adsiz-tasarim-1-300x236.png',
    seasonImage: '/centerstage-season.png',
    heroBgBlend: 'screen',
    youtubeId: '6e-5Uo1dRic',
    youtubeTitle: '2023-2024 FIRST Tech Challenge CENTERSTAGE Game Animation',
    gameTitle: 'CENTERSTAGE — 2023–2024',
    gameDescription: 'Alliances work together to place pixels on the backdrop, launch paper airplanes across the field, and hang from the rigging at the end of the match.',
    participated: [
      { name: 'Türkiye Regional', url: 'https://ftc-events.firstinspires.org/2023/TRTUQ1' },
      { name: 'Türkiye Championship', url: 'https://ftc-events.firstinspires.org/2023/TRTUCH' },
    ],
    features: [
      'Coordinate-based Movement System',
      'Backdrop Pixel Placer',
      'Drone Launcher Mechanism',
      'Reliable Field Navigation',
    ],
    prev: null,
    next: { label: 'HILDA', to: '/robots/hilda' },
  },
}

export default function RobotPage() {
  const { slug } = useParams()
  const robot = robotData[slug]

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
          GAME — Video + DECODE image + info
      ══════════════════════════════════════════ */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-6xl mx-auto px-6">
          <div className="mb-12">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-5">The Game</p>
            {robot.seasonImage ? (
              <div className="flex flex-col items-start gap-3">
                <img
                  src={robot.seasonImage}
                  alt={robot.competition + ' Season'}
                  className="h-32 object-contain"
                  loading="lazy"
                  decoding="async"
                  style={{ mixBlendMode: 'multiply' }}
                />
                <span className="text-navy/40 text-xs font-semibold uppercase tracking-widest">{robot.year}</span>
              </div>
            ) : (
              <h2 className="text-3xl font-bold text-navy">{robot.gameTitle}</h2>
            )}
          </div>

          <div className="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
            {/* Left: game description */}
            <div className="flex flex-col gap-6">
              <div className="bg-white rounded-2xl p-7 shadow-sm ring-1 ring-gray-100 flex-1">
                <p className="text-xs font-bold uppercase tracking-widest text-gray-400 mb-3">Game Overview</p>
                <p className="text-gray-700 leading-relaxed">{robot.gameDescription}</p>
              </div>
            </div>

            {/* Right: YouTube embed */}
            <div className="rounded-2xl overflow-hidden shadow-xl bg-black ring-1 ring-black/10">
              <div className="relative" style={{ paddingBottom: '56.25%' }}>
                <iframe
                  className="absolute inset-0 w-full h-full"
                  src={`https://www.youtube-nocookie.com/embed/${robot.youtubeId}?rel=0&modestbranding=1`}
                  title={robot.youtubeTitle}
                  frameBorder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowFullScreen
                />
              </div>
            </div>
          </div>
        </div>
      </section>

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

      {/* ══════════════════════════════════════════
          TECH FEATURES — clean dark section
      ══════════════════════════════════════════ */}
      <section className="py-20 bg-navy text-white">
        <div className="max-w-6xl mx-auto px-6">
          <div className="mb-10">
            <p className="text-gold text-xs font-bold uppercase tracking-[0.3em] mb-2">
              <Cpu size={12} className="inline mr-1 mb-0.5" />
              Engineering
            </p>
            <h2 className="text-3xl font-bold">Key Technical Features</h2>
          </div>

          <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
            {robot.features.map((f, i) => (
              <div
                key={f}
                className="flex items-center gap-4 bg-white/5 border border-white/10 rounded-xl px-6 py-4 hover:bg-white/10 hover:border-crimson/50 transition-all"
              >
                <span className="text-crimson font-black text-sm w-6 flex-shrink-0">
                  {String(i + 1).padStart(2, '0')}
                </span>
                <span className="text-white/85 font-medium text-sm">{f}</span>
              </div>
            ))}
          </div>
        </div>
      </section>



    </div>
  )
}
