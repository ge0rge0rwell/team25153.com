import { motion } from 'framer-motion'
import { staggerContainer, staggerItem } from './variants'

// Wrap a list/grid with StaggerGroup, wrap each child with StaggerItem.
// The group triggers once on scroll-in; items cascade in on its schedule.
export function StaggerGroup({
  as = 'div',
  staggerChildren = 0.12,
  delayChildren = 0,
  amount = 0.15,
  className,
  children,
  ...rest
}) {
  const MotionTag = motion[as] || motion.div
  return (
    <MotionTag
      className={className}
      variants={staggerContainer(staggerChildren, delayChildren)}
      initial="hidden"
      whileInView="show"
      viewport={{ once: true, amount }}
      {...rest}
    >
      {children}
    </MotionTag>
  )
}

export function StaggerItem({ as = 'div', className, children, ...rest }) {
  const MotionTag = motion[as] || motion.div
  return (
    <MotionTag className={className} variants={staggerItem} {...rest}>
      {children}
    </MotionTag>
  )
}
