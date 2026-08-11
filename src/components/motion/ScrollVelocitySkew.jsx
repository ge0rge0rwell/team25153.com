import { motion, useScroll, useVelocity, useSpring, useTransform, useReducedMotion } from 'framer-motion'

// Skews text based on how fast the user is scrolling — flings past it and it
// leans into the motion, settles flat once scrolling stops. Classic "scroll
// velocity" text treatment, kept subtle (clamped to a few degrees).
export default function ScrollVelocitySkew({ as = 'div', className, children, maxSkew = 6 }) {
  const reducedMotion = useReducedMotion()
  const { scrollY } = useScroll()
  const scrollVelocity = useVelocity(scrollY)
  const smoothVelocity = useSpring(scrollVelocity, { damping: 40, stiffness: 300 })
  const skew = useTransform(smoothVelocity, [-2000, 0, 2000], reducedMotion ? [0, 0, 0] : [maxSkew, 0, -maxSkew])

  const MotionTag = motion[as] || motion.div
  return (
    <MotionTag style={{ skewX: skew }} className={className}>
      {children}
    </MotionTag>
  )
}
