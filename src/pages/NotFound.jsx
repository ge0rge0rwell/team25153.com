import { Link } from 'react-router-dom'
import { ArrowRight, Home as HomeIcon } from 'lucide-react'
import { motion, useReducedMotion } from 'framer-motion'
import { StaggerGroup, StaggerItem } from '../components/motion/Stagger'
import { TypewriterText } from '../components/motion/Typewriter'

export default function NotFound() {
  const reducedMotion = useReducedMotion()

  return (
    <div className="min-h-[calc(100vh-4rem)] flex items-center bg-gradient-to-br from-[#fdf8f7] to-white relative overflow-hidden">
      <div className="absolute top-0 right-0 w-1/2 h-full bg-crimson/3 clip-diagonal pointer-events-none" />
      <div className="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-gold/10 blur-3xl pointer-events-none" />

      <div className="max-w-2xl mx-auto px-6 py-16 w-full relative text-center">
        {/* 404 numeral, with René floating free above it — no frame, no box */}
        <div className="relative flex justify-center mb-2">
          <div className="text-8xl sm:text-9xl font-black text-navy/10 leading-none select-none">404</div>

          <motion.img
            src="/media/hero-descartes.png"
            alt="René Descartes, escaped and floating free above the error"
            decoding="async"
            className="absolute -top-14 sm:-top-20 w-40 sm:w-56 object-contain drop-shadow-2xl"
            initial={{ opacity: 0, y: 30, rotate: -8, scale: 0.8 }}
            animate={
              reducedMotion
                ? { opacity: 1, y: 0, rotate: 0, scale: 1 }
                : {
                    opacity: 1,
                    scale: 1,
                    y: [30, -14, -6, -16, -10],
                    rotate: [-8, 4, -3, 3, -2],
                  }
            }
            transition={
              reducedMotion
                ? { duration: 0.5 }
                : {
                    opacity: { duration: 0.5 },
                    scale: { duration: 0.5 },
                    y: { duration: 5, times: [0, 0.25, 0.5, 0.75, 1], repeat: Infinity, repeatType: 'mirror', ease: 'easeInOut' },
                    rotate: { duration: 5, times: [0, 0.25, 0.5, 0.75, 1], repeat: Infinity, repeatType: 'mirror', ease: 'easeInOut' },
                  }
            }
          />
        </div>

        <StaggerGroup as="div" staggerChildren={0.12} className="flex flex-col items-center">
          <StaggerItem as="p" className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-4 flex items-center gap-2">
            <span className="w-8 h-px bg-crimson inline-block" />
            Error 404
            <span className="w-8 h-px bg-crimson inline-block" />
          </StaggerItem>

          <StaggerItem as="h1" className="text-2xl sm:text-3xl font-medium text-navy mb-4 leading-tight">
            <TypewriterText text="I Think, Therefore This Page Isn't." startDelay={200} />
          </StaggerItem>

          <StaggerItem as="p" className="text-gray-600 text-sm leading-relaxed mb-8 max-w-sm">
            Even René couldn't derive this one from first principles — he's out here floating free, and this page still doesn't exist. Or maybe it just moved.
          </StaggerItem>

          <StaggerItem className="flex flex-wrap items-center justify-center gap-3">
            <motion.div whileHover={{ scale: 1.04 }} whileTap={{ scale: 0.96 }} transition={{ type: 'spring', stiffness: 400, damping: 20 }}>
              <Link to="/" className="btn-primary">
                <HomeIcon size={16} /> Back to Home
              </Link>
            </motion.div>
            <motion.div whileHover={{ scale: 1.04 }} whileTap={{ scale: 0.96 }} transition={{ type: 'spring', stiffness: 400, damping: 20 }}>
              <Link to="/awards" className="btn-outline">
                Meet the Team <ArrowRight size={16} />
              </Link>
            </motion.div>
          </StaggerItem>

          <StaggerItem as="p" className="text-gray-400 text-xs mt-6">
            Or <Link to="/contact" className="text-crimson hover:underline">let us know</Link> if you think this is a bug.
          </StaggerItem>
        </StaggerGroup>
      </div>
    </div>
  )
}
