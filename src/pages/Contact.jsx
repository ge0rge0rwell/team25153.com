import PageBanner from '../components/ui/PageBanner'
import { Link } from 'react-router-dom'
import { MapPin, Mail } from 'lucide-react'
import { FaInstagram } from 'react-icons/fa'
import ContactForm from '../components/ui/ContactForm'

export default function Contact() {
  return (
    <div>
      <PageBanner
        title="Contact Us"
        breadcrumbs={[{ label: 'Contact' }, { label: 'Contact Us' }]}
      />

      <section className="py-20 bg-white">
        <div className="max-w-6xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-5 gap-12">
          {/* Left – Contact Info */}
          <div className="lg:col-span-2">
            <p className="text-crimson text-xs font-bold uppercase tracking-[0.3em] mb-2 flex items-center gap-2">
              <span className="w-6 h-px bg-crimson" /> Get In Touch
            </p>
            <h2 className="text-3xl font-medium text-navy mb-1">Contact Us</h2>
            <div className="w-10 h-0.5 bg-gold mb-8" />

            <ul className="space-y-8">
              <li className="flex items-start gap-4">
                <div className="w-11 h-11 rounded-full bg-crimson/10 flex items-center justify-center flex-shrink-0">
                  <MapPin size={18} className="text-crimson" />
                </div>
                <div>
                  <h4 className="font-semibold text-navy mb-1">Address</h4>
                  <p className="text-gray-600 text-sm leading-relaxed">
                    ODTÜ Geliştirme Vakfı Ankara Okulları<br />
                    Üniversiteler, İhsan Doğramacı Blv No:5,<br />
                    06800 Çankaya/Ankara
                  </p>
                </div>
              </li>
              <li className="flex items-start gap-4">
                <div className="w-11 h-11 rounded-full bg-crimson/10 flex items-center justify-center flex-shrink-0">
                  <Mail size={18} className="text-crimson" />
                </div>
                <div>
                  <h4 className="font-semibold text-navy mb-1">E-mail</h4>
                  <a
                    href="mailto:cartesian25153@gmail.com"
                    className="text-crimson text-sm hover:underline"
                  >
                    cartesian25153@gmail.com
                  </a>
                </div>
              </li>
              <li className="flex items-start gap-4">
                <div className="w-11 h-11 rounded-full bg-crimson/10 flex items-center justify-center flex-shrink-0">
                  <FaInstagram size={18} className="text-crimson" />
                </div>
                <div>
                  <h4 className="font-semibold text-navy mb-1">Find Us On</h4>
                  <a
                    href="https://www.instagram.com/cartesian25153/"
                    target="_blank"
                    rel="noopener noreferrer"
                    className="text-crimson text-sm hover:underline flex items-center gap-1"
                  >
                    <FaInstagram size={14} /> @cartesian25153
                  </a>
                </div>
              </li>
            </ul>

            {/* Map placeholder */}
            <div className="mt-10 rounded-xl overflow-hidden border border-gray-100 shadow-sm">
              <iframe
                title="Cartesian Robotics Location"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3060.3!2d32.774!3d39.892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMznCsDUzJzMxLjIiTiAzMsKwNDYnMjkuNyJF!5e0!3m2!1sen!2str!4v1"
                className="w-full h-52 border-0"
                allowFullScreen=""
                loading="lazy"
              />
            </div>
          </div>

          {/* Right – Form */}
          <div className="lg:col-span-3">
            <div className="bg-gray-50 rounded-2xl p-8 border border-gray-100 shadow-sm">
              <h3 className="text-xl font-medium text-navy mb-6 flex items-center gap-3">
                <span className="w-1 h-6 bg-crimson rounded inline-block" />
                Send Us a Message
              </h3>
              <ContactForm />
            </div>
          </div>
        </div>
      </section>
    </div>
  )
}
