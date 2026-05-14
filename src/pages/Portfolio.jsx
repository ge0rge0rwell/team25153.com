import PageBanner from '../components/ui/PageBanner'
import { Link } from 'react-router-dom'
import { ArrowRight } from 'lucide-react'

const portfolios = [
  {
    id: 'age',
    season: 'Decode 2025–26',
    name: 'AGE – Decode',
    subtitle: 'Engineering Portfolio',
    description: 'Our Engineering Portfolio for the 2025–26 FTC Decode season, documenting the design, build, and testing process of Cerberon.',
    image: 'https://team25153.com/wp-content/uploads/2026/04/logo-removebg-preview-300x300.png',
    to: '/portfolio/age',
    tag: 'Latest',
  },
  {
    id: 'dive',
    season: 'Into The Deep 2024–25',
    name: 'DIVE – Into The Deep',
    subtitle: 'Engineering Portfolio',
    description: "Documenting HILDA's journey through the Into The Deep season — from early prototypes to final competition build.",
    image: 'https://team25153.com/wp-content/uploads/2026/04/Screenshot_2026-04-03_at_17.28.40-removebg-preview-300x247.png',
    to: '/portfolio/dive',
    tag: '2024–25',
  },
  {
    id: 'show',
    season: 'Centerstage 2023–24',
    name: 'SHOW – Centerstage',
    subtitle: 'Engineering Portfolio',
    description: "The portfolio that started it all — X & Y's design notebook from the Centerstage season.",
    image: 'https://team25153.com/wp-content/uploads/2026/04/Adsiz-tasarim-1-300x236.png',
    to: '/portfolio/show',
    tag: '2023–24',
  },
]

export default function Portfolio() {
  return (
    <div>
      <PageBanner
        title="Portfolio"
        breadcrumbs={[{ label: 'Portfolio' }]}
      />

      <section className="py-20 bg-white">
        <div className="max-w-6xl mx-auto px-6">
          <div className="mb-12 text-center">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2">Our Work</p>
            <h2 className="text-3xl font-medium text-navy mb-2">Engineering Portfolio</h2>
            <div className="w-10 h-0.5 bg-gold mx-auto mb-4" />
            <p className="text-gray-500 text-sm max-w-xl mx-auto">
              Our engineering portfolios document every aspect of our robot design process — from ideation to competition.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            {portfolios.map((p) => (
              <Link
                key={p.id}
                to={p.to}
                className="group card flex flex-col border border-gray-100"
              >
                {/* Image */}
                <div className="relative h-52 bg-gray-50 flex items-center justify-center overflow-hidden">
                  <img
                    src={p.image}
                    alt={p.name}
                    className="h-40 object-contain mix-blend-multiply transition-transform duration-300 group-hover:scale-110"
                  />
                  {/* Tag */}
                  <span className="absolute top-3 right-3 bg-crimson text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">
                    {p.tag}
                  </span>
                </div>

                {/* Body */}
                <div className="p-6 flex flex-col flex-1">
                  <p className="text-xs font-bold text-crimson uppercase tracking-widest mb-1">{p.season}</p>
                  <h3 className="text-navy font-semibold text-lg mb-2">{p.name}</h3>
                  <p className="text-gray-500 text-sm leading-relaxed flex-1">{p.description}</p>
                  <div className="mt-5 flex items-center gap-2 text-crimson text-sm font-medium group-hover:gap-3 transition-all">
                    View Portfolio <ArrowRight size={14} />
                  </div>
                </div>
              </Link>
            ))}
          </div>
        </div>
      </section>
    </div>
  )
}
