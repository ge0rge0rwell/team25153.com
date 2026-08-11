import PageBanner from '../components/ui/PageBanner'
import { Calendar, Clock, ArrowRight } from 'lucide-react'
import { Link } from 'react-router-dom'
import { motion } from 'framer-motion'
import Reveal from '../components/motion/Reveal'
import { StaggerGroup, StaggerItem } from '../components/motion/Stagger'
import { useCollection } from '../context/ContentContext'

const MotionLink = motion.create(Link)

const tagColors = {
  'Season Recap': 'bg-crimson/10 text-crimson',
  Strategy: 'bg-navy/10 text-navy',
  Outreach: 'bg-gold/20 text-yellow-700',
}

export default function Blog() {
  const posts = useCollection('blog')
  return (
    <div>
      <PageBanner title="Blog" breadcrumbs={[{ label: 'Blog' }]} />

      <section className="py-12 md:py-20 bg-white">
        <div className="max-w-6xl mx-auto px-6">
          <Reveal className="mb-12">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2 flex items-center gap-2">
              <span className="w-6 h-px bg-crimson" /> From the Team
            </p>
            <h2 className="text-3xl font-medium text-navy mb-1">Latest Posts</h2>
            <div className="w-10 h-0.5 bg-gold" />
          </Reveal>

          <StaggerGroup as="div" staggerChildren={0.1} className="grid grid-cols-1 md:grid-cols-3 gap-8">
            {posts.map((post) => (
              <StaggerItem key={post.slug}>
                <MotionLink
                  to={`/blog/${post.slug}`}
                  whileHover={{ y: -6 }}
                  transition={{ type: 'spring', stiffness: 350, damping: 24 }}
                  className="card flex flex-col border border-gray-100 group cursor-pointer"
                >
                  <div className="h-48 overflow-hidden bg-gray-50 flex items-center justify-center">
                    <img
                      src={post.image}
                      alt={post.title}
                      loading="lazy"
                      decoding="async"
                      className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                    />
                  </div>
                  <div className="p-6 flex flex-col flex-1">
                    <div className="flex items-center gap-3 mb-3">
                      <span className={`text-[10px] font-bold uppercase px-2 py-0.5 rounded-full ${tagColors[post.tag] || 'bg-gray-100 text-gray-600'}`}>
                        {post.tag}
                      </span>
                    </div>
                    <h3 className="text-navy font-semibold text-base leading-snug mb-3 group-hover:text-crimson transition-colors">
                      {post.title}
                    </h3>
                    <p className="text-gray-500 text-sm leading-relaxed flex-1">{post.excerpt}</p>
                    <div className="mt-5 flex items-center justify-between text-xs text-gray-400">
                      <span className="flex items-center gap-1"><Calendar size={12} /> {post.date}</span>
                      <span className="flex items-center gap-1"><Clock size={12} /> {post.readTime}</span>
                    </div>
                    <div className="mt-4 flex items-center gap-1 text-crimson text-sm font-medium group-hover:gap-2 transition-all">
                      Read more <ArrowRight size={13} />
                    </div>
                  </div>
                </MotionLink>
              </StaggerItem>
            ))}
          </StaggerGroup>
        </div>
      </section>
    </div>
  )
}
