import { Link } from 'react-router-dom'
import {
  Home, Menu as MenuIcon, Bot, Trophy, BookOpen, FileText, HandCoins,
  Newspaper, Image, Users, Users2, ArrowRight, Mail,
} from 'lucide-react'
import { useAuth } from '../AuthContext'
import { schemas, collectionOrder } from '../schemas'

const icons = { Home, Menu: MenuIcon, Bot, Trophy, BookOpen, FileText, HandCoins }

export default function Dashboard() {
  const { user } = useAuth()

  const cards = [
    ...collectionOrder.map((name) => ({
      to: `/cms/collections/${name}`,
      label: schemas[name].label,
      Icon: icons[schemas[name].icon] || FileText,
      desc: 'Edit content',
    })),
    { to: '/cms/blog', label: 'Blog Posts', Icon: Newspaper, desc: 'Write & manage posts' },
    { to: '/cms/applications', label: 'Applications', Icon: Users2, desc: 'View membership submissions' },
    { to: '/cms/messages', label: 'Messages', Icon: Mail, desc: 'Read contact enquiries' },
    { to: '/cms/media', label: 'Media', Icon: Image, desc: 'Upload images' },
    { to: '/cms/users', label: 'Users', Icon: Users, desc: 'Manage editors' },
  ]

  return (
    <div>
      <div className="mb-8">
        <h1 className="text-2xl font-semibold text-navy">
          Welcome back, {user?.name?.split(' ')[0] || user?.username} 👋
        </h1>
        <p className="mt-1 text-sm text-gray-500">
          Pick a section to edit. Changes go live on the site as soon as you save.
        </p>
      </div>

      <div className="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
        {cards.map(({ to, label, Icon, desc }) => (
          <Link
            key={to}
            to={to}
            className="group flex items-start gap-4 rounded-xl border border-gray-200 bg-white p-5 transition-all hover:-translate-y-0.5 hover:border-crimson/40 hover:shadow-md"
          >
            <div className="flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-lg bg-crimson/10 text-crimson">
              <Icon size={20} />
            </div>
            <div className="min-w-0 flex-1">
              <p className="font-semibold text-navy">{label}</p>
              <p className="text-xs text-gray-400">{desc}</p>
            </div>
            <ArrowRight size={16} className="mt-1 text-gray-300 transition-colors group-hover:text-crimson" />
          </Link>
        ))}
      </div>
    </div>
  )
}
