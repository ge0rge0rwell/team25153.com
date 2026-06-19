import { useEffect, useRef, useState } from 'react'
import { Upload, Image as ImageIcon, X, Loader2 } from 'lucide-react'
import { api } from '../api'

// Image input: type/paste a URL, upload a new file, or pick from the library.
export default function ImageField({ value, onChange, placeholder }) {
  const [uploading, setUploading] = useState(false)
  const [pickerOpen, setPickerOpen] = useState(false)
  const [error, setError] = useState('')
  const fileRef = useRef(null)

  const upload = async (file) => {
    if (!file) return
    setUploading(true)
    setError('')
    try {
      const { url } = await api.uploadMedia(file)
      onChange(url)
    } catch (e) {
      setError(e.message)
    } finally {
      setUploading(false)
    }
  }

  return (
    <div>
      <div className="flex items-start gap-3">
        <div className="h-16 w-16 flex-shrink-0 overflow-hidden rounded-lg border border-gray-200 bg-gray-50 flex items-center justify-center">
          {value ? (
            <img src={value} alt="" className="h-full w-full object-contain" />
          ) : (
            <ImageIcon size={20} className="text-gray-300" />
          )}
        </div>
        <div className="flex-1 min-w-0">
          <input
            type="text"
            value={value || ''}
            onChange={(e) => onChange(e.target.value)}
            placeholder={placeholder || 'https://… or /uploads/…'}
            className="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm outline-none focus:border-crimson focus:ring-1 focus:ring-crimson"
          />
          <div className="mt-2 flex flex-wrap gap-2">
            <button
              type="button"
              onClick={() => fileRef.current?.click()}
              disabled={uploading}
              className="inline-flex items-center gap-1.5 rounded-md bg-navy px-3 py-1.5 text-xs font-medium text-white hover:bg-navy-mid disabled:opacity-50"
            >
              {uploading ? <Loader2 size={13} className="animate-spin" /> : <Upload size={13} />}
              {uploading ? 'Uploading…' : 'Upload'}
            </button>
            <button
              type="button"
              onClick={() => setPickerOpen(true)}
              className="inline-flex items-center gap-1.5 rounded-md border border-gray-300 px-3 py-1.5 text-xs font-medium text-gray-700 hover:bg-gray-50"
            >
              <ImageIcon size={13} /> Library
            </button>
            {value && (
              <button
                type="button"
                onClick={() => onChange('')}
                className="inline-flex items-center gap-1.5 rounded-md border border-gray-300 px-3 py-1.5 text-xs font-medium text-gray-500 hover:bg-gray-50"
              >
                <X size={13} /> Clear
              </button>
            )}
          </div>
          {error && <p className="mt-1 text-xs text-crimson">{error}</p>}
        </div>
      </div>
      <input
        ref={fileRef}
        type="file"
        accept="image/*"
        hidden
        onChange={(e) => upload(e.target.files?.[0])}
      />
      {pickerOpen && (
        <MediaPicker
          onSelect={(url) => {
            onChange(url)
            setPickerOpen(false)
          }}
          onClose={() => setPickerOpen(false)}
        />
      )}
    </div>
  )
}

function MediaPicker({ onSelect, onClose }) {
  const [items, setItems] = useState(null)
  useEffect(() => {
    api.get('/media').then(setItems).catch(() => setItems([]))
  }, [])

  return (
    <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4" onClick={onClose}>
      <div
        className="flex max-h-[80vh] w-full max-w-3xl flex-col rounded-xl bg-white shadow-2xl"
        onClick={(e) => e.stopPropagation()}
      >
        <div className="flex items-center justify-between border-b border-gray-100 px-5 py-3">
          <h3 className="font-semibold text-navy">Media Library</h3>
          <button onClick={onClose} className="text-gray-400 hover:text-gray-600">
            <X size={20} />
          </button>
        </div>
        <div className="flex-1 overflow-y-auto p-5">
          {items === null ? (
            <p className="text-sm text-gray-400">Loading…</p>
          ) : items.length === 0 ? (
            <p className="text-sm text-gray-400">No media yet. Use the Upload button to add images.</p>
          ) : (
            <div className="grid grid-cols-3 gap-3 sm:grid-cols-4">
              {items.map((m) => (
                <button
                  key={m.url}
                  type="button"
                  onClick={() => onSelect(m.url)}
                  className="group overflow-hidden rounded-lg border border-gray-200 hover:border-crimson"
                >
                  <div className="flex h-24 items-center justify-center bg-gray-50">
                    <img src={m.url} alt={m.name} className="h-full w-full object-contain" />
                  </div>
                  <p className="truncate px-2 py-1 text-[10px] text-gray-500">{m.name}</p>
                </button>
              ))}
            </div>
          )}
        </div>
      </div>
    </div>
  )
}
