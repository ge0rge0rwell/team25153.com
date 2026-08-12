import gsap from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'

gsap.registerPlugin(ScrollTrigger)

export { gsap, ScrollTrigger }

// Lenis drives real (not virtualized) scrollTop each frame, so framer-motion's
// useScroll()/window scroll events keep working untouched — this only needs to
// feed ScrollTrigger and drop rAF duplication with gsap.ticker.
export function createSmoothScroll(Lenis) {
  const lenis = new Lenis({ autoRaf: false })
  lenis.on('scroll', ScrollTrigger.update)
  const tick = (time) => lenis.raf(time * 1000)
  gsap.ticker.add(tick)
  gsap.ticker.lagSmoothing(0)
  return () => {
    gsap.ticker.remove(tick)
    lenis.destroy()
  }
}
