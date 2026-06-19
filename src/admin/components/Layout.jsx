import { useState } from 'react'
import { NavLink, useNavigate } from 'react-router-dom'
import {
  Home, Menu as MenuIcon, Bot, Trophy, BookOpen, FileText, HandCoins,
  Newspaper, Image, Users, Users2, Settings, LogOut, ExternalLink, X, PanelLeft,
} from 'lucide-react'
import { useAuth } from '../AuthContext'
import { schemas, collectionOrder } from '../schemas'

const icons = { Home, Menu: MenuIcon, Bot, Trophy, BookOpen, FileText, HandCoins }

export default function Layout({ children }) {
  const { user, logout } = useAuth()
  const navigate = useNavigate()
  const [open, setOpen] = useState(false)

  const doLogout = () => {
    logout()
    navigate('/cms')
  }

  const link = ({ isActive }) =>
    `flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition-colors ${
      isActive ? 'bg-crimson text-white' : 'text-white/70 hover:bg-white/10 hover:text-white'
    }`

  return (
    <div className="min-h-screen bg-gray-100 font-roboto">
      {/* Sidebar */}
      <aside
        className={`fixed inset-y-0 left-0 z-40 flex w-64 flex-col bg-navy transition-transform lg:translate-x-0 ${
          open ? 'translate-x-0' : '-translate-x-full'
        }`}
      >
        <div className="flex items-center justify-between px-5 py-4">
          <div>
            <p className="text-sm font-bold uppercase tracking-wider text-white">Cartesian</p>
            <p className="text-[11px] text-white/40">Content Manager</p>
          </div>
          <button onClick={() => setOpen(false)} className="text-white/50 hover:text-white lg:hidden">
            <X size={20} />
          </button>
        </div>

        <nav className="flex-1 space-y-1 overflow-y-auto px-3 py-2">
          <NavLink to="/cms" end className={link} onClick={() => setOpen(false)}>
            <Home size={17} /> Dashboard
          </NavLink>

          <p className="px-3 pb-1 pt-4 text-[10px] font-bold uppercase tracking-wider text-white/30">Content</p>
          {collectionOrder.map((name) => {
            const Icon = icons[schemas[name].icon] || FileText
            return (
              <NavLink key={name} to={`/cms/collections/${name}`} className={link} onClick={() => setOpen(false)}>
                <Icon size={17} /> {schemas[name].label}
              </NavLink>
            )
          })}
          <NavLink to="/cms/blog" className={link} onClick={() => setOpen(false)}>
            <Newspaper size={17} /> Blog Posts
          </NavLink>
          <NavLink to="/cms/applications" className={link} onClick={() => setOpen(false)}>
            <Users2 size={17} /> Applications
          </NavLink>

          <p className="px-3 pb-1 pt-4 text-[10px] font-bold uppercase tracking-wider text-white/30">Site</p>
          <NavLink to="/cms/media" className={link} onClick={() => setOpen(false)}>
            <Image size={17} /> Media
          </NavLink>
          <NavLink to="/cms/users" className={link} onClick={() => setOpen(false)}>
            <Users size={17} /> Users
          </NavLink>
          <NavLink to="/cms/settings" className={link} onClick={() => setOpen(false)}>
            <Settings size={17} /> Settings
          </NavLink>
        </nav>

        <div className="border-t border-white/10 p-3">
          <a
            href="/"
            target="_blank"
            rel="noreferrer"
            className="mb-1 flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium text-white/70 hover:bg-white/10 hover:text-white"
          >
            <ExternalLink size={17} /> View Site
          </a>
          <button
            onClick={doLogout}
            className="flex w-full items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium text-white/70 hover:bg-white/10 hover:text-white"
          >
            <LogOut size={17} /> Log out
          </button>
        </div>
      </aside>

      {open && <div className="fixed inset-0 z-30 bg-black/40 lg:hidden" onClick={() => setOpen(false)} />}

      {/* Main */}
      <div className="lg:pl-64">
        <header className="sticky top-0 z-20 flex h-14 items-center justify-between border-b border-gray-200 bg-white px-4 lg:px-8">
          <button onClick={() => setOpen(true)} className="text-gray-500 lg:hidden">
            <PanelLeft size={20} />
          </button>
          <div className="hidden lg:block" />
          <div className="flex items-center gap-3">
            <span className="text-sm text-gray-500">
              {user?.name || user?.username}
              {user?.role === 'admin' && (
                <span className="ml-2 rounded-full bg-crimson/10 px-2 py-0.5 text-[10px] font-bold uppercase text-crimson">
                  Admin
                </span>
              )}
            </span>
            <div className="flex h-8 w-8 items-center justify-center rounded-full bg-navy text-xs font-bold text-white">
              {(user?.name || user?.username || '?').charAt(0).toUpperCase()}
            </div>
          </div>
        </header>

        <main className="mx-auto max-w-4xl px-4 py-6 lg:px-8 lg:py-8">{children}</main>
      </div>
    </div>
  )
}
