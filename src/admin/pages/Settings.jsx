import { useState } from 'react'
import { Loader2, Check, KeyRound } from 'lucide-react'
import { api } from '../api'
import { useAuth } from '../AuthContext'

export default function Settings() {
  const { user } = useAuth()
  const [password, setPassword] = useState('')
  const [confirm, setConfirm] = useState('')
  const [busy, setBusy] = useState(false)
  const [done, setDone] = useState(false)
  const [error, setError] = useState('')

  const submit = async (e) => {
    e.preventDefault()
    setError('')
    if (password.length < 6) return setError('Password must be at least 6 characters.')
    if (password !== confirm) return setError('Passwords do not match.')
    setBusy(true)
    try {
      await api.post('/auth/password', { password })
      setDone(true)
      setPassword('')
      setConfirm('')
      setTimeout(() => setDone(false), 3000)
    } catch (e) {
      setError(e.message)
    } finally {
      setBusy(false)
    }
  }

  const input = 'w-full rounded-lg border border-gray-300 px-3 py-2 text-sm outline-none focus:border-crimson focus:ring-1 focus:ring-crimson'

  return (
    <div>
      <h1 className="mb-1 text-2xl font-semibold text-navy">Settings</h1>
      <p className="mb-6 text-sm text-gray-500">
        Signed in as <span className="font-medium text-gray-700">@{user?.username}</span>
      </p>

      <div className="max-w-md rounded-xl border border-gray-200 bg-white p-5">
        <h2 className="mb-4 flex items-center gap-2 text-sm font-bold uppercase tracking-wider text-gray-400">
          <KeyRound size={15} /> Change Password
        </h2>
        {error && <p className="mb-4 rounded-lg bg-crimson/10 px-3 py-2 text-sm text-crimson">{error}</p>}
        {done && (
          <p className="mb-4 flex items-center gap-1.5 rounded-lg bg-green-50 px-3 py-2 text-sm text-green-700">
            <Check size={15} /> Password updated.
          </p>
        )}
        <form onSubmit={submit} className="space-y-4">
          <div>
            <label className="mb-1.5 block text-sm font-medium text-gray-700">New Password</label>
            <input className={input} type="password" value={password} onChange={(e) => setPassword(e.target.value)} autoComplete="new-password" />
          </div>
          <div>
            <label className="mb-1.5 block text-sm font-medium text-gray-700">Confirm Password</label>
            <input className={input} type="password" value={confirm} onChange={(e) => setConfirm(e.target.value)} autoComplete="new-password" />
          </div>
          <button
            type="submit"
            disabled={busy}
            className="inline-flex items-center gap-2 rounded-lg bg-crimson px-4 py-2 text-sm font-semibold text-white hover:bg-crimson-dark disabled:opacity-60"
          >
            {busy && <Loader2 size={16} className="animate-spin" />} Update password
          </button>
        </form>
      </div>
    </div>
  )
}
