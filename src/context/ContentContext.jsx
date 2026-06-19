import { createContext, useContext, useEffect, useState } from 'react'

// Content the site renders comes from the management API at runtime, so edits in
// the admin panel appear without a rebuild. The version-controlled files under
// src/content are bundled as a seed: the first paint uses them instantly, then
// the live content from /api/content replaces them. They're also the fallback if
// the API is unreachable.
import home from '../content/home.json'
import navigation from '../content/navigation.json'
import robots from '../content/robots.json'
import awards from '../content/awards.json'
import resources from '../content/resources.json'
import portfolios from '../content/portfolios.json'
import sponsorship from '../content/sponsorship.json'
import { getAllPosts } from '../utils/blog'

const seed = {
  home,
  navigation,
  robots,
  awards,
  resources,
  portfolios,
  sponsorship,
  blog: getAllPosts(),
}

const ContentContext = createContext(seed)

export function ContentProvider({ children }) {
  const [content, setContent] = useState(seed)

  useEffect(() => {
    let cancelled = false
    fetch('/api/content')
      .then((r) => (r.ok ? r.json() : null))
      .then((data) => {
        if (!cancelled && data) setContent((prev) => ({ ...prev, ...data }))
      })
      .catch(() => {
        /* keep the bundled seed if the API is unavailable */
      })
    return () => {
      cancelled = true
    }
  }, [])

  return <ContentContext.Provider value={content}>{children}</ContentContext.Provider>
}

// Whole content tree.
export function useContent() {
  return useContext(ContentContext)
}

// Convenience accessor for a single collection, e.g. useCollection('robots').
export function useCollection(name) {
  return useContext(ContentContext)[name]
}
