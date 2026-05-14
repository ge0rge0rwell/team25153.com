import { useParams, Link } from 'react-router-dom'
import PageBanner from '../components/ui/PageBanner'
import { ArrowLeft, Calendar, Clock } from 'lucide-react'

// Generic mock data for blog posts since we only have a generic slug route right now
const genericPost = {
  date: 'Latest Update',
  readTime: '5 min read',
  tag: 'Team News',
  image: 'https://team25153.com/wp-content/uploads/2025/11/WhatsApp-Image-2025-11-01-at-19.43.57-1024x768.jpeg',
}

export default function BlogPost() {
  const { slug } = useParams()
  // Generate a title based on the slug for demonstration
  const title = slug ? slug.split('-').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' ') : 'Blog Post'

  return (
    <div>
      <PageBanner
        title={title}
        breadcrumbs={[
          { label: 'Blog', to: '/blog' },
          { label: 'Post' },
        ]}
      />
      
      <section className="py-20 bg-white">
        <div className="max-w-3xl mx-auto px-6">
          <Link to="/blog" className="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-crimson mb-8 transition-colors">
            <ArrowLeft size={16} /> Back to Blog
          </Link>
          
          <article>
            <div className="mb-8">
              <span className="text-[10px] font-bold uppercase px-3 py-1 rounded-full bg-crimson/10 text-crimson inline-block mb-4">
                {genericPost.tag}
              </span>
              <h1 className="text-4xl font-bold text-navy mb-4 leading-tight">{title}</h1>
              <div className="flex items-center gap-4 text-sm text-gray-500">
                <span className="flex items-center gap-1.5"><Calendar size={14} /> {genericPost.date}</span>
                <span className="flex items-center gap-1.5"><Clock size={14} /> {genericPost.readTime}</span>
              </div>
            </div>
            
            <img 
              src={genericPost.image} 
              alt="Blog Header" 
              className="w-full h-80 object-cover rounded-2xl mb-10 shadow-md"
            />
            
            <div className="prose prose-lg max-w-none text-gray-600">
              <p className="lead text-xl text-gray-700 font-medium mb-6">
                This is a detailed view of the blog post. Our team regularly shares updates on our progress, technical deep-dives, and outreach events.
              </p>
              <p className="mb-4">
                During the season, communication and documentation are just as important as building the robot. We use this blog to maintain a transparent record of our design process and to share our learnings with the wider FTC community.
              </p>
              <h3 className="text-2xl font-bold text-navy mt-8 mb-4">The Engineering Process</h3>
              <p className="mb-4">
                Every mechanism starts with a problem statement, followed by brainstorming, CAD modeling, and rapid prototyping using 3D printing. We iterate based on testing data, refining the design until it meets our rigorous performance standards.
              </p>
              <blockquote className="border-l-4 border-crimson pl-4 italic my-8 text-gray-700 bg-gray-50 py-4 pr-4 rounded-r-lg">
                "We don't just build robots to compete; we build them to learn, to challenge ourselves, and to inspire others."
              </blockquote>
              <p>
                Stay tuned for more updates as the season progresses. We have exciting developments in autonomous pathing and custom sensor integration that we can't wait to share!
              </p>
            </div>
          </article>
        </div>
      </section>
    </div>
  )
}
