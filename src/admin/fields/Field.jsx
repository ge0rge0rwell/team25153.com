import { useId } from 'react'
import { ChevronDown, ChevronUp, Trash2, Plus } from 'lucide-react'
import ImageField from './ImageField'

const inputCls =
  'w-full rounded-lg border border-gray-300 px-3 py-2 text-sm outline-none focus:border-crimson focus:ring-1 focus:ring-crimson'

// Renders one schema field. Recurses for `list` and `object` types.
export default function Field({ field, value, onChange, id }) {
  switch (field.type) {
    case 'string':
      return (
        <input
          id={id}
          type="text"
          value={value ?? ''}
          placeholder={field.placeholder}
          onChange={(e) => onChange(e.target.value)}
          className={inputCls}
        />
      )

    case 'text':
    case 'markdown':
      return (
        <textarea
          id={id}
          value={value ?? ''}
          placeholder={field.placeholder}
          onChange={(e) => onChange(e.target.value)}
          rows={field.type === 'markdown' ? 14 : 4}
          className={`${inputCls} font-${field.type === 'markdown' ? 'mono' : 'sans'} resize-y`}
        />
      )

    case 'number':
      return (
        <input
          id={id}
          type="number"
          value={value ?? ''}
          onChange={(e) => onChange(e.target.value === '' ? null : Number(e.target.value))}
          className={inputCls}
        />
      )

    case 'boolean':
      return (
        <label className="inline-flex cursor-pointer items-center gap-2">
          <input
            type="checkbox"
            checked={!!value}
            onChange={(e) => onChange(e.target.checked)}
            className="h-4 w-4 rounded border-gray-300 text-crimson focus:ring-crimson"
          />
          <span className="text-sm text-gray-600">{value ? 'Yes' : 'No'}</span>
        </label>
      )

    case 'select':
      return (
        <select id={id} value={value ?? ''} onChange={(e) => onChange(e.target.value)} className={inputCls}>
          {!field.options.includes(value) && <option value="">— select —</option>}
          {field.options.map((opt) => (
            <option key={opt} value={opt}>
              {opt}
            </option>
          ))}
        </select>
      )

    case 'image':
      return <ImageField value={value} onChange={onChange} placeholder={field.placeholder} />

    case 'object':
      return <ObjectField field={field} value={value} onChange={onChange} />

    case 'list':
      return <ListField field={field} value={value} onChange={onChange} />

    default:
      return <p className="text-xs text-crimson">Unknown field type: {field.type}</p>
  }
}

// Field types that render one focusable control, so a <label for> can point
// at it. The rest (image picker, object, list) are composites — those get a
// fieldset/legend instead, since there's no single control to label.
const SINGLE_CONTROL = new Set(['string', 'text', 'markdown', 'number', 'select'])

// A labelled wrapper around a field.
export function LabeledField({ field, value, onChange }) {
  // useId, not field.name: this component recurses and list items reuse the
  // same field names, so name-derived ids would collide across rows.
  const id = useId()
  const optionalHint = field.required === false && (
    <span className="ml-1 text-xs font-normal text-gray-400">(optional)</span>
  )

  // Boolean renders its own inline label wrapping the checkbox.
  if (field.type === 'boolean') {
    return (
      <div className="flex items-center justify-between gap-4 py-1">
        <span className="text-sm font-medium text-gray-700">{field.label}</span>
        <Field field={field} value={value} onChange={onChange} />
      </div>
    )
  }

  if (!SINGLE_CONTROL.has(field.type)) {
    return (
      <fieldset className="min-w-0">
        <legend className="mb-1.5 block text-sm font-medium text-gray-700">
          {field.label}
          {optionalHint}
        </legend>
        <Field field={field} value={value} onChange={onChange} />
      </fieldset>
    )
  }

  return (
    <div>
      <label htmlFor={id} className="mb-1.5 block text-sm font-medium text-gray-700">
        {field.label}
        {optionalHint}
      </label>
      <Field id={id} field={field} value={value} onChange={onChange} />
    </div>
  )
}

// Object: a group of sub-fields. Optional objects can be added/removed entirely.
function ObjectField({ field, value, onChange }) {
  const optional = field.required === false

  if (optional && (value === null || value === undefined)) {
    return (
      <button
        type="button"
        onClick={() => onChange(emptyValue(field))}
        className="inline-flex items-center gap-1.5 rounded-md border border-dashed border-gray-300 px-3 py-1.5 text-xs font-medium text-gray-500 hover:border-crimson hover:text-crimson"
      >
        <Plus size={13} /> Add {field.label}
      </button>
    )
  }

  return (
    <div className="space-y-3 rounded-lg border border-gray-200 bg-gray-50/60 p-4">
      {optional && (
        <div className="flex justify-end">
          <button
            type="button"
            onClick={() => onChange(null)}
            className="inline-flex items-center gap-1 text-xs text-gray-400 hover:text-crimson"
          >
            <Trash2 size={12} /> Remove
          </button>
        </div>
      )}
      {field.fields.map((sub) => (
        <LabeledField
          key={sub.name}
          field={sub}
          value={value?.[sub.name]}
          onChange={(v) => onChange({ ...value, [sub.name]: v })}
        />
      ))}
    </div>
  )
}

// List: an ordered array of objects (via `fields`) or scalars (via `of`).
function ListField({ field, value, onChange }) {
  const items = Array.isArray(value) ? value : []
  const isScalar = !!field.of

  const update = (i, v) => {
    const next = items.slice()
    next[i] = v
    onChange(next)
  }
  const add = () => onChange([...items, emptyItem(field)])
  const remove = (i) => onChange(items.filter((_, idx) => idx !== i))
  const move = (i, dir) => {
    const j = i + dir
    if (j < 0 || j >= items.length) return
    const next = items.slice()
    ;[next[i], next[j]] = [next[j], next[i]]
    onChange(next)
  }

  return (
    <div className="space-y-2">
      {items.length === 0 && (
        <p className="rounded-lg border border-dashed border-gray-200 px-3 py-3 text-center text-xs text-gray-400">
          No items yet.
        </p>
      )}
      {items.map((item, i) => (
        <div key={i} className="rounded-lg border border-gray-200 bg-white">
          <div className="flex items-center justify-between gap-2 border-b border-gray-100 bg-gray-50 px-3 py-1.5">
            <span className="truncate text-xs font-semibold text-gray-500">
              {isScalar ? `#${i + 1}` : itemLabel(field, item, i)}
            </span>
            <div className="flex items-center gap-0.5">
              <button type="button" onClick={() => move(i, -1)} disabled={i === 0} className="rounded p-1 text-gray-400 hover:bg-gray-200 hover:text-gray-700 disabled:opacity-30">
                <ChevronUp size={14} />
              </button>
              <button type="button" onClick={() => move(i, 1)} disabled={i === items.length - 1} className="rounded p-1 text-gray-400 hover:bg-gray-200 hover:text-gray-700 disabled:opacity-30">
                <ChevronDown size={14} />
              </button>
              <button type="button" onClick={() => remove(i)} className="rounded p-1 text-gray-400 hover:bg-crimson/10 hover:text-crimson">
                <Trash2 size={14} />
              </button>
            </div>
          </div>
          <div className="space-y-3 p-3">
            {isScalar ? (
              <Field field={{ type: field.of }} value={item} onChange={(v) => update(i, v)} />
            ) : (
              field.fields.map((sub) => (
                <LabeledField
                  key={sub.name}
                  field={sub}
                  value={item?.[sub.name]}
                  onChange={(v) => update(i, { ...item, [sub.name]: v })}
                />
              ))
            )}
          </div>
        </div>
      ))}
      <button
        type="button"
        onClick={add}
        className="inline-flex items-center gap-1.5 rounded-md border border-gray-300 px-3 py-1.5 text-xs font-medium text-gray-600 hover:border-crimson hover:text-crimson"
      >
        <Plus size={13} /> Add item
      </button>
    </div>
  )
}

// ── helpers ──────────────────────────────────────────────────────────────
function itemLabel(field, item, i) {
  if (typeof field.itemLabel === 'function') return field.itemLabel(item) || `Item ${i + 1}`
  if (typeof field.itemLabel === 'string') return item?.[field.itemLabel] || `Item ${i + 1}`
  return `Item ${i + 1}`
}

function emptyItem(field) {
  if (field.of === 'string') return ''
  if (field.of === 'boolean') return false
  if (field.of === 'number') return 0
  return emptyObject(field.fields)
}

function emptyObject(fields = []) {
  const obj = {}
  for (const f of fields) {
    if (f.required === false && (f.type === 'object')) obj[f.name] = null
    else if (f.type === 'list') obj[f.name] = []
    else if (f.type === 'boolean') obj[f.name] = false
    else if (f.type === 'object') obj[f.name] = emptyObject(f.fields)
    else obj[f.name] = ''
  }
  return obj
}

function emptyValue(field) {
  if (field.type === 'object') return emptyObject(field.fields)
  if (field.type === 'list') return []
  return ''
}
