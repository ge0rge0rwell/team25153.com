import { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'
import { Loader2, Save, Check } from 'lucide-react'
import { api } from '../api'
import { schemas } from '../schemas'
import { LabeledField } from '../fields/Field'

// Keyed by collection name so switching collections remounts with fresh state
// instead of resetting it inside an effect.
export default function DocumentEditor() {
  const { name } = useParams()
  return <DocumentEditorInner key={name} name={name} />
}

// One editor for every `file` collection — fields come from its schema.
function DocumentEditorInner({ name }) {
  const schema = schemas[name]

  const [doc, setDoc] = useState(null)
  const [status, setStatus] = useState('loading') // loading | ready | error
  const [saving, setSaving] = useState(false)
  const [saved, setSaved] = useState(false)
  const [error, setError] = useState('')

  useEffect(() => {
    api
      .get(`/collections/${name}`)
      .then((data) => {
        setDoc(data)
        setStatus('ready')
      })
      .catch((e) => {
        setError(e.message)
        setStatus('error')
      })
  }, [name])

  const save = async () => {
    setSaving(true)
    setError('')
    try {
      await api.put(`/collections/${name}`, doc)
      setSaved(true)
      setTimeout(() => setSaved(false), 2500)
    } catch (e) {
      setError(e.message)
    } finally {
      setSaving(false)
    }
  }

  if (!schema) return <p className="text-sm text-crimson">Unknown collection: {name}</p>
  if (status === 'loading')
    return (
      <div className="flex items-center gap-2 text-sm text-gray-400">
        <Loader2 size={16} className="animate-spin" /> Loading…
      </div>
    )
  if (status === 'error') return <p className="text-sm text-crimson">{error}</p>

  return (
    <div>
      <Header title={schema.label} saving={saving} saved={saved} onSave={save} />
      {error && <p className="mb-4 rounded-lg bg-crimson/10 px-3 py-2 text-sm text-crimson">{error}</p>}

      <div className="space-y-6">
        {schema.fields.map((field) => (
          <section key={field.name} className="rounded-xl border border-gray-200 bg-white p-5">
            <h2 className="mb-4 text-sm font-bold uppercase tracking-wider text-gray-400">{field.label}</h2>
            <LabeledFieldOrBare
              field={field}
              value={doc[field.name]}
              onChange={(v) => setDoc({ ...doc, [field.name]: v })}
            />
          </section>
        ))}
      </div>

      <div className="mt-6 flex justify-end">
        <SaveButton saving={saving} saved={saved} onSave={save} />
      </div>
    </div>
  )
}

// Top-level list/object fields already show their own label as the section
// heading, so render those bare; simple fields keep their inline label.
function LabeledFieldOrBare({ field, value, onChange }) {
  if (field.type === 'list' || field.type === 'object') {
    return <LabeledField field={{ ...field, label: '' }} value={value} onChange={onChange} />
  }
  return <LabeledField field={field} value={value} onChange={onChange} />
}

function Header({ title, saving, saved, onSave }) {
  return (
    <div className="mb-6 flex items-center justify-between">
      <h1 className="text-2xl font-semibold text-navy">{title}</h1>
      <SaveButton saving={saving} saved={saved} onSave={onSave} />
    </div>
  )
}

export function SaveButton({ saving, saved, onSave }) {
  return (
    <button
      onClick={onSave}
      disabled={saving}
      className="inline-flex items-center gap-2 rounded-lg bg-crimson px-4 py-2 text-sm font-semibold text-white transition-colors hover:bg-crimson-dark disabled:opacity-60"
    >
      {saving ? (
        <Loader2 size={16} className="animate-spin" />
      ) : saved ? (
        <Check size={16} />
      ) : (
        <Save size={16} />
      )}
      {saving ? 'Saving…' : saved ? 'Saved' : 'Save changes'}
    </button>
  )
}
