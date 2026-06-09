// On-demand loader for the Real3D Flipbook (dFlip) stack.
//
// These assets (jQuery + Three.js + pdf.js + the flipbook engine) total ~2.7 MB
// and used to be hard-coded as render-blocking <script> tags in index.html, so
// every visitor downloaded them on every page even though only the Portfolio
// detail page ever uses a flipbook. We now inject them lazily, once, the first
// time a flipbook is actually requested.

const FLIPBOOK_CSS = '/dflip/css/flipbook.style.css'

// Order matters: jQuery first, then the engine modules that extend it.
const FLIPBOOK_SCRIPTS = [
  'https://code.jquery.com/jquery-3.6.0.min.js',
  '/dflip/js/iscroll.min.js',
  '/dflip/js/flipbook.min.js',
  '/dflip/js/flipbook.book3.min.js',
  '/dflip/js/flipbook.swipe.min.js',
  '/dflip/js/three.min.js',
  '/dflip/js/flipbook.webgl.min.js',
  '/dflip/js/pdf.min.js',
  '/dflip/js/flipbook.pdfservice.min.js',
]

let loadPromise = null

function injectCss(href) {
  if (document.querySelector(`link[href="${href}"]`)) return
  const link = document.createElement('link')
  link.rel = 'stylesheet'
  link.type = 'text/css'
  link.href = href
  document.head.appendChild(link)
}

function injectScript(src) {
  return new Promise((resolve, reject) => {
    const existing = document.querySelector(`script[src="${src}"]`)
    if (existing) {
      if (existing.dataset.loaded === 'true') return resolve()
      existing.addEventListener('load', () => resolve())
      existing.addEventListener('error', reject)
      return
    }
    const script = document.createElement('script')
    script.src = src
    script.async = false // preserve execution order between dependent scripts
    script.dataset.loaded = 'false'
    script.addEventListener('load', () => {
      script.dataset.loaded = 'true'
      resolve()
    })
    script.addEventListener('error', () => reject(new Error(`Failed to load ${src}`)))
    document.head.appendChild(script)
  })
}

// Loads the flipbook stack exactly once and resolves when jQuery.fn.flipBook
// is available. Safe to call repeatedly — subsequent calls reuse the promise.
export function loadFlipbook() {
  if (window.jQuery?.fn?.flipBook) return Promise.resolve()
  if (loadPromise) return loadPromise

  injectCss(FLIPBOOK_CSS)
  loadPromise = FLIPBOOK_SCRIPTS.reduce(
    (chain, src) => chain.then(() => injectScript(src)),
    Promise.resolve(),
  ).catch((err) => {
    // Allow a future retry if loading failed.
    loadPromise = null
    throw err
  })

  return loadPromise
}
