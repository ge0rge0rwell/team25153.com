import { useParams, Link } from 'react-router-dom'
import PageBanner from '../components/ui/PageBanner'
import { ArrowLeft, BookOpen, Code2, Box, Library } from 'lucide-react'

const resourceData = {
  'decoding-ftc': {
    title: 'Decoding FTC',
    icon: <BookOpen size={48} />,
    content: 'A comprehensive guide to understanding FTC rules, game analysis, and competition strategy. This living document is updated every season with our latest strategic insights and match analysis techniques.',
  },
  'software': {
    title: 'Software',
    icon: <Code2 size={48} />,
    content: 'Our software stack relies heavily on Java and the official FTC SDK. Here you will find our libraries for autonomous path planning, PID control loops, and custom OpenCV pipelines for vision processing.',
  },
  'cad': {
    title: 'CAD & Modeling',
    icon: <Box size={48} />,
    content: 'We use Onshape for all our robot designs. This resource contains links to our public CAD models, standard parts libraries, and tutorials on designing for 3D printing and CNC machining.',
  },
  'library': {
    title: 'Library',
    icon: <Library size={48} />,
    content: 'A curated collection of papers, books, tutorials, and open-source tools that our team has found invaluable over the seasons. Topics range from advanced mechanics to team management.',
  }
}

export default function ResourceDetail() {
  const { slug } = useParams()
  const resource = resourceData[slug]

  if (!resource) {
    return (
      <div className="min-h-screen flex items-center justify-center bg-gray-50">
        <div className="text-center px-6">
          <h1 className="text-2xl font-medium text-navy mb-2">Resource Not Found</h1>
          <Link to="/resources" className="btn-primary mt-4">Back to Resources</Link>
        </div>
      </div>
    )
  }

  return (
    <div>
      <PageBanner
        title={resource.title}
        breadcrumbs={[
          { label: 'Resources', to: '/resources' },
          { label: resource.title },
        ]}
      />
      
      <section className="py-20 bg-white">
        <div className="max-w-4xl mx-auto px-6">
          <Link to="/resources" className="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-crimson mb-8 transition-colors">
            <ArrowLeft size={16} /> Back to Resources
          </Link>
          
          <div className="bg-white rounded-2xl p-10 border border-gray-100 shadow-lg text-center">
            <div className="w-24 h-24 mx-auto bg-crimson/10 text-crimson rounded-full flex items-center justify-center mb-6">
              {resource.icon}
            </div>
            <h2 className="text-3xl font-bold text-navy mb-6">{resource.title}</h2>
            <p className="text-gray-600 leading-relaxed text-lg max-w-2xl mx-auto mb-10">
              {resource.content}
            </p>
            
            <div className="p-6 bg-gray-50 rounded-xl text-gray-500 text-sm">
              <p>Detailed documentation and links for this resource are currently being updated for the new season.</p>
              <p className="mt-2">Check back soon or contact us for immediate access.</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  )
}
