import PageBanner from '../components/ui/PageBanner'
import ContactForm from '../components/ui/ContactForm'
import { Heart, Star, Package, Handshake } from 'lucide-react'
import Reveal from '../components/motion/Reveal'
import { StaggerGroup, StaggerItem } from '../components/motion/Stagger'
import { useCollection } from '../context/ContentContext'

const iconMap = { Heart, Star, Package, Handshake }

export default function Sponsorship() {
  const sponsorshipData = useCollection('sponsorship')
  const { intro, prospectusUrl, benefitMatrix, budget, budgetTotal, inKind } = sponsorshipData
  const tiers = sponsorshipData.tiers.map((t) => ({
    ...t,
    color: t.featured ? 'border-crimson' : 'border-gray-200',
    accent: t.featured ? 'text-crimson' : 'text-navy',
    bg: t.featured ? 'bg-crimson/5' : 'bg-white',
  }))
  return (
    <div>
      <PageBanner
        title="Sponsorship"
        breadcrumbs={[{ label: 'Sponsorship' }]}
      />

      {/* Why Sponsor */}
      <section className="py-12 md:py-20 bg-white">
        <Reveal className="max-w-5xl mx-auto px-6 text-center">
          <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2">Partner With Us</p>
          <h2 className="text-3xl font-medium text-navy mb-2">Why Sponsor Cartesian?</h2>
          <div className="w-10 h-0.5 bg-gold mx-auto mb-8" />
          <p className="text-gray-600 leading-relaxed max-w-2xl mx-auto mb-4">
            {intro}
          </p>
          <div className="mt-8">
            <a
              href={prospectusUrl}
              target="_blank"
              rel="noopener noreferrer"
              className="btn-primary inline-flex uppercase tracking-widest text-xs"
            >
              Download Sponsorship Prospectus
            </a>
          </div>
        </Reveal>
      </section>

      {/* Tiers */}
      <section className="py-10 pb-24 bg-gray-50">
        <div className="max-w-6xl mx-auto px-6">
          <h3 className="text-center text-xl font-medium text-navy mb-10">Sponsorship Tiers</h3>
          <StaggerGroup as="div" staggerChildren={0.1} className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-20">
            {tiers.map((tier) => {
              const Icon = iconMap[tier.icon] || Heart
              return (
              <StaggerItem
                key={tier.name}
                whileHover={{ y: -6 }}
                transition={{ duration: 0.25, ease: [0.16, 1, 0.3, 1] }}
                className={`${tier.bg} border-2 ${tier.color} rounded-2xl p-6 flex flex-col ${tier.featured ? 'shadow-xl sm:scale-105' : ''}`}
              >
                <div className={`${tier.accent} mb-3`}><Icon size={24} /></div>
                <h4 className="font-bold text-navy text-lg mb-1">{tier.name}</h4>
                <p className={`text-2xl font-bold ${tier.accent} mb-5`}>{tier.amount}</p>
                <ul className="space-y-2 flex-1">
                  {tier.perks.map((perk) => (
                    <li key={perk} className="flex items-start gap-2 text-sm text-gray-600">
                      <span className="w-1.5 h-1.5 rounded-full bg-crimson mt-1.5 flex-shrink-0" />
                      {perk}
                    </li>
                  ))}
                </ul>
              </StaggerItem>
              )
            })}
          </StaggerGroup>

          {/* Benefit Matrix */}
          <Reveal className="mb-20">
            <div className="flex items-center gap-4 mb-6">
              <h3 className="text-xl font-bold text-navy uppercase tracking-widest">Benefit Matrix</h3>
              <div className="flex-1 h-px bg-gray-200" />
            </div>
            <div className="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden overflow-x-auto">
              <table className="w-full text-sm text-left">
                <thead className="bg-gray-50 border-b border-gray-100 text-navy font-bold">
                  <tr>
                    <th className="px-6 py-4 uppercase tracking-widest text-xs">Requirement / Benefit</th>
                    <th className="px-6 py-4 text-center">T1</th>
                    <th className="px-6 py-4 text-center">T2</th>
                    <th className="px-6 py-4 text-center">T3</th>
                    <th className="px-6 py-4 text-center">T4</th>
                  </tr>
                </thead>
                <tbody className="divide-y divide-gray-100 text-gray-600">
                  {benefitMatrix.map((row) => (
                    <tr key={row.label} className="hover:bg-gray-50">
                      <td className="px-6 py-4 font-medium">{row.label}</td>
                      {row.tiers.map((included, i) => (
                        <td
                          key={i}
                          className={`px-6 py-4 text-center ${included ? 'text-crimson font-bold text-lg' : 'text-gray-300'}`}
                        >
                          {included ? '+' : '—'}
                        </td>
                      ))}
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
            <p className="text-xs text-gray-400 mt-4 italic">
              * Financial transactions and invoicing are processed through the METU Development Foundation.
            </p>
          </Reveal>

          <div className="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-12">
            {/* Technical Aligned Budget */}
            <Reveal direction="right">
              <div className="flex items-center gap-4 mb-6">
                <h3 className="text-xl font-bold text-navy uppercase tracking-widest">Technical Aligned Budget</h3>
                <div className="flex-1 h-px bg-gray-200" />
              </div>
              <div className="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                <div className="space-y-4">
                  {budget.map((item) => (
                    <div key={item.label} className="flex justify-between items-center pb-4 border-b border-gray-100 border-dashed">
                      <span className="text-gray-600">{item.label}</span>
                      <span className="font-bold text-navy">{item.amount}</span>
                    </div>
                  ))}
                  <div className="flex justify-between items-center pt-2">
                    <span className="font-bold text-navy uppercase tracking-wider text-sm">Total Annual Requirement</span>
                    <span className="font-black text-crimson text-xl">{budgetTotal}</span>
                  </div>
                </div>
              </div>
            </Reveal>

            {/* In-Kind Support */}
            <Reveal direction="left">
              <div className="flex items-center gap-4 mb-6">
                <h3 className="text-xl font-bold text-navy uppercase tracking-widest">In-Kind Support</h3>
                <div className="flex-1 h-px bg-gray-200" />
              </div>
              <p className="text-gray-600 leading-relaxed bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                {inKind}
              </p>
            </Reveal>
          </div>
        </div>
      </section>

      {/* Contact CTA */}
      <section className="py-12 md:py-20 bg-white">
        <div className="max-w-2xl mx-auto px-6">
          <Reveal className="text-center mb-10">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2">Get In Touch</p>
            <h2 className="text-3xl font-medium text-navy mb-2">Become a Sponsor</h2>
            <div className="w-10 h-0.5 bg-gold mx-auto" />
          </Reveal>
          <Reveal delay={0.1} className="bg-gray-50 rounded-2xl p-5 sm:p-8 border border-gray-100 shadow-sm">
            <ContactForm />
          </Reveal>
        </div>
      </section>
    </div>
  )
}
