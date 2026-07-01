import PageBanner from '../components/ui/PageBanner'
import { Link } from 'react-router-dom'
import { ArrowRight } from 'lucide-react'

export default function TeamOverview() {
  return (
    <div>
      <PageBanner
        title="Team Overview"
        breadcrumbs={[{ label: 'Team', to: '/team' }, { label: 'Team Overview' }]}
      />

      <section className="py-12 md:py-20 bg-white">
        <div className="max-w-6xl mx-auto px-6">
          {/* Heading */}
          <div className="mb-12">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2 flex items-center gap-2">
              <span className="w-6 h-px bg-crimson" /> About Us
            </p>
            <h2 className="text-3xl font-medium text-navy mb-1">Team Overview</h2>
            <div className="w-10 h-0.5 bg-gold" />
          </div>

          {/* Content grid */}
          <div className="flex flex-col lg:flex-row gap-10 items-start">
            {/* Team photo */}
            <div className="w-full lg:w-1/2 flex-shrink-0">
              <img
                src="https://team25153.com/wp-content/uploads/2025/11/WhatsApp-Image-2025-11-01-at-19.43.57-1024x768.jpeg"
                alt="Cartesian Robotics team working together"
                className="rounded-2xl w-full object-cover shadow-xl"
                loading="lazy"
                decoding="async"
              />
            </div>

            {/* Text box */}
            <div className="flex-1 bg-gray-50 rounded-2xl p-5 sm:p-8 border-l-4 border-crimson shadow-sm">
              <h3 className="text-crimson text-2xl font-semibold mb-5">"I think, therefore I can."</h3>

              <p className="text-gray-700 leading-relaxed mb-4">
                <strong>Cartesian Robotics #25153</strong> is a <strong>student-led team of over 25 students</strong>, having grown each season. We like to emphasize to the minds we touch the importance of thought and creation, inspiring our motto: <em>"I think, therefore I can."</em>
              </p>
              <p className="text-gray-700 leading-relaxed mb-4">
                We have found that this motto aligns with our team because of the value we put into thinking. Our design process follows the philosophy of <em>"I think, therefore I can."</em> Over three years, we have come to establish a <strong>structured design process</strong> within our team, in which we have integrated our core philosophies, each year widening our perspective and striving towards the optimal design.
              </p>
              <p className="text-gray-700 leading-relaxed mb-4">
                René Descartes, the philosopher whom we choose to represent ourselves with, has famously argued that he had to exist because he could think, making a fully self-evident claim. We, recognizing that <strong>philosophy is the basis for all sciences</strong>, have committed ourselves to teaching how to think, observe and understand through hands-on experience with STEM.
              </p>
              <p className="text-gray-700 leading-relaxed">
                Our team aims to develop middle school students' skills in <strong>engineering, creativity, strategy, and teamwork</strong> while simultaneously <strong>spreading STEM culture</strong> within our community. In Turkey, where not every kid has the same access to science, we as a member of the FIRST community see ourselves to be a way for students to start to learn and wonder. We are proud of our international achievements, however, we measure our success by the <strong>people we impact</strong>.
              </p>

              <div className="mt-8 flex flex-wrap gap-3">
                <Link to="/robots/cerberon" className="btn-primary text-sm">
                  Our Robots <ArrowRight size={14} />
                </Link>
                <Link to="/awards" className="btn-outline text-sm">
                  Our Awards
                </Link>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Values */}
      <section className="py-10 md:py-16 bg-navy/3 border-t border-gray-100">
        <div className="max-w-6xl mx-auto px-6">
          <div className="text-center mb-12">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2">What Drives Us</p>
            <h2 className="text-3xl font-medium text-navy">Our Core Values</h2>
          </div>
          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {[
              { icon: '🔬', title: 'Engineering', desc: 'We design and build robots with precision and creativity.' },
              { icon: '🎯', title: 'Strategy', desc: 'Data-driven decision making and rational game analysis.' },
              { icon: '🤝', title: 'Teamwork', desc: 'Every achievement is a team achievement.' },
              { icon: '🌱', title: 'STEM Culture', desc: 'Spreading the joy of science and technology in our community.' },
            ].map((v) => (
              <div key={v.title} className="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:border-crimson/30 hover:shadow-md transition-all duration-300 text-center">
                <div className="text-4xl mb-3">{v.icon}</div>
                <h3 className="text-navy font-semibold mb-2">{v.title}</h3>
                <p className="text-gray-500 text-sm leading-relaxed">{v.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>
    </div>
  )
}
