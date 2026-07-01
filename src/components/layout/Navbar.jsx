import { useState, useEffect } from 'react'
import { Link, useLocation } from 'react-router-dom'
import { Menu, X, ChevronDown, Search } from 'lucide-react'
import { useCollection } from '../../context/ContentContext'

function DropdownItem({ item, depth = 0 }) {
  const [open, setOpen] = useState(false)
  const location = useLocation()

  if (item.children) {
    return (
      <div
        className={depth === 0 ? 'nav-sub-item relative' : 'nav-sub-item relative'}
        onMouseEnter={() => setOpen(true)}
        onMouseLeave={() => setOpen(false)}
      >
        <div className="flex items-center justify-between w-full px-5 py-2.5 text-sm text-white/80 hover:text-gold hover:bg-navy-light transition-colors uppercase tracking-wider font-medium">
          {item.to ? (
            <Link to={item.to} className="flex-1 text-left">{item.label}</Link>
          ) : (
            <span className="flex-1 text-left cursor-default">{item.label}</span>
          )}
          <ChevronDown size={12} className={`ml-2 transition-transform ${open ? 'rotate-180' : ''}`} />
        </div>
        {open && (
          <div className="absolute left-full top-0 min-w-[200px] bg-navy shadow-2xl py-2 z-50 border-t-2 border-gold">
            {item.children.map((child) => (
              <DropdownItem key={child.label} item={child} depth={depth + 1} />
            ))}
          </div>
        )}
      </div>
    )
  }

  return (
    <Link
      to={item.to}
      className={`block px-5 py-2.5 text-sm uppercase tracking-wider font-medium transition-colors
        ${location.pathname === item.to ? 'text-gold' : 'text-white/80 hover:text-gold hover:bg-navy-light'}`}
    >
      {item.label}
    </Link>
  )
}

function TopNavItem({ item }) {
  const [open, setOpen] = useState(false)
  const location = useLocation()

  if (item.children) {
    return (
      <div
        className="nav-item relative"
        onMouseEnter={() => setOpen(true)}
        onMouseLeave={() => setOpen(false)}
      >
        <div className={`flex items-center gap-1 px-3 py-2 text-sm font-medium uppercase tracking-wider transition-colors
          ${open ? 'text-navy-mid' : 'text-navy hover:text-navy-mid'}`}>
          {item.to ? (
            <Link to={item.to} className="flex-1">{item.label}</Link>
          ) : (
            <span className="flex-1 cursor-default">{item.label}</span>
          )}
          <ChevronDown size={12} className={`transition-transform ${open ? 'rotate-180' : ''}`} />
        </div>
        {open && (
          <div className="absolute top-full left-0 min-w-[200px] bg-navy shadow-2xl py-2 z-50 border-t-2 border-gold">
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

  return (
    <Link
      to={item.to}
      className={`px-3 py-2 text-sm font-medium uppercase tracking-wider transition-colors
        ${location.pathname === item.to ? 'text-navy-mid' : 'text-navy hover:text-navy-mid'}`}
    >
      {item.label}
    </Link>
  )
}

function MobileNavItem({ item, onClose }) {
  const [open, setOpen] = useState(false)

  if (item.children) {
    return (
      <div>
        <div
          className="flex items-center justify-between w-full px-6 py-3 text-white font-medium uppercase tracking-wider border-b border-navy-mid/30 hover:bg-navy-light transition-colors"
        >
          {item.to ? (
            <Link to={item.to} onClick={onClose} className="flex-1 text-left">{item.label}</Link>
          ) : (
            <span className="flex-1 text-left" onClick={() => setOpen(!open)}>{item.label}</span>
          )}
          <button onClick={() => setOpen(!open)} className="p-1">
            <ChevronDown size={16} className={`transition-transform ${open ? 'rotate-180' : ''}`} />
          </button>
        </div>
        {open && (
          <div className="bg-navy-light/50">
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
    const handler = () => setScrolled(window.scrollY > 50)
    window.addEventListener('scroll', handler)
    return () => window.removeEventListener('scroll', handler)
  }, [])

  return (
    <>
      {/* Top Bar */}
      <div className="bg-crimson text-white/80 text-xs py-1.5 px-4 hidden md:block">
        <div className="max-w-7xl mx-auto flex justify-end items-center gap-4">
          <div className="flex items-center gap-2">
            <a href="/tr" className="flex items-center gap-1 hover:text-white transition-colors">
              <span>🇹🇷</span> TR
            </a>
            <span className="opacity-40">|</span>
            <a href="/" className="flex items-center gap-1 hover:text-white transition-colors text-white">
              <span>🇬🇧</span> EN
            </a>
          </div>
        </div>
      </div>

      {/* Main Navbar */}
      <nav className={`sticky top-0 z-40 transition-all duration-300 ${
        scrolled ? 'bg-white/95 backdrop-blur-md shadow-md' : 'bg-white shadow-sm'
      }`}>
        <div className="max-w-7xl mx-auto px-4 flex items-center justify-between h-16">
          {/* Logo */}
          <Link to="/" className="flex-shrink-0">
            <img
              src="https://team25153.com/wp-content/uploads/2025/11/Cartesian-Font-Vector-scaled-1.png"
              alt="Cartesian Robotics"
              className="h-8 sm:h-10 w-auto max-w-[160px] sm:max-w-[192px]"
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
            aria-label="Toggle menu"
          >
            {mobileOpen ? <X size={24} /> : <Menu size={24} />}
          </button>
        </div>
      </nav>

      {/* Mobile Menu Overlay */}
      {mobileOpen && (
        <div className="fixed inset-0 z-50 lg:hidden" onClick={() => setMobileOpen(false)}>
          <div className="absolute inset-0 bg-black/50 backdrop-blur-sm" />
          <div
            className="absolute top-0 right-0 bottom-0 w-72 bg-navy overflow-y-auto"
            onClick={(e) => e.stopPropagation()}
          >
            <div className="flex items-center justify-between px-6 py-4 border-b border-navy-mid/50">
              <span className="text-white font-bold uppercase tracking-wider text-sm">Menu</span>
              <button onClick={() => setMobileOpen(false)} className="text-white/70 hover:text-white">
                <X size={20} />
              </button>
            </div>
            <div>
              {navItems.map((item) => (
                <MobileNavItem key={item.label} item={item} onClose={() => setMobileOpen(false)} />
              ))}
            </div>
            <div className="px-6 py-4 border-t border-navy-mid/30 flex gap-3 mt-4">
              <a href="/tr" className="flex items-center gap-1 text-white/60 text-sm hover:text-white">🇹🇷 TR</a>
              <span className="text-white/30">|</span>
              <a href="/" className="flex items-center gap-1 text-white text-sm">🇬🇧 EN</a>
            </div>
          </div>
        </div>
      )}
    </>
  )
}
