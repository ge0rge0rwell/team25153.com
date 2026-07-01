import { useEffect, useState } from 'react'
import { Loader2, InboxIcon, Upload, Download } from 'lucide-react'
import { api, getToken } from '../api'

function fileSize(bytes) {
  if (!bytes) return ''
  if (bytes < 1024) return `${bytes} B`
  if (bytes < 1024 * 1024) return `${(bytes / 1024).toFixed(1)} KB`
  return `${(bytes / (1024 * 1024)).toFixed(1)} MB`
}

export default function Submissions() {
  const [subs, setSubs] = useState(null)
  const [error, setError] = useState('')

  useEffect(() => {
    api.get('/course-submissions')
      .then(setSubs)
      .catch((e) => setError(e.message))
  }, [])

  return (
    <div>
      <div className="mb-8 flex items-center gap-3">
        <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-crimson/10 text-crimson">
          <Upload size={20} />
        </div>
        <div>
          <h1 className="text-2xl font-semibold text-navy">Course Submissions</h1>
          <p className="text-sm text-gray-500">Files and messages submitted by learners</p>
        </div>
      </div>

      {!subs && !error && (
        <div className="flex items-center justify-center py-20">
          <Loader2 size={28} className="animate-spin text-crimson" />
        </div>
      )}

      {error && (
        <div className="rounded-xl border border-red-200 bg-red-50 p-6 text-sm text-red-600">{error}</div>
      )}

      {subs && subs.length === 0 && (
        <div className="flex flex-col items-center justify-center py-20 text-center">
          <InboxIcon size={40} className="text-gray-300 mb-3" />
          <p className="font-medium text-gray-500">No submissions yet</p>
          <p className="text-sm text-gray-400 mt-1">Learner uploads from the Learn page appear here.</p>
        </div>
      )}

      {subs && subs.length > 0 && (
        <div className="rounded-xl border border-gray-200 bg-white overflow-hidden overflow-x-auto shadow-sm">
          <table className="min-w-full divide-y divide-gray-100 text-sm">
            <thead className="bg-gray-50">
              <tr>
                {['Name', 'Email', 'Course', 'Message', 'File', 'Submitted'].map((h) => (
                  <th key={h} className="px-4 py-3 text-left text-[11px] font-bold uppercase tracking-wider text-gray-400">
                    {h}
                  </th>
                ))}
              </tr>
            </thead>
            <tbody className="divide-y divide-gray-100">
              {[...subs].reverse().map((s) => (
                <tr key={s.id} className="hover:bg-gray-50 transition-colors">
                  <td className="px-4 py-3 font-medium text-navy whitespace-nowrap">{s.name}</td>
                  <td className="px-4 py-3 text-gray-600 whitespace-nowrap">{s.email}</td>
                  <td className="px-4 py-3 whitespace-nowrap">
                    <span className="inline-block rounded-full bg-navy/10 px-2 py-0.5 text-[11px] font-semibold text-navy">
                      {s.courseName || `#${s.courseId}`}
                    </span>
                  </td>
                  <td className="px-4 py-3 text-gray-500 max-w-xs truncate">{s.message || '—'}</td>
                  <td className="px-4 py-3 whitespace-nowrap">
                    {s.file ? (
                      <a
                        href={`/course-files/${s.file.stored}?token=${getToken()}`}
                        download={s.file.name}
                        className="inline-flex items-center gap-1.5 rounded-lg bg-crimson/10 px-2.5 py-1 text-[11px] font-semibold text-crimson hover:bg-crimson/20 transition-colors"
                      >
                        <Download size={11} />
                        {s.file.name.length > 20 ? s.file.name.slice(0, 20) + '…' : s.file.name}
                        <span className="text-gray-400 font-normal">({fileSize(s.file.size)})</span>
                      </a>
                    ) : (
                      <span className="text-gray-300 text-xs">No file</span>
                    )}
                  </td>
                  <td className="px-4 py-3 text-gray-400 whitespace-nowrap">
                    {new Date(s.submittedAt).toLocaleDateString('en-GB', {
                      day: '2-digit', month: 'short', year: 'numeric',
                    })}
                  </td>
                </tr>
              ))}
            </tbody>
          </table>
          <div className="border-t border-gray-100 px-4 py-2 text-xs text-gray-400">
            {subs.length} submission{subs.length !== 1 ? 's' : ''} total
          </div>
        </div>
      )}
    </div>
  )
}
