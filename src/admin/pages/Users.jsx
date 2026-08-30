import { useEffect, useState } from 'react'
import { Loader2, UserPlus, Trash2, ShieldCheck } from 'lucide-react'
import { api } from '../api'
import { useAuth } from '../AuthContext'

export default function Users() {
  const { user: me } = useAuth()
  const [users, setUsers] = useState(null)
  const [error, setError] = useState('')
  const [form, setForm] = useState({ username: '', name: '', password: '' })
  const [busy, setBusy] = useState(false)

  const load = () => api.get('/users').then(setUsers).catch((e) => setError(e.message))
  useEffect(() => {
    load()
  }, [])

  const add = async (e) => {
    e.preventDefault()
    setBusy(true)
    setError('')
    try {
      await api.post('/users', form)
      setForm({ username: '', name: '', password: '' })
      await load()
    } catch (e) {
      setError(e.message)
    } finally {
      setBusy(false)
    }
  }

  const remove = async (username) => {
    if (!confirm(`Remove editor "${username}"?`)) return
    setError('')
    try {
      await api.del(`/users/${username}`)
      await load()
    } catch (e) {
      setError(e.message)
    }
  }

  const input = 'w-full rounded-lg border border-gray-300 px-3 py-2 text-sm outline-none focus:border-crimson focus:ring-1 focus:ring-crimson'

  return (
    <div>
      <h1 className="mb-1 text-2xl font-semibold text-navy">Users</h1>
      <p className="mb-6 text-sm text-gray-500">People who can log in and edit the site.</p>

      {error && <p className="mb-4 rounded-lg bg-crimson/10 px-3 py-2 text-sm text-crimson">{error}</p>}

      {users === null ? (
        <div className="flex items-center gap-2 text-sm text-gray-400">
          <Loader2 size={16} className="animate-spin" /> Loading…
        </div>
      ) : (
        <div className="mb-8 divide-y divide-gray-100 overflow-hidden rounded-xl border border-gray-200 bg-white">
          {users.map((u) => (
            <div key={u.username} className="flex items-center gap-4 p-4">
              <div className="flex h-10 w-10 items-center justify-center rounded-full bg-navy text-sm font-bold text-white">
                {(u.name || u.username).charAt(0).toUpperCase()}
              </div>
              <div className="min-w-0 flex-1">
                <p className="font-semibold text-navy">
                  {u.name || u.username}
                  {u.username === me?.username && <span className="ml-2 text-xs font-normal text-gray-400">(you)</span>}
                </p>
                <p className="text-xs text-gray-400">@{u.username}</p>
              </div>
              {u.role === 'admin' ? (
                <span className="inline-flex items-center gap-1 rounded-full bg-crimson/10 px-2.5 py-1 text-[10px] font-bold uppercase text-crimson">
                  <ShieldCheck size={12} /> Admin
                </span>
              ) : (
                <span className="rounded-full bg-gray-100 px-2.5 py-1 text-[10px] font-bold uppercase text-gray-500">Editor</span>
              )}
              {u.username !== me?.username && (
                <button onClick={() => remove(u.username)} className="rounded-md p-2 text-gray-400 hover:bg-crimson/10 hover:text-crimson" title="Remove">
                  <Trash2 size={15} />
                </button>
              )}
            </div>
          ))}
        </div>
      )}

      <div className="rounded-xl border border-gray-200 bg-white p-5">
        <h2 className="mb-4 flex items-center gap-2 text-sm font-bold uppercase tracking-wider text-gray-400">
          <UserPlus size={15} /> Add Editor
        </h2>
        <form onSubmit={add} className="space-y-4">
          <div className="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div>
              <label htmlFor="user-name" className="mb-1.5 block text-sm font-medium text-gray-700">Full Name</label>
              <input id="user-name" className={input} value={form.name} onChange={(e) => setForm({ ...form, name: e.target.value })} placeholder="Jane Doe" />
            </div>
            <div>
              <label htmlFor="user-username" className="mb-1.5 block text-sm font-medium text-gray-700">Username</label>
              <input id="user-username" className={input} value={form.username} onChange={(e) => setForm({ ...form, username: e.target.value })} placeholder="jane" required />
            </div>
          </div>
          <div>
            <label htmlFor="user-password" className="mb-1.5 block text-sm font-medium text-gray-700">Temporary Password</label>
            <input id="user-password" aria-describedby="user-password-hint" className={input} type="text" value={form.password} onChange={(e) => setForm({ ...form, password: e.target.value })} placeholder="At least 6 characters" required />
            <p id="user-password-hint" className="mt-1 text-xs text-gray-400">Share this with the editor; they can change it under Settings.</p>
          </div>
          <button
            type="submit"
            disabled={busy}
            className="inline-flex items-center gap-2 rounded-lg bg-navy px-4 py-2 text-sm font-semibold text-white hover:bg-navy-mid disabled:opacity-60"
          >
            {busy && <Loader2 size={16} className="animate-spin" />} Add editor
          </button>
        </form>
      </div>
    </div>
  )
}
