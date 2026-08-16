import { useEffect, useRef, useState } from 'react'
import useReducedMotion from '../../lib/useReducedMotion'

const Cursor = ({ show }) => (
  <span
    aria-hidden="true"
    className="inline-block w-[0.08em] -mb-[0.05em] ml-0.5 align-baseline bg-current"
    style={{ height: '0.9em', opacity: show ? 1 : 0 }}
  />
)

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
