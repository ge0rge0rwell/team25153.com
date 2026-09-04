import { Link } from 'react-router-dom'
import { Mail, MapPin, ArrowUp } from 'lucide-react'
import { FaInstagram } from 'react-icons/fa'
import { useCollection } from '../../context/ContentContext'
import { StaggerGroup, StaggerItem } from '../motion/Stagger'

export default function Footer() {
  const scrollTop = () => window.scrollTo({ top: 0, behavior: 'smooth' })
  const footerLinks = useCollection('navigation').footerLinks || []

  return (
    <footer className="bg-navy text-white border-t-2 border-gold">
      {/* Main Footer */}
      <StaggerGroup as="div" amount={0.1} className="max-w-[1360px] mx-auto px-5 sm:px-8 py-16 grid grid-cols-1 md:grid-cols-12 gap-10">
        {/* Brand */}
        <StaggerItem className="md:col-span-5">
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
        </StaggerItem>

        {/* Quick Links */}
        <StaggerItem className="md:col-span-3">
          <h3 className="font-mono text-gold font-bold uppercase tracking-[0.2em] text-xs mb-5 flex items-center gap-1.5">
            <span aria-hidden="true">—</span> Quick Links
          </h3>
          <ul className="space-y-2.5">
            {footerLinks.map((link) => (
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
        </StaggerItem>

        {/* Contact Info */}
        <StaggerItem className="md:col-span-4">
          <h3 className="font-mono text-gold font-bold uppercase tracking-[0.2em] text-xs mb-5 flex items-center gap-1.5">
            <span aria-hidden="true">—</span> Contact
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
              aria-label="Cartesian Robotics on Instagram"
              className="w-9 h-9 rounded-full bg-navy-mid hover:bg-crimson flex items-center justify-center transition-colors duration-300"
            >
              <FaInstagram size={16} aria-hidden="true" />
            </a>
          </div>
        </StaggerItem>
      </StaggerGroup>

      {/* Bottom Bar */}
      <div className="border-t border-white/10">
        <div className="max-w-[1360px] mx-auto px-5 sm:px-8 py-6 flex flex-col sm:flex-row items-center justify-between gap-3">
          <p className="text-white/60 text-xs">
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
