import PageBanner from '../components/ui/PageBanner'
import { BookOpen, Code2, Box, Library } from 'lucide-react'
import { Link } from 'react-router-dom'
import Reveal from '../components/motion/Reveal'
import { StaggerGroup, StaggerItem } from '../components/motion/Stagger'
import { useCollection } from '../context/ContentContext'

const iconMap = { BookOpen, Code2, Box, Library }

// The badge encodes what kind of resource it is, so the three keep clearly
// distinct tints rather than being decorative variations of one colour.
const tagColors = {
  Guide: 'bg-crimson-100 text-crimson',
  Course: 'bg-navy-50 text-navy',
  Reference: 'bg-gold/20 text-gold-deep',
}

export default function Resources() {
  const resources = useCollection('resources').resources
  return (
    <div>
      <PageBanner title="Resources" breadcrumbs={[{ label: 'Resources' }]} />

      <section className="relative py-12 md:py-20 bg-white overflow-hidden">
        {/* Signature coordinate grid, same texture as the home hero */}
        <div className="absolute inset-0 cartesian-grid pointer-events-none" aria-hidden="true" />

        <div className="relative max-w-6xl mx-auto px-6">
          <Reveal className="text-center mb-14">
            <p className="eyebrow tracking-[0.3em] mb-3">Knowledge Base</p>
            <h2 className="font-display text-3xl sm:text-4xl lg:text-[42px] font-bold text-navy tracking-tight mb-4">
              Resources for FTC Teams
            </h2>
            <div className="w-10 h-0.5 bg-gold mx-auto mb-5" />
            <p className="text-gray-500 max-w-xl mx-auto leading-relaxed">
              We believe in open knowledge. Everything we've learned is here for you to use, adapt, and build upon.
            </p>
          </Reveal>

          <StaggerGroup as="div" staggerChildren={0.1} className="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            {resources.map((r) => {
              const Icon = iconMap[r.icon] || BookOpen
              return (
                <StaggerItem key={r.slug}>
                  <Link
                    to={`/resources/${r.slug}`}
                    className="group h-full bg-white rounded-2xl border border-gray-200 p-7 sm:p-8 flex gap-5 sm:gap-6 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:border-crimson/30"
                  >
                    <div className="w-14 h-14 rounded-2xl bg-crimson-100 text-crimson flex items-center justify-center flex-shrink-0 transition-colors duration-300 group-hover:bg-crimson group-hover:text-white">
                      <Icon size={26} />
                    </div>
                    <div className="min-w-0">
                      <div className="flex flex-wrap items-center gap-x-3 gap-y-2 mb-3">
                        <h3 className="font-display text-xl sm:text-2xl font-bold text-navy leading-none transition-colors group-hover:text-crimson">
                          {r.title}
                        </h3>
                        <span
                          className={`font-mono text-[10px] font-bold uppercase tracking-[0.12em] px-2.5 py-1 rounded-full ${tagColors[r.tag]}`}
                        >
                          {r.tag}
                        </span>
                      </div>
                      <p className="text-gray-500 text-[15px] leading-relaxed">{r.description}</p>
                    </div>
                  </Link>
                </StaggerItem>
              )
            })}
          </StaggerGroup>
        </div>
      </section>
    </div>
  )
}
