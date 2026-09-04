import { useEffect, useRef, useState } from 'react'
import useReducedMotion from '../../lib/useReducedMotion'

const Cursor = ({ show }) => (
  <span
    aria-hidden="true"
    className="inline-block w-[0.08em] -mb-[0.05em] ml-0.5 align-baseline bg-current"
    style={{ height: '0.9em', opacity: show ? 1 : 0 }}
  />
)

// A solid blinking block, for the hero headline. Bigger and more deliberate
// than the thin inline Cursor above, and it keeps blinking rather than
// disappearing once typing stops.
const BlockCursor = () => (
  <span
    aria-hidden="true"
    className="inline-block w-[0.06em] h-[0.85em] ml-1 bg-crimson align-baseline animate-cursor-blink"
  />
)

/**
 * Headline typewriter that cycles through two-tone phrases: types the whole
 * thing out, holds, deletes it, then moves to the next and loops.
 *
 * Each phrase is { lead, accent } and renders as `lead accent`, with the two
 * halves coloured differently — "Cartesian" navy, "Robotics" crimson. The
 * animation runs over the combined string so the colour boundary is crossed
 * mid-type rather than the halves animating separately.
 */
export function TypewriterHeadline({
  phrases,
  leadClassName = '',
  accentClassName = '',
  typeSpeed = 75,
  deleteSpeed = 38,
  holdMs = 2400,
  gapMs = 380,
  startDelay = 600,
}) {
  const reducedMotion = useReducedMotion()
  const [index, setIndex] = useState(0)
  const [count, setCount] = useState(0)
  const [phase, setPhase] = useState('waiting') // waiting | typing | holding | deleting
  const timeoutRef = useRef(null)

  const phrase = phrases[index % phrases.length]
  const combined = `${phrase.lead} ${phrase.accent}`

  // Reduced motion: rotate whole phrases on a plain interval. The content
  // still cycles, but nothing animates character by character.
  useEffect(() => {
    if (!reducedMotion) return
    const id = setInterval(() => setIndex((i) => (i + 1) % phrases.length), holdMs + 1200)
    return () => clearInterval(id)
  }, [reducedMotion, phrases.length, holdMs])

  useEffect(() => {
    if (reducedMotion) return

    if (phase === 'waiting') {
      timeoutRef.current = setTimeout(() => setPhase('typing'), startDelay)
    } else if (phase === 'typing') {
      if (count < combined.length) {
        timeoutRef.current = setTimeout(() => setCount((c) => c + 1), typeSpeed)
      } else {
        timeoutRef.current = setTimeout(() => setPhase('holding'), 0)
      }
    } else if (phase === 'holding') {
      timeoutRef.current = setTimeout(() => setPhase('deleting'), holdMs)
    } else if (phase === 'deleting') {
      if (count > 0) {
        timeoutRef.current = setTimeout(() => setCount((c) => c - 1), deleteSpeed)
      } else {
        timeoutRef.current = setTimeout(() => {
          setIndex((i) => (i + 1) % phrases.length)
          setPhase('typing')
        }, gapMs)
      }
    }
    return () => clearTimeout(timeoutRef.current)
  }, [phase, count, combined, phrases.length, typeSpeed, deleteSpeed, holdMs, gapMs, startDelay, reducedMotion])

  // Split the typed substring back across the colour boundary. The separating
  // space is keyed off whether it has been typed yet, not off the accent being
  // non-empty — otherwise on the single frame between typing the space and
  // typing the first accent character the space vanishes and the cursor
  // visibly jumps back a space-width before moving forward again.
  const shown = reducedMotion ? combined : combined.slice(0, count)
  const leadShown = shown.slice(0, phrase.lead.length)
  const spaceTyped = shown.length > phrase.lead.length
  const accentShown = spaceTyped ? shown.slice(phrase.lead.length + 1) : ''

  return (
    // aria-label carries the full current phrase so a screen reader announces
    // it once, instead of reading a half-typed string on every state change.
    <span aria-label={combined} role="text">
      <span aria-hidden="true" className={leadClassName}>{leadShown}</span>
      {spaceTyped && <span aria-hidden="true">{' '}</span>}
      <span aria-hidden="true" className={accentClassName}>{accentShown}</span>
      {!reducedMotion && <BlockCursor />}
    </span>
  )
}

// One-shot "natural" typing: per-character delay jitters slightly instead of
// a robotic fixed interval, so it reads like someone actually typing.
export function TypewriterText({ text, className, startDelay = 0, minCharDelay = 28, maxCharDelay = 68, cursor = true, onComplete }) {
  const reducedMotion = useReducedMotion()
  const [count, setCount] = useState(reducedMotion ? text.length : 0)
  const [done, setDone] = useState(reducedMotion)
  const timeoutRef = useRef(null)

  useEffect(() => {
    if (reducedMotion) {
      onComplete?.()
      return
    }
    setCount(0)
    setDone(false)
    let i = 0
    const step = () => {
      i += 1
      setCount(i)
      if (i >= text.length) {
        setDone(true)
        onComplete?.()
        return
      }
      const jitter = minCharDelay + Math.random() * (maxCharDelay - minCharDelay)
      timeoutRef.current = setTimeout(step, jitter)
    }
    timeoutRef.current = setTimeout(step, startDelay)
    return () => clearTimeout(timeoutRef.current)
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [text, reducedMotion])

  return (
    <span className={className}>
      {text.slice(0, count)}
      {cursor && <Cursor show={!done} />}
    </span>
  )
}

// Cycles through phrases: types one out, holds, deletes, moves to the next.
// Under reduced-motion, skips the character animation and just cross-fades
// between full phrases so the content still rotates without the motion.
export function TypewriterCycle({ phrases, className, typeSpeed = 45, deleteSpeed = 28, holdMs = 1800, gapMs = 400 }) {
  const reducedMotion = useReducedMotion()
  const [index, setIndex] = useState(0)
  const [count, setCount] = useState(0)
  const [phase, setPhase] = useState('typing') // typing | holding | deleting
  const timeoutRef = useRef(null)

  const phrase = phrases[index % phrases.length]

  // Reduced-motion path: just rotate phrases on a plain interval, no
  // character-by-character state machine.
  useEffect(() => {
    if (!reducedMotion) return
    const id = setInterval(() => setIndex((i) => (i + 1) % phrases.length), holdMs)
    return () => clearInterval(id)
  }, [reducedMotion, phrases.length, holdMs])

  useEffect(() => {
    if (reducedMotion) return
    if (phase === 'typing') {
      if (count < phrase.length) {
        timeoutRef.current = setTimeout(() => setCount((c) => c + 1), typeSpeed + Math.random() * 20)
      } else {
        timeoutRef.current = setTimeout(() => setPhase('holding'), 200)
      }
    } else if (phase === 'holding') {
      timeoutRef.current = setTimeout(() => setPhase('deleting'), holdMs)
    } else if (phase === 'deleting') {
      if (count > 0) {
        timeoutRef.current = setTimeout(() => setCount((c) => c - 1), deleteSpeed)
      } else {
        timeoutRef.current = setTimeout(() => {
          setIndex((i) => (i + 1) % phrases.length)
          setPhase('typing')
        }, gapMs)
      }
    }
    return () => clearTimeout(timeoutRef.current)
  }, [phase, count, phrase, phrases.length, typeSpeed, deleteSpeed, holdMs, gapMs, reducedMotion])

  if (reducedMotion) {
    return <span className={`${className} relative inline-block`}>{phrase}</span>
  }

  return (
    <span className={className}>
      {phrase.slice(0, count)}
      <Cursor show />
    </span>
  )
}
