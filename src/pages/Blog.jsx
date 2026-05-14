import PageBanner from '../components/ui/PageBanner'
import { Calendar, Clock, ArrowRight } from 'lucide-react'
import { Link } from 'react-router-dom'

const posts = [
  {
    id: 1,
    date: 'April 2026',
    readTime: '4 min read',
    title: 'Reflecting on Decode: What We Learned Building Cerberon',
    excerpt: "The 2025–26 FTC Decode season pushed us to our limits. Here's a deep-dive into the design decisions that shaped Cerberon and the lessons we took away from the competition floor.",
    tag: 'Season Recap',
    image: 'https://team25153.com/wp-content/uploads/2026/04/logo-removebg-preview-300x300.png',
  },
  {
    id: 2,
    date: 'January 2026',
    readTime: '6 min read',
    title: 'How We Approach Game Analysis Before Build Season',
    excerpt: "Every season starts the same way: we watch the game reveal video and immediately start breaking it down. Here's our structured approach to game analysis and how it shapes our robot design.",
    tag: 'Strategy',
    image: 'https://team25153.com/wp-content/uploads/2025/11/WhatsApp-Image-2025-11-01-at-19.43.57-1024x768.jpeg',
  },
  {
    id: 3,
    date: 'October 2025',
    readTime: '3 min read',
    title: 'STEM Outreach: Our Workshop at ODTÜ Schools',
    excerpt: 'We hosted a robotics introductory workshop for 6th graders at our school. Over 40 students got their first taste of FTC game design and robot programming.',
    tag: 'Outreach',
    image: 'https://team25153.com/wp-content/uploads/2025/11/WhatsApp-Image-2025-11-01-at-19.43.57-1024x768.jpeg',
  },
]

const tagColors = {
  'Season Recap': 'bg-crimson/10 text-crimson',
  Strategy: 'bg-navy/10 text-navy',
  Outreach: 'bg-gold/20 text-yellow-700',
}

export default function Blog() {
  return (
    <div>
      <PageBanner title="Blog" breadcrumbs={[{ label: 'Blog' }]} />

      <section className="py-20 bg-white">
        <div className="max-w-6xl mx-auto px-6">
          <div className="mb-12">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2 flex items-center gap-2">
              <span className="w-6 h-px bg-crimson" /> From the Team
            </p>
            <h2 className="text-3xl font-medium text-navy mb-1">Latest Posts</h2>
            <div className="w-10 h-0.5 bg-gold" />
          </div>

          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            {posts.map((post) => (
              <article key={post.id} className="card flex flex-col border border-gray-100 group cursor-pointer">
                <div className="h-48 overflow-hidden bg-gray-50 flex items-center justify-center">
                  <img
                    src={post.image}
                    alt={post.title}
                    className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                  />
                </div>
                <div className="p-6 flex flex-col flex-1">
                  <div className="flex items-center gap-3 mb-3">
                    <span className={`text-[10px] font-bold uppercase px-2 py-0.5 rounded-full ${tagColors[post.tag]}`}>
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
              </article>
            ))}
          </div>
        </div>
      </section>
    </div>
  )
}
