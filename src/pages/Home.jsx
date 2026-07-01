import { Link } from 'react-router-dom'
import { ArrowRight, ChevronRight } from 'lucide-react'
import RobotCard from '../components/ui/RobotCard'
import LogoCarousel from '../components/ui/LogoCarousel'
import { useCollection } from '../context/ContentContext'

export default function Home() {
  const { robots } = useCollection('home')
  return (
    <div>
      {/* ── Hero ─────────────────────────────────── */}
      <section className="min-h-[88vh] flex items-center bg-gradient-to-br from-[#fdf8f7] to-white relative overflow-hidden">
        {/* Background decoration */}
        <div className="absolute top-0 right-0 w-1/2 h-full bg-crimson/3 clip-diagonal pointer-events-none" />
        <div className="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-gold/10 blur-3xl pointer-events-none" />

        <div className="max-w-7xl mx-auto px-4 sm:px-6 py-10 sm:py-16 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center w-full">
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
              <strong>Cartesian Robotics #25153</strong> is a <strong>student-led team of over 25 students</strong>, having grown each season. We like to emphasize to the minds we touch the importance of thought and creation, inspiring our motto: <em>"I think, therefore I can."</em>
            </p>

            <p className="text-gray-600 text-sm leading-relaxed mb-3 max-w-lg">
              Our design process follows the philosophy of <em>"I think, therefore I can."</em> Over three years, we have established a <strong>structured design process</strong> within our team, integrating our core philosophies and each year striving towards the optimal design.
            </p>

            <p className="text-gray-600 text-sm leading-relaxed mb-3 max-w-lg">
              René Descartes, the philosopher we represent ourselves with, argued that he had to exist because he could think. We, recognizing that <strong>philosophy is the basis for all sciences</strong>, teach how to think, observe, and understand through hands-on STEM experience.
            </p>

            <p className="text-gray-600 text-sm leading-relaxed mb-8 max-w-lg">
              Our team aims to develop middle school students' skills in <strong>engineering, creativity, strategy, and teamwork</strong> while <strong>spreading STEM culture</strong> within our community. We are proud of our international achievements, but we measure our success by the <strong>people we impact</strong>.
            </p>

            <div className="flex flex-wrap gap-3">
              <Link to="/team" className="btn-primary">
                Team Overview <ArrowRight size={16} />
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
          <div className="flex justify-center lg:justify-end relative lg:-mt-72 mt-4 lg:mt-0">
            <div className="relative">
              {/* Decorative ring */}
              <div className="absolute -inset-4 rounded-3xl border-2 border-crimson/10 rotate-3" />
              <img
                src="https://team25153.com/wp-content/uploads/2025/12/I-9.png"
                alt="Cartesian Robotics Hero"
                className="relative w-full max-w-sm lg:max-w-md rounded-2xl object-cover shadow-2xl"
                fetchPriority="high"
                decoding="async"
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

      {/* ── About Strip ───────────────────────────── */}
      <section className="py-12 md:py-20 bg-white">
        <div className="max-w-7xl mx-auto px-6">
          <div className="max-w-3xl mx-auto text-center">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-3">Our Mission</p>
            <h2 className="text-3xl font-medium text-navy mb-6">Not Just Building Robots</h2>
            <p className="text-gray-600 leading-relaxed mb-4">
              Our team aims to develop middle school students' skills in <strong>engineering, creativity, strategy, and teamwork</strong> while simultaneously <strong>spreading STEM culture</strong> within our community.
            </p>
            <p className="text-gray-600 leading-relaxed mb-4">
              We take pride in our national and international achievements; however, we see our true success in the <strong>young minds we inspire</strong> and the <strong>STEM ecosystem</strong> we cultivate.
            </p>
            <p className="text-gray-600 leading-relaxed">
              For us, robotics is not just about building robots—it is about <strong>thinking, producing, and inspiring</strong>.
            </p>
          </div>
        </div>
      </section>

      {/* ── Divider ───────────────────────────────── */}
      <div className="max-w-7xl mx-auto px-6">
        <hr className="border-gray-100" />
      </div>

      {/* ── Sponsors / Partners ───────────────────── */}
      <LogoCarousel />
    </div>
  )
}
