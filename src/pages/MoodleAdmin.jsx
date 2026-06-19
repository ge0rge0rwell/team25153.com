// Full-screen Moodle admin — no site chrome. Accessible at /admin.
const MOODLE_ADMIN_URL = 'https://lms.team25153.com/admin'

export default function MoodleAdmin() {
  return (
    <iframe
      src={MOODLE_ADMIN_URL}
      title="Moodle Admin"
      style={{ position: 'fixed', inset: 0, width: '100%', height: '100%', border: 'none' }}
      sandbox="allow-same-origin allow-scripts allow-forms allow-popups allow-popups-to-escape-sandbox allow-top-navigation"
    />
  )
}
