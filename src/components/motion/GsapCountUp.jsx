import { useEffect, useRef } from 'react'
import { gsap } from '../../lib/scroll'

// Counts a number up from 0 when it scrolls into view. GSAP-driven (distinct
// from the framer-motion whileInView reveals used everywhere else on the page).
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
      scrollTrigger: { trigger: el, start: 'top 85%', once: true },
    })
    return () => {
      tween.scrollTrigger?.kill()
      tween.kill()
    }
  }, [value])

  return <span ref={ref} className={className}>0</span>
}
