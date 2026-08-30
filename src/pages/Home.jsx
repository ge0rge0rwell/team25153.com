import { lazy, Suspense, useState } from 'react'
import { Link } from 'react-router-dom'
import { ArrowRight } from 'lucide-react'
import useReducedMotion from '../lib/useReducedMotion'
import RobotCard from '../components/ui/RobotCard'
import LogoCarousel from '../components/ui/LogoCarousel'
import Reveal from '../components/motion/Reveal'
import { StaggerGroup, StaggerItem } from '../components/motion/Stagger'
import { TypewriterText, TypewriterCycle } from '../components/motion/Typewriter'
import { useCollection } from '../context/ContentContext'
import { useIsDesktop } from '../lib/useIsDesktop'

// tsparticles is a desktop-only extra — kept out of Home's bundle (which
// ships in the critical-path main chunk) via lazy() and only fetched once
// isDesktop is true.
const ParticlesBackground = lazy(() => import('../components/motion/ParticlesBackground'))

export default function Home() {
  const { robots, stats } = useCollection('home')
  const [firstWordDone, setFirstWordDone] = useState(false)
  const reducedMotion = useReducedMotion()

  const isDesktop = useIsDesktop()

  const statPhrases = (stats || []).map((s) => `${s.number} ${s.label}`)

  return (
    <div>
      {/* ── Hero ─────────────────────────────────── */}
      <section className="min-h-[88vh] flex items-center bg-gradient-to-br from-[#fdf8f7] to-white relative overflow-hidden">
        {/* Background decoration */}
        <div className="absolute top-0 right-0 w-1/2 h-full bg-crimson/3 clip-diagonal pointer-events-none" />

        {/* Ambient particle field — desktop only */}
        {isDesktop && !reducedMotion && (
          <Suspense fallback={null}>
            <ParticlesBackground />
          </Suspense>
        )}

        <div className="max-w-7xl mx-auto px-4 sm:px-6 py-10 sm:py-16 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center lg:items-start w-full">
          {/* Left – Text + Robots */}
          <div>
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-4 flex items-center gap-2">
              <span className="w-8 h-px bg-crimson inline-block" />
              FTC Team #25153
            </p>

            <h1 className="text-4xl md:text-5xl lg:text-6xl font-medium text-navy leading-tight mb-2 min-h-[2.4em] sm:min-h-0">
              <TypewriterText text="Cartesian" startDelay={150} onComplete={() => setFirstWordDone(true)} />
              <br />
              {firstWordDone && <TypewriterText text="Robotics" className="text-crimson" />}
            </h1>

            {statPhrases.length > 0 && (
              <p className="text-navy/50 text-sm font-medium mb-6 h-6">
                <TypewriterCycle phrases={statPhrases} />
              </p>
            )}

            <StaggerGroup as="div" staggerChildren={0.12} delayChildren={1.1} amount={0.3}>
              <StaggerItem as="p" className="text-navy/70 text-base leading-relaxed mb-3 max-w-lg">
                <strong>Cartesian Robotics #25153</strong> is a <strong>student-led team of over 25 students</strong>, having grown each season. We like to emphasize to the minds we touch the importance of thought and creation, inspiring our motto: <em>"I think, therefore I can."</em>
              </StaggerItem>

              <StaggerItem as="p" className="text-gray-600 text-sm leading-relaxed mb-3 max-w-lg">
                Our design process follows the philosophy of <em>"I think, therefore I can."</em> Over three years, we have established a <strong>structured design process</strong> within our team, integrating our core philosophies and each year striving towards the optimal design.
              </StaggerItem>

              <StaggerItem as="p" className="text-gray-600 text-sm leading-relaxed mb-3 max-w-lg">
                René Descartes, the philosopher we represent ourselves with, argued that he had to exist because he could think. We, recognizing that <strong>philosophy is the basis for all sciences</strong>, teach how to think, observe, and understand through hands-on STEM experience.
              </StaggerItem>

              <StaggerItem as="p" className="text-gray-600 text-sm leading-relaxed mb-8 max-w-lg">
                Our team aims to develop middle school students' skills in <strong>engineering, creativity, strategy, and teamwork</strong> while <strong>spreading STEM culture</strong> within our community. We are proud of our international achievements, but we measure our success by the <strong>people we impact</strong>.
              </StaggerItem>

              <StaggerItem className="flex flex-wrap gap-3">
                <Link to="/team" className="btn-primary">
                  Team Overview <ArrowRight size={16} />
                </Link>
              </StaggerItem>

              {/* Robot Roster */}
              <StaggerItem className="mt-12 border border-crimson/15 rounded-xl overflow-hidden grid grid-cols-3 bg-white shadow-sm">
                {robots.map((r) => (
                  <RobotCard key={r.name} {...r} />
                ))}
              </StaggerItem>
            </StaggerGroup>
          </div>

          {/* Right – Hero Image */}
          <Reveal direction="left" delay={0.2} className="flex justify-center lg:justify-end relative mt-4 lg:mt-8">
            <div className="relative">
              {/* Decorative ring */}
              <div className="absolute -inset-4 rounded-3xl border-2 border-crimson/10 rotate-3" />
              {/* Rounded-corner clip confined to this inner wrapper so it
                  doesn't clip the ring or badge outside it */}
              <div className="relative inline-block rounded-2xl overflow-hidden">
                <img
                  src="/media/hero-descartes.webp"
                  alt="Cartesian Robotics Hero"
                  className="relative block w-full max-w-sm lg:max-w-md object-cover shadow-2xl"
                  fetchPriority="high"
                  decoding="async"
                />
              </div>
              {/* Badge */}
              <div className="absolute -bottom-4 -left-4 bg-crimson text-white rounded-xl px-5 py-3 shadow-lg">
                <p className="text-xs font-bold uppercase tracking-widest">Team</p>
                <p className="text-2xl font-bold leading-none">#25153</p>
              </div>
            </div>
          </Reveal>
        </div>
      </section>

      {/* ── About Strip ───────────────────────────── */}
      <section className="py-12 md:py-20 bg-white">
        <div className="max-w-7xl mx-auto px-6">
          <StaggerGroup as="div" staggerChildren={0.15} className="max-w-3xl mx-auto text-center">
            <StaggerItem as="p" className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-3">Our Mission</StaggerItem>
            <StaggerItem as="h2" className="text-3xl font-medium text-navy mb-6">
              Not Just Building Robots
            </StaggerItem>
            <StaggerItem as="p" className="text-gray-600 leading-relaxed mb-4">
              Our team aims to develop middle school students' skills in <strong>engineering, creativity, strategy, and teamwork</strong> while simultaneously <strong>spreading STEM culture</strong> within our community.
            </StaggerItem>
            <StaggerItem as="p" className="text-gray-600 leading-relaxed mb-4">
              We take pride in our national and international achievements; however, we see our true success in the <strong>young minds we inspire</strong> and the <strong>STEM ecosystem</strong> we cultivate.
            </StaggerItem>
            <StaggerItem as="p" className="text-gray-600 leading-relaxed">
              For us, robotics is not just about building robots—it is about <strong>thinking, producing, and inspiring</strong>.
            </StaggerItem>
          </StaggerGroup>
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
