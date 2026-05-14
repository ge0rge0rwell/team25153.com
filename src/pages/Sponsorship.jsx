import PageBanner from '../components/ui/PageBanner'
import ContactForm from '../components/ui/ContactForm'
import { Heart, Star, Package, Handshake } from 'lucide-react'

const tiers = [
  {
    icon: <Heart size={24} />,
    name: 'Bronze Sponsor',
    amount: '₺5,000+',
    perks: ['Logo on our website', 'Social media mention', 'Certificate of appreciation'],
    color: 'border-amber-600',
    accent: 'text-amber-600',
    bg: 'bg-amber-50',
  },
  {
    icon: <Star size={24} />,
    name: 'Silver Sponsor',
    amount: '₺15,000+',
    perks: ['All Bronze benefits', 'Logo on robot & team banner', 'Featured post on Instagram', 'Thank-you video'],
    color: 'border-gray-400',
    accent: 'text-gray-500',
    bg: 'bg-gray-50',
    featured: true,
  },
  {
    icon: <Package size={24} />,
    name: 'Gold Sponsor',
    amount: '₺30,000+',
    perks: ['All Silver benefits', 'Large logo placement', 'Team presentation at your company', 'Joint press release'],
    color: 'border-gold',
    accent: 'text-gold-dark',
    bg: 'bg-gold/5',
  },
  {
    icon: <Handshake size={24} />,
    name: 'Title Sponsor',
    amount: 'Custom',
    perks: ['All Gold benefits', 'Team named co-branding', 'Priority naming rights', 'Annual partnership package'],
    color: 'border-crimson',
    accent: 'text-crimson',
    bg: 'bg-crimson/5',
  },
]

export default function Sponsorship() {
  return (
    <div>
      <PageBanner
        title="Sponsorship"
        breadcrumbs={[{ label: 'Sponsorship' }]}
      />

      {/* Why Sponsor */}
      <section className="py-20 bg-white">
        <div className="max-w-5xl mx-auto px-6 text-center">
          <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2">Partner With Us</p>
          <h2 className="text-3xl font-medium text-navy mb-2">Why Sponsor Cartesian?</h2>
          <div className="w-10 h-0.5 bg-gold mx-auto mb-8" />
          <p className="text-gray-600 leading-relaxed max-w-2xl mx-auto mb-4">
            By supporting Cartesian Robotics #25153, you invest directly in the next generation of engineers, scientists, and innovators. Your contribution helps us build robots, attend competitions, and run STEM outreach programs in our community.
          </p>
          <p className="text-gray-600 leading-relaxed max-w-2xl mx-auto">
            In return, we offer meaningful visibility and a genuine partnership with a passionate, high-achieving student team.
          </p>
        </div>
      </section>

      {/* Tiers */}
      <section className="py-10 pb-24 bg-gray-50">
        <div className="max-w-6xl mx-auto px-6">
          <h3 className="text-center text-xl font-medium text-navy mb-10">Sponsorship Tiers</h3>
          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {tiers.map((tier) => (
              <div
                key={tier.name}
                className={`${tier.bg} border-2 ${tier.color} rounded-2xl p-6 flex flex-col ${tier.featured ? 'shadow-xl scale-105' : ''}`}
              >
                <div className={`${tier.accent} mb-3`}>{tier.icon}</div>
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
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Contact CTA */}
      <section className="py-20 bg-white">
        <div className="max-w-2xl mx-auto px-6">
          <div className="text-center mb-10">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2">Get In Touch</p>
            <h2 className="text-3xl font-medium text-navy mb-2">Become a Sponsor</h2>
            <div className="w-10 h-0.5 bg-gold mx-auto" />
          </div>
          <div className="bg-gray-50 rounded-2xl p-8 border border-gray-100 shadow-sm">
            <ContactForm />
          </div>
        </div>
      </section>
    </div>
  )
}
