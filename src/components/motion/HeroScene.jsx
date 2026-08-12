import { useRef } from 'react'
import { Canvas, useFrame } from '@react-three/fiber'
import { MeshDistortMaterial, Sphere } from '@react-three/drei'

function DistortSphere() {
  const meshRef = useRef(null)
  useFrame((_, delta) => {
    if (meshRef.current) meshRef.current.rotation.y += delta * 0.15
  })
  return (
    <Sphere ref={meshRef} args={[1.4, 64, 64]}>
      <MeshDistortMaterial color="#832a22" distort={0.4} speed={1.5} roughness={0.2} metalness={0.3} />
    </Sphere>
  )
}

// Abstract 3D backdrop for the hero. Desktop-only — mounted behind a viewport
// check by the caller so mobile never pays for the WebGL context.
export default function HeroScene() {
  return (
    <Canvas
      camera={{ position: [0, 0, 4], fov: 45 }}
      dpr={[1, 1.5]}
      gl={{ antialias: true, alpha: true }}
    >
      <ambientLight intensity={0.6} />
      <directionalLight position={[3, 3, 3]} intensity={1.2} color="#FDC800" />
      <DistortSphere />
    </Canvas>
  )
}
