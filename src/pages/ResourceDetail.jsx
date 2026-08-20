import { useParams, Link } from 'react-router-dom'
import PageBanner from '../components/ui/PageBanner'
import { ArrowLeft, BookOpen, Code2, Box, Library, ExternalLink } from 'lucide-react'
import SoftwareDocs from '../components/resources/SoftwareDocs'
import Reveal from '../components/motion/Reveal'
import { StaggerGroup, StaggerItem } from '../components/motion/Stagger'
import { useCollection } from '../context/ContentContext'
import resourceLinks from '../content/resourceLinks.json'

const iconMap = { BookOpen, Code2, Box, Library }

function LinkGroup({ slug }) {
  const category = resourceLinks.categories.find((c) => c.slug === slug)
  if (!category) return null
  return (
    <div className="text-left mt-4">
      <StaggerGroup as="div" staggerChildren={0.03} className="grid grid-cols-1 sm:grid-cols-2 gap-4">
        {category.items.map((item) => (
          <StaggerItem key={item.url + item.title}>
            <a
              href={item.url}
              target="_blank"
              rel="noopener noreferrer"
              className="group card border border-gray-100 bg-white p-5 flex flex-col h-full"
            >
              <div className="flex items-start justify-between gap-2 mb-1.5">
                <h4 className="font-semibold text-navy text-sm group-hover:text-crimson transition-colors">{item.title}</h4>
                <ExternalLink size={14} className="text-gray-300 group-hover:text-crimson transition-colors flex-shrink-0 mt-0.5" />
              </div>
              <p className="text-gray-500 text-xs leading-relaxed">{item.description}</p>
            </a>
          </StaggerItem>
        ))}
      </StaggerGroup>
    </div>
  )
}

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
          
          <Reveal direction="scale" className="bg-white rounded-2xl p-5 sm:p-10 border border-gray-100 shadow-lg text-center">
            <div className="w-24 h-24 mx-auto bg-crimson/10 text-crimson rounded-full flex items-center justify-center mb-6">
              <Icon size={48} />
            </div>
            <h2 className="text-3xl font-bold text-navy mb-6">{resource.title}</h2>
            <p className="text-gray-600 leading-relaxed text-lg max-w-2xl mx-auto mb-10">
              {resource.content}
            </p>

            {slug === 'software' && <SoftwareDocs />}
            <LinkGroup slug={slug} />
          </Reveal>
        </div>
      </section>
    </div>
  )
}
