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

// Binds a flipbook to containerRef.current. dFlip's own WordPress embed
// script always sets `assets`, `pdfjsworkerSrc` and `cMapUrl` explicitly,
// prefixed with its rootFolder, before calling .flipBook() — see
// dflip/js/embed.js. Calling .flipBook() directly without doing the same
// leaves those on their library defaults, which are bare relative paths
// like "images/preloader.jpg". Those resolve against the *current page
// URL*, not rootFolder, so on a route like /flipbook/age they 404 instead
// of finding /dflip/images/preloader.jpg. The preloader never gets its load
// event, so the loading screen never clears — this is what was showing as
// "stuck on grey" rather than a hang.
//
// Takes the ref object itself (not .current) so it can re-check after the
// async script load in case the caller unmounted in the meantime.
export async function openFlipbook(containerRef, portfolio) {
  await loadFlipbook()
  if (!containerRef.current) return
  window.jQuery(containerRef.current).flipBook({
    pdfUrl: portfolio.pdfUrl,
    lightBox: false,
    rootFolder: '/dflip/',
    name: portfolio.title,
    assets: {
      preloader: '/dflip/images/preloader.jpg',
      spinner: '/dflip/images/spinner.gif',
      overlay: '/dflip/images/overlay.png',
    },
    pdfjsworkerSrc: '/dflip/js/pdf.worker.min.js',
    sound: false, // no mp3 assets shipped, skip the page-flip sound entirely
    btnDownloadPdf: {
      enabled: true,
      url: portfolio.pdfUrl,
      forceDownload: true,
      name: `${portfolio.slug}.pdf`,
    },
  })
}
