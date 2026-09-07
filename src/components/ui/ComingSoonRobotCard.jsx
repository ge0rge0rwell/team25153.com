import { useEffect, useState } from 'react'

// FTC BIOBUZZ season kickoff: Saturday, Sept 12 2026, 12:00 PM ET
const KICKOFF = new Date('2026-09-12T12:00:00-04:00')

function daysLeft() {
  return Math.max(0, Math.ceil((KICKOFF - new Date()) / 86400000))
}

export default function ComingSoonRobotCard() {
  const [days, setDays] = useState(daysLeft)

  useEffect(() => {
    const id = setInterval(() => setDays(daysLeft()), 60 * 60 * 1000)
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
        <h3 className="font-['Rajdhani',sans-serif] text-base sm:text-2xl md:text-3xl font-bold text-crimson leading-none tracking-tight">
          BIOBUZZ
        </h3>
        <div className="w-4 h-px bg-crimson/35 my-0.5" />
        <span className="text-[9px] font-semibold tracking-[0.15em] uppercase text-crimson/50">
          {days} {days === 1 ? 'day' : 'days'} left
        </span>
        <span className="text-[10px] font-bold text-crimson mt-1">
          Coming Soon!
        </span>
      </div>
    </div>
  )
}
