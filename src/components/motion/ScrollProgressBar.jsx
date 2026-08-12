import { useEffect, useRef } from 'react'
import { gsap, ScrollTrigger } from '../../lib/scroll'

// Fixed top-of-viewport bar that fills as the reader scrolls the page. GSAP
// scrub-tied, sits under the sticky navbar (z-30 < navbar's z-40).
export default function ScrollProgressBar() {
  const barRef = useRef(null)

  useEffect(() => {
    const el = barRef.current
    if (!el) return
    const trigger = ScrollTrigger.create({
      start: 0,
      end: 'max',
      onUpdate: (self) => gsap.set(el, { scaleX: self.progress }),
    })
    return () => trigger.kill()
  }, [])

  return (
    <div className="fixed top-16 left-0 right-0 z-30 h-0.5 bg-transparent hidden lg:block">
      <div ref={barRef} className="h-full bg-gradient-to-r from-crimson to-gold origin-left" style={{ transform: 'scaleX(0)' }} />
    </div>
  )
}
