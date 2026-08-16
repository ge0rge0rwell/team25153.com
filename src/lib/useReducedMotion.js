import { useSyncExternalStore } from 'react'

const QUERY = '(prefers-reduced-motion: reduce)'

function subscribe(callback) {
  const mql = window.matchMedia(QUERY)
  mql.addEventListener('change', callback)
  return () => mql.removeEventListener('change', callback)
}

function getSnapshot() {
  return window.matchMedia(QUERY).matches
}

// SSR/first-paint default: assume motion is fine rather than forcing the
// reduced-motion branch on every request before the client can check.
function getServerSnapshot() {
  return false
}

// Drop-in replacement for framer-motion's useReducedMotion, now that
// framer-motion is gone from the project.
export default function useReducedMotion() {
  return useSyncExternalStore(subscribe, getSnapshot, getServerSnapshot)
}
