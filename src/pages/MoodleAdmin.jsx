// Redirects to Moodle admin. Accessible at /admin.
// Moodle's login page sends X-Frame-Options: sameorigin, so it refuses to
// render inside an iframe on this (different) origin — browsers show a
// blank/white frame instead. A top-level redirect avoids that entirely.
import { useEffect } from 'react'

const MOODLE_ADMIN_URL = 'https://lms.team25153.com/admin'

export default function MoodleAdmin() {
  useEffect(() => {
    window.location.replace(MOODLE_ADMIN_URL)
  }, [])
  return null
}
