import { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import { Loader2, Plus, Pencil, Trash2, ExternalLink } from 'lucide-react'
import { api } from '../api'

export default function BlogList() {
  const [posts, setPosts] = useState(null)
  const [error, setError] = useState('')

  const load = () => api.get('/blog').then(setPosts).catch((e) => setError(e.message))
  useEffect(() => {
    load()
  }, [])

  const remove = async (slug) => {
    if (!confirm('Delete this post? This cannot be undone.')) return
    await api.del(`/blog/${slug}`)
    load()
  }

  return (
    <div>
      <div className="mb-6 flex items-center justify-between">
        <h1 className="text-2xl font-semibold text-navy">Blog Posts</h1>
        <Link
          to="/admin/blog/new"
          className="inline-flex items-center gap-2 rounded-lg bg-crimson px-4 py-2 text-sm font-semibold text-white hover:bg-crimson-dark"
        >
          <Plus size={16} /> New Post
        </Link>
      </div>

      {error && <p className="mb-4 rounded-lg bg-crimson/10 px-3 py-2 text-sm text-crimson">{error}</p>}

      {posts === null ? (
        <div className="flex items-center gap-2 text-sm text-gray-400">
          <Loader2 size={16} className="animate-spin" /> Loading…
        </div>
      ) : posts.length === 0 ? (
        <p className="rounded-xl border border-dashed border-gray-200 px-4 py-10 text-center text-sm text-gray-400">
          No posts yet. Create your first one.
        </p>
      ) : (
        <div className="divide-y divide-gray-100 overflow-hidden rounded-xl border border-gray-200 bg-white">
          {posts.map((post) => (
            <div key={post.slug} className="flex items-center gap-4 p-4 hover:bg-gray-50">
              <div className="h-12 w-16 flex-shrink-0 overflow-hidden rounded bg-gray-100">
                {post.image && <img src={post.image} alt="" className="h-full w-full object-cover" />}
              </div>
              <div className="min-w-0 flex-1">
                <p className="truncate font-semibold text-navy">{post.title}</p>
                <p className="text-xs text-gray-400">
                  {post.date} · {post.tag} · <span className="font-mono">{post.slug}</span>
                </p>
              </div>
              <div className="flex items-center gap-1">
                <a href={`/blog/${post.slug}`} target="_blank" rel="noreferrer" className="rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-navy" title="View">
                  <ExternalLink size={15} />
                </a>
                <Link to={`/admin/blog/${post.slug}`} className="rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-navy" title="Edit">
                  <Pencil size={15} />
                </Link>
                <button onClick={() => remove(post.slug)} className="rounded-md p-2 text-gray-400 hover:bg-crimson/10 hover:text-crimson" title="Delete">
                  <Trash2 size={15} />
                </button>
              </div>
            </div>
          ))}
        </div>
      )}
    </div>
  )
}
