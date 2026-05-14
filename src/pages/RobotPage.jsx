import { useParams, Link } from 'react-router-dom'
import { ArrowLeft, ArrowRight, Trophy, Cpu, ChevronRight } from 'lucide-react'

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
    youtubeId: 'LCqWA6gSCXA',
    youtubeTitle: '2025-2026 DECODE presented by RTX Game Animation',
    gameTitle: 'DECODE — 2025–2026',
    gameDescription: 'Two alliances of three robots each work to score foam balls into goals. At the end of the match, robots climb a structure to earn additional points.',
    participated: ['Piri Reis Regional 1', 'Piri Reis Regional 2', 'Türkiye Championship'],
    features: [
      { label: 'High-speed Intake', icon: '⚡' },
      { label: 'Autonomous Routines', icon: '🤖' },
      { label: 'Robust Climbing System', icon: '🧗' },
      { label: 'Modular Chassis', icon: '🔧' },
    ],
    accentColor: '#832a22',
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
    youtubeId: 'ewlDPvRK4U4',
    youtubeTitle: '2024-2025 FIRST Tech Challenge Into The Deep Game Animation',
    gameTitle: 'INTO THE DEEP — 2024–2025',
    gameDescription: 'Two alliances compete to collect and deliver samples, score specimens on the chamber, and ascend the submersible structure at the end of the match.',
    participated: ['Türkiye Regional', 'Türkiye Championship'],
    features: [
      { label: 'Submersible Intake Arm', icon: '🦾' },
      { label: 'Advanced Sensors', icon: '📡' },
      { label: 'Path Planning AI', icon: '🗺️' },
      { label: 'Carbon Fiber Frame', icon: '🪶' },
    ],
    accentColor: '#002147',
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
    youtubeId: '6e-5Uo1dRic',
    youtubeTitle: '2023-2024 FIRST Tech Challenge CENTERSTAGE Game Animation',
    gameTitle: 'CENTERSTAGE — 2023–2024',
    gameDescription: 'Alliances work together to place pixels on the backdrop, launch paper airplanes across the field, and hang from the rigging at the end of the match.',
    participated: ['Türkiye Regional', 'Türkiye Championship'],
    features: [
      { label: 'Coordinate Movement', icon: '📐' },
      { label: 'Backdrop Pixel Placer', icon: '🎯' },
      { label: 'Drone Launcher', icon: '✈️' },
      { label: 'Field Navigation', icon: '🧭' },
    ],
    accentColor: '#5a3e8a',
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
          HERO — full-bleed gradient + robot image
      ══════════════════════════════════════════ */}
      <section
        className="relative overflow-hidden"
        style={{
          background: `linear-gradient(135deg, #002147 0%, #832a22 60%, #FDC800 100%)`,
          minHeight: '70vh',
        }}
      >
        {/* Dot-grid texture */}
        <div
          className="absolute inset-0 opacity-10"
          style={{
            backgroundImage: 'radial-gradient(circle, rgba(255,255,255,0.5) 1px, transparent 1px)',
            backgroundSize: '28px 28px',
          }}
        />
        {/* Large blurred circle */}
        <div
          className="absolute -top-32 -right-32 w-[500px] h-[500px] rounded-full opacity-20 blur-3xl"
          style={{ background: '#FDC800' }}
        />

        <div className="relative max-w-6xl mx-auto px-6 py-20 flex flex-col lg:flex-row items-center gap-12 lg:gap-0">
          {/* Left: text */}
          <div className="flex-1 text-white z-10">
            {/* Breadcrumb */}
            <div className="flex items-center gap-2 text-white/60 text-xs uppercase tracking-widest mb-6">
              <Link to="/" className="hover:text-white transition-colors">Home</Link>
              <ChevronRight size={12} />
              <Link to="/team" className="hover:text-white transition-colors">Team</Link>
              <ChevronRight size={12} />
              <span className="text-gold font-bold">{robot.name}</span>
            </div>

            <div className="inline-block bg-white/10 backdrop-blur-sm border border-white/20 text-white/80 text-xs font-bold uppercase tracking-widest px-3 py-1.5 rounded-full mb-4">
              {robot.year} · {robot.competition}
            </div>

            <h1
              className="text-6xl md:text-8xl font-black uppercase leading-none mb-4"
              style={{ fontFamily: 'Rajdhani, Roboto, sans-serif', letterSpacing: '-0.02em' }}
            >
              {robot.name}
            </h1>

            <p className="text-gold font-semibold text-lg mb-6 italic">
              "{robot.tagline}"
            </p>

            <p className="text-white/75 leading-relaxed max-w-lg text-sm">
              {robot.description}
            </p>

            {/* Nav pills */}
            <div className="flex gap-3 mt-10">
              {robot.prev && (
                <Link
                  to={robot.prev.to}
                  className="flex items-center gap-2 text-xs font-bold uppercase tracking-widest bg-white/10 hover:bg-white/20 border border-white/20 text-white px-4 py-2 rounded-full transition-all"
                >
                  <ArrowLeft size={14} /> {robot.prev.label}
                </Link>
              )}
              {robot.next && (
                <Link
                  to={robot.next.to}
                  className="flex items-center gap-2 text-xs font-bold uppercase tracking-widest bg-white/10 hover:bg-white/20 border border-white/20 text-white px-4 py-2 rounded-full transition-all"
                >
                  {robot.next.label} <ArrowRight size={14} />
                </Link>
              )}
            </div>
          </div>

          {/* Right: floating robot image */}
          <div className="flex-1 flex justify-center lg:justify-end z-10">
            <div className="relative">
              {/* Glow ring */}
              <div
                className="absolute inset-0 rounded-full blur-3xl opacity-40 scale-110"
                style={{ background: 'radial-gradient(circle, #FDC800 0%, transparent 70%)' }}
              />
              <img
                src={robot.image}
                alt={robot.name}
                className="relative w-64 h-64 lg:w-80 lg:h-80 object-contain drop-shadow-2xl"
                style={{ filter: 'drop-shadow(0 0 40px rgba(253,200,0,0.4))' }}
              />
            </div>
          </div>
        </div>
      </section>

      {/* ══════════════════════════════════════════
          FEATURES — horizontal scrolling chips
      ══════════════════════════════════════════ */}
      <div className="bg-navy">
        <div className="max-w-6xl mx-auto px-6 py-4 flex flex-wrap gap-3">
          {robot.features.map((f) => (
            <div
              key={f.label}
              className="flex items-center gap-2 bg-white/5 border border-white/10 text-white text-xs font-semibold px-4 py-2 rounded-full"
            >
              <span>{f.icon}</span> {f.label}
            </div>
          ))}
        </div>
      </div>

      {/* ══════════════════════════════════════════
          GAME VIDEO + INFO — two column
      ══════════════════════════════════════════ */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-6xl mx-auto px-6">
          <div className="mb-10">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2">The Game</p>
            <h2 className="text-3xl font-bold text-navy">{robot.gameTitle}</h2>
          </div>

          <div className="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">
            {/* YouTube embed */}
            <div className="rounded-2xl overflow-hidden shadow-2xl bg-black ring-1 ring-black/10">
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

            {/* Game info + Why card stacked */}
            <div className="flex flex-col gap-6">
              {/* Game description */}
              <div className="bg-white rounded-2xl p-7 shadow-sm ring-1 ring-gray-100 flex-1">
                <p className="text-xs font-bold uppercase tracking-widest text-gray-400 mb-3">Game Overview</p>
                <p className="text-gray-700 leading-relaxed">{robot.gameDescription}</p>
              </div>

              {/* Why named */}
              <div className="relative bg-gradient-to-br from-crimson to-[#5a1a14] text-white rounded-2xl p-7 shadow-lg overflow-hidden">
                <div className="absolute -right-6 -bottom-6 w-32 h-32 rounded-full bg-white/10" />
                <div className="absolute -right-2 -bottom-2 w-16 h-16 rounded-full bg-white/10" />
                <p className="text-xs font-bold uppercase tracking-widest text-white/60 mb-2">Naming Story</p>
                <h3 className="text-xl font-bold mb-3">{robot.whyTitle}</h3>
                <p className="text-white/85 text-sm leading-relaxed relative z-10">{robot.whyText}</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ══════════════════════════════════════════
          PARTICIPATED IN — big pill cards
      ══════════════════════════════════════════ */}
      <section className="py-20 bg-white">
        <div className="max-w-6xl mx-auto px-6">
          <div className="flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
            <div>
              <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2">
                <Trophy size={12} className="inline mr-1 mb-0.5" />
                Events
              </p>
              <h2 className="text-3xl font-bold text-navy">Participated In</h2>
            </div>

            <div className="flex flex-wrap gap-3">
              {robot.participated.map((event, i) => (
                <div
                  key={event}
                  className="group relative overflow-hidden rounded-2xl px-6 py-4 bg-navy text-white font-bold text-sm shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 cursor-default"
                >
                  <div className="absolute inset-0 bg-crimson opacity-0 group-hover:opacity-100 transition-opacity" />
                  <span className="relative flex items-center gap-2">
                    <span className="w-5 h-5 rounded-full bg-gold text-navy text-xs font-black flex items-center justify-center flex-shrink-0">
                      {i + 1}
                    </span>
                    {event}
                  </span>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* ══════════════════════════════════════════
          TECH SPECS — dark section
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

          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            {robot.features.map((f, i) => (
              <div
                key={f.label}
                className="group relative bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/10 hover:border-gold/40 transition-all cursor-default"
              >
                <div className="text-3xl mb-4">{f.icon}</div>
                <p className="text-xs text-white/40 font-bold uppercase tracking-widest mb-1">Feature {String(i + 1).padStart(2, '0')}</p>
                <p className="text-white font-bold">{f.label}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ══════════════════════════════════════════
          FOOTER NAV — prev/next robots
      ══════════════════════════════════════════ */}
      <div className="border-t border-gray-100 bg-white">
        <div className="max-w-6xl mx-auto px-6 py-8 flex justify-between items-center">
          {robot.prev ? (
            <Link
              to={robot.prev.to}
              className="group flex items-center gap-3 text-gray-500 hover:text-crimson transition-colors"
            >
              <div className="w-9 h-9 rounded-full border border-gray-200 group-hover:border-crimson flex items-center justify-center transition-colors">
                <ArrowLeft size={16} />
              </div>
              <span className="text-sm font-medium">Previous: {robot.prev.label}</span>
            </Link>
          ) : <span />}
          {robot.next ? (
            <Link
              to={robot.next.to}
              className="group flex items-center gap-3 text-gray-500 hover:text-crimson transition-colors"
            >
              <span className="text-sm font-medium">Next: {robot.next.label}</span>
              <div className="w-9 h-9 rounded-full border border-gray-200 group-hover:border-crimson flex items-center justify-center transition-colors">
                <ArrowRight size={16} />
              </div>
            </Link>
          ) : <span />}
        </div>
      </div>

    </div>
  )
}
