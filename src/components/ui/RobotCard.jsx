import { Link } from 'react-router-dom'
import { motion } from 'framer-motion'

const MotionLink = motion.create(Link)

export default function RobotCard({ year, name, competition, image, link, blendMode = false }) {
  const slug = link.replace('/robots/', '')
  return (
    <MotionLink
      to={link}
      whileHover={{ scale: 1.04 }}
      whileTap={{ scale: 0.97 }}
      transition={{ type: 'spring', stiffness: 400, damping: 22 }}
      className="group relative flex flex-col items-center px-2 py-4 sm:px-6 sm:py-6 border-r border-crimson/15 last:border-r-0 hover:bg-crimson/5 transition-colors duration-300 overflow-hidden"
    >

      {/* Robot Image — shared layoutId morphs into the RobotPage hero image */}
      <div className="w-full h-32 sm:h-52 flex items-end justify-center mb-2 sm:mb-4 overflow-hidden relative z-0">
        <motion.img
          layoutId={`robot-image-${slug}`}
          src={image}
          alt={name}
          loading="lazy"
          decoding="async"
          transition={{ layout: { type: 'spring', stiffness: 220, damping: 26 } }}
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
    </MotionLink>
  )
}
