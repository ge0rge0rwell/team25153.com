import { Link } from 'react-router-dom'
import { ChevronRight } from 'lucide-react'

export default function PageBanner({ title, breadcrumbs = [], bg = null }) {
  return (
    <div
      className="relative bg-navy text-white py-20 overflow-hidden"
      style={bg ? { backgroundImage: `url(${bg})`, backgroundSize: 'cover', backgroundPosition: 'center' } : {}}
    >
      {/* Overlay */}
      <div className="absolute inset-0 bg-navy/80" />

      {/* Decorative red line */}
      <div className="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-crimson to-transparent" />

      {/* Grid pattern */}
      <div className="absolute inset-0 opacity-5"
        style={{
          backgroundImage: 'linear-gradient(rgba(255,255,255,.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.1) 1px, transparent 1px)',
          backgroundSize: '40px 40px'
        }}
      />

      <div className="relative max-w-7xl mx-auto px-6">
        <h1 className="text-4xl md:text-5xl font-medium text-white mb-4">{title}</h1>

        {/* Breadcrumbs */}
        {breadcrumbs.length > 0 && (
          <nav className="flex items-center gap-1.5 text-sm text-white/60">
            <Link to="/" className="hover:text-gold transition-colors">Cartesian Robotics</Link>
            {breadcrumbs.map((crumb, i) => (
              <span key={i} className="flex items-center gap-1.5">
                <ChevronRight size={14} />
                {crumb.to ? (
                  <Link to={crumb.to} className="hover:text-gold transition-colors">{crumb.label}</Link>
                ) : (
                  <span className="text-white/80">{crumb.label}</span>
                )}
              </span>
            ))}
          </nav>
        )}
      </div>
    </div>
  )
}
