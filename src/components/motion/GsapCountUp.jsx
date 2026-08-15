import { useEffect, useRef } from 'react'
import { gsap } from '../../lib/scroll'

// Counts a number up from 0 on mount. GSAP-driven (distinct from the
// framer-motion whileInView reveals used everywhere else on the page).
//
// Animates on mount rather than via ScrollTrigger: this component only ever
// renders just below the page banner, so it's typically already in view by
// the time it mounts, and a scroll-position trigger can miss its window
// after an SPA route transition (stale layout measurements), leaving the
// counter stuck at 0 with no scroll event left to fire it.
export default function GsapCountUp({ value, className }) {
  const ref = useRef(null)

  useEffect(() => {
    const el = ref.current
    if (!el) return
    const counter = { n: 0 }
    const tween = gsap.to(counter, {
      n: value,
      duration: 1.4,
      ease: 'power2.out',
      onUpdate: () => { el.textContent = Math.round(counter.n) },
    })
    return () => tween.kill()
  }, [value])

  return <span ref={ref} className={className}>0</span>
}
