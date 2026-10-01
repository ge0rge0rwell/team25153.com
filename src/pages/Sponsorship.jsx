import { Link } from 'react-router-dom'
import ContactForm from '../components/ui/ContactForm'
import { Heart, Star, Package, Handshake, FileText, Landmark, BadgeCheck, ChevronRight, ArrowRight } from 'lucide-react'
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
  const budgetGrandTotal = rankedBudget.reduce((sum, item) => sum + parseAmount(item.amount), 0) || 1

  const totalBenefits = benefitMatrix.length

  return (
    <div>
      {/* ── Hero ────────────────────────────────── */}
      <section className="relative bg-surface py-14 md:py-20 overflow-hidden">
        <div className="absolute inset-0 cartesian-grid pointer-events-none" aria-hidden="true" />
        <div className="relative max-w-4xl mx-auto px-6 text-center">
          <nav className="flex items-center justify-center gap-1.5 text-xs font-mono uppercase tracking-wider text-gray-500 mb-8">
            <Link to="/" className="hover:text-crimson transition-colors">Cartesian Robotics</Link>
            <ChevronRight size={12} />
            <span className="text-navy font-bold">Support Us</span>
          </nav>

          <h1 className="flex items-center justify-center gap-3 font-display text-4xl sm:text-5xl lg:text-6xl font-bold text-navy tracking-tight mb-6">
            <Heart className="text-crimson flex-shrink-0" size={40} fill="currentColor" />
            Support Us
          </h1>
          <div className="w-full max-w-sm h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent mb-8 mx-auto" />

          <p className="eyebrow tracking-[0.3em] mb-3">Why Sponsor Cartesian?</p>
          <p className="text-gray-600 leading-relaxed mb-10 max-w-lg mx-auto">{intro}</p>

          <div className="flex flex-wrap items-center justify-center gap-x-8 gap-y-4">
            <a
              href={prospectusUrl}
              target="_blank"
              rel="noopener noreferrer"
              className="btn-primary text-xs tracking-widest"
            >
              <FileText size={16} aria-hidden="true" />
              Download Sponsorship Prospectus
            </a>
            <a
              href="#become-a-sponsor"
              className="group inline-flex items-center gap-1.5 font-mono text-xs font-bold uppercase tracking-[0.15em] text-navy border-b-2 border-crimson pb-1 hover:text-crimson transition-colors"
            >
              Become a Sponsor
              <ArrowRight size={14} className="transition-transform duration-200 group-hover:translate-x-1" />
            </a>
          </div>
        </div>
      </section>

      <div className="h-0.5 bg-navy" />

      {/* ── Tiers ───────────────────────────────── */}
      <section className="py-16 md:py-24 bg-gray-50">
        <div className="max-w-6xl mx-auto px-6">
          <div className="flex flex-wrap items-end justify-between gap-4 mb-12">
            <div>
              <p className="eyebrow tracking-[0.3em] mb-3">Investment Packages</p>
              <h2 className="font-display text-3xl sm:text-4xl lg:text-[42px] font-bold text-navy tracking-tight">
                Sponsorship Tiers
              </h2>
              <div className="w-12 h-0.5 bg-gold mt-4" />
            </div>
            <p className="font-mono text-[11px] uppercase tracking-wider text-gray-400">
              Bar height = benefits included
            </p>
          </div>

          <StaggerGroup
            as="div"
            staggerChildren={0.1}
            className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 items-end"
          >
            {tiers.map((tier, i) => {
              const Icon = iconMap[tier.icon] || Heart
              const featured = tier.featured
              const benefitsIncluded = benefitMatrix.filter((row) => row.tiers[i]).length
              // Ascending padding mirrors the prospectus's rising bar chart —
              // each tier literally stands taller than the one before it.
              const liftClass = ['pt-6', 'pt-8', 'pt-10', 'pt-12'][i] || 'pt-6'
              return (
                <StaggerItem
                  key={tier.name}
                  className={`relative flex flex-col rounded-2xl p-6 ${liftClass} transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl ${
                    featured ? 'bg-navy text-white shadow-lg' : 'bg-white border border-gray-200'
                  }`}
                >
                  <div className="flex items-start justify-between mb-5">
                    <div
                      className={`w-11 h-11 rounded-xl flex items-center justify-center ${
                        featured ? 'bg-gold text-navy' : 'bg-crimson-100 text-crimson'
                      }`}
                    >
                      <Icon size={20} />
                    </div>
                    <span
                      className={`font-mono text-[10px] font-bold uppercase tracking-[0.15em] ${
                        featured ? 'text-gold' : 'text-gray-400'
                      }`}
                    >
                      Tier 0{i + 1}
                    </span>
                  </div>

                  {featured && (
                    <span className="inline-flex items-center gap-1.5 self-start mb-3 rounded-full bg-gold px-3 py-1 font-mono text-[10px] font-bold uppercase tracking-[0.12em] text-navy">
                      <BadgeCheck size={12} aria-hidden="true" /> Main Partner
                    </span>
                  )}

                  <h3 className={`font-display text-xl font-bold leading-tight mb-2 ${featured ? 'text-white' : 'text-navy'}`}>
                    {tier.name.replace(/^Tier \d+:\s*/, '')}
                  </h3>
                  <p className={`font-mono text-2xl font-bold tabular-nums tracking-tight mb-1 ${featured ? 'text-gold' : 'text-crimson'}`}>
                    {tier.amount}
                  </p>
                  <p className={`font-mono text-[11px] uppercase tracking-wider mb-5 ${featured ? 'text-white/60' : 'text-gray-400'}`}>
                    {benefitsIncluded} of {totalBenefits} benefits
                  </p>

                  <div className={`border-t pt-4 flex-1 ${featured ? 'border-white/15' : 'border-gray-200'}`}>
                    {tier.perks.map((perk) => (
                      <p key={perk} className={`text-sm leading-relaxed ${featured ? 'text-white/75' : 'text-gray-500'}`}>
                        {perk}
                      </p>
                    ))}
                  </div>
                </StaggerItem>
              )
            })}
          </StaggerGroup>

          {/* Investment range axis */}
          <Reveal className="mt-10 relative px-1">
            <div className="h-px bg-gray-300" />
            <div className="grid grid-cols-4 -mt-px">
              {tiers.map((tier) => (
                <div key={tier.name} className="relative flex flex-col items-start">
                  <div className="w-px h-2.5 bg-gray-400" />
                  <span className="mt-2 font-mono text-[10px] text-gray-500 whitespace-nowrap">
                    {tier.amount.split(/[–-]/)[0].trim()}
                  </span>
                </div>
              ))}
            </div>
            <span className="absolute -top-2.5 right-0 font-mono text-[10px] uppercase tracking-wider text-gray-400">
              Investment →
            </span>
          </Reveal>
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
      <section className="relative py-16 md:py-24 bg-navy overflow-hidden">
        <div className="absolute inset-0 cartesian-grid-dense opacity-30 pointer-events-none" aria-hidden="true" />
        <div className="relative max-w-5xl mx-auto px-6">
          <div className="flex flex-wrap items-start justify-between gap-6 mb-12">
            <div className="max-w-lg">
              <p className="font-mono text-[12px] sm:text-[13px] font-bold uppercase tracking-[0.25em] text-gold mb-3">
                Fiscal Transparency
              </p>
              <h2 className="font-display text-3xl sm:text-4xl lg:text-[42px] font-bold text-white tracking-tight mb-4 uppercase">
                Technical Aligned Budget
              </h2>
              <p className="text-white/60 leading-relaxed">
                These figures reflect the real operational and capital expenditure of one full competitive season.
              </p>
            </div>
            <div className="text-right">
              <span className="flex items-center justify-end gap-2 font-mono text-[11px] uppercase tracking-wider text-white/50 mb-2">
                <Landmark size={14} className="text-gold" aria-hidden="true" />
                Total Annual Requirement
              </span>
              <span className="font-mono text-4xl sm:text-5xl font-bold text-gold tabular-nums">{budgetTotal}</span>
            </div>
          </div>

          {/* Treemap-style breakdown: block area is proportional to spend,
              so registration's dominance over the budget reads at a glance. */}
          <Reveal className="grid grid-cols-1 sm:grid-cols-2 gap-3" style={{ gridAutoRows: '7rem' }}>
            {rankedBudget.map((item, i) => {
              const pct = (parseAmount(item.amount) / budgetGrandTotal) * 100
              const isLargest = i === 0
              const rowSpan = isLargest ? 2 : 1
              return (
                <div
                  key={item.label}
                  className={`relative rounded-xl p-5 flex flex-col justify-between overflow-hidden ${
                    isLargest ? 'bg-crimson sm:row-span-2' : 'bg-navy-mid'
                  }`}
                  style={isLargest ? { gridRow: `span ${rowSpan} / span ${rowSpan}` } : undefined}
                >
                  <div className="flex items-start justify-between gap-3">
                    <span className="font-semibold text-white text-sm sm:text-base leading-snug">{item.label}</span>
                    <span className="font-mono text-[11px] text-white/60 whitespace-nowrap">{pct.toFixed(1)}%</span>
                  </div>
                  <span className="font-mono text-2xl sm:text-3xl font-bold text-white tabular-nums">
                    {item.amount}
                  </span>
                </div>
              )
            })}
          </Reveal>
        </div>
      </section>

      {/* ── In-kind ─────────────────────────────── */}
      <section className="py-16 md:py-24 bg-crimson">
        <div className="max-w-4xl mx-auto px-6">
          <Reveal>
            <p className="font-mono text-[12px] sm:text-[13px] font-bold uppercase tracking-[0.25em] text-gold mb-4">
              Technical Alliances
            </p>
            <h2 className="font-display text-4xl sm:text-5xl lg:text-6xl font-bold text-white tracking-tight uppercase leading-[0.95] mb-6">
              In-Kind<br />Support
            </h2>
            <p className="text-white/85 leading-relaxed max-w-2xl">{inKind}</p>
          </Reveal>
        </div>
      </section>

      {/* ── Contact ─────────────────────────────── */}
      <section id="become-a-sponsor" className="py-16 md:py-24 bg-crimson-900">
        <div className="max-w-2xl mx-auto px-6">
          <Reveal className="text-center mb-12">
            <p className="font-mono text-xs tracking-[0.3em] text-white/50 mb-2">VI</p>
            <p className="eyebrow text-gold tracking-[0.3em] mb-3">Get In Touch</p>
            <h2 className="font-display text-3xl sm:text-4xl lg:text-[42px] font-bold text-white tracking-tight">
              Become a Sponsor
            </h2>
            <div className="w-12 h-0.5 bg-gold mx-auto mt-4" />
          </Reveal>
          <Reveal className="bg-surface rounded-2xl p-5 sm:p-8 shadow-xl">
            <ContactForm />
          </Reveal>
        </div>
      </section>
    </div>
  )
}
