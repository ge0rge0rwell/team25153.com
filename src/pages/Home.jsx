import { Link } from 'react-router-dom'
import { ArrowRight, ChevronRight } from 'lucide-react'
import RobotCard from '../components/ui/RobotCard'
import LogoCarousel from '../components/ui/LogoCarousel'

const robots = [
  {
    year: '2025 – 26',
    name: 'Cerberon',
    competition: 'FTC Decode',
    image: 'https://team25153.com/wp-content/uploads/2026/04/logo-removebg-preview-300x300.png',
    link: '/robots/cerberon',
  },
  {
    year: '2024 – 25',
    name: 'HILDA',
    competition: 'FTC Into The Deep',
    image: 'https://team25153.com/wp-content/uploads/2026/04/Screenshot_2026-04-03_at_17.28.40-removebg-preview-300x247.png',
    link: '/robots/hilda',
  },
  {
    year: '2023 – 24',
    name: 'X & Y',
    competition: 'FTC Centerstage',
    image: 'https://team25153.com/wp-content/uploads/2026/04/Adsiz-tasarim-1-300x236.png',
    link: '/robots/centerstage',
    blendMode: true,
  },
]

const stats = [
  { number: '3+', label: 'FTC Seasons' },
  { number: '25153', label: 'Team Number' },
  { number: '10+', label: 'Awards Won' },
  { number: '2022', label: 'Founded' },
]

export default function Home() {
  return (
    <div>
      {/* ── Hero ─────────────────────────────────── */}
      <section className="min-h-[88vh] flex items-center bg-gradient-to-br from-[#fdf8f7] to-white relative overflow-hidden">
        {/* Background decoration */}
        <div className="absolute top-0 right-0 w-1/2 h-full bg-crimson/3 clip-diagonal pointer-events-none" />
        <div className="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-gold/10 blur-3xl pointer-events-none" />

        <div className="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center w-full">
          {/* Left – Text + Robots */}
          <div className="animate-fade-up">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-4 flex items-center gap-2">
              <span className="w-8 h-px bg-crimson inline-block" />
              FTC Team #25153
            </p>

            <h1 className="text-4xl md:text-5xl lg:text-6xl font-medium text-navy leading-tight mb-4">
              Cartesian<br />
              <span className="text-crimson">Robotics</span>
            </h1>

            <p className="text-navy/70 text-base leading-relaxed mb-3 max-w-lg">
              <strong>Cartesian Robotics #25153</strong> is a <strong>student-led</strong> FTC robotics team that believes in the power of thinking and creating.
            </p>

            <p className="text-crimson font-semibold italic mb-6">
              "I think, therefore I can."
            </p>

            <p className="text-gray-600 text-sm leading-relaxed mb-8 max-w-lg">
              Each season, we analyze the game to develop <strong>rational strategies</strong>, make <strong>data-driven design</strong> decisions, and build <strong>high-performance robots</strong>.
            </p>

            <div className="flex flex-wrap gap-3">
              <Link to="/team" className="btn-primary">
                Team Overview <ArrowRight size={16} />
              </Link>
              <Link to="/portfolio/age" className="btn-outline">
                Our Portfolio
              </Link>
            </div>

            {/* Robot Roster */}
            <div className="mt-12 border border-crimson/15 rounded-xl overflow-hidden grid grid-cols-3 bg-white shadow-sm">
              {robots.map((r) => (
                <RobotCard key={r.name} {...r} />
              ))}
            </div>
          </div>

          {/* Right – Hero Image */}
          <div className="flex justify-center lg:justify-end relative">
            <div className="relative">
              {/* Decorative ring */}
              <div className="absolute -inset-4 rounded-3xl border-2 border-crimson/10 rotate-3" />
              <img
                src="https://team25153.com/wp-content/uploads/2025/12/I-9.png"
                alt="Cartesian Robotics Hero"
                className="relative w-full max-w-sm lg:max-w-md rounded-2xl object-cover shadow-2xl"
              />
              {/* Badge */}
              <div className="absolute -bottom-4 -left-4 bg-crimson text-white rounded-xl px-5 py-3 shadow-lg">
                <p className="text-xs font-bold uppercase tracking-widest">Team</p>
                <p className="text-2xl font-bold leading-none">#25153</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ── Stats Bar ─────────────────────────────── */}
      <section className="bg-navy text-white py-8">
        <div className="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-6">
          {stats.map((s) => (
            <div key={s.label} className="text-center">
              <div className="text-3xl font-bold text-gold">{s.number}</div>
              <div className="text-white/60 text-xs uppercase tracking-wider mt-1">{s.label}</div>
            </div>
          ))}
        </div>
      </section>

      {/* ── About Strip ───────────────────────────── */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-6">
          <div className="max-w-3xl mx-auto text-center">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-3">Our Mission</p>
            <h2 className="text-3xl font-medium text-navy mb-6">Not Just Building Robots</h2>
            <p className="text-gray-600 leading-relaxed mb-4">
              Our team aims to develop middle school students' skills in <strong>engineering, creativity, strategy, and teamwork</strong> while simultaneously <strong>spreading STEM culture</strong> within our community.
            </p>
            <p className="text-gray-600 leading-relaxed">
              We take pride in our national and international achievements; however, we see our true success in the <strong>young minds we inspire</strong> and the <strong>STEM ecosystem</strong> we cultivate.
            </p>
          </div>
        </div>
      </section>

      {/* ── Divider ───────────────────────────────── */}
      <div className="max-w-7xl mx-auto px-6">
        <hr className="border-gray-100" />
      </div>

      {/* ── Sponsors / Partners ───────────────────── */}
      <section className="py-16 bg-white">
        <div className="max-w-7xl mx-auto px-6">
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
            {/* Left flanking image */}
            <div className="hidden md:block">
              <img
                src="https://team25153.com/wp-content/uploads/elementor/thumbs/Adsiz-tasarim-2-rlbl2w9lqtoh6fwkre762qv3rs8lmgfqy1qjpiuyjc.png"
                alt="Team"
                className="rounded-xl w-full object-cover max-h-40 object-contain"
              />
            </div>

            {/* Center carousel */}
            <div>
              <p className="text-center text-xs font-bold uppercase tracking-[0.25em] text-crimson mb-4">Our Partners</p>
              <LogoCarousel />
            </div>

            {/* Right flanking image */}
            <div className="hidden md:block">
              <img
                src="https://team25153.com/wp-content/uploads/elementor/thumbs/tr04vy7v19cg0s004-rlbja71j2lckmmnij8ejqshphfj3d952hfemymptyy.jpg"
                alt="Competition"
                className="rounded-xl w-full object-cover max-h-40 object-cover"
              />
            </div>
          </div>
        </div>
      </section>

      {/* ── CTA ───────────────────────────────────── */}
      <section className="py-20 bg-crimson-gradient bg-crimson text-white relative overflow-hidden">
        <div className="absolute inset-0 opacity-10"
          style={{
            backgroundImage: 'radial-gradient(circle, rgba(255,255,255,0.3) 1px, transparent 1px)',
            backgroundSize: '28px 28px'
          }}
        />
        <div className="relative max-w-3xl mx-auto px-6 text-center">
          <h2 className="text-3xl font-medium mb-4">Want to Support Us?</h2>
          <p className="text-white/80 mb-8 leading-relaxed">
            We're looking for sponsors and partners who share our passion for STEM education and innovation.
          </p>
          <div className="flex flex-wrap justify-center gap-4">
            <Link to="/sponsorship" className="bg-white text-crimson px-8 py-3 rounded-full font-medium uppercase tracking-wide text-sm hover:bg-gold hover:text-white transition-colors duration-300">
              Become a Sponsor
            </Link>
            <Link to="/contact" className="border-2 border-white text-white px-8 py-3 rounded-full font-medium uppercase tracking-wide text-sm hover:bg-white hover:text-crimson transition-colors duration-300">
              Contact Us
            </Link>
          </div>
        </div>
      </section>
    </div>
  )
}
