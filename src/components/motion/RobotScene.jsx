import { Component, Suspense } from 'react'
import { Canvas } from '@react-three/fiber'
import { useGLTF, OrbitControls, Stage } from '@react-three/drei'

// useGLTF throws (not just suspends) when the .glb 404s, so a plain Suspense
// boundary isn't enough — this catches that and renders nothing instead of
// crashing the page. Scoped to this file; not a general-purpose boundary.
class ModelBoundary extends Component {
  state = { failed: false }
  static getDerivedStateFromError() {
    return { failed: true }
  }
  render() {
    return this.state.failed ? null : this.props.children
  }
}

function Model({ url }) {
  const { scene } = useGLTF(url)
  return <primitive object={scene} />
}

// Fully interactive 3D viewer for a robot's .glb, expected at
// /models/<slug>.glb — drag to rotate, right-click/two-finger drag to pan,
// scroll/pinch to zoom. Renders nothing if that file doesn't exist yet.
export default function RobotScene({ modelUrl }) {
  return (
    <ModelBoundary>
      <Canvas camera={{ position: [3, 2, 5], fov: 40 }} dpr={[1, 1.5]} shadows>
        <Suspense fallback={null}>
          <Stage environment="city" intensity={0.5} shadows="contact" adjustCamera>
            <Model url={modelUrl} />
          </Stage>
        </Suspense>
        <OrbitControls
          enableRotate
          enableZoom
          enablePan
          screenSpacePanning
          panSpeed={0.8}
          zoomSpeed={0.8}
          rotateSpeed={0.7}
          minDistance={0.5}
          maxDistance={20}
        />
      </Canvas>
    </ModelBoundary>
  )
}
