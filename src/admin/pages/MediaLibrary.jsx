import { useEffect, useRef, useState } from 'react'
import { Loader2, Upload, Copy, Check } from 'lucide-react'
import { api } from '../api'

export default function MediaLibrary() {
  const [items, setItems] = useState(null)
  const [uploading, setUploading] = useState(false)
  const [error, setError] = useState('')
  const [copied, setCopied] = useState('')
  const fileRef = useRef(null)

  const load = () => api.get('/media').then(setItems).catch((e) => setError(e.message))
  useEffect(() => {
    load()
  }, [])

  const upload = async (files) => {
    if (!files?.length) return
    setUploading(true)
    setError('')
    try {
      for (const file of files) await api.uploadMedia(file)
      await load()
    } catch (e) {
      setError(e.message)
    } finally {
      setUploading(false)
    }
  }

  const copy = (url) => {
    navigator.clipboard?.writeText(url)
    setCopied(url)
    setTimeout(() => setCopied(''), 1500)
  }

  return (
    <div>
      <div className="mb-6 flex items-center justify-between">
        <h1 className="text-2xl font-semibold text-navy">Media</h1>
        <button
          onClick={() => fileRef.current?.click()}
          disabled={uploading}
          className="inline-flex items-center gap-2 rounded-lg bg-crimson px-4 py-2 text-sm font-semibold text-white hover:bg-crimson-dark disabled:opacity-60"
        >
          {uploading ? <Loader2 size={16} className="animate-spin" /> : <Upload size={16} />}
          {uploading ? 'Uploading…' : 'Upload'}
        </button>
        <input ref={fileRef} type="file" accept="image/*" multiple hidden onChange={(e) => upload([...e.target.files])} />
      </div>

      {error && <p className="mb-4 rounded-lg bg-crimson/10 px-3 py-2 text-sm text-crimson">{error}</p>}

      {items === null ? (
        <div className="flex items-center gap-2 text-sm text-gray-400">
          <Loader2 size={16} className="animate-spin" /> Loading…
        </div>
      ) : items.length === 0 ? (
        <p className="rounded-xl border border-dashed border-gray-200 px-4 py-10 text-center text-sm text-gray-400">
          No media yet. Upload images to use across the site.
        </p>
      ) : (
        <div className="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4">
          {items.map((m) => (
            <div key={m.url} className="overflow-hidden rounded-xl border border-gray-200 bg-white">
              <div className="flex h-28 items-center justify-center bg-gray-50">
                <img src={m.url} alt={m.name} className="h-full w-full object-contain" />
              </div>
              <div className="flex items-center justify-between gap-2 px-3 py-2">
                <span className="truncate text-[11px] text-gray-500" title={m.name}>{m.name}</span>
                <button onClick={() => copy(m.url)} className="flex-shrink-0 text-gray-400 hover:text-crimson" title="Copy URL">
                  {copied === m.url ? <Check size={14} /> : <Copy size={14} />}
                </button>
              </div>
            </div>
          ))}
        </div>
      )}
    </div>
  )
}
