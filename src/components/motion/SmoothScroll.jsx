import { useEffect } from 'react'
import { useReducedMotion } from 'framer-motion'
import { createSmoothScroll } from '../../lib/scroll'

// Mounted once at the app root. Skips entirely under prefers-reduced-motion,
// matching the reducedMotion="user" contract the rest of the site already follows.
export default function SmoothScroll() {
  const reducedMotion = useReducedMotion()

  useEffect(() => {
    if (reducedMotion) return
    let cleanup
    import('lenis').then(({ default: Lenis }) => {
      cleanup = createSmoothScroll(Lenis)
    })
    return () => cleanup?.()
  }, [reducedMotion])

  return null
}
