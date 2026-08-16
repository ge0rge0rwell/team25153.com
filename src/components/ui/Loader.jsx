import { useEffect, useState } from 'react'
import { TypewriterCycle } from '../motion/Typewriter'

const THINKING_PHRASES = ['Thinking...', 'Deriving...', 'Cogito, ergo...', 'Loading axioms...']

// Route-transition fallback. Chunks are pre-fetched on idle (see
// useRoutePrefetch in App.jsx) so most navigations resolve before this ever
// paints — the delay keeps it from flashing on those fast, already-cached
// loads and only shows for a load that's actually taking a moment.
export default function Loader({ fullScreen = true, delay = 200 }) {
  const [visible, setVisible] = useState(delay === 0)

  useEffect(() => {
    if (delay === 0) return
    const t = setTimeout(() => setVisible(true), delay)
    return () => clearTimeout(t)
  }, [delay])

  if (!visible) return null

  return (
    <div
      className={
        fullScreen
          ? 'min-h-screen flex flex-col items-center justify-center gap-4 bg-white'
          : 'flex flex-col items-center justify-center gap-4 py-16'
      }
      role="status"
      aria-live="polite"
      aria-label="Loading"
    >
      <div className="relative w-16 h-16">
        <span className="absolute inset-0 rounded-full border-2 border-crimson/30" />
        <img
          src="/descartes/logo-cartesian.jpg"
          alt=""
          className="absolute inset-1 w-14 h-14 rounded-full object-cover"
        />
      </div>
      <p className="text-navy/50 text-xs font-semibold uppercase tracking-widest h-4">
        <TypewriterCycle phrases={THINKING_PHRASES} holdMs={900} />
      </p>
    </div>
  )
}
