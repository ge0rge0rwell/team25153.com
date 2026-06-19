import { useState } from 'react'
import { AlertCircle, ExternalLink } from 'lucide-react'

const MOODLE_URL = 'https://lms.team25153.com'

export default function LMS() {
  const [blocked, setBlocked] = useState(false)

  return (
    <div className="flex flex-col" style={{ height: 'calc(100vh - 64px)' }}>
      {blocked && (
        <div className="flex items-start gap-3 bg-amber-50 border-b border-amber-200 px-6 py-3 text-sm text-amber-800">
          <AlertCircle size={18} className="mt-0.5 flex-shrink-0 text-amber-500" />
          <span>
            Moodle is blocking the embedded view. In Moodle, go to{' '}
            <strong>Site Administration → Security → HTTP Security</strong> and set{' '}
            <strong>X-Frame-Options</strong> to allow embedding. Or{' '}
            <a href={MOODLE_URL} target="_blank" rel="noopener noreferrer" className="underline font-medium">
              open Moodle in a new tab
            </a>
            .
          </span>
        </div>
      )}

      <div className="flex-1 relative bg-gray-100">
        {/* Open in new tab link */}
        <a
          href={MOODLE_URL}
          target="_blank"
          rel="noopener noreferrer"
          className="absolute top-3 right-4 z-10 flex items-center gap-1.5 rounded-full bg-white/90 border border-gray-200 px-3 py-1.5 text-xs font-medium text-navy shadow-sm hover:bg-white transition"
        >
          <ExternalLink size={13} />
          Open in new tab
        </a>

        <iframe
          src={MOODLE_URL}
          title="Cartesian Robotics LMS"
          className="w-full h-full border-none"
          onError={() => setBlocked(true)}
          allow="fullscreen"
          sandbox="allow-same-origin allow-scripts allow-forms allow-popups allow-popups-to-escape-sandbox allow-top-navigation"
        />
      </div>
    </div>
  )
}
