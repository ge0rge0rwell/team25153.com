import { useState, useEffect } from 'react'
import { Link, useLocation } from 'react-router-dom'
import { Menu, X, ChevronDown } from 'lucide-react'
import { useCollection } from '../../context/ContentContext'

// Submenu entries (second level and deeper, rendered inside the dark panel).
function DropdownItem({ item, depth = 0 }) {
  const [open, setOpen] = useState(false)
  const location = useLocation()

  if (item.children) {
    return (
      <div
        className="nav-sub-item relative"
        onMouseEnter={() => setOpen(true)}
        onMouseLeave={() => setOpen(false)}
        // onFocus/onBlur bubble in React (focusin/focusout), so these also fire
        // for the links inside — that's what makes the submenu reachable by
        // keyboard. Without them the menu was mouse-only.
        onFocus={() => setOpen(true)}
        onBlur={(e) => {
          if (!e.currentTarget.contains(e.relatedTarget)) setOpen(false)
        }}
        onKeyDown={(e) => {
          if (e.key === 'Escape') setOpen(false)
        }}
      >
        <div className="flex items-center justify-between w-full px-4 py-2 text-xs font-semibold text-navy hover:text-crimson hover:bg-crimson-50 transition-colors">
          {item.to ? (
            <Link to={item.to} className="flex-1 text-left">{item.label}</Link>
          ) : (
            <button
              type="button"
              aria-expanded={open}
              aria-haspopup="true"
              onClick={() => setOpen((v) => !v)}
              className="flex-1 text-left uppercase tracking-wider font-medium"
            >
              {item.label}
            </button>
          )}
          <ChevronDown size={12} className={`ml-2 transition-transform ${open ? 'rotate-180' : ''}`} />
        </div>
        {open && (
          <div className="absolute left-full top-0 ml-1 min-w-[224px] bg-white border border-gray-200 rounded-xl shadow-xl py-2.5 z-50">
            {item.children.map((child) => (
              <DropdownItem key={child.label} item={child} depth={depth + 1} />
            ))}
          </div>
        )}
      </div>
    )
  }

  if (item.newTab) {
    return (
      <a
        href={item.to}
        target="_blank"
        rel="noopener noreferrer"
        className="block px-4 py-2 text-xs font-semibold transition-colors text-navy hover:text-crimson hover:bg-crimson-50"
      >
        {item.label}
      </a>
    )
  }

  return (
    <Link
      to={item.to}
      className={`block px-4 py-2 text-xs font-semibold transition-colors
        ${location.pathname === item.to ? 'text-crimson bg-crimson-50' : 'text-navy hover:text-crimson hover:bg-crimson-50'}`}
    >
      {item.label}
    </Link>
  )
}

// Top-level desktop nav entries.
function TopNavItem({ item }) {
  const [open, setOpen] = useState(false)
  const location = useLocation()

  if (item.children) {
    return (
      <div
        className="nav-item relative"
        onMouseEnter={() => setOpen(true)}
        onMouseLeave={() => setOpen(false)}
        onFocus={() => setOpen(true)}
        onBlur={(e) => {
          if (!e.currentTarget.contains(e.relatedTarget)) setOpen(false)
        }}
        onKeyDown={(e) => {
          if (e.key === 'Escape') setOpen(false)
        }}
      >
        <div className={`nav-underline flex items-center gap-1.5 py-2 text-[13px] font-bold uppercase tracking-wider transition-colors
          ${open ? 'text-crimson' : 'text-navy hover:text-crimson'}`}>
          {item.to ? (
            <Link to={item.to} className="flex-1">{item.label}</Link>
          ) : (
            <button
              type="button"
              aria-expanded={open}
              aria-haspopup="true"
              onClick={() => setOpen((v) => !v)}
              className="flex-1 uppercase tracking-wider font-medium"
            >
              {item.label}
            </button>
          )}
          <ChevronDown size={12} className={`transition-transform ${open ? 'rotate-180' : ''}`} />
        </div>
        {open && (
          <div className="absolute top-full left-0 mt-1 min-w-[224px] bg-white border border-gray-200 rounded-xl shadow-xl py-2.5 z-50">
            {item.children.map((child) => (
              <DropdownItem key={child.label} item={child} />
            ))}
          </div>
        )}
      </div>
    )
  }

  if (item.newTab) {
    return (
      <a
        href={item.to}
        target="_blank"
        rel="noopener noreferrer"
        className="px-3 py-2 text-sm font-medium uppercase tracking-wider transition-colors text-navy hover:text-navy-mid"
      >
        {item.label}
      </a>
    )
  }

  const isActive = location.pathname === item.to
  return (
    <Link
      to={item.to}
      aria-current={isActive ? 'page' : undefined}
      className={`nav-underline relative py-2 text-[13px] font-bold uppercase tracking-wider transition-colors
        ${isActive ? 'text-crimson' : 'text-navy hover:text-crimson'}`}
    >
      {item.label}
      {isActive && (
        <span className="absolute left-0 right-0 -bottom-0.5 h-0.5 bg-crimson" />
      )}
    </Link>
  )
}

function MobileNavItem({ item, onClose }) {
  const [open, setOpen] = useState(false)

  if (item.children) {
    return (
      <div>
        <div className="flex items-center justify-between w-full px-6 py-3 text-white font-medium uppercase tracking-wider border-b border-navy-mid/30 hover:bg-navy-light transition-colors">
          {item.to ? (
            <Link to={item.to} onClick={onClose} className="flex-1 text-left">{item.label}</Link>
          ) : (
            <button
              type="button"
              className="flex-1 text-left uppercase tracking-wider"
              aria-expanded={open}
              onClick={() => setOpen(!open)}
            >
              {item.label}
            </button>
          )}
          <button
            onClick={() => setOpen(!open)}
            className="p-1"
            aria-expanded={open}
            aria-label={`${open ? 'Collapse' : 'Expand'} ${item.label}`}
          >
            <ChevronDown size={16} className={`transition-transform ${open ? 'rotate-180' : ''}`} />
          </button>
        </div>
        {open && (
          <div className="bg-navy-light/50 overflow-hidden">
            {item.children.map((child) => (
              <MobileNavItem key={child.label} item={child} onClose={onClose} />
            ))}
          </div>
        )}
      </div>
    )
  }

  if (item.newTab) {
    return (
      <a
        href={item.to}
        target="_blank"
        rel="noopener noreferrer"
        onClick={onClose}
        className="block px-8 py-3 text-white/80 text-sm uppercase tracking-wider border-b border-navy-mid/20 hover:text-gold hover:bg-navy-light transition-colors"
      >
        {item.label}
      </a>
    )
  }

  return (
    <Link
      to={item.to}
      onClick={onClose}
      className="block px-8 py-3 text-white/80 text-sm uppercase tracking-wider border-b border-navy-mid/20 hover:text-gold hover:bg-navy-light transition-colors"
    >
      {item.label}
    </Link>
  )
}

export default function Navbar() {
  const [scrolled, setScrolled] = useState(false)
  const [mobileOpen, setMobileOpen] = useState(false)
  const navItems = useCollection('navigation').navItems || []

  useEffect(() => {
    // passive: this listener never calls preventDefault, and saying so lets the
    // browser keep scrolling on the compositor instead of waiting on JS.
    const handler = () => setScrolled(window.scrollY > 50)
    window.addEventListener('scroll', handler, { passive: true })
    return () => window.removeEventListener('scroll', handler)
  }, [])

  // Escape closes the drawer, and the page behind it must not scroll while
  // it's open — otherwise the background slides around under the overlay.
  useEffect(() => {
    if (!mobileOpen) return
    const onKey = (e) => e.key === 'Escape' && setMobileOpen(false)
    window.addEventListener('keydown', onKey)
    document.body.style.overflow = 'hidden'
    return () => {
      window.removeEventListener('keydown', onKey)
      document.body.style.overflow = ''
    }
  }, [mobileOpen])

  return (
    <>
      {/* Main Navbar */}
      <nav className={`sticky top-0 z-40 transition-all duration-300 ${
        scrolled ? 'bg-white/95 backdrop-blur-md shadow-md' : 'bg-white shadow-sm'
      }`}>
        <div className="max-w-[1360px] mx-auto px-5 sm:px-8 flex items-center justify-between h-20">
          {/* Logo */}
          <div className="flex-shrink-0">
            <Link to="/" className="group flex-shrink-0 py-2" aria-label="Cartesian Robotics — home">
              <img
                src="/uploads/cartesian-wordmark.png"
                alt="Cartesian Robotics"
                className="h-8 sm:h-9 w-auto max-w-[170px] sm:max-w-[200px] transition-transform duration-300 group-hover:scale-105"
                fetchPriority="high"
                decoding="async"
                onError={(e) => {
                  e.target.onerror = null
                  e.target.style.display = 'none'
                  e.target.nextSibling.style.display = 'flex'
                }}
              />
              <div className="hidden items-center gap-2" style={{display:'none'}}>
                <span className="text-crimson font-bold text-lg tracking-tight">CARTESIAN</span>
                <span className="text-navy text-xs font-medium">#25153</span>
              </div>
            </Link>
          </div>

          {/* Desktop Nav */}
          <div className="hidden lg:flex items-center gap-1">
            {navItems.map((item) => (
              <TopNavItem key={item.label} item={item} />
            ))}
          </div>

          {/* Mobile Menu Button */}
          <button
            className="lg:hidden p-2 text-navy hover:text-crimson transition-colors"
            onClick={() => setMobileOpen(!mobileOpen)}
            aria-label={mobileOpen ? 'Close menu' : 'Open menu'}
            aria-expanded={mobileOpen}
          >
            {mobileOpen ? <X size={24} /> : <Menu size={24} />}
          </button>
        </div>
      </nav>

      {/* Mobile Menu Overlay */}
      {mobileOpen && (
        <div className="fixed inset-0 z-50 lg:hidden" onClick={() => setMobileOpen(false)}>
          <div className="absolute inset-0 bg-black/50 backdrop-blur-sm animate-fade-in" />
          <div
            className="absolute top-0 right-0 bottom-0 w-72 bg-navy overflow-y-auto animate-slide-in-right"
            role="dialog"
            aria-modal="true"
            aria-label="Site menu"
            onClick={(e) => e.stopPropagation()}
          >
            <div className="flex items-center justify-between px-6 py-4 border-b border-navy-mid/50">
              <span className="text-white font-bold uppercase tracking-wider text-sm">Menu</span>
              <button
                onClick={() => setMobileOpen(false)}
                className="text-white/70 hover:text-white"
                aria-label="Close menu"
              >
                <X size={20} />
              </button>
            </div>
            <div>
              {navItems.map((item) => (
                <MobileNavItem key={item.label} item={item} onClose={() => setMobileOpen(false)} />
              ))}
            </div>
          </div>
        </div>
      )}
    </>
  )
}
