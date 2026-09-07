import { useEffect, useState } from 'react'

// FTC BIOBUZZ season kickoff: Saturday, Sept 12 2026, 19:00 Turkey time (TRT, UTC+3)
// — same instant as the official 12:00 PM ET reveal.
const KICKOFF = new Date('2026-09-12T19:00:00+03:00')

function timeLeft() {
  const diff = Math.max(0, KICKOFF - new Date())
  const totalSeconds = Math.floor(diff / 1000)
  return {
    days: Math.floor(totalSeconds / 86400),
    hours: Math.floor((totalSeconds % 86400) / 3600),
    minutes: Math.floor((totalSeconds % 3600) / 60),
    seconds: totalSeconds % 60,
  }
}

function Unit({ value, label }) {
  return (
    <div className="flex flex-col items-center">
      <span className="font-mono text-sm sm:text-lg font-bold text-crimson tabular-nums">
        {String(value).padStart(2, '0')}
      </span>
      <span className="text-[7px] font-semibold tracking-[0.1em] uppercase text-crimson/50">
        {label}
      </span>
    </div>
  )
}

export default function ComingSoonRobotCard() {
  const [t, setT] = useState(timeLeft)

  useEffect(() => {
    const id = setInterval(() => setT(timeLeft()), 1000)
    return () => clearInterval(id)
  }, [])

  return (
    <div className="group relative flex flex-col items-center px-2 py-4 sm:px-6 sm:py-6 border-r border-crimson/15 last:border-r-0 overflow-hidden">
      <div className="w-full h-32 sm:h-52 flex items-center justify-center mb-2 sm:mb-4">
        <span className="font-['Rajdhani',sans-serif] text-6xl sm:text-8xl font-bold text-crimson/25">?</span>
      </div>

      <div className="flex flex-col items-center gap-1 text-center">
        <span className="font-mono text-[10px] tracking-[0.15em] text-crimson uppercase">
          2026 – 27
        </span>
        <h3 className="font-['Rajdhani',sans-serif] text-lg sm:text-3xl md:text-4xl font-extrabold text-crimson leading-none tracking-tight">
          BIOBUZZ
        </h3>

        <div className="flex items-start gap-1.5 sm:gap-2 mt-1.5">
          <Unit value={t.days} label="gün" />
          <span className="text-crimson/30 font-bold">:</span>
          <Unit value={t.hours} label="sa" />
          <span className="text-crimson/30 font-bold">:</span>
          <Unit value={t.minutes} label="dk" />
          <span className="text-crimson/30 font-bold">:</span>
          <Unit value={t.seconds} label="sn" />
        </div>

        <div className="w-4 h-px bg-crimson/35 my-0.5" />
        <span className="text-[10px] font-bold text-crimson mt-1">
          Coming Soon!
        </span>
      </div>
    </div>
  )
}
