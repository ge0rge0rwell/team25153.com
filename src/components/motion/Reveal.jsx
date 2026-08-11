import { motion } from 'framer-motion'
import { directionVariant, withDelay } from './variants'

// Scroll-triggered reveal. Animates once when the element enters the
// viewport, then leaves it alone — re-triggering on every scroll up/down
// reads as noisy rather than polished.
export default function Reveal({
  as = 'div',
  direction = 'up',
  delay = 0,
  amount = 0.2,
  className,
  children,
  ...rest
}) {
  const MotionTag = motion[as] || motion.div
  const base = directionVariant[direction] || directionVariant.up
  const variants = delay ? withDelay(base, delay) : base

  return (
    <MotionTag
      className={className}
      variants={variants}
      initial="hidden"
      whileInView="show"
      viewport={{ once: true, amount }}
      {...rest}
    >
      {children}
    </MotionTag>
  )
}
