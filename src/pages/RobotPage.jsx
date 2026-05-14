import { useParams } from 'react-router-dom'
import PageBanner from '../components/ui/PageBanner'
import { Link } from 'react-router-dom'
import { ArrowRight } from 'lucide-react'

const robotData = {
  cerberon: {
    name: 'Cerberon',
    year: '2025 – 26',
    competition: 'FTC Decode',
    tagline: 'The guardian of the field.',
    description: `Cerberon is our most advanced robot to date, designed for the 2025–26 FTC Decode season. Built with precision engineering and a deep understanding of the game, Cerberon combines speed, accuracy, and reliability to compete at the highest level.`,
    features: ['High-speed intake mechanism', 'Precise autonomous routines', 'Robust climbing system', 'Modular chassis design'],
    image: 'https://team25153.com/wp-content/uploads/2026/04/logo-removebg-preview-300x300.png',
    prev: { label: 'HILDA', to: '/robots/hilda' },
  },
  hilda: {
    name: 'HILDA',
    year: '2024 – 25',
    competition: 'FTC Into The Deep',
    tagline: 'Into the deep, beyond limits.',
    description: `HILDA was built for the 2024–25 FTC Into The Deep season. With an innovative arm and intake system designed for submersible game pieces, HILDA demonstrated exceptional performance throughout the season.`,
    features: ['Submersible intake arm', 'Advanced sensor integration', 'Autonomous path planning', 'Lightweight carbon fiber frame'],
    image: 'https://team25153.com/wp-content/uploads/2026/04/Screenshot_2026-04-03_at_17.28.40-removebg-preview-300x247.png',
    prev: { label: 'X & Y', to: '/robots/centerstage' },
    next: { label: 'Cerberon', to: '/robots/cerberon' },
  },
  centerstage: {
    name: 'X & Y',
    year: '2023 – 24',
    competition: 'FTC Centerstage',
    tagline: 'Precision on the center stage.',
    description: `X & Y was our breakthrough robot for the 2023–24 FTC Centerstage season. Named after the Cartesian coordinate axes, it embodies our team's identity through its precise, coordinate-based movement and strategic gameplay.`,
    features: ['Coordinate-based movement system', 'Backdrop pixel placer', 'Drone launcher mechanism', 'Reliable field navigation'],
    image: 'https://team25153.com/wp-content/uploads/2026/04/Adsiz-tasarim-1-300x236.png',
    next: { label: 'HILDA', to: '/robots/hilda' },
  },
}

export default function RobotPage() {
  const { slug } = useParams()
  const robot = robotData[slug]

  if (!robot) return (
    <div className="min-h-screen flex items-center justify-center">
      <div className="text-center">
        <h2 className="text-2xl font-medium text-navy mb-3">Robot not found</h2>
        <Link to="/" className="btn-primary">Go Home</Link>
      </div>
    </div>
  )

  return (
    <div>
      <PageBanner
        title={robot.name}
        breadcrumbs={[
          { label: 'Team', to: '/team' },
          { label: 'Our Robots' },
          { label: robot.name },
        ]}
      />

      <section className="py-20 bg-white">
        <div className="max-w-6xl mx-auto px-6">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {/* Robot Image */}
            <div className="flex justify-center">
              <div className="relative">
                <div className="absolute -inset-8 rounded-full bg-crimson/5" />
                <div className="absolute -inset-4 rounded-full bg-crimson/5" />
                <img
                  src={robot.image}
                  alt={robot.name}
                  className="relative w-72 h-72 object-contain drop-shadow-2xl mix-blend-multiply"
                />
              </div>
            </div>

            {/* Info */}
            <div>
              <span className="font-mono text-xs tracking-[0.2em] text-crimson uppercase">{robot.year} · {robot.competition}</span>
              <h1 className="text-5xl font-bold text-navy mt-2 mb-2" style={{ fontFamily: 'Rajdhani, sans-serif' }}>{robot.name}</h1>
              <p className="text-crimson italic font-medium mb-6">{robot.tagline}</p>
              <div className="w-10 h-0.5 bg-gold mb-6" />
              <p className="text-gray-600 leading-relaxed mb-8">{robot.description}</p>

              <h3 className="text-navy font-semibold mb-4 uppercase tracking-wider text-xs">Key Features</h3>
              <ul className="space-y-3">
                {robot.features.map((f) => (
                  <li key={f} className="flex items-center gap-3 text-sm text-gray-700">
                    <span className="w-2 h-2 rounded-full bg-crimson flex-shrink-0" />
                    {f}
                  </li>
                ))}
              </ul>
            </div>
          </div>

          {/* Prev / Next */}
          <div className="mt-16 flex justify-between border-t border-gray-100 pt-8">
            {robot.prev ? (
              <Link to={robot.prev.to} className="flex items-center gap-2 text-sm text-gray-500 hover:text-crimson transition-colors group">
                <ArrowRight size={16} className="rotate-180 group-hover:-translate-x-1 transition-transform" />
                Previous: {robot.prev.label}
              </Link>
            ) : <span />}
            {robot.next ? (
              <Link to={robot.next.to} className="flex items-center gap-2 text-sm text-gray-500 hover:text-crimson transition-colors group">
                Next: {robot.next.label}
                <ArrowRight size={16} className="group-hover:translate-x-1 transition-transform" />
              </Link>
            ) : <span />}
          </div>
        </div>
      </section>
    </div>
  )
}
