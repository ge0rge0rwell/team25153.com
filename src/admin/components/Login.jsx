import { useState } from 'react'
import { Loader2, LockKeyhole } from 'lucide-react'
import { useAuth } from '../AuthContext'

export default function Login() {
  const { login } = useAuth()
  const [username, setUsername] = useState('')
  const [password, setPassword] = useState('')
  const [error, setError] = useState('')
  const [busy, setBusy] = useState(false)

  const submit = async (e) => {
    e.preventDefault()
    setBusy(true)
    setError('')
    try {
      await login(username.trim(), password)
    } catch (err) {
      setError(err.message || 'Login failed')
      setBusy(false)
    }
  }

  return (
    <div className="flex min-h-screen items-center justify-center bg-gradient-to-br from-navy to-navy-mid px-4">
      <div className="w-full max-w-sm">
        <div className="mb-6 text-center">
          <div className="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-crimson text-white">
            <LockKeyhole size={26} />
          </div>
          <h1 className="text-xl font-semibold text-white">Cartesian Admin</h1>
          <p className="mt-1 text-sm text-white/50">Sign in to manage your site</p>
        </div>

        <form onSubmit={submit} className="space-y-4 rounded-2xl bg-white p-6 shadow-xl">
          <div>
            <label className="mb-1.5 block text-sm font-medium text-gray-700">Username</label>
            <input
              type="text"
              value={username}
              onChange={(e) => setUsername(e.target.value)}
              autoFocus
              autoComplete="username"
              className="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm outline-none focus:border-crimson focus:ring-1 focus:ring-crimson"
            />
          </div>
          <div>
            <label className="mb-1.5 block text-sm font-medium text-gray-700">Password</label>
            <input
              type="password"
              value={password}
              onChange={(e) => setPassword(e.target.value)}
              autoComplete="current-password"
              className="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm outline-none focus:border-crimson focus:ring-1 focus:ring-crimson"
            />
          </div>

          {error && (
            <p className="rounded-lg bg-crimson/10 px-3 py-2 text-sm text-crimson">{error}</p>
          )}

          <button
            type="submit"
            disabled={busy}
            className="flex w-full items-center justify-center gap-2 rounded-lg bg-crimson py-2.5 text-sm font-semibold text-white transition-colors hover:bg-crimson-dark disabled:opacity-60"
          >
            {busy && <Loader2 size={16} className="animate-spin" />}
            {busy ? 'Signing in…' : 'Sign in'}
          </button>
        </form>

        <p className="mt-4 text-center text-xs text-white/30">team25153.com content manager</p>
      </div>
    </div>
  )
}
