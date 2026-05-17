import PageBanner from '../components/ui/PageBanner'
import ContactForm from '../components/ui/ContactForm'
import { Heart, Star, Package, Handshake } from 'lucide-react'

const tiers = [
  {
    icon: <Heart size={24} />,
    name: 'Tier 01: Inspiration',
    amount: '$500 – $1,000',
    perks: ['Essential funding for core mechanical hardware and team development resources.'],
    color: 'border-gray-200',
    accent: 'text-navy',
    bg: 'bg-white',
  },
  {
    icon: <Star size={24} />,
    name: 'Tier 02: Drive Control',
    amount: '$1,000 – $2,500',
    perks: ['Directly supports high-performance drivetrain systems and team apparel branding.'],
    color: 'border-gray-200',
    accent: 'text-navy',
    bg: 'bg-white',
  },
  {
    icon: <Package size={24} />,
    name: 'Tier 03: Autonomous',
    amount: '$2,500 – $5,000',
    perks: ['Funds advanced sensor suites and computer vision research for autonomous tasks.'],
    color: 'border-gray-200',
    accent: 'text-navy',
    bg: 'bg-white',
  },
  {
    icon: <Handshake size={24} />,
    name: 'Tier 04: Visionary',
    amount: '$5,000+',
    perks: ['Main Partnership status with maximum visibility on all platforms and robot chassis.'],
    color: 'border-crimson',
    accent: 'text-crimson',
    bg: 'bg-crimson/5',
    featured: true,
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
            We invite you to support our engineering journey as we compete in international robotics challenges. Your partnership provides the technical infrastructure and resources necessary for our team to innovate and excel on the global stage.
          </p>
          <div className="mt-8">
            <a 
              href="/Cartesian-Sponsorship-Prospectus.pdf" 
              target="_blank"
              rel="noopener noreferrer"
              className="btn-primary inline-flex uppercase tracking-widest text-xs"
            >
              Download Sponsorship Prospectus
            </a>
          </div>
        </div>
      </section>

      {/* Tiers */}
      <section className="py-10 pb-24 bg-gray-50">
        <div className="max-w-6xl mx-auto px-6">
          <h3 className="text-center text-xl font-medium text-navy mb-10">Sponsorship Tiers</h3>
          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-20">
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

          {/* Benefit Matrix */}
          <div className="mb-20">
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
                  <tr className="hover:bg-gray-50">
                    <td className="px-6 py-4 font-medium">Corporate Logo on Robot Chassis</td>
                    <td className="px-6 py-4 text-center text-gray-300">—</td>
                    <td className="px-6 py-4 text-center text-gray-300">—</td>
                    <td className="px-6 py-4 text-center text-gray-300">—</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                  </tr>
                  <tr className="hover:bg-gray-50">
                    <td className="px-6 py-4 font-medium">Pit Area Brand Advertisement</td>
                    <td className="px-6 py-4 text-center text-gray-300">—</td>
                    <td className="px-6 py-4 text-center text-gray-300">—</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                  </tr>
                  <tr className="hover:bg-gray-50">
                    <td className="px-6 py-4 font-medium">Dedicated PR & Media Spotlight</td>
                    <td className="px-6 py-4 text-center text-gray-300">—</td>
                    <td className="px-6 py-4 text-center text-gray-300">—</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                  </tr>
                  <tr className="hover:bg-gray-50">
                    <td className="px-6 py-4 font-medium">Corporate Logo on Official Jersey</td>
                    <td className="px-6 py-4 text-center text-gray-300">—</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                  </tr>
                  <tr className="hover:bg-gray-50">
                    <td className="px-6 py-4 font-medium">Social Media Recognition</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                  </tr>
                  <tr className="hover:bg-gray-50">
                    <td className="px-6 py-4 font-medium">Engineering Portfolio Recognition</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                    <td className="px-6 py-4 text-center text-crimson font-bold text-lg">+</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p className="text-xs text-gray-400 mt-4 italic">
              * Financial transactions and invoicing are processed through the METU Development Foundation.
            </p>
          </div>

          <div className="grid grid-cols-1 lg:grid-cols-2 gap-12">
            {/* Technical Aligned Budget */}
            <div>
              <div className="flex items-center gap-4 mb-6">
                <h3 className="text-xl font-bold text-navy uppercase tracking-widest">Technical Aligned Budget</h3>
                <div className="flex-1 h-px bg-gray-200" />
              </div>
              <div className="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                <div className="space-y-4">
                  <div className="flex justify-between items-center pb-4 border-b border-gray-100 border-dashed">
                    <span className="text-gray-600">International Registration (FRC/FTC)</span>
                    <span className="font-bold text-navy">18,000 $</span>
                  </div>
                  <div className="flex justify-between items-center pb-4 border-b border-gray-100 border-dashed">
                    <span className="text-gray-600">Mechanical Manufacturing</span>
                    <span className="font-bold text-navy">10,800 $</span>
                  </div>
                  <div className="flex justify-between items-center pb-4 border-b border-gray-100 border-dashed">
                    <span className="text-gray-600">Control Systems & Avionics</span>
                    <span className="font-bold text-navy">4,000 $</span>
                  </div>
                  <div className="flex justify-between items-center pb-4 border-b border-gray-100 border-dashed">
                    <span className="text-gray-600">STEM Outreach Programs</span>
                    <span className="font-bold text-navy">3,300 $</span>
                  </div>
                  <div className="flex justify-between items-center pb-4 border-b border-gray-100 border-dashed">
                    <span className="text-gray-600">Operations & Logistics</span>
                    <span className="font-bold text-navy">4,700 $</span>
                  </div>
                  <div className="flex justify-between items-center pt-2">
                    <span className="font-bold text-navy uppercase tracking-wider text-sm">Total Annual Requirement</span>
                    <span className="font-black text-crimson text-xl">40,800 $</span>
                  </div>
                </div>
              </div>
            </div>

            {/* In-Kind Support */}
            <div>
              <div className="flex items-center gap-4 mb-6">
                <h3 className="text-xl font-bold text-navy uppercase tracking-widest">In-Kind Support</h3>
                <div className="flex-1 h-px bg-gray-200" />
              </div>
              <p className="text-gray-600 leading-relaxed bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                Beyond financial funding, we value technical partnerships. This includes CNC machining access, material procurement (Aluminum/Carbon Fiber), or professional mentorship in software architecture and systems engineering.
              </p>
            </div>
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
