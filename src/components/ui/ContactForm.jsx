import { useState } from 'react'
import { Send, CheckCircle, AlertCircle } from 'lucide-react'
import { toast } from 'sonner'
import { StaggerGroup, StaggerItem } from '../motion/Stagger'

const EMPTY = { name: '', email: '', subject: '', phone: '', message: '' }

export default function ContactForm() {
  const [form, setForm] = useState(EMPTY)
  const [sent, setSent] = useState(false)
  const [loading, setLoading] = useState(false)
  const [error, setError] = useState('')

  const handleChange = (e) => setForm({ ...form, [e.target.name]: e.target.value })

  const handleSubmit = async (e) => {
    e.preventDefault()
    setLoading(true)
    setError('')
    try {
      const res = await fetch('/api/messages', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(form),
      })
      const data = await res.json().catch(() => ({}))
      if (!res.ok) throw new Error(data.error || 'Could not send your message.')
      setSent(true)
      toast.success('Message sent', { description: "We'll get back to you as soon as possible." })
    } catch (err) {
      // Report the failure instead of showing a success screen the way this
      // form used to — it previously just waited 1.2s and always "succeeded".
      setError(err.message)
      toast.error('Message not sent', { description: err.message })
    } finally {
      setLoading(false)
    }
  }

  if (sent) {
    return (
      <div className="flex flex-col items-center justify-center py-16 gap-4 text-center">
        <CheckCircle size={56} className="text-green-500" aria-hidden="true" />
        <h3 className="text-xl font-medium text-navy">Message Sent!</h3>
        <p className="text-gray-500 text-sm max-w-xs">
          Thank you for reaching out. We'll get back to you as soon as possible.
        </p>
        <button
          onClick={() => { setSent(false); setForm(EMPTY); setError('') }}
          className="btn-outline mt-2"
        >
          Send Another
        </button>
      </div>
    )
  }

  return (
    <form onSubmit={handleSubmit} className="space-y-5">
      <StaggerGroup as="div" staggerChildren={0.08} amount={0.4} className="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <StaggerItem>
          <label className="form-label" htmlFor="contact-name">Name *</label>
          <input
            id="contact-name"
            name="name"
            type="text"
            required
            autoComplete="name"
            placeholder="Your Name"
            value={form.name}
            onChange={handleChange}
            className="form-input"
          />
        </StaggerItem>
        <StaggerItem>
          <label className="form-label" htmlFor="contact-email">Email *</label>
          <input
            id="contact-email"
            name="email"
            type="email"
            required
            autoComplete="email"
            placeholder="your@email.com"
            value={form.email}
            onChange={handleChange}
            className="form-input"
          />
        </StaggerItem>
        <StaggerItem>
          <label className="form-label" htmlFor="contact-subject">Subject *</label>
          <input
            id="contact-subject"
            name="subject"
            type="text"
            required
            placeholder="Subject"
            value={form.subject}
            onChange={handleChange}
            className="form-input"
          />
        </StaggerItem>
        <StaggerItem>
          <label className="form-label" htmlFor="contact-phone">Phone</label>
          <input
            id="contact-phone"
            name="phone"
            type="tel"
            autoComplete="tel"
            placeholder="+90 ..."
            value={form.phone}
            onChange={handleChange}
            className="form-input"
          />
        </StaggerItem>
      </StaggerGroup>
      <div>
        <label className="form-label" htmlFor="contact-message">Message *</label>
        <textarea
          id="contact-message"
          name="message"
          required
          rows={6}
          placeholder="Your message..."
          value={form.message}
          onChange={handleChange}
          className="form-input resize-none"
        />
      </div>

      {error && (
        <div
          role="alert"
          className="flex items-start gap-2 rounded-lg bg-red-50 border border-red-200 px-3 py-2.5 text-sm text-red-600"
        >
          <AlertCircle size={14} className="flex-shrink-0 mt-0.5" aria-hidden="true" />
          {error}
        </div>
      )}

      <button
        type="submit"
        disabled={loading}
        className="btn-primary w-full justify-center disabled:opacity-60"
      >
        {loading ? (
          <span className="flex items-center gap-2">
            <svg className="animate-spin h-4 w-4" fill="none" viewBox="0 0 24 24" aria-hidden="true">
              <circle className="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" strokeWidth="4"/>
              <path className="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"/>
            </svg>
            Sending...
          </span>
        ) : (
          <>
            <Send size={16} aria-hidden="true" />
            Send Message
          </>
        )}
      </button>
    </form>
  )
}
