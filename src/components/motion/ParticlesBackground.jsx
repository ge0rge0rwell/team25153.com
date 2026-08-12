import { useEffect, useMemo, useState } from 'react'
import Particles, { initParticlesEngine } from '@tsparticles/react'
import { loadSlim } from '@tsparticles/slim'

// Subtle drifting dot field behind the hero. Desktop-only, mounted by the caller.
export default function ParticlesBackground() {
  const [ready, setReady] = useState(false)

  useEffect(() => {
    initParticlesEngine(async (engine) => {
      await loadSlim(engine)
    }).then(() => setReady(true))
  }, [])

  const options = useMemo(
    () => ({
      fullScreen: { enable: false },
      background: { color: 'transparent' },
      fpsLimit: 60,
      particles: {
        number: { value: 36 },
        color: { value: ['#832a22', '#FDC800', '#002147'] },
        opacity: { value: 0.25 },
        size: { value: { min: 1, max: 3 } },
        move: { enable: true, speed: 0.4, direction: 'none', random: true, outModes: 'bounce' },
        links: { enable: true, distance: 130, color: '#832a22', opacity: 0.12 },
      },
      detectRetina: true,
    }),
    []
  )

  if (!ready) return null
  return (
    <Particles
      id="hero-particles"
      options={options}
      className="absolute inset-0 pointer-events-none"
    />
  )
}
