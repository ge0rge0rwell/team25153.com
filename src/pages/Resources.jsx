import PageBanner from '../components/ui/PageBanner'
import { BookOpen, Code2, Box, Library } from 'lucide-react'
import { Link } from 'react-router-dom'
import resourcesData from '../content/resources.json'

const iconMap = { BookOpen, Code2, Box, Library }

const resources = resourcesData.resources

const tagColors = {
  Guide: 'bg-crimson/10 text-crimson',
  Course: 'bg-navy/10 text-navy-mid',
  Reference: 'bg-gold/20 text-yellow-700',
}

export default function Resources() {
  return (
    <div>
      <PageBanner title="Resources" breadcrumbs={[{ label: 'Resources' }]} />

      <section className="py-20 bg-white">
        <div className="max-w-5xl mx-auto px-6">
          <div className="text-center mb-14">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2">Knowledge Base</p>
            <h2 className="text-3xl font-medium text-navy mb-2">Resources for FTC Teams</h2>
            <div className="w-10 h-0.5 bg-gold mx-auto mb-4" />
            <p className="text-gray-500 text-sm max-w-xl mx-auto">
              We believe in open knowledge. Everything we've learned is here for you to use, adapt, and build upon.
            </p>
          </div>

          <div className="grid grid-cols-1 sm:grid-cols-2 gap-7">
            {resources.map((r) => {
              const Icon = iconMap[r.icon] || BookOpen
              return (
              <Link
                key={r.slug}
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
              )
            })}
          </div>
        </div>
      </section>
    </div>
  )
}
