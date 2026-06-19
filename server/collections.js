// Registry of editable content collections.
// `file`  collections are a single JSON document (home page, menus, etc.).
// `folder` collections are a directory of Markdown files (blog posts).
// Paths are relative to the content directory (data/content in production).
export const collections = {
  home: { type: 'file', file: 'home.json' },
  navigation: { type: 'file', file: 'navigation.json' },
  robots: { type: 'file', file: 'robots.json' },
  awards: { type: 'file', file: 'awards.json' },
  resources: { type: 'file', file: 'resources.json' },
  portfolios: { type: 'file', file: 'portfolios.json' },
  sponsorship: { type: 'file', file: 'sponsorship.json' },
  blog: { type: 'folder', folder: 'blog' },
}

export const fileCollections = Object.keys(collections).filter(
  (k) => collections[k].type === 'file',
)
