// Shared framer-motion variants. Bold, visible motion — this is a punchy
// site, not a subtle one — but every distance/duration here is tuned to
// settle well under 700ms so scrolling never feels laggy.

export const fadeUp = {
  hidden: { opacity: 0, y: 48 },
  show: {
    opacity: 1,
    y: 0,
    transition: { duration: 0.6, ease: [0.16, 1, 0.3, 1] },
  },
}

export const fadeDown = {
  hidden: { opacity: 0, y: -32 },
  show: {
    opacity: 1,
    y: 0,
    transition: { duration: 0.55, ease: [0.16, 1, 0.3, 1] },
  },
}

export const fadeLeft = {
  hidden: { opacity: 0, x: 56 },
  show: {
    opacity: 1,
    x: 0,
    transition: { duration: 0.6, ease: [0.16, 1, 0.3, 1] },
  },
}

export const fadeRight = {
  hidden: { opacity: 0, x: -56 },
  show: {
    opacity: 1,
    x: 0,
    transition: { duration: 0.6, ease: [0.16, 1, 0.3, 1] },
  },
}

export const scaleIn = {
  hidden: { opacity: 0, scale: 0.85 },
  show: {
    opacity: 1,
    scale: 1,
    transition: { duration: 0.55, ease: [0.16, 1, 0.3, 1] },
  },
}

export const directionVariant = {
  up: fadeUp,
  down: fadeDown,
  left: fadeLeft,
  right: fadeRight,
  scale: scaleIn,
}

// Container drives the choreography; children just declare `staggerItem`.
export const staggerContainer = (staggerChildren = 0.12, delayChildren = 0) => ({
  hidden: {},
  show: {
    transition: { staggerChildren, delayChildren },
  },
})

export const staggerItem = fadeUp

// Merge a delay into a variant's own transition instead of passing a
// top-level `transition` prop (which would clobber the variant's tuned
// duration/ease entirely).
export function withDelay(variant, delay) {
  return { hidden: variant.hidden, show: { ...variant.show, transition: { ...variant.show.transition, delay } } }
}

export const pageTransition = {
  initial: { opacity: 0, y: 16 },
  animate: { opacity: 1, y: 0 },
  exit: { opacity: 0, y: -12 },
  transition: { duration: 0.35, ease: [0.16, 1, 0.3, 1] },
}
