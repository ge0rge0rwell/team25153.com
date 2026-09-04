import { useMemo } from 'react'
import { Particles, ParticlesProvider } from '@tsparticles/react'
import { loadSlim } from '@tsparticles/slim'

// Must be a stable reference across the app's lifetime — ParticlesProvider
// throws if it's given a new function identity on a later mount.
const initEngine = async (engine) => {
  await loadSlim(engine)
}

// Subtle drifting dot field behind the hero. Desktop-only, mounted by the caller.
export default function ParticlesBackground() {
  const options = useMemo(
    () => ({
      fullScreen: { enable: false },
      background: { color: 'transparent' },
      fpsLimit: 60,
      particles: {
        number: { value: 36 },
        color: { value: ['#881511', '#FDC800', '#002147'] },
        opacity: { value: 0.25 },
        size: { value: { min: 1, max: 3 } },
        move: { enable: true, speed: 0.4, direction: 'none', random: true, outModes: 'bounce' },
        links: { enable: true, distance: 130, color: '#881511', opacity: 0.12 },
      },
      detectRetina: true,
    }),
    []
  )

  return (
    <ParticlesProvider init={initEngine}>
      <Particles id="hero-particles" options={options} className="absolute inset-0 pointer-events-none" />
    </ParticlesProvider>
  )
}
