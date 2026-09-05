/** @type {import('tailwindcss').Config} */
export default {
  content: ['./index.html', './src/**/*.{js,jsx,ts,tsx}'],
  theme: {
    extend: {
      colors: {
        // Re-derived from the cloak red sampled off the Descartes portrait
        // (#881511). The previous #832a22 was already within 3 degrees of hue
        // of it — this just takes the value from the source directly.
        crimson: {
          DEFAULT: '#881511',
          dark: '#5f0f0c',   // hover
          light: '#ac1b16',
          50: '#fdf2f1',
          100: '#fbe0df',
          200: '#f7c1c0',
          900: '#511612',    // the cloak's shadowed folds
        },
        navy: {
          DEFAULT: '#002147',
          mid: '#374b6b',
          light: '#1A3B61',
          50: '#f0f4f9',
        },
        // Replaces Tailwind's cool default gray with a ramp built from the
        // portrait's own neutrals, so every existing text-gray-*/border-gray-*
        // utility across the site warms up without touching each call site.
        // Steps keep their relative lightness, and each text-weight step ends
        // up with MORE contrast than the default it replaces:
        //   500  4.83 -> 6.55    600  7.56 -> 10.75    700  10.31 -> 14.53
        gray: {
          50: '#faf8f8',
          100: '#f3eff0',
          200: '#e5dbde',   // blush   — borders
          300: '#c6b7ba',   // mauve
          400: '#a08483',   // rose    — accents only, 3.43 on white
          500: '#6a5a55',   // taupe   — secondary text
          600: '#4b3a34',   // hair    — strong secondary
          700: '#342621',   // ink     — body text
          800: '#221916',
          900: '#120503',   // deepest line work
        },
        surface: {
          DEFAULT: '#fcfbf9',   // page ground
          subtle: '#fafbfe',
          alt: '#f4f6fa',
        },
        // Sampled directly from the Descartes portrait the team uses as its
        // emblem, ordered by how much of the image each covers. Red and white
        // dominate it, which is why they lead; the rest are the painting's
        // supporting tones and are meant for accents, borders and surfaces.
        //
        // Worth noting: the cloak red came out at #881511 against the brand
        // crimson's #832a22 — hue 2 vs 5, near-identical. The palette the site
        // already used was effectively taken from this portrait.
        descartes: {
          ruff: '#ffffff',      // 26% of the image — the collar and ground
          blush: '#e5dbde',     //  6% — warm off-white in the ruff folds
          mauve: '#c6b7ba',     //  4% — pale shadow on the linen
          rose: '#a08483',      //  4% — muted skin shadow
          cloak: '#881511',     //  7% — the red cloak
          cloakDeep: '#511612', //  2% — its shadowed folds
          mantle: '#686161',    //  8% — grey mantle over the shoulder
          taupe: '#6a5a55',     //  3% — warm mid-grey
          hair: '#4b3a34',      //  3% — brown curls
          hairDark: '#3e302a',  //  2% — their shadow
          ink: '#342621',       //  9% — the drawn outline
          inkDeep: '#120503',   //  6% — deepest black in the linework
        },
        gold: {
          DEFAULT: '#FDC800',
          dark: '#d4a800',
          light: '#fdd84d',
          // For gold text on a pale-gold chip. `dark` only manages 2.03:1
          // there, which is unreadable; this clears AA at 5.7:1.
          deep: '#7a5c00',
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
