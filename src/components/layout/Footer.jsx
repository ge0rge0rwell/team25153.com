import { Link } from 'react-router-dom'
import { Mail, MapPin, ArrowUp } from 'lucide-react'
import { FaInstagram } from 'react-icons/fa'

export default function Footer() {
  const scrollTop = () => window.scrollTo({ top: 0, behavior: 'smooth' })

  return (
    <footer className="bg-navy text-white">
      {/* Main Footer */}
      <div className="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-3 gap-12">
        {/* Brand */}
        <div>
          <img
            src="/cartesian-logo-transparent.png"
            alt="Cartesian Robotics"
            className="h-10 w-auto mb-4"
            loading="lazy"
            decoding="async"
            style={{ filter: 'brightness(0) invert(1)' }}
          />
          <p className="text-white/60 text-sm leading-relaxed mb-6">
            A student-led FTC robotics team that believes in the power of thinking and creating.
          </p>
          <p className="text-gold font-medium italic text-sm">"I think, therefore I can."</p>
        </div>

        {/* Quick Links */}
        <div>
          <h3 className="text-white font-semibold uppercase tracking-widest text-xs mb-5 flex items-center gap-2">
            <span className="w-6 h-0.5 bg-gold inline-block"></span> Quick Links
          </h3>
          <ul className="space-y-2.5">
            {[
              { label: 'Team Overview', to: '/team' },
              { label: 'Our Robots', to: '/robots/cerberon' },
              { label: 'Portfolio', to: '/portfolio/age' },
              { label: 'Resources', to: '/resources/decoding-ftc' },
              { label: 'Blog', to: '/blog' },
              { label: 'Sponsorship', to: '/sponsorship' },
              { label: 'Contact Us', to: '/contact' },
            ].map((link) => (
              <li key={link.to}>
                <Link
                  to={link.to}
                  className="text-white/60 hover:text-gold text-sm transition-colors flex items-center gap-2 group"
                >
                  <span className="w-3 h-px bg-gold/40 group-hover:w-5 group-hover:bg-gold transition-all duration-300"></span>
                  {link.label}
                </Link>
              </li>
            ))}
          </ul>
        </div>

        {/* Contact Info */}
        <div>
          <h3 className="text-white font-semibold uppercase tracking-widest text-xs mb-5 flex items-center gap-2">
            <span className="w-6 h-0.5 bg-gold inline-block"></span> Contact
          </h3>
          <ul className="space-y-4">
            <li className="flex items-start gap-3 text-sm text-white/60">
              <MapPin size={16} className="text-gold mt-0.5 flex-shrink-0" />
              <span>ODTÜ Geliştirme Vakfı Ankara Okulları<br />
              Üniversiteler, İhsan Doğramacı Blv No:5,<br />
              06800 Çankaya/Ankara</span>
            </li>
            <li className="flex items-center gap-3 text-sm text-white/60">
              <Mail size={16} className="text-gold flex-shrink-0" />
              <a href="mailto:cartesian25153@gmail.com" className="hover:text-gold transition-colors">
                cartesian25153@gmail.com
              </a>
            </li>
            <li className="flex items-center gap-3 text-sm text-white/60">
              <FaInstagram size={16} className="text-gold flex-shrink-0" />
              <a
                href="https://www.instagram.com/cartesian25153/"
                target="_blank"
                rel="noopener noreferrer"
                className="hover:text-gold transition-colors"
              >
                @cartesian25153
              </a>
            </li>
          </ul>

          {/* Social Icons */}
          <div className="flex gap-3 mt-6">
            <a
              href="https://www.instagram.com/cartesian25153/"
              target="_blank"
              rel="noopener noreferrer"
              className="w-9 h-9 rounded-full bg-navy-mid hover:bg-crimson flex items-center justify-center transition-colors duration-300"
            >
              <FaInstagram size={16} />
            </a>
          </div>
        </div>
      </div>

      {/* Bottom Bar */}
      <div className="border-t border-white/10">
        <div className="max-w-7xl mx-auto px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-3">
          <p className="text-white/40 text-xs">
            © {new Date().getFullYear()} Cartesian Robotics #25153. All rights reserved.
          </p>
          <button
            onClick={scrollTop}
            className="w-8 h-8 rounded-full bg-navy-mid hover:bg-crimson flex items-center justify-center transition-colors duration-300"
            aria-label="Back to top"
          >
            <ArrowUp size={14} />
          </button>
        </div>
      </div>
    </footer>
  )
}
