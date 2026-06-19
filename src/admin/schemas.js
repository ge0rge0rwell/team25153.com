// Declarative schemas for every editable collection. The generic field renderer
// (fields/Field.jsx) turns these into forms, so adding/altering a field here is
// all it takes to change the admin UI.
//
// Field types: string | text | markdown | number | boolean | select | image
//              | list (of objects via `fields`, or scalars via `of`) | object
//
// `type: 'file'`   collections edit a single JSON document.
// `type: 'folder'` collections (blog) are handled by a dedicated editor.

const linkFields = [
  { name: 'label', label: 'Label', type: 'string' },
  { name: 'to', label: 'Link', type: 'string', placeholder: '/awards' },
]

export const schemas = {
  home: {
    name: 'home',
    label: 'Home Page',
    icon: 'Home',
    type: 'file',
    fields: [
      {
        name: 'robots',
        label: 'Robot Roster',
        type: 'list',
        itemLabel: 'name',
        fields: [
          { name: 'name', label: 'Name', type: 'string' },
          { name: 'year', label: 'Year', type: 'string' },
          { name: 'competition', label: 'Competition', type: 'string' },
          { name: 'image', label: 'Image', type: 'image' },
          { name: 'link', label: 'Link', type: 'string', placeholder: '/robots/cerberon' },
          { name: 'blendMode', label: 'Blend transparent logo', type: 'boolean' },
        ],
      },
      {
        name: 'stats',
        label: 'Stats',
        type: 'list',
        itemLabel: 'label',
        fields: [
          { name: 'number', label: 'Number', type: 'string' },
          { name: 'label', label: 'Label', type: 'string' },
        ],
      },
    ],
  },

  navigation: {
    name: 'navigation',
    label: 'Menus',
    icon: 'Menu',
    type: 'file',
    fields: [
      {
        name: 'navItems',
        label: 'Main Menu (Navbar)',
        type: 'list',
        itemLabel: 'label',
        fields: [
          { name: 'label', label: 'Label', type: 'string' },
          { name: 'to', label: 'Link (optional)', type: 'string', placeholder: 'Leave empty for a dropdown', required: false },
          {
            name: 'children',
            label: 'Dropdown Items',
            type: 'list',
            required: false,
            itemLabel: 'label',
            fields: [
              { name: 'label', label: 'Label', type: 'string' },
              { name: 'to', label: 'Link (optional)', type: 'string', required: false },
              {
                name: 'children',
                label: 'Sub-items',
                type: 'list',
                required: false,
                itemLabel: 'label',
                fields: linkFields,
              },
            ],
          },
        ],
      },
      {
        name: 'footerLinks',
        label: 'Footer Quick Links',
        type: 'list',
        itemLabel: 'label',
        fields: linkFields,
      },
    ],
  },

  robots: {
    name: 'robots',
    label: 'Robots',
    icon: 'Bot',
    type: 'file',
    fields: [
      {
        name: 'robots',
        label: 'Robots',
        type: 'list',
        itemLabel: 'name',
        fields: [
          { name: 'slug', label: 'Slug (URL)', type: 'string', placeholder: 'cerberon' },
          { name: 'name', label: 'Name', type: 'string' },
          { name: 'year', label: 'Year', type: 'string' },
          { name: 'competition', label: 'Competition', type: 'string' },
          { name: 'tagline', label: 'Tagline', type: 'string' },
          { name: 'description', label: 'Description', type: 'text' },
          { name: 'whyTitle', label: 'Naming Story Title', type: 'string' },
          { name: 'whyText', label: 'Naming Story Text', type: 'text' },
          { name: 'image', label: 'Robot Image', type: 'image' },
          { name: 'seasonImage', label: 'Season Image', type: 'image', required: false },
          { name: 'heroBgBlend', label: 'Hero Blend Mode', type: 'select', options: ['normal', 'screen', 'multiply'] },
          { name: 'youtubeId', label: 'YouTube Video ID', type: 'string' },
          { name: 'youtubeTitle', label: 'YouTube Title', type: 'string' },
          { name: 'gameTitle', label: 'Game Title', type: 'string' },
          { name: 'gameDescription', label: 'Game Description', type: 'text' },
          {
            name: 'participated',
            label: 'Events Participated',
            type: 'list',
            itemLabel: 'name',
            fields: [
              { name: 'name', label: 'Event Name', type: 'string' },
              { name: 'url', label: 'URL', type: 'string' },
            ],
          },
          { name: 'features', label: 'Technical Features', type: 'list', of: 'string' },
          { name: 'prev', label: 'Previous Robot Link', type: 'object', required: false, fields: linkFields },
          { name: 'next', label: 'Next Robot Link', type: 'object', required: false, fields: linkFields },
        ],
      },
    ],
  },

  awards: {
    name: 'awards',
    label: 'Awards',
    icon: 'Trophy',
    type: 'file',
    fields: [
      {
        name: 'seasons',
        label: 'Seasons',
        type: 'list',
        itemLabel: (s) => `${s.year} — ${s.game}`,
        fields: [
          { name: 'year', label: 'Year', type: 'string' },
          { name: 'game', label: 'Game', type: 'string' },
          { name: 'slug', label: 'Slug', type: 'string' },
          { name: 'robot', label: 'Robot', type: 'string' },
          {
            name: 'awards',
            label: 'Awards',
            type: 'list',
            itemLabel: 'title',
            fields: [
              { name: 'title', label: 'Title', type: 'string' },
              { name: 'event', label: 'Event', type: 'string' },
              { name: 'tier', label: 'Tier', type: 'select', options: ['championship', 'national', 'regional', 'international', 'offseason'] },
            ],
          },
        ],
      },
    ],
  },

  resources: {
    name: 'resources',
    label: 'Resources',
    icon: 'BookOpen',
    type: 'file',
    fields: [
      {
        name: 'resources',
        label: 'Resources',
        type: 'list',
        itemLabel: 'title',
        fields: [
          { name: 'icon', label: 'Icon', type: 'select', options: ['BookOpen', 'Code2', 'Box', 'Library'] },
          { name: 'title', label: 'Title', type: 'string' },
          { name: 'slug', label: 'Slug', type: 'string' },
          { name: 'tag', label: 'Tag', type: 'select', options: ['Guide', 'Course', 'Reference'] },
          { name: 'description', label: 'Short Description', type: 'text' },
          { name: 'content', label: 'Detail Content', type: 'text' },
        ],
      },
    ],
  },

  portfolios: {
    name: 'portfolios',
    label: 'Portfolios',
    icon: 'FileText',
    type: 'file',
    fields: [
      {
        name: 'portfolios',
        label: 'Portfolios',
        type: 'list',
        itemLabel: 'title',
        fields: [
          { name: 'slug', label: 'Slug', type: 'string' },
          { name: 'title', label: 'Title', type: 'string' },
          { name: 'season', label: 'Season', type: 'string' },
          { name: 'content', label: 'Content', type: 'text' },
          { name: 'image', label: 'Image', type: 'image' },
          { name: 'pdfUrl', label: 'PDF URL', type: 'string' },
        ],
      },
    ],
  },

  sponsorship: {
    name: 'sponsorship',
    label: 'Sponsorship',
    icon: 'HandCoins',
    type: 'file',
    fields: [
      { name: 'intro', label: 'Intro', type: 'text' },
      { name: 'prospectusUrl', label: 'Prospectus PDF URL', type: 'string' },
      {
        name: 'tiers',
        label: 'Tiers',
        type: 'list',
        itemLabel: 'name',
        fields: [
          { name: 'icon', label: 'Icon', type: 'select', options: ['Heart', 'Star', 'Package', 'Handshake'] },
          { name: 'name', label: 'Name', type: 'string' },
          { name: 'amount', label: 'Amount', type: 'string' },
          { name: 'perks', label: 'Perks', type: 'list', of: 'string' },
          { name: 'featured', label: 'Featured', type: 'boolean' },
        ],
      },
      {
        name: 'benefitMatrix',
        label: 'Benefit Matrix',
        type: 'list',
        itemLabel: 'label',
        fields: [
          { name: 'label', label: 'Benefit', type: 'string' },
          { name: 'tiers', label: 'Included in T1–T4', type: 'list', of: 'boolean' },
        ],
      },
      {
        name: 'budget',
        label: 'Budget Items',
        type: 'list',
        itemLabel: 'label',
        fields: [
          { name: 'label', label: 'Label', type: 'string' },
          { name: 'amount', label: 'Amount', type: 'string' },
        ],
      },
      { name: 'budgetTotal', label: 'Budget Total', type: 'string' },
      { name: 'inKind', label: 'In-Kind Support', type: 'text' },
    ],
  },
}

// Sidebar order + the blog (handled separately as a folder collection).
export const collectionOrder = [
  'home',
  'navigation',
  'robots',
  'awards',
  'resources',
  'portfolios',
  'sponsorship',
]

export const blogTags = ['Season Recap', 'Strategy', 'Outreach', 'Team News']
