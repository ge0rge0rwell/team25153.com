import PageBanner from '../components/ui/PageBanner'
import ContactForm from '../components/ui/ContactForm'
import { Heart, Star, Package, Handshake, FileText, Landmark, BadgeCheck } from 'lucide-react'
import Reveal from '../components/motion/Reveal'
import { StaggerGroup, StaggerItem } from '../components/motion/Stagger'
import { useCollection } from '../context/ContentContext'

const iconMap = { Heart, Star, Package, Handshake }

// "18,000 $" -> 18000, so the bars can be drawn to scale.
function parseAmount(s) {
  const n = Number(String(s).replace(/[^0-9.]/g, ''))
  return Number.isFinite(n) ? n : 0
}

function SectionHeading({ eyebrow, title, children }) {
  return (
    <Reveal className="text-center mb-12">
      <p className="eyebrow tracking-[0.3em] mb-3">{eyebrow}</p>
      <h2 className="font-display text-3xl sm:text-4xl lg:text-[42px] font-bold text-navy tracking-tight mb-4">
        {title}
      </h2>
      <div className="w-12 h-0.5 bg-gold mx-auto" />
      {children}
    </Reveal>
  )
}

export default function Sponsorship() {
  const sponsorshipData = useCollection('sponsorship')
  const { intro, prospectusUrl, benefitMatrix, budget, budgetTotal, inKind } = sponsorshipData
  const tiers = sponsorshipData.tiers

  // Largest first, so the bar chart reads as a ranking rather than an
  // arbitrary order. Sorted on a copy — never mutate CMS data in place.
  const rankedBudget = [...budget].sort((a, b) => parseAmount(b.amount) - parseAmount(a.amount))
  const maxAmount = parseAmount(rankedBudget[0]?.amount) || 1

  return (
    <div>
      <PageBanner title="Sponsorship" breadcrumbs={[{ label: 'Sponsorship' }]} />

      {/* ── Why sponsor ─────────────────────────── */}
      <section className="relative py-16 md:py-24 bg-white overflow-hidden">
        <div className="absolute inset-0 cartesian-grid pointer-events-none" aria-hidden="true" />
        <div className="relative max-w-3xl mx-auto px-6 text-center">
          <p className="eyebrow tracking-[0.3em] mb-3">Why Sponsor Cartesian?</p>
          <h2 className="font-display text-3xl sm:text-4xl lg:text-[42px] font-bold text-navy tracking-tight mb-4">
            Why Sponsor Cartesian?
          </h2>
          <div className="w-12 h-0.5 bg-gold mx-auto mb-8" />
          <p className="text-gray-600 leading-relaxed mb-10">{intro}</p>
          <a
            href={prospectusUrl}
            target="_blank"
            rel="noopener noreferrer"
            className="btn-primary text-xs tracking-widest"
          >
            <FileText size={16} aria-hidden="true" />
            Download Sponsorship Prospectus
          </a>
        </div>
      </section>

      {/* ── Tiers ───────────────────────────────── */}
      <section className="py-16 md:py-24 bg-gray-50">
        <div className="max-w-6xl mx-auto px-6">
          <SectionHeading eyebrow="Investment Packages" title="Sponsorship Tiers" />

          <StaggerGroup as="div" staggerChildren={0.1} className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {tiers.map((tier) => {
              const Icon = iconMap[tier.icon] || Heart
              const featured = tier.featured
              return (
                <StaggerItem
                  key={tier.name}
                  className={`relative flex flex-col rounded-2xl bg-white p-6 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl ${
                    featured ? 'border-2 border-crimson shadow-lg' : 'border border-gray-200'
                  }`}
                >
                  {featured && (
                    <span className="absolute -top-3 left-1/2 -translate-x-1/2 inline-flex items-center gap-1.5 rounded-full bg-gold px-3 py-1 font-mono text-[10px] font-bold uppercase tracking-[0.12em] text-navy shadow-sm whitespace-nowrap">
                      <BadgeCheck size={12} aria-hidden="true" /> Main Partner
                    </span>
                  )}

                  <div
                    className={`w-11 h-11 rounded-xl flex items-center justify-center mb-5 ${
                      featured ? 'bg-crimson text-white' : 'bg-crimson-100 text-crimson'
                    }`}
                  >
                    <Icon size={20} />
                  </div>

                  <h3 className="font-display text-xl font-bold text-navy leading-tight mb-2">{tier.name}</h3>
                  <p className="font-mono text-2xl font-bold text-crimson tabular-nums tracking-tight mb-5">
                    {tier.amount}
                  </p>

                  <div className="border-t border-gray-200 pt-4 flex-1">
                    {tier.perks.map((perk) => (
                      <p key={perk} className="text-sm text-gray-500 leading-relaxed">{perk}</p>
                    ))}
                  </div>
                </StaggerItem>
              )
            })}
          </StaggerGroup>
        </div>
      </section>

      {/* ── Benefit matrix ──────────────────────── */}
      <section className="py-16 md:py-24 bg-white">
        <div className="max-w-6xl mx-auto px-6">
          <SectionHeading eyebrow="Comparison & Deliverables" title="Benefit Matrix" />

          <Reveal className="rounded-2xl border border-gray-200 shadow-sm overflow-hidden overflow-x-auto">
            <table className="w-full text-sm text-left border-collapse">
              <thead>
                <tr className="bg-navy text-white">
                  <th scope="col" className="px-6 py-5 font-mono text-[11px] font-bold uppercase tracking-[0.12em]">
                    Requirement / Benefit
                  </th>
                  {tiers.map((t, i) => (
                    <th
                      key={t.name}
                      scope="col"
                      className={`px-5 py-5 text-center align-top ${t.featured ? 'bg-navy-light' : ''}`}
                    >
                      <span className={`block font-mono text-[11px] font-bold uppercase tracking-[0.1em] ${t.featured ? 'text-gold' : 'text-white'}`}>
                        T{i + 1} ({t.name.replace(/^Tier \d+:\s*/, '')})
                      </span>
                      <span className={`block font-mono text-[11px] mt-1 ${t.featured ? 'text-gold/80' : 'text-white/60'}`}>
                        {t.amount}
                      </span>
                    </th>
                  ))}
                </tr>
              </thead>
              <tbody className="divide-y divide-gray-200 bg-white">
                {benefitMatrix.map((row, r) => (
                  <tr key={row.label} className={r % 2 ? 'bg-gray-50/60' : ''}>
                    <th scope="row" className="px-6 py-4 font-semibold text-navy text-left">
                      {row.label}
                    </th>
                    {row.tiers.map((included, i) => (
                      <td
                        key={i}
                        className={`px-5 py-4 text-center ${tiers[i]?.featured ? 'bg-crimson-50' : ''}`}
                      >
                        {/* The glyph is decorative; the label carries the meaning
                            for anyone not seeing the colour or symbol. */}
                        <span className={included ? 'text-crimson font-bold text-lg' : 'text-gray-300'} aria-hidden="true">
                          {included ? '+' : '–'}
                        </span>
                        <span className="sr-only">{included ? 'Included' : 'Not included'}</span>
                      </td>
                    ))}
                  </tr>
                ))}
              </tbody>
            </table>
          </Reveal>

          <p className="font-mono text-[11px] text-gray-500 mt-4">
            * Financial transactions and invoicing are processed through the METU Development Foundation.
          </p>
        </div>
      </section>

      {/* ── Budget ──────────────────────────────── */}
      <section className="py-16 md:py-24 bg-gray-50">
        <div className="max-w-4xl mx-auto px-6">
          <SectionHeading eyebrow="Fiscal Transparency" title="Technical Aligned Budget">
            <p className="text-gray-600 leading-relaxed max-w-xl mx-auto mt-6">
              These figures reflect the real operational and capital expenditure of one full competitive season.
            </p>
          </SectionHeading>

          <Reveal className="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 sm:p-8">
            <ul className="space-y-6">
              {rankedBudget.map((item, i) => {
                const pct = Math.round((parseAmount(item.amount) / maxAmount) * 100)
                return (
                  <li key={item.label}>
                    <div className="flex items-baseline justify-between gap-4 mb-2">
                      <span className="font-semibold text-navy">{item.label}</span>
                      <span className="font-mono font-bold text-navy tabular-nums whitespace-nowrap">
                        {item.amount}
                      </span>
                    </div>
                    {/* Bars are proportional to the largest line, so registration
                        visibly dominates rather than every row looking equal. */}
                    <div
                      className="h-2.5 w-full rounded-full bg-gray-100 overflow-hidden"
                      role="img"
                      aria-label={`${item.label}: ${item.amount}`}
                    >
                      <div
                        className="h-full rounded-full bg-crimson"
                        style={{ width: `${pct}%`, opacity: 1 - i * 0.13 }}
                      />
                    </div>
                  </li>
                )
              })}
            </ul>
          </Reveal>

          <Reveal className="mt-6 rounded-2xl bg-navy px-6 sm:px-8 py-6 flex flex-wrap items-center justify-between gap-4">
            <span className="flex items-center gap-3 font-mono text-sm font-bold uppercase tracking-[0.12em] text-white">
              <Landmark size={20} className="text-gold" aria-hidden="true" />
              Total Annual Requirement
            </span>
            <span className="font-mono text-2xl sm:text-3xl font-bold text-gold tabular-nums">{budgetTotal}</span>
          </Reveal>
        </div>
      </section>

      {/* ── In-kind ─────────────────────────────── */}
      <section className="py-16 md:py-24 bg-white">
        <div className="max-w-3xl mx-auto px-6 text-center">
          <SectionHeading eyebrow="Technical Alliances" title="In-Kind Support" />
          <p className="text-gray-600 leading-relaxed">{inKind}</p>
        </div>
      </section>

      {/* ── Contact ─────────────────────────────── */}
      <section className="py-16 md:py-24 bg-gray-50">
        <div className="max-w-2xl mx-auto px-6">
          <SectionHeading eyebrow="Get In Touch" title="Become a Sponsor" />
          <Reveal className="bg-white rounded-2xl p-5 sm:p-8 border border-gray-200 shadow-sm">
            <ContactForm />
          </Reveal>
        </div>
      </section>
    </div>
  )
}
