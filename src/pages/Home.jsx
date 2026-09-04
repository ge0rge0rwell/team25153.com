import { lazy, Suspense } from 'react'
import { Link } from 'react-router-dom'
import { ArrowRight } from 'lucide-react'
import useReducedMotion from '../lib/useReducedMotion'
import RobotCard from '../components/ui/RobotCard'
import LogoCarousel from '../components/ui/LogoCarousel'
import Reveal from '../components/motion/Reveal'
import { StaggerGroup, StaggerItem } from '../components/motion/Stagger'
import { TypewriterHeadline, TypewriterCycle } from '../components/motion/Typewriter'
import { useCollection } from '../context/ContentContext'
import { useIsDesktop } from '../lib/useIsDesktop'

// tsparticles is a desktop-only extra — kept out of Home's bundle (which
// ships in the critical-path main chunk) via lazy() and only fetched once
// isDesktop is true.
const ParticlesBackground = lazy(() => import('../components/motion/ParticlesBackground'))

// Cycled by the hero headline. `lead` renders navy, `accent` crimson.
const HERO_PHRASES = [
  { lead: 'Cartesian', accent: 'Robotics' },
  { lead: 'FTC Team', accent: '#25153' },
  { lead: 'I think,', accent: 'therefore I can' },
]

// The four L-shaped brackets on the Descartes frame, borrowed from the
// registration marks on an engineering drawing.
function RegistrationMarks() {
  const corners = [
    'top-3 left-3 border-t-2 border-l-2',
    'top-3 right-3 border-t-2 border-r-2',
    'bottom-3 left-3 border-b-2 border-l-2',
    'bottom-3 right-3 border-b-2 border-r-2',
  ]
  return (
    <>
      {corners.map((c) => (
        <div
          key={c}
          aria-hidden="true"
          className={`absolute w-4 h-4 border-crimson/40 group-hover:border-crimson transition-colors duration-200 ${c}`}
        />
      ))}
    </>
  )
}

export default function Home() {
  const { robots, stats } = useCollection('home')
  const reducedMotion = useReducedMotion()

  const isDesktop = useIsDesktop()

  const statPhrases = (stats || []).map((s) => `${s.number} ${s.label}`)

  return (
    <div className="bg-[#fcfbf9]">
      {/* ── Hero ─────────────────────────────────── */}
      <section className="relative bg-gradient-to-b from-white via-[#fafbfc] to-white border-b border-gray-200/70 overflow-hidden">
        {/* Coordinate grid — the site's signature texture */}
        <div className="absolute inset-0 cartesian-grid pointer-events-none opacity-80" aria-hidden="true" />

        {/* Faint x/y axes, echoing a plotted graph */}
        <div className="absolute top-0 left-12 h-full w-px bg-gradient-to-b from-transparent via-crimson/20 to-transparent pointer-events-none hidden lg:block" aria-hidden="true" />
        <div className="absolute top-28 left-0 w-full h-px bg-gradient-to-r from-transparent via-navy/15 to-transparent pointer-events-none hidden lg:block" aria-hidden="true" />

        {/* Ambient particle field — desktop only */}
        {isDesktop && !reducedMotion && (
          <Suspense fallback={null}>
            <ParticlesBackground />
          </Suspense>
        )}

        <div className="relative z-10 max-w-[1360px] mx-auto px-5 sm:px-8 pt-8 pb-16 sm:py-16 lg:py-20">
          <div className="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">

            {/* Left — headline and copy */}
            <div className="lg:col-span-7">
              <div className="flex items-center gap-3 mb-4">
                <span className="w-10 h-[2.5px] bg-crimson inline-block rounded-full" />
                <span className="eyebrow">FTC Team #25153</span>
              </div>

              {/* Fixed min-height: the three phrases are different lengths and
                  wrap to different line counts, so without it the whole hero
                  shifts vertically every few seconds as they cycle. */}
              <div className="flex items-center min-h-[140px] sm:min-h-[180px] lg:min-h-[195px] mb-2">
                <h1 className="font-display font-bold tracking-tight leading-[1.05] text-[44px] sm:text-[64px] lg:text-[72px] xl:text-[80px]">
                  <TypewriterHeadline
                    phrases={HERO_PHRASES}
                    leadClassName="text-navy"
                    accentClassName="text-crimson"
                  />
                </h1>
              </div>

              {statPhrases.length > 0 && (
                <p className="font-mono text-xs text-gray-500 mb-6 h-5">
                  <TypewriterCycle phrases={statPhrases} />
                </p>
              )}

              <StaggerGroup as="div" staggerChildren={0.12} delayChildren={1.1} amount={0.3}>
                <StaggerItem as="p" className="text-gray-700 text-[15px] sm:text-base leading-[1.72] mb-4 max-w-2xl">
                  <strong className="font-bold text-navy">Cartesian Robotics #25153</strong> is a <strong className="font-bold text-navy">student-led team of over 25 students</strong>, having grown each season. We like to emphasize to the minds we touch the importance of thought and creation, inspiring our motto: <em className="italic text-navy">"I think, therefore I can."</em>
                </StaggerItem>

                <StaggerItem as="p" className="text-gray-600 text-[15px] sm:text-base leading-[1.72] mb-4 max-w-2xl">
                  Our design process follows the philosophy of <em className="italic">"I think, therefore I can."</em> Over three years, we have established a <strong className="font-bold text-navy">structured design process</strong> within our team, integrating our core philosophies and each year striving towards the optimal design.
                </StaggerItem>

                <StaggerItem as="p" className="text-gray-600 text-[15px] sm:text-base leading-[1.72] mb-4 max-w-2xl">
                  René Descartes, the philosopher we represent ourselves with, argued that he had to exist because he could think. We, recognizing that <strong className="font-bold text-navy">philosophy is the basis for all sciences</strong>, teach how to think, observe, and understand through hands-on STEM experience.
                </StaggerItem>

                <StaggerItem as="p" className="text-gray-600 text-[15px] sm:text-base leading-[1.72] mb-8 max-w-2xl">
                  Our team aims to develop middle school students' skills in <strong className="font-bold text-navy">engineering, creativity, strategy, and teamwork</strong> while <strong className="font-bold text-navy">spreading STEM culture</strong> within our community. We are proud of our international achievements, but we measure our success by the <strong className="font-bold text-navy">people we impact</strong>.
                </StaggerItem>

                <StaggerItem className="flex flex-wrap gap-3">
                  <Link to="/awards" className="btn-primary group">
                    Team Overview
                    <ArrowRight size={16} className="transition-transform duration-200 group-hover:translate-x-1" />
                  </Link>
                </StaggerItem>

                {/* Robot roster */}
                <StaggerItem className="mt-12 border border-crimson/15 rounded-xl overflow-hidden grid grid-cols-3 bg-white shadow-sm">
                  {robots.map((r) => (
                    <RobotCard key={r.name} {...r} />
                  ))}
                </StaggerItem>
              </StaggerGroup>
            </div>

            {/* Right — Descartes in an engineering frame */}
            <Reveal direction="left" delay={0.2} className="lg:col-span-5 flex justify-center lg:sticky lg:top-28">
              <div className="relative w-full max-w-[420px] aspect-[0.88] select-none group">
                {/* Rotated accent border sitting behind the frame */}
                <div
                  aria-hidden="true"
                  className="absolute inset-0 rounded-[32px] border-2 border-[#f3dedb] rotate-3 bg-white/40 pointer-events-none transition-transform duration-300 group-hover:scale-[1.01]"
                />

                <div className="relative w-full h-full rounded-[28px] border border-gray-200/90 bg-white p-6 sm:p-7 flex items-center justify-center overflow-hidden shadow-[0_20px_45px_-12px_rgba(0,33,71,0.12)] group-hover:shadow-[0_25px_50px_-10px_rgba(131,42,34,0.16)] transition-all duration-300 group-hover:-translate-y-1">
                  <div className="absolute inset-0 cartesian-grid-dense pointer-events-none opacity-40" aria-hidden="true" />
                  <RegistrationMarks />

                  <img
                    src="/media/hero-descartes.webp"
                    alt="René Descartes, the philosopher the team takes its name and motto from"
                    className="relative w-full h-full object-contain max-h-[360px] transition-transform duration-500 ease-out group-hover:scale-[1.04] drop-shadow-sm"
                    fetchPriority="high"
                    decoding="async"
                  />

                  {/* Team badge */}
                  <div className="absolute bottom-4 left-4 sm:bottom-5 sm:left-5 bg-crimson text-white rounded-2xl px-5 py-2.5 shadow-xl flex flex-col items-start border border-white/20 transition-transform duration-200 group-hover:scale-105">
                    <span className="flex items-center gap-1.5">
                      <span className={`w-1.5 h-1.5 rounded-full bg-gold ${reducedMotion ? '' : 'animate-pulse'}`} />
                      <span className="font-mono text-[9px] tracking-[0.25em] font-bold text-white/90 uppercase">Team</span>
                    </span>
                    <span className="font-display text-2xl sm:text-3xl font-bold tracking-wider leading-none mt-0.5">#25153</span>
                  </div>
                </div>
              </div>
            </Reveal>
          </div>
        </div>
      </section>

      {/* ── Mission ──────────────────────────────── */}
      <section className="py-20 lg:py-28 bg-white">
        <div className="max-w-3xl mx-auto px-6 text-center">
          <StaggerGroup as="div" staggerChildren={0.15}>
            <StaggerItem as="p" className="eyebrow tracking-[0.3em] mb-3">Our Mission</StaggerItem>
            <StaggerItem
              as="h2"
              className="font-display text-3xl sm:text-4xl lg:text-[42px] font-bold text-navy tracking-tight mb-10"
            >
              Not Just Building Robots
            </StaggerItem>
            <StaggerItem as="p" className="text-gray-600 leading-[1.8] mb-6">
              Our team aims to develop middle school students' skills in <strong className="font-bold text-navy">engineering, creativity, strategy, and teamwork</strong> while simultaneously <strong className="font-bold text-navy">spreading STEM culture</strong> within our community.
            </StaggerItem>
            <StaggerItem as="p" className="text-gray-600 leading-[1.8] mb-6">
              We take pride in our national and international achievements; however, we see our true success in the <strong className="font-bold text-navy">young minds we inspire</strong> and the <strong className="font-bold text-navy">STEM ecosystem</strong> we cultivate.
            </StaggerItem>
            <StaggerItem as="p" className="text-gray-600 leading-[1.8]">
              For us, robotics is not just about building robots—it is about <strong className="font-bold text-navy">thinking, producing, and inspiring</strong>.
            </StaggerItem>
          </StaggerGroup>
        </div>
      </section>

      {/* ── Sponsors ─────────────────────────────── */}
      <LogoCarousel />
    </div>
  )
}
