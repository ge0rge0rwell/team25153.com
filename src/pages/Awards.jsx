import PageBanner from '../components/ui/PageBanner'
import { Trophy } from 'lucide-react'

const seasons = [
  {
    id: 'decode',
    label: 'Decode 2025–26',
    awards: [
      { title: 'Think Award', event: 'Turkey League', color: 'gold' },
      { title: 'Motivate Award', event: 'Regional Championship', color: 'crimson' },
    ],
  },
  {
    id: 'into-the-deep',
    label: 'Into The Deep 2024–25',
    awards: [
      { title: 'Inspire Award', event: 'Turkey Qualifiers', color: 'gold' },
      { title: 'Connect Award', event: 'Regional Championship', color: 'crimson' },
      { title: 'Control Award', event: 'National League', color: 'navy' },
    ],
  },
  {
    id: 'centerstage',
    label: 'Centerstage 2023–24',
    awards: [
      { title: 'Think Award', event: 'Turkey Qualifiers', color: 'crimson' },
      { title: 'Innovate Award', event: 'Regional Championship', color: 'navy' },
    ],
  },
]

const colorMap = {
  gold: 'bg-gold/10 border-gold text-gold',
  crimson: 'bg-crimson/10 border-crimson text-crimson',
  navy: 'bg-navy/10 border-navy text-navy',
}

export default function Awards() {
  return (
    <div>
      <PageBanner
        title="Our Awards"
        breadcrumbs={[{ label: 'Team', to: '/team' }, { label: 'Our Awards' }]}
      />

      <section className="py-20 bg-white">
        <div className="max-w-5xl mx-auto px-6">
          <div className="mb-12 text-center">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2">Achievements</p>
            <h2 className="text-3xl font-medium text-navy mb-2">Our Awards</h2>
            <div className="w-10 h-0.5 bg-gold mx-auto" />
          </div>

          <div className="space-y-14">
            {seasons.map((season) => (
              <div key={season.id}>
                <h3 className="text-xl font-semibold text-navy mb-6 flex items-center gap-3">
                  <span className="w-6 h-0.5 bg-gold inline-block" />
                  {season.label}
                </h3>
                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                  {season.awards.map((award) => (
                    <div
                      key={award.title}
                      className={`border rounded-xl p-6 flex flex-col gap-3 ${colorMap[award.color]} hover:scale-105 transition-transform duration-200`}
                    >
                      <Trophy size={28} className="opacity-80" />
                      <div>
                        <p className="font-bold text-base leading-tight">{award.title}</p>
                        <p className="text-xs opacity-70 mt-1 uppercase tracking-wider">{award.event}</p>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
    </div>
  )
}
