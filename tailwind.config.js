/** @type {import('tailwindcss').Config} */
export default {
  content: ['./index.html', './src/**/*.{js,jsx,ts,tsx}'],
  theme: {
    extend: {
      colors: {
        crimson: {
          DEFAULT: '#832a22',
          dark: '#6a1f1a',
          light: '#a33329',
          50: '#fdf2f1',
          100: '#fce4e2',
          200: '#f9cac7',
          900: '#4a120d',
        },
        navy: {
          DEFAULT: '#002147',
          mid: '#374b6b',
          light: '#1A3B61',
          50: '#f0f4f9',
        },
        surface: {
          DEFAULT: '#fcfbf9',   // page ground
          subtle: '#fafbfe',
          alt: '#f4f6fa',
        },
        gold: {
          DEFAULT: '#FDC800',
          dark: '#d4a800',
          light: '#fdd84d',
        },
      },
      fontFamily: {
        roboto: ['Roboto', 'sans-serif'],
        // Rajdhani carries every large heading, not just robot names.
        display: ['Rajdhani', 'Roboto', 'sans-serif'],
        // Roboto Mono carries eyebrows, badges and technical micro-text —
        // it's what gives the site its engineering-drawing feel.
        mono: ['"Roboto Mono"', 'ui-monospace', 'monospace'],
      },
      animation: {
        'scroll-left': 'scrollLeft 30s linear infinite',
        'scroll-right': 'scrollRight 30s linear infinite',
        'fade-up': 'fadeUp 0.6s ease forwards',
        'fade-in': 'fadeIn 0.5s ease forwards',
        'slide-in-right': 'slideInRight 0.25s cubic-bezier(0.16, 1, 0.3, 1) forwards',
        'cursor-blink': 'cursorBlink 0.85s cubic-bezier(1, 0, 0, 1) infinite',
      },
      keyframes: {
        scrollLeft: {
          '0%': { transform: 'translateX(0)' },
          '100%': { transform: 'translateX(-50%)' },
        },
        scrollRight: {
          '0%': { transform: 'translateX(-50%)' },
          '100%': { transform: 'translateX(0)' },
        },
        fadeUp: {
          '0%': { opacity: '0', transform: 'translateY(24px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        slideInRight: {
          '0%': { transform: 'translateX(100%)' },
          '100%': { transform: 'translateX(0)' },
        },
        cursorBlink: {
          '0%, 49%': { opacity: '1' },
          '50%, 100%': { opacity: '0' },
        },
      },
      backgroundImage: {
        'crimson-gradient': 'linear-gradient(135deg, #832a22 0%, #374b6b 100%)',
        'navy-gradient': 'linear-gradient(135deg, #002147 0%, #374b6b 100%)',
        'hero-gradient': 'linear-gradient(to right, rgba(0,33,71,0.95) 0%, rgba(0,33,71,0.6) 60%, transparent 100%)',
      },
    },
  },
  plugins: [],
}
