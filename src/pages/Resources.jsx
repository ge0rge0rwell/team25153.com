import PageBanner from '../components/ui/PageBanner'
import { BookOpen, Code2, Box, Library, ExternalLink } from 'lucide-react'
import { Link } from 'react-router-dom'
import Reveal from '../components/motion/Reveal'
import { StaggerGroup, StaggerItem } from '../components/motion/Stagger'
import { useCollection } from '../context/ContentContext'
import resourceLinks from '../content/resourceLinks.json'

const iconMap = { BookOpen, Code2, Box, Library }

const tagColors = {
  Guide: 'bg-crimson/10 text-crimson',
  Course: 'bg-navy/10 text-navy-mid',
  Reference: 'bg-gold/20 text-yellow-700',
}

export default function Resources() {
  const resources = useCollection('resources').resources
  return (
    <div>
      <PageBanner title="Resources" breadcrumbs={[{ label: 'Resources' }]} />

      <section className="py-12 md:py-20 bg-white">
        <div className="max-w-5xl mx-auto px-6">
          <Reveal className="text-center mb-14">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2">Knowledge Base</p>
            <h2 className="text-3xl font-medium text-navy mb-2">Resources for FTC Teams</h2>
            <div className="w-10 h-0.5 bg-gold mx-auto mb-4" />
            <p className="text-gray-500 text-sm max-w-xl mx-auto">
              We believe in open knowledge. Everything we've learned is here for you to use, adapt, and build upon.
            </p>
          </Reveal>

          <StaggerGroup as="div" staggerChildren={0.1} className="grid grid-cols-1 sm:grid-cols-2 gap-7">
            {resources.map((r) => {
              const Icon = iconMap[r.icon] || BookOpen
              return (
              <StaggerItem key={r.slug}>
                <Link
                  to={`/resources/${r.slug}`}
                  className="group card border border-gray-100 p-7 flex gap-5"
                >
                  <div className="w-12 h-12 rounded-xl bg-crimson/10 text-crimson flex items-center justify-center flex-shrink-0 group-hover:bg-crimson group-hover:text-white transition-colors duration-300">
                    <Icon size={28} />
                  </div>
                  <div>
                    <div className="flex items-center gap-2 mb-2">
                      <h3 className="font-semibold text-navy group-hover:text-crimson transition-colors">{r.title}</h3>
                      <span className={`text-[10px] font-bold uppercase px-2 py-0.5 rounded-full ${tagColors[r.tag]}`}>{r.tag}</span>
                    </div>
                    <p className="text-gray-500 text-sm leading-relaxed">{r.description}</p>
                  </div>
                </Link>
              </StaggerItem>
              )
            })}
          </StaggerGroup>
        </div>
      </section>

      <section className="py-12 md:py-20 bg-gray-50">
        <div className="max-w-6xl mx-auto px-6">
          <Reveal className="text-center mb-14">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2">External Links</p>
            <h2 className="text-3xl font-medium text-navy mb-2">FTC Resource Directory</h2>
            <div className="w-10 h-0.5 bg-gold mx-auto mb-4" />
            <p className="text-gray-500 text-sm max-w-2xl mx-auto">
              A curated set of official FIRST resources, programming references, CAD and hardware libraries, and
              community tools we point new members to. Treat the official FIRST documentation as the authority for
              rules, software, and inspections — community links are great for learning but can drift out of date.
            </p>
          </Reveal>

          <div className="space-y-12">
            {resourceLinks.categories.map((cat) => (
              <div key={cat.title}>
                <h3 className="text-lg font-semibold text-navy mb-5 pb-2 border-b border-gray-200">{cat.title}</h3>
                <StaggerGroup as="div" staggerChildren={0.05} className="grid grid-cols-1 md:grid-cols-2 gap-4">
                  {cat.items.map((item) => (
                    <StaggerItem key={item.url + item.title}>
                      <a
                        href={item.url}
                        target="_blank"
                        rel="noopener noreferrer"
                        className="group card border border-gray-100 bg-white p-5 flex flex-col h-full"
                      >
                        <div className="flex items-start justify-between gap-2 mb-1.5">
                          <h4 className="font-semibold text-navy text-sm group-hover:text-crimson transition-colors">{item.title}</h4>
                          <ExternalLink size={14} className="text-gray-300 group-hover:text-crimson transition-colors flex-shrink-0 mt-0.5" />
                        </div>
                        <p className="text-gray-500 text-xs leading-relaxed">{item.description}</p>
                      </a>
                    </StaggerItem>
                  ))}
                </StaggerGroup>
              </div>
            ))}
          </div>
        </div>
      </section>
    </div>
  )
}
