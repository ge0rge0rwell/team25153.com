import { useEffect, useState } from 'react'
import { Loader2, Users2, InboxIcon } from 'lucide-react'
import { api } from '../api'

const INTEREST_LABELS = {
  software: 'Software',
  mechanical: 'Mechanical',
  electrical: 'Electrical',
  outreach: 'Outreach',
}

export default function Applications() {
  const [apps, setApps] = useState(null)
  const [error, setError] = useState('')

  useEffect(() => {
    api.get('/applications')
      .then(setApps)
      .catch((e) => setError(e.message))
  }, [])

  return (
    <div>
      <div className="mb-8 flex items-center gap-3">
        <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-crimson/10 text-crimson">
          <Users2 size={20} />
        </div>
        <div>
          <h1 className="text-2xl font-semibold text-navy">Applications</h1>
          <p className="text-sm text-gray-500">Membership interest submissions from the Join page</p>
        </div>
      </div>

      {!apps && !error && (
        <div className="flex items-center justify-center py-20">
          <Loader2 size={28} className="animate-spin text-crimson" />
        </div>
      )}

      {error && (
        <div className="rounded-xl border border-red-200 bg-red-50 p-6 text-sm text-red-600">{error}</div>
      )}

      {apps && apps.length === 0 && (
        <div className="flex flex-col items-center justify-center py-20 text-center">
          <InboxIcon size={40} className="text-gray-300 mb-3" />
          <p className="font-medium text-gray-500">No applications yet</p>
          <p className="text-sm text-gray-400 mt-1">Submissions from /join will appear here.</p>
        </div>
      )}

      {apps && apps.length > 0 && (
        <div className="rounded-xl border border-gray-200 bg-white overflow-hidden overflow-x-auto shadow-sm">
          <table className="min-w-full divide-y divide-gray-100 text-sm">
            <thead className="bg-gray-50">
              <tr>
                {['Name', 'Email', 'Grade', 'Interest', 'Message', 'Submitted'].map((h) => (
                  <th
                    key={h}
                    className="px-4 py-3 text-left text-[11px] font-bold uppercase tracking-wider text-gray-400"
                  >
                    {h}
                  </th>
                ))}
              </tr>
            </thead>
            <tbody className="divide-y divide-gray-100">
              {[...apps].reverse().map((a) => (
                <tr key={a.id} className="hover:bg-gray-50 transition-colors">
                  <td className="px-4 py-3 font-medium text-navy whitespace-nowrap">{a.name}</td>
                  <td className="px-4 py-3 text-gray-600 whitespace-nowrap">{a.email}</td>
                  <td className="px-4 py-3 text-gray-600 whitespace-nowrap">{a.grade}</td>
                  <td className="px-4 py-3 whitespace-nowrap">
                    <span className="inline-block rounded-full bg-crimson/10 px-2 py-0.5 text-[11px] font-semibold text-crimson">
                      {INTEREST_LABELS[a.interest] || a.interest}
                    </span>
                  </td>
                  <td className="px-4 py-3 text-gray-500 max-w-xs truncate">{a.message || '—'}</td>
                  <td className="px-4 py-3 text-gray-400 whitespace-nowrap">
                    {new Date(a.submittedAt).toLocaleDateString('en-GB', {
                      day: '2-digit',
                      month: 'short',
                      year: 'numeric',
                    })}
                  </td>
                </tr>
              ))}
            </tbody>
          </table>
          <div className="border-t border-gray-100 px-4 py-2 text-xs text-gray-400">
            {apps.length} submission{apps.length !== 1 ? 's' : ''} total
          </div>
        </div>
      )}
    </div>
  )
}
