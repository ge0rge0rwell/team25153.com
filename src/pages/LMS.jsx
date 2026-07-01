import { useState, useEffect } from 'react'
import {
  Eye, EyeOff, Loader2, AlertCircle, LogOut, ChevronDown,
  ChevronLeft, GraduationCap, ExternalLink, BookOpen, ArrowRight,
  ClipboardList, HelpCircle, FileText, MessageSquare, FolderOpen,
  PlayCircle, Link2, Tag, RefreshCw, Lock, CheckCircle,
} from 'lucide-react'

const MOODLE_PUBLIC_URL = import.meta.env.VITE_MOODLE_PUBLIC_URL || 'https://lms.team25153.com'
const ADMIN_TOKEN = import.meta.env.VITE_MOODLE_TOKEN || ''

// ── Moodle helpers ────────────────────────────────────────────────────────────
async function moodleGet(wsfunction, params = {}, token = ADMIN_TOKEN) {
  const qs = new URLSearchParams({ wstoken: token, wsfunction, moodlewsrestformat: 'json', ...params })
  const res = await fetch(`/moodle-api/webservice/rest/server.php?${qs}`)
  const data = await res.json()
  if (data?.exception) throw new Error(data.message || wsfunction + ' failed')
  return data
}

async function moodleLogin(username, password) {
  const qs = new URLSearchParams({ username, password, service: 'moodle_mobile_app' })
  const res = await fetch(`/moodle-api/login/token.php?${qs}`)
  const data = await res.json()
  if (data.error) throw new Error(data.error)
  return data.token
}

function stripHtml(html) {
  if (!html) return ''
  return html.replace(/<[^>]*>/g, '').replace(/&[a-z]+;/g, ' ').trim()
}

// ── Session helpers ───────────────────────────────────────────────────────────
const SESSION_KEY = 'lms_session'
const PW_KEY = 'lms_pw_changed'

function getSession() { try { return JSON.parse(localStorage.getItem(SESSION_KEY)) } catch { return null } }
function saveSession(s) { localStorage.setItem(SESSION_KEY, JSON.stringify(s)) }
function clearSession() { localStorage.removeItem(SESSION_KEY) }
function isPwChanged(u) { try { return JSON.parse(localStorage.getItem(PW_KEY) || '[]').includes(u) } catch { return false } }
function markPwChanged(u) {
  try {
    const list = JSON.parse(localStorage.getItem(PW_KEY) || '[]')
    if (!list.includes(u)) { list.push(u); localStorage.setItem(PW_KEY, JSON.stringify(list)) }
  } catch {}
}

// ── Module icon ───────────────────────────────────────────────────────────────
function ModIcon({ modname }) {
  const icons = {
    assign: ClipboardList, quiz: HelpCircle, resource: FileText,
    page: FileText, url: Link2, label: Tag, forum: MessageSquare,
    folder: FolderOpen, video: PlayCircle, book: BookOpen,
  }
  const Icon = icons[modname] || BookOpen
  return <Icon size={15} className="flex-shrink-0" />
}

const ACCENT = [
  'from-navy to-navy-light', 'from-crimson to-crimson-light',
  'from-navy-light to-navy-mid', 'from-navy-mid to-navy',
]

// ── Login Screen ──────────────────────────────────────────────────────────────
function LoginScreen({ onLogin }) {
  const [username, setUsername] = useState('')
  const [password, setPassword] = useState('')
  const [show, setShow] = useState(false)
  const [loading, setLoading] = useState(false)
  const [error, setError] = useState('')

  const submit = async (e) => {
    e.preventDefault()
    setLoading(true); setError('')
    try {
      const token = await moodleLogin(username.trim(), password)
      const info = await moodleGet('core_webservice_get_siteinfo', {}, token)
      const session = { token, username: info.username, fullname: info.fullname, userId: info.userid }
      saveSession(session)
      onLogin(session)
    } catch (err) {
      setError(err.message === 'invalidlogin' ? 'Kullanıcı adı veya şifre hatalı.' : err.message)
    } finally {
      setLoading(false)
    }
  }

  return (
    <div className="min-h-screen bg-gray-50 flex items-center justify-center px-4">
      <div className="w-full max-w-sm">
        {/* Logo */}
        <div className="text-center mb-8">
          <div className="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-navy mb-4">
            <GraduationCap size={28} className="text-gold" />
          </div>
          <h1 className="text-2xl font-bold text-navy">Öğrenme Merkezi</h1>
          <p className="text-gray-500 text-sm mt-1">Devam etmek için giriş yapın</p>
        </div>

        {/* Card */}
        <div className="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
          <form onSubmit={submit} className="space-y-5">
            <div>
              <label className="block text-xs font-semibold text-gray-600 uppercase tracking-wider mb-2">
                Kullanıcı Adı
              </label>
              <input
                type="text"
                required
                autoComplete="username"
                value={username}
                onChange={e => setUsername(e.target.value)}
                placeholder="kullanici_adi"
                className="w-full h-11 px-4 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-navy/20 focus:border-navy transition"
              />
            </div>

            <div>
              <label className="block text-xs font-semibold text-gray-600 uppercase tracking-wider mb-2">
                Şifre
              </label>
              <div className="relative">
                <input
                  type={show ? 'text' : 'password'}
                  required
                  autoComplete="current-password"
                  value={password}
                  onChange={e => setPassword(e.target.value)}
                  placeholder="••••••••"
                  className="w-full h-11 px-4 pr-11 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-navy/20 focus:border-navy transition"
                />
                <button
                  type="button"
                  onClick={() => setShow(!show)}
                  className="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-navy transition"
                >
                  {show ? <EyeOff size={16} /> : <Eye size={16} />}
                </button>
              </div>
            </div>

            {error && (
              <div className="flex items-center gap-2 rounded-xl bg-red-50 border border-red-200 px-3 py-2.5 text-sm text-red-600">
                <AlertCircle size={14} className="flex-shrink-0" />
                {error}
              </div>
            )}

            <button
              type="submit"
              disabled={loading}
              className="w-full h-11 bg-navy text-white font-semibold rounded-xl hover:bg-navy-light transition disabled:opacity-60 flex items-center justify-center gap-2"
            >
              {loading ? <><Loader2 size={16} className="animate-spin" /> Giriş yapılıyor…</> : 'Giriş Yap'}
            </button>
          </form>
        </div>

        <p className="text-center text-xs text-gray-400 mt-6">
          Hesabınız yoksa yöneticinizle iletişime geçin.
        </p>
      </div>
    </div>
  )
}

// ── Force Password Change Modal ───────────────────────────────────────────────
function ChangePasswordModal({ session, onDone }) {
  const [pw, setPw] = useState('')
  const [pw2, setPw2] = useState('')
  const [show, setShow] = useState(false)
  const [loading, setLoading] = useState(false)
  const [error, setError] = useState('')
  const [done, setDone] = useState(false)

  const validate = () => {
    if (pw.length < 8) return 'En az 8 karakter gerekli.'
    if (!/[A-Z]/.test(pw)) return 'En az 1 büyük harf gerekli.'
    if (!/[0-9]/.test(pw)) return 'En az 1 rakam gerekli.'
    if (!/[^A-Za-z0-9]/.test(pw)) return 'En az 1 özel karakter gerekli (örn. @#$%).'
    if (pw !== pw2) return 'Şifreler eşleşmiyor.'
    return null
  }

  const submit = async (e) => {
    e.preventDefault()
    const err = validate()
    if (err) { setError(err); return }
    setLoading(true); setError('')
    try {
      const res = await fetch('/api/lms/change-password', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ userToken: session.token, newPassword: pw }),
      })
      const data = await res.json()
      if (!res.ok) throw new Error(data.error || 'Güncelleme başarısız.')
      markPwChanged(session.username)
      setDone(true)
    } catch (err) {
      setError(err.message)
    } finally {
      setLoading(false)
    }
  }

  return (
    <div className="fixed inset-0 z-50 flex items-center justify-center p-4">
      <div className="absolute inset-0 bg-navy/70 backdrop-blur-sm" />
      <div className="relative w-full max-w-md bg-white rounded-2xl shadow-2xl overflow-hidden">
        {/* Header */}
        <div className="bg-crimson px-6 py-5">
          <div className="flex items-center gap-3">
            <div className="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
              <Lock size={18} className="text-white" />
            </div>
            <div>
              <p className="text-white/70 text-xs font-medium uppercase tracking-widest">Zorunlu</p>
              <h2 className="text-white font-bold text-lg">Şifrenizi Değiştirin</h2>
            </div>
          </div>
        </div>

        <div className="px-6 py-6">
          {done ? (
            <div className="flex flex-col items-center gap-3 py-8 text-center">
              <CheckCircle size={48} className="text-green-500" />
              <p className="font-semibold text-navy text-lg">Şifre güncellendi!</p>
              <p className="text-gray-500 text-sm">Artık derslere erişebilirsiniz.</p>
              <button
                onClick={onDone}
                className="mt-4 px-6 py-2.5 bg-navy text-white text-sm font-semibold rounded-xl hover:bg-navy-light transition"
              >
                Devam Et
              </button>
            </div>
          ) : (
            <>
              <p className="text-gray-500 text-sm mb-6">
                Hesabınız yeni. Güvenliğiniz için lütfen şifrenizi değiştirin. Bu adımı atlayamazsınız.
              </p>
              <form onSubmit={submit} className="space-y-4">
                <div>
                  <label className="block text-xs font-semibold text-gray-600 uppercase tracking-wider mb-2">
                    Yeni Şifre
                  </label>
                  <div className="relative">
                    <input
                      type={show ? 'text' : 'password'}
                      required
                      value={pw}
                      onChange={e => { setPw(e.target.value); setError('') }}
                      placeholder="••••••••"
                      className="w-full h-11 px-4 pr-11 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-crimson/20 focus:border-crimson transition"
                    />
                    <button type="button" onClick={() => setShow(!show)} className="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
                      {show ? <EyeOff size={16} /> : <Eye size={16} />}
                    </button>
                  </div>
                  <p className="text-xs text-gray-400 mt-1.5">Min 8 karakter, büyük harf, rakam ve özel karakter</p>
                </div>

                <div>
                  <label className="block text-xs font-semibold text-gray-600 uppercase tracking-wider mb-2">
                    Şifre Tekrar
                  </label>
                  <input
                    type={show ? 'text' : 'password'}
                    required
                    value={pw2}
                    onChange={e => { setPw2(e.target.value); setError('') }}
                    placeholder="••••••••"
                    className="w-full h-11 px-4 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-crimson/20 focus:border-crimson transition"
                  />
                </div>

                {error && (
                  <div className="flex items-center gap-2 rounded-xl bg-red-50 border border-red-200 px-3 py-2.5 text-sm text-red-600">
                    <AlertCircle size={14} className="flex-shrink-0" /> {error}
                  </div>
                )}

                <button
                  type="submit"
                  disabled={loading}
                  className="w-full h-11 bg-crimson text-white font-semibold rounded-xl hover:bg-crimson-dark transition disabled:opacity-60 flex items-center justify-center gap-2"
                >
                  {loading ? <><Loader2 size={16} className="animate-spin" /> Güncelleniyor…</> : 'Şifreyi Güncelle'}
                </button>
              </form>
            </>
          )}
        </div>
      </div>
    </div>
  )
}

// ── Course Viewer ─────────────────────────────────────────────────────────────
function CourseViewer({ course, session, onBack }) {
  const [sections, setSections] = useState([])
  const [loading, setLoading] = useState(true)
  const [error, setError] = useState(null)
  const [open, setOpen] = useState({})

  useEffect(() => {
    moodleGet('core_course_get_contents', { courseid: course.id }, session.token)
      .then(data => {
        // Filter sections that have modules or a name
        const filtered = data.filter(s => s.modules?.length > 0 || (s.name && s.name !== 'General'))
        setSections(filtered)
        // Open first section by default
        if (filtered.length) setOpen({ [filtered[0].id]: true })
      })
      .catch(e => setError(e.message))
      .finally(() => setLoading(false))
  }, [course.id, session.token])

  const toggle = (id) => setOpen(prev => ({ ...prev, [id]: !prev[id] }))

  const modUrl = (mod) => mod.url || `${MOODLE_PUBLIC_URL}/mod/${mod.modname}/view.php?id=${mod.id}`

  return (
    <div className="min-h-screen bg-gray-50">
      {/* Course header */}
      <div className="bg-navy text-white">
        <div className="max-w-3xl mx-auto px-4 sm:px-6 py-8">
          <button
            onClick={onBack}
            className="flex items-center gap-1.5 text-white/60 hover:text-white text-sm mb-5 transition"
          >
            <ChevronLeft size={16} /> Derslere Dön
          </button>
          <div className="flex items-start gap-4">
            <div className="w-12 h-12 rounded-xl bg-white/10 border border-white/20 flex items-center justify-center flex-shrink-0">
              <GraduationCap size={22} className="text-gold" />
            </div>
            <div>
              <p className="text-gold text-xs font-semibold uppercase tracking-widest mb-1">{course.shortname}</p>
              <h1 className="text-xl md:text-2xl font-bold leading-snug">{course.fullname}</h1>
            </div>
          </div>
        </div>
      </div>

      {/* Content */}
      <div className="max-w-3xl mx-auto px-4 sm:px-6 py-8">
        {loading && (
          <div className="flex justify-center py-20">
            <Loader2 size={32} className="animate-spin text-navy/40" />
          </div>
        )}

        {error && (
          <div className="flex items-center gap-2 rounded-xl bg-red-50 border border-red-200 p-4 text-red-600 text-sm">
            <AlertCircle size={16} /> {error}
          </div>
        )}

        {!loading && !error && sections.length === 0 && (
          <div className="flex flex-col items-center py-20 gap-3 text-center">
            <div className="w-14 h-14 rounded-full bg-gray-100 flex items-center justify-center">
              <BookOpen size={24} className="text-gray-300" />
            </div>
            <p className="text-gray-400 text-sm">Bu derste henüz içerik yok.</p>
            <a href={`${MOODLE_PUBLIC_URL}/course/view.php?id=${course.id}`} target="_blank" rel="noopener noreferrer"
              className="text-sm text-crimson hover:underline flex items-center gap-1">
              Moodle'da aç <ExternalLink size={12} />
            </a>
          </div>
        )}

        {!loading && !error && sections.length > 0 && (
          <div className="space-y-3">
            {sections.map((section, si) => (
              <div key={section.id} className="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
                {/* Section header */}
                <button
                  onClick={() => toggle(section.id)}
                  className="w-full flex items-center justify-between px-5 py-4 text-left hover:bg-gray-50 transition"
                >
                  <div className="flex items-center gap-3">
                    <span className="text-xs font-bold text-white bg-navy w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0">
                      {si + 1}
                    </span>
                    <span className="font-semibold text-navy text-sm">
                      {section.name || `Bölüm ${si + 1}`}
                    </span>
                    <span className="text-xs text-gray-400 hidden sm:block">
                      {section.modules?.length || 0} etkinlik
                    </span>
                  </div>
                  <ChevronDown
                    size={16}
                    className={`text-gray-400 transition-transform duration-200 flex-shrink-0 ${open[section.id] ? 'rotate-180' : ''}`}
                  />
                </button>

                {/* Section modules */}
                {open[section.id] && (
                  <div className="border-t border-gray-100 divide-y divide-gray-50">
                    {section.modules?.filter(m => m.modname !== 'label').map(mod => (
                      <a
                        key={mod.id}
                        href={modUrl(mod)}
                        target="_blank"
                        rel="noopener noreferrer"
                        className="flex items-center gap-3 px-5 py-3.5 hover:bg-navy/5 transition group"
                      >
                        <span className="text-navy/40 group-hover:text-navy transition">
                          <ModIcon modname={mod.modname} />
                        </span>
                        <span className="text-sm text-gray-700 group-hover:text-navy transition flex-1 line-clamp-1">
                          {mod.name}
                        </span>
                        <ArrowRight size={13} className="text-gray-300 group-hover:text-crimson transition flex-shrink-0" />
                      </a>
                    ))}

                    {/* Label modules (render inline) */}
                    {section.modules?.filter(m => m.modname === 'label').map(mod => (
                      mod.description ? (
                        <div key={mod.id} className="px-5 py-3 text-sm text-gray-500 bg-gray-50/50"
                          dangerouslySetInnerHTML={{ __html: mod.description }} />
                      ) : null
                    ))}

                    {(!section.modules || section.modules.length === 0) && (
                      <p className="px-5 py-4 text-sm text-gray-400">Bu bölümde henüz etkinlik yok.</p>
                    )}
                  </div>
                )}
              </div>
            ))}
          </div>
        )}
      </div>
    </div>
  )
}

// ── Course Card ───────────────────────────────────────────────────────────────
function CourseCard({ course, index, onClick }) {
  const summary = stripHtml(course.summary)
  const accent = ACCENT[index % ACCENT.length]

  return (
    <button
      onClick={() => onClick(course)}
      className="group flex flex-col bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-left w-full focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-navy"
    >
      <div className={`relative h-40 bg-gradient-to-br ${accent} flex items-center justify-center overflow-hidden`}>
        <div className="absolute inset-0 opacity-10" style={{ backgroundImage: 'radial-gradient(circle at 70% 30%, white 0%, transparent 60%)' }} />
        <div className="relative z-10 flex flex-col items-center gap-2">
          <div className="w-12 h-12 rounded-full bg-white/10 border border-white/20 flex items-center justify-center">
            <GraduationCap size={24} className="text-white" />
          </div>
          <span className="text-white/60 text-xs font-medium uppercase tracking-widest">{course.shortname}</span>
        </div>
        <div className="absolute bottom-0 left-0 right-0 h-0.5 bg-gold/60 group-hover:bg-gold transition-colors" />
      </div>
      <div className="flex flex-col flex-1 p-5">
        <h3 className="font-semibold text-navy text-base leading-snug mb-2 line-clamp-2 group-hover:text-crimson transition-colors">
          {course.fullname}
        </h3>
        {summary && (
          <p className="text-gray-500 text-sm leading-relaxed line-clamp-2 mb-3 flex-1">{summary}</p>
        )}
        <div className="mt-auto pt-3 border-t border-gray-100 flex items-center justify-between">
          <span className="text-xs text-gray-400 uppercase tracking-wider">
            {course.format || 'Topics'}
          </span>
          <span className="flex items-center gap-1 text-sm font-medium text-crimson group-hover:gap-2 transition-all">
            Başla <ArrowRight size={13} />
          </span>
        </div>
      </div>
    </button>
  )
}

// ── Course Grid ───────────────────────────────────────────────────────────────
function CourseGrid({ session, onSelect }) {
  const [courses, setCourses] = useState([])
  const [loading, setLoading] = useState(true)
  const [error, setError] = useState(null)

  const load = () => {
    setLoading(true); setError(null)
    moodleGet('core_enrol_get_users_courses', { userid: session.userId }, session.token)
      .then(data => setCourses(data.filter(c => c.visible !== 0)))
      .catch(e => setError(e.message))
      .finally(() => setLoading(false))
  }

  useEffect(() => { load() }, [])

  return (
    <div className="min-h-screen bg-gray-50">
      {/* Header */}
      <div className="text-white" style={{ background: 'linear-gradient(135deg, #002147 0%, #374b6b 100%)' }}>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 py-12 md:py-16">
          <div className="flex items-start justify-between gap-4">
            <div>
              <div className="flex items-center gap-3 mb-4">
                <div className="w-1 h-7 bg-gold rounded-full" />
                <span className="text-gold text-xs font-semibold uppercase tracking-widest">
                  Cartesian Robotics · Team 25153
                </span>
              </div>
              <h1 className="text-3xl md:text-4xl font-bold mb-2">Öğrenme Merkezi</h1>
              <p className="text-white/60 text-base">
                Hoş geldin, <span className="text-white font-medium">{session.fullname}</span>
              </p>
            </div>
            <button
              onClick={() => { clearSession(); window.location.reload() }}
              className="flex items-center gap-2 px-3 py-2 bg-white/10 hover:bg-white/20 border border-white/20 rounded-lg text-sm transition mt-1 flex-shrink-0"
            >
              <LogOut size={14} /> Çıkış
            </button>
          </div>
        </div>
      </div>

      <div className="max-w-7xl mx-auto px-4 sm:px-6 py-10">
        {error && (
          <div className="flex flex-col items-center gap-4 py-20 text-center">
            <AlertCircle size={32} className="text-crimson" />
            <p className="text-navy font-semibold">Dersler yüklenemedi</p>
            <p className="text-gray-400 text-sm">{error}</p>
            <button onClick={load} className="flex items-center gap-2 px-4 py-2 bg-navy text-white text-sm rounded-xl hover:bg-navy-light transition">
              <RefreshCw size={14} /> Tekrar dene
            </button>
          </div>
        )}

        {loading && (
          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            {[...Array(3)].map((_, i) => (
              <div key={i} className="bg-white rounded-xl border border-gray-100 overflow-hidden animate-pulse">
                <div className="h-40 bg-gray-200" />
                <div className="p-5 space-y-3">
                  <div className="h-5 bg-gray-200 rounded w-3/4" />
                  <div className="h-4 bg-gray-100 rounded w-full" />
                  <div className="h-4 bg-gray-100 rounded w-5/6" />
                </div>
              </div>
            ))}
          </div>
        )}

        {!loading && !error && courses.length === 0 && (
          <div className="flex flex-col items-center py-20 gap-3 text-center">
            <div className="w-14 h-14 rounded-full bg-gray-100 flex items-center justify-center">
              <BookOpen size={24} className="text-gray-300" />
            </div>
            <p className="text-gray-400">Henüz ders yok.</p>
          </div>
        )}

        {!loading && !error && courses.length > 0 && (
          <>
            <div className="flex items-center justify-between mb-6">
              <div>
                <h2 className="text-lg font-bold text-navy">{courses.length} Ders</h2>
                <p className="text-gray-400 text-sm mt-0.5">Başlamak için bir derse tıkla</p>
              </div>
            </div>
            <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
              {courses.map((c, i) => <CourseCard key={c.id} course={c} index={i} onClick={onSelect} />)}
            </div>
          </>
        )}
      </div>
    </div>
  )
}

// ── Root ──────────────────────────────────────────────────────────────────────
export default function LMS() {
  const [session, setSession] = useState(() => getSession())
  const [needsPwChange, setNeedsPwChange] = useState(false)
  const [activeCourse, setActiveCourse] = useState(null)

  const handleLogin = (s) => {
    setSession(s)
    if (!isPwChanged(s.username)) setNeedsPwChange(true)
  }

  const handlePwDone = () => setNeedsPwChange(false)

  if (!session) return <LoginScreen onLogin={handleLogin} />

  if (needsPwChange) return (
    <>
      <CourseGrid session={session} onSelect={() => {}} />
      <ChangePasswordModal session={session} onDone={handlePwDone} />
    </>
  )

  if (activeCourse) return <CourseViewer course={activeCourse} session={session} onBack={() => setActiveCourse(null)} />

  return <CourseGrid session={session} onSelect={setActiveCourse} />
}
