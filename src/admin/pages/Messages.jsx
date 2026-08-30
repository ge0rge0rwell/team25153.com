import { useEffect, useState } from 'react'
import { Loader2, MailIcon, InboxIcon } from 'lucide-react'
import { api } from '../api'

export default function Messages() {
  const [messages, setMessages] = useState(null)
  const [error, setError] = useState('')

  useEffect(() => {
    api.get('/messages')
      .then(setMessages)
      .catch((e) => setError(e.message))
  }, [])

  return (
    <div>
      <div className="mb-8 flex items-center gap-3">
        <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-crimson/10 text-crimson">
          <MailIcon size={20} />
        </div>
        <div>
          <h1 className="text-2xl font-semibold text-navy">Messages</h1>
          <p className="text-sm text-gray-500">Enquiries sent through the Contact page</p>
        </div>
      </div>

      {!messages && !error && (
        <div className="flex items-center justify-center py-20">
          <Loader2 size={28} className="animate-spin text-crimson" />
        </div>
      )}

      {error && (
        <div className="rounded-xl border border-red-200 bg-red-50 p-6 text-sm text-red-600">{error}</div>
      )}

      {messages && messages.length === 0 && (
        <div className="flex flex-col items-center justify-center py-20 text-center">
          <InboxIcon size={40} className="text-gray-300 mb-3" />
          <p className="font-medium text-gray-500">No messages yet</p>
          <p className="text-sm text-gray-400 mt-1">Submissions from /contact will appear here.</p>
        </div>
      )}

      {messages && messages.length > 0 && (
        <div className="space-y-4">
          {[...messages].reverse().map((m) => (
            <article key={m.id} className="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
              <div className="flex flex-wrap items-start justify-between gap-3 mb-3">
                <div>
                  <h2 className="font-semibold text-navy">{m.subject}</h2>
                  <p className="text-sm text-gray-500 mt-0.5">
                    {m.name} ·{' '}
                    <a href={`mailto:${m.email}`} className="text-crimson hover:underline">{m.email}</a>
                    {m.phone ? <> · <a href={`tel:${m.phone}`} className="hover:underline">{m.phone}</a></> : null}
                  </p>
                </div>
                <time
                  dateTime={m.submittedAt}
                  className="text-xs text-gray-400 whitespace-nowrap"
                >
                  {new Date(m.submittedAt).toLocaleString('en-GB', {
                    day: '2-digit', month: 'short', year: 'numeric',
                    hour: '2-digit', minute: '2-digit',
                  })}
                </time>
              </div>
              <p className="text-sm text-gray-700 whitespace-pre-wrap leading-relaxed border-t border-gray-100 pt-3">
                {m.message}
              </p>
              <a
                href={`mailto:${m.email}?subject=${encodeURIComponent(`Re: ${m.subject}`)}`}
                className="mt-4 inline-flex items-center gap-1.5 text-xs font-semibold text-crimson hover:underline"
              >
                <MailIcon size={13} /> Reply
              </a>
            </article>
          ))}
          <p className="text-xs text-gray-400 px-1">
            {messages.length} message{messages.length !== 1 ? 's' : ''} total
          </p>
        </div>
      )}
    </div>
  )
}
