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

      <div className="max-w-5xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 gap-10 items-center w-full relative">
        <StaggerGroup as="div" staggerChildren={0.12}>
          <StaggerItem as="p" className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-4 flex items-center gap-2">
            <span className="w-8 h-px bg-crimson inline-block" />
            Error 404
          </StaggerItem>

          <StaggerItem as="div" className="text-7xl sm:text-8xl font-black text-navy/10 leading-none mb-2 select-none">
            404
          </StaggerItem>

          <StaggerItem as="h1" className="text-2xl sm:text-3xl font-medium text-navy mb-4 leading-tight">
            <TypewriterText text="I Think, Therefore This Page Isn't." startDelay={200} />
          </StaggerItem>

          <StaggerItem as="p" className="text-gray-600 text-sm leading-relaxed mb-8 max-w-sm">
            Even René couldn't derive this one from first principles. The page you're looking for has been proven not to exist — or maybe it just moved.
          </StaggerItem>

          <StaggerItem className="flex flex-wrap items-center gap-3">
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

        {/* Descartes, pondering where the page went */}
        <motion.div
          initial={{ opacity: 0, scale: 0.85 }}
          animate={{ opacity: 1, scale: 1 }}
          transition={{ delay: 0.2, type: 'spring', stiffness: 200, damping: 20 }}
          className="flex justify-center md:justify-end"
        >
          <motion.div
            className="relative"
            animate={reducedMotion ? undefined : { rotate: [-3, 3, -3] }}
            transition={reducedMotion ? undefined : { duration: 6, repeat: Infinity, ease: 'easeInOut' }}
          >
            <div className="absolute -inset-4 rounded-3xl border-2 border-crimson/10 rotate-3" />
            <img
              src="/media/hero-descartes.png"
              alt="A puzzled René Descartes, unable to find this page"
              className="relative w-full max-w-[260px] sm:max-w-xs object-contain drop-shadow-2xl"
              decoding="async"
            />
            <motion.div
              initial={{ opacity: 0, scale: 0.6 }}
              animate={{ opacity: 1, scale: 1 }}
              transition={{ delay: 0.7, type: 'spring', stiffness: 260, damping: 18 }}
              className="absolute -bottom-3 -left-3 bg-navy text-white rounded-xl px-4 py-2.5 shadow-lg"
            >
              <p className="text-[10px] font-bold uppercase tracking-widest text-gold">Status</p>
              <p className="text-sm font-bold leading-none">Lost in thought</p>
            </motion.div>
          </motion.div>
        </motion.div>
      </div>
    </div>
  )
}
