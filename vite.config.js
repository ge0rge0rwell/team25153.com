import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'

// https://vite.dev/config/
export default defineConfig({
  plugins: [react()],
  base: '/',
  server: {
    // In dev the React app runs on Vite while the content/admin API runs on the
    // Express server (npm run server). Proxy API + uploaded media across so the
    // admin panel and live-content fetch work without CORS juggling.
    proxy: {
      '/api': 'http://localhost:4000',
      '/uploads': 'http://localhost:4000',
      '/moodle-api': {
        target: 'http://localhost:8081',
        changeOrigin: true,
        rewrite: (path) => path.replace(/^\/moodle-api/, ''),
      },
    },
  },
  build: {
    // Modern browsers only — ships less transpiled/polyfilled output.
    target: 'es2020',
    cssCodeSplit: true,
    rollupOptions: {
      output: {
        // Keep the long-lived framework code in its own cacheable chunk so app
        // changes don't bust the React/runtime cache, and the main entry stays small.
        manualChunks(id) {
          if (id.includes('node_modules')) {
            // Only reachable through HeroScene/ParticlesBackground's dynamic
            // import() — leave them to Rollup's automatic per-entry chunking
            // instead of forcing them into the always-loaded vendor bundle.
            if (
              id.includes('three') ||
              id.includes('@react-three') ||
              id.includes('tsparticles') ||
              // Only reached from lazy routes: `marked` from BlogPost and the
              // CMS blog editor, `gsap` from the Awards counter. Forcing them
              // into `vendor` (which the entry always loads) made every
              // visitor download them on first paint. Leaving them out lets
              // Rollup put them in the route chunk that actually needs them.
              id.includes('/marked/') ||
              id.includes('/gsap/')
            ) {
              return undefined
            }
            if (id.includes('react-router') || id.includes('/@remix-run/')) return 'router'
            if (
              id.includes('/react/') ||
              id.includes('/react-dom/') ||
              id.includes('/scheduler/')
            ) {
              return 'react-vendor'
            }
            return 'vendor'
          }
        },
      },
    },
  },
})
