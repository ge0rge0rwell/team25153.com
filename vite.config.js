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
