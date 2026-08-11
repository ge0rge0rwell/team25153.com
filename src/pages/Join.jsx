import { useState } from 'react'
import { Link } from 'react-router-dom'
import { ClipboardList, BookOpen, MessageSquare, Rocket, ExternalLink, Send, CheckCircle } from 'lucide-react'
import { motion, AnimatePresence } from 'framer-motion'
import PageBanner from '../components/ui/PageBanner'
import Reveal from '../components/motion/Reveal'
import { StaggerGroup, StaggerItem } from '../components/motion/Stagger'

const steps = [
  {
    icon: ClipboardList,
    number: '01',
    title: 'Submit Your Interest',
    desc: 'Fill out the form below so we know who you are and what area excites you most.',
  },
  {
    icon: BookOpen,
    number: '02',
    title: 'Complete Moodle Tasks',
    desc: "You'll receive a Moodle invitation. Complete the assigned tasks at your own pace.",
  },
  {
    icon: MessageSquare,
    number: '03',
    title: 'Interview',
    desc: 'Our team leads will reach out to schedule a short interview based on your submission.',
  },
  {
    icon: Rocket,
    number: '04',
    title: 'Welcome to Cartesian!',
    desc: "If selected, you'll be onboarded and matched with a subteam that fits your skills.",
  },
]

function ApplicationForm() {
  const [form, setForm] = useState({ name: '', email: '', grade: '', interest: '', message: '' })
  const [status, setStatus] = useState('idle')
  const [errorMsg, setErrorMsg] = useState('')

  const set = (field) => (e) => setForm((f) => ({ ...f, [field]: e.target.value }))

  const handleSubmit = async (e) => {
    e.preventDefault()
    setStatus('submitting')
    setErrorMsg('')
    try {
      const res = await fetch('/api/applications', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(form),
      })
      if (!res.ok) throw new Error((await res.json()).error || 'Submission failed')
      setStatus('success')
    } catch (err) {
      setErrorMsg(err.message)
      setStatus('error')
    }
  }

  const inputClass =
    'w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-crimson/30 focus:border-crimson transition'

  return (
    <AnimatePresence mode="wait">
    {status === 'success' ? (
      <motion.div
        key="success"
        initial={{ opacity: 0, scale: 0.9 }}
        animate={{ opacity: 1, scale: 1 }}
        exit={{ opacity: 0, scale: 0.9 }}
        transition={{ duration: 0.3, ease: [0.16, 1, 0.3, 1] }}
        className="text-center py-12"
      >
        <motion.div
          initial={{ scale: 0 }}
          animate={{ scale: 1 }}
          transition={{ delay: 0.1, type: 'spring', stiffness: 260, damping: 18 }}
        >
          <CheckCircle size={48} className="text-green-500 mx-auto mb-4" />
        </motion.div>
        <h3 className="text-xl font-semibold text-navy mb-2">Application Submitted!</h3>
        <p className="text-gray-500 text-sm max-w-sm mx-auto">
          Thanks! We'll send your Moodle invitation to <span className="font-medium">{form.email}</span>{' '}
          within a few days.
        </p>
      </motion.div>
    ) : (
    <motion.form key="form" initial={{ opacity: 0 }} animate={{ opacity: 1 }} exit={{ opacity: 0 }} onSubmit={handleSubmit} className="space-y-5">
      <StaggerGroup as="div" staggerChildren={0.08} amount={0.4} className="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <StaggerItem>
          <label className="block text-xs font-semibold text-navy uppercase tracking-wider mb-1.5">
            Full Name *
          </label>
          <input
            type="text"
            required
            value={form.name}
            onChange={set('name')}
            placeholder="Ada Yılmaz"
            className={inputClass}
          />
        </StaggerItem>
        <StaggerItem>
          <label className="block text-xs font-semibold text-navy uppercase tracking-wider mb-1.5">
            Email *
          </label>
          <input
            type="email"
            required
            value={form.email}
            onChange={set('email')}
            placeholder="ada@example.com"
            className={inputClass}
          />
        </StaggerItem>
      </StaggerGroup>

      <div className="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div>
          <label className="block text-xs font-semibold text-navy uppercase tracking-wider mb-1.5">
            Grade / Year *
          </label>
          <select required value={form.grade} onChange={set('grade')} className={inputClass}>
            <option value="">Select grade…</option>
            <option value="5th">5th Grade</option>
            <option value="6th">6th Grade</option>
            <option value="7th">7th Grade</option>
            <option value="8th">8th Grade</option>
            <option value="9th">9th Grade</option>
            <option value="10th">10th Grade</option>
            <option value="11th">11th Grade</option>
            <option value="12th">12th Grade</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div>
          <label className="block text-xs font-semibold text-navy uppercase tracking-wider mb-1.5">
            Area of Interest *
          </label>
          <select required value={form.interest} onChange={set('interest')} className={inputClass}>
            <option value="">Select area…</option>
            <option value="software">Software</option>
            <option value="mechanical">Mechanical</option>
            <option value="electrical">Electrical</option>
            <option value="outreach">Outreach</option>
          </select>
        </div>
      </div>

      <div>
        <label className="block text-xs font-semibold text-navy uppercase tracking-wider mb-1.5">
          Anything else you'd like us to know?
        </label>
        <textarea
          rows={4}
          value={form.message}
          onChange={set('message')}
          placeholder="Prior experience, projects, why Cartesian…"
          className={inputClass + ' resize-none'}
        />
      </div>

      {status === 'error' && (
        <p className="text-sm text-red-500">{errorMsg}</p>
      )}

      <motion.button
        type="submit"
        disabled={status === 'submitting'}
        whileHover={{ scale: 1.02 }}
        whileTap={{ scale: 0.98 }}
        className="btn-primary inline-flex items-center gap-2 disabled:opacity-60"
      >
        <Send size={15} />
        {status === 'submitting' ? 'Submitting…' : 'Submit Application'}
      </motion.button>
    </motion.form>
    )}
    </AnimatePresence>
  )
}

export default function Join() {
  return (
    <div>
      <PageBanner title="Join Cartesian Robotics" breadcrumbs={[{ label: 'Join' }]} />

      {/* How to join — step cards */}
      <section className="py-12 md:py-20 bg-white">
        <div className="max-w-6xl mx-auto px-6">
          <Reveal className="text-center mb-12">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2">Membership</p>
            <h2 className="text-3xl font-medium text-navy mb-2">How to Join</h2>
            <div className="w-10 h-0.5 bg-gold mx-auto" />
          </Reveal>
          <StaggerGroup as="div" staggerChildren={0.1} className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {steps.map(({ icon: Icon, number, title, desc }) => (
              <StaggerItem
                key={number}
                className="bg-white rounded-xl border border-gray-100 p-6 shadow-sm hover:border-crimson/30 hover:shadow-md transition-all"
              >
                <p className="text-crimson font-black text-3xl mb-3">{number}</p>
                <div className="text-navy mb-3">
                  <Icon size={22} />
                </div>
                <h3 className="font-semibold text-navy mb-2">{title}</h3>
                <p className="text-sm text-gray-500 leading-relaxed">{desc}</p>
              </StaggerItem>
            ))}
          </StaggerGroup>
        </div>
      </section>

      {/* Moodle CTA — navy band */}
      <section className="py-16 bg-navy text-white">
        <Reveal direction="scale" className="max-w-3xl mx-auto px-6 text-center">
          <p className="text-gold text-xs font-bold uppercase tracking-[0.3em] mb-2">Learning Platform</p>
          <h2 className="text-3xl font-medium mb-2">Complete Tasks on Moodle</h2>
          <div className="w-10 h-0.5 bg-gold mx-auto mb-6" />
          <p className="text-white/70 leading-relaxed mb-8 max-w-xl mx-auto">
            After submitting your interest below, you will receive access to our Moodle
            course where you'll complete onboarding tasks before your interview.
            Moodle runs directly on this site — no external account needed.
          </p>
          <Link
            to="/lms"
            className="btn-primary inline-flex items-center gap-2 uppercase tracking-widest text-xs"
          >
            <ExternalLink size={15} />
            Open Moodle LMS
          </Link>
        </Reveal>
      </section>

      {/* Application form */}
      <section className="py-12 md:py-20 bg-gray-50">
        <div className="max-w-2xl mx-auto px-6">
          <Reveal className="text-center mb-10">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2">Get Started</p>
            <h2 className="text-3xl font-medium text-navy mb-2">Submit Your Interest</h2>
            <div className="w-10 h-0.5 bg-gold mx-auto" />
          </Reveal>
          <Reveal delay={0.1} className="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 sm:p-8">
            <ApplicationForm />
          </Reveal>
        </div>
      </section>
    </div>
  )
}
