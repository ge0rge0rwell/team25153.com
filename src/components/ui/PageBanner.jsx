import { Link } from 'react-router-dom'
import { ChevronRight } from 'lucide-react'
import { motion } from 'framer-motion'
import { fadeDown, fadeUp, scaleIn, withDelay } from '../motion/variants'

export default function PageBanner({ title, breadcrumbs = [], bg = null, children }) {
  return (
    <div
      className="relative bg-navy text-white py-12 md:py-20 overflow-hidden"
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

      <div className="relative max-w-7xl mx-auto px-6 flex flex-col md:flex-row md:items-center md:justify-between gap-8">
        <div>
          <motion.h1
            initial="hidden"
            animate="show"
            variants={fadeDown}
            className="text-2xl sm:text-4xl md:text-5xl font-medium text-white mb-4"
          >
            {title}
          </motion.h1>

          {/* Breadcrumbs */}
          {breadcrumbs.length > 0 && (
            <motion.nav
              initial="hidden"
              animate="show"
              variants={withDelay(fadeUp, 0.15)}
              className="flex items-center gap-1.5 text-sm text-white/60"
            >
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
            </motion.nav>
          )}
        </div>

        {/* Right side children (e.g. banners) */}
        {children && (
          <motion.div
            initial="hidden"
            animate="show"
            variants={withDelay(scaleIn, 0.2)}
            className="flex items-center gap-2 sm:gap-4 z-10 overflow-x-auto max-w-full"
          >
            {children}
          </motion.div>
        )}
      </div>
    </div>
  )
}
