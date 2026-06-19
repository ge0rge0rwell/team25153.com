import { useParams, Link } from 'react-router-dom'
import { marked } from 'marked'
import PageBanner from '../components/ui/PageBanner'
import { ArrowLeft, Calendar, Clock } from 'lucide-react'
import { useCollection } from '../context/ContentContext'

export default function BlogPost() {
  const { slug } = useParams()
  const post = useCollection('blog').find((p) => p.slug === slug) || null

  if (!post) {
    return (
      <div className="min-h-screen flex items-center justify-center bg-gray-50">
        <div className="text-center px-6">
          <h1 className="text-2xl font-medium text-navy mb-2">Post Not Found</h1>
          <Link to="/blog" className="btn-primary mt-4">Back to Blog</Link>
        </div>
      </div>
    )
  }

  return (
    <div>
      <PageBanner
        title={post.title}
        breadcrumbs={[
          { label: 'Blog', to: '/blog' },
          { label: 'Post' },
        ]}
      />

      <section className="py-20 bg-white">
        <div className="max-w-3xl mx-auto px-6">
          <Link to="/blog" className="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-crimson mb-8 transition-colors">
            <ArrowLeft size={16} /> Back to Blog
          </Link>

          <article>
            <div className="mb-8">
              <span className="text-[10px] font-bold uppercase px-3 py-1 rounded-full bg-crimson/10 text-crimson inline-block mb-4">
                {post.tag}
              </span>
              <h1 className="text-4xl font-bold text-navy mb-4 leading-tight">{post.title}</h1>
              <div className="flex items-center gap-4 text-sm text-gray-500">
                <span className="flex items-center gap-1.5"><Calendar size={14} /> {post.date}</span>
                <span className="flex items-center gap-1.5"><Clock size={14} /> {post.readTime}</span>
              </div>
            </div>

            {post.image && (
              <img
                src={post.image}
                alt={post.title}
                loading="lazy"
                decoding="async"
                className="w-full h-80 object-cover rounded-2xl mb-10 shadow-md"
              />
            )}

            <div
              className="prose prose-lg max-w-none text-gray-600 prose-headings:text-navy prose-blockquote:border-crimson prose-blockquote:bg-gray-50 prose-a:text-crimson"
              dangerouslySetInnerHTML={{ __html: marked.parse(post.body || '') }}
            />
          </article>
        </div>
      </section>
    </div>
  )
}
