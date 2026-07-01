import { Link } from 'react-router-dom'

export default function RobotCard({ year, name, competition, image, link, blendMode = false }) {
  return (
    <Link
      to={link}
      className="group relative flex flex-col items-center px-2 py-4 sm:px-6 sm:py-6 border-r border-crimson/15 last:border-r-0 hover:bg-crimson/5 transition-colors duration-300 overflow-hidden"
    >

      {/* Robot Image */}
      <div className="w-full h-32 sm:h-52 flex items-end justify-center mb-2 sm:mb-4 overflow-hidden relative z-0">
        <img
          src={image}
          alt={name}
          loading="lazy"
          decoding="async"
          className={`w-full h-full object-contain object-bottom transition-transform duration-300 group-hover:-translate-y-2 group-hover:opacity-90 ${blendMode ? 'mix-blend-multiply' : ''}`}
        />
      </div>

      {/* Robot Info */}
      <div className="flex flex-col items-center gap-1 text-center relative z-0">
        <span className="font-mono text-[10px] tracking-[0.15em] text-crimson uppercase">
          {year}
        </span>
        <h3 className="font-['Rajdhani',sans-serif] text-base sm:text-2xl md:text-3xl font-bold text-crimson leading-none tracking-tight">
          {name}
        </h3>
        <div className="w-4 h-px bg-crimson/35 my-0.5" />
        <span className="text-[9px] font-semibold tracking-[0.15em] uppercase text-crimson/50">
          {competition}
        </span>
      </div>
    </Link>
  )
}
