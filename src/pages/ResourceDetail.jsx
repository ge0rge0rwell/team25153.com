import { useParams, Link } from 'react-router-dom'
import PageBanner from '../components/ui/PageBanner'
import { ArrowLeft, BookOpen, Code2, Box, Library } from 'lucide-react'
import SoftwareDocs from '../components/resources/SoftwareDocs'
import { useCollection } from '../context/ContentContext'

const iconMap = { BookOpen, Code2, Box, Library }

export default function ResourceDetail() {
  const { slug } = useParams()
  const resource = useCollection('resources').resources.find((r) => r.slug === slug)
  const Icon = resource ? iconMap[resource.icon] || BookOpen : BookOpen

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
      
      <section className="py-12 md:py-20 bg-white">
        <div className="max-w-6xl mx-auto px-6">
          <Link to="/resources" className="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-crimson mb-8 transition-colors">
            <ArrowLeft size={16} /> Back to Resources
          </Link>
          
          <div className="bg-white rounded-2xl p-5 sm:p-10 border border-gray-100 shadow-lg text-center">
            <div className="w-24 h-24 mx-auto bg-crimson/10 text-crimson rounded-full flex items-center justify-center mb-6">
              <Icon size={48} />
            </div>
            <h2 className="text-3xl font-bold text-navy mb-6">{resource.title}</h2>
            <p className="text-gray-600 leading-relaxed text-lg max-w-2xl mx-auto mb-10">
              {resource.content}
            </p>
            
            {slug === 'software' ? (
              <SoftwareDocs />
            ) : (
              <div className="p-6 bg-gray-50 rounded-xl text-gray-500 text-sm">
                <p>Detailed documentation and links for this resource are currently being updated for the new season.</p>
                <p className="mt-2">Check back soon or contact us for immediate access.</p>
              </div>
            )}
          </div>
        </div>
      </section>
    </div>
  )
}
