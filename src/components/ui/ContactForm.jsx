import { useState } from 'react'
import { Send, CheckCircle } from 'lucide-react'
import { toast } from 'sonner'
import { StaggerGroup, StaggerItem } from '../motion/Stagger'

export default function ContactForm() {
  const [form, setForm] = useState({ name: '', email: '', subject: '', phone: '', message: '' })
  const [sent, setSent] = useState(false)
  const [loading, setLoading] = useState(false)

  const handleChange = (e) => setForm({ ...form, [e.target.name]: e.target.value })

  const handleSubmit = (e) => {
    e.preventDefault()
    setLoading(true)
    setTimeout(() => {
      setLoading(false)
      setSent(true)
      toast.success('Message sent', { description: "We'll get back to you as soon as possible." })
    }, 1200)
  }

  if (sent) {
    return (
      <div className="flex flex-col items-center justify-center py-16 gap-4 text-center">
        <CheckCircle size={56} className="text-green-500" />
        <h3 className="text-xl font-medium text-navy">Message Sent!</h3>
        <p className="text-gray-500 text-sm max-w-xs">
          Thank you for reaching out. We'll get back to you as soon as possible.
        </p>
        <button
          onClick={() => { setSent(false); setForm({ name:'',email:'',subject:'',phone:'',message:'' }) }}
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
          <label className="form-label">Name *</label>
          <input
            id="contact-name"
            name="name"
            type="text"
            required
            placeholder="Your Name"
            value={form.name}
            onChange={handleChange}
            className="form-input"
          />
        </StaggerItem>
        <StaggerItem>
          <label className="form-label">Email *</label>
          <input
            id="contact-email"
            name="email"
            type="email"
            required
            placeholder="your@email.com"
            value={form.email}
            onChange={handleChange}
            className="form-input"
          />
        </StaggerItem>
        <StaggerItem>
          <label className="form-label">Subject *</label>
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
          <label className="form-label">Phone</label>
          <input
            id="contact-phone"
            name="phone"
            type="tel"
            placeholder="+90 ..."
            value={form.phone}
            onChange={handleChange}
            className="form-input"
          />
        </StaggerItem>
      </StaggerGroup>
      <div>
        <label className="form-label">Message *</label>
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
      <button
        type="submit"
        disabled={loading}
        className="btn-primary w-full justify-center"
      >
        {loading ? (
          <span className="flex items-center gap-2">
            <svg className="animate-spin h-4 w-4" fill="none" viewBox="0 0 24 24">
              <circle className="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" strokeWidth="4"/>
              <path className="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"/>
            </svg>
            Sending...
          </span>
        ) : (
          <>
            <Send size={16} />
            Send Message
          </>
        )}
      </button>
    </form>
  )
}
