import { useEffect, useState } from 'react'
import { useParams, useNavigate, Link } from 'react-router-dom'
import { Loader2, ArrowLeft, Eye } from 'lucide-react'
import { marked } from 'marked'
import { api } from '../api'
import { blogTags } from '../schemas'
import { LabeledField } from '../fields/Field'
import { SaveButton } from './DocumentEditor'

const blank = {
  title: '',
  date: '',
  order: 1,
  readTime: '5 min read',
  tag: blogTags[0],
  excerpt: '',
  image: '',
  body: '',
}

export default function BlogEditor() {
  const { slug } = useParams()
  const isNew = !slug
  const navigate = useNavigate()

  const [post, setPost] = useState(isNew ? blank : null)
  const [loading, setLoading] = useState(!isNew)
  const [saving, setSaving] = useState(false)
  const [saved, setSaved] = useState(false)
  const [error, setError] = useState('')
  const [preview, setPreview] = useState(false)

  useEffect(() => {
    if (isNew) return
    api
      .get(`/blog/${slug}`)
      .then((p) => setPost({ ...blank, ...p }))
      .catch((e) => setError(e.message))
      .finally(() => setLoading(false))
  }, [slug, isNew])

  const set = (k, v) => setPost((p) => ({ ...p, [k]: v }))

  const save = async () => {
    if (!post.title.trim()) {
      setError('A title is required.')
      return
    }
    setSaving(true)
    setError('')
    try {
      const payload = { ...post, order: Number(post.order) || 1 }
      const result = isNew
        ? await api.post('/blog', payload)
        : await api.put(`/blog/${slug}`, payload)
      setSaved(true)
      setTimeout(() => setSaved(false), 2500)
      // If creating (or the slug changed), move to the canonical edit URL.
      if (result?.slug && result.slug !== slug) {
        navigate(`/cms/blog/${result.slug}`, { replace: true })
      }
    } catch (e) {
      setError(e.message)
    } finally {
      setSaving(false)
    }
  }

  if (loading)
    return (
      <div className="flex items-center gap-2 text-sm text-gray-400">
        <Loader2 size={16} className="animate-spin" /> Loading…
      </div>
    )

  return (
    <div>
      <div className="mb-6 flex items-center justify-between">
        <Link to="/cms/blog" className="inline-flex items-center gap-1.5 text-sm text-gray-500 hover:text-crimson">
          <ArrowLeft size={16} /> All posts
        </Link>
        <SaveButton saving={saving} saved={saved} onSave={save} />
      </div>

      <h1 className="mb-6 text-2xl font-semibold text-navy">{isNew ? 'New Post' : 'Edit Post'}</h1>
      {error && <p className="mb-4 rounded-lg bg-crimson/10 px-3 py-2 text-sm text-crimson">{error}</p>}

      <div className="space-y-5 rounded-xl border border-gray-200 bg-white p-5">
        <LabeledField field={{ label: 'Title', type: 'string' }} value={post.title} onChange={(v) => set('title', v)} />

        <div className="grid grid-cols-1 gap-5 sm:grid-cols-3">
          <LabeledField field={{ label: 'Date', type: 'string', placeholder: 'April 2026' }} value={post.date} onChange={(v) => set('date', v)} />
          <LabeledField field={{ label: 'Read Time', type: 'string' }} value={post.readTime} onChange={(v) => set('readTime', v)} />
          <LabeledField field={{ label: 'Order', type: 'number' }} value={post.order} onChange={(v) => set('order', v)} />
        </div>

        <LabeledField field={{ label: 'Tag', type: 'select', options: blogTags }} value={post.tag} onChange={(v) => set('tag', v)} />
        <LabeledField field={{ label: 'Excerpt', type: 'text' }} value={post.excerpt} onChange={(v) => set('excerpt', v)} />
        <LabeledField field={{ label: 'Header Image', type: 'image' }} value={post.image} onChange={(v) => set('image', v)} />

        <div>
          <div className="mb-1.5 flex items-center justify-between">
            <label className="block text-sm font-medium text-gray-700">Body (Markdown)</label>
            <button
              type="button"
              onClick={() => setPreview((p) => !p)}
              className="inline-flex items-center gap-1 text-xs text-gray-400 hover:text-crimson"
            >
              <Eye size={13} /> {preview ? 'Edit' : 'Preview'}
            </button>
          </div>
          {preview ? (
            <div
              className="prose prose-sm max-w-none rounded-lg border border-gray-200 bg-gray-50 p-4"
              dangerouslySetInnerHTML={{ __html: marked.parse(post.body || '') }}
            />
          ) : (
            <LabeledField field={{ label: '', type: 'markdown' }} value={post.body} onChange={(v) => set('body', v)} />
          )}
        </div>
      </div>

      <div className="mt-6 flex justify-end">
        <SaveButton saving={saving} saved={saved} onSave={save} />
      </div>
    </div>
  )
}
