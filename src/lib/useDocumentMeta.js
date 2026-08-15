import { useEffect } from 'react'
import { useLocation } from 'react-router-dom'
import { useContent } from '../context/ContentContext'
import { buildMeta } from './seoMeta'

function setMeta(selector, attr, key, value) {
  let el = document.head.querySelector(selector)
  if (!el) {
    el = document.createElement('meta')
    el.setAttribute(attr, key)
    document.head.appendChild(el)
  }
  el.setAttribute('content', value)
}

// Keeps the tab title and head tags correct as the user navigates the SPA.
//
// The Express server already injects the right tags for the *initial* HTML
// (that is what crawlers read). This handles what happens after: client-side
// route changes never touch the document head on their own, so without it every
// subsequent page would keep the first page's title — visible in the tab, in
// bookmarks, and in browser history.
export default function useDocumentMeta() {
  const { pathname } = useLocation()
  const content = useContent()

  useEffect(() => {
    const meta = buildMeta(pathname, content)

    document.title = meta.title
    setMeta('meta[name="description"]', 'name', 'description', meta.description)
    setMeta('meta[property="og:title"]', 'property', 'og:title', meta.title)
    setMeta('meta[property="og:description"]', 'property', 'og:description', meta.description)
    setMeta('meta[property="og:url"]', 'property', 'og:url', meta.canonical)
    setMeta('meta[property="og:image"]', 'property', 'og:image', meta.image)

    let link = document.head.querySelector('link[rel="canonical"]')
    if (!link) {
      link = document.createElement('link')
      link.setAttribute('rel', 'canonical')
      document.head.appendChild(link)
    }
    link.setAttribute('href', meta.canonical)
  }, [pathname, content])
}
