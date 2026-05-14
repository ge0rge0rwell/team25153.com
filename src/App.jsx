import { BrowserRouter, Routes, Route } from 'react-router-dom'
import Navbar from './components/layout/Navbar'
import Footer from './components/layout/Footer'
import Home from './pages/Home'
import TeamOverview from './pages/TeamOverview'
import RobotPage from './pages/RobotPage'
import Awards from './pages/Awards'
import Media from './pages/Media'
import Portfolio from './pages/Portfolio'
import Blog from './pages/Blog'
import Sponsorship from './pages/Sponsorship'
import Contact from './pages/Contact'
import Resources from './pages/Resources'

function ScrollToTop() {
  const { pathname } = window.location
  return null
}

// Generic placeholder for sub-pages not yet built
function Placeholder({ title }) {
  return (
    <div className="min-h-screen flex items-center justify-center bg-gray-50">
      <div className="text-center px-6">
        <div className="text-6xl mb-4">🔧</div>
        <h1 className="text-2xl font-medium text-navy mb-2">{title}</h1>
        <p className="text-gray-500 text-sm">This page is coming soon.</p>
      </div>
    </div>
  )
}

export default function App() {
  return (
    <BrowserRouter>
      <div className="flex flex-col min-h-screen font-roboto">
        <Navbar />
        <main className="flex-1">
          <Routes>
            <Route path="/" element={<Home />} />

            {/* Team */}
            <Route path="/team" element={<TeamOverview />} />
            <Route path="/robots/:slug" element={<RobotPage />} />
            <Route path="/awards" element={<Awards />} />
            <Route path="/awards/:season" element={<Awards />} />
            <Route path="/media" element={<Media />} />

            {/* Resources */}
            <Route path="/resources" element={<Resources />} />
            <Route path="/resources/:slug" element={<Placeholder title="Resource Page" />} />

            {/* Portfolio */}
            <Route path="/portfolio" element={<Portfolio />} />
            <Route path="/portfolio/:slug" element={<Placeholder title="Portfolio Detail" />} />

            {/* Blog */}
            <Route path="/blog" element={<Blog />} />
            <Route path="/blog/:slug" element={<Placeholder title="Blog Post" />} />

            {/* Other */}
            <Route path="/sponsorship" element={<Sponsorship />} />
            <Route path="/contact" element={<Contact />} />

            {/* 404 */}
            <Route
              path="*"
              element={
                <div className="min-h-screen flex items-center justify-center bg-gray-50">
                  <div className="text-center px-6">
                    <div className="text-8xl font-bold text-crimson/20 mb-4">404</div>
                    <h1 className="text-2xl font-medium text-navy mb-2">Page Not Found</h1>
                    <p className="text-gray-500 text-sm mb-6">The page you're looking for doesn't exist.</p>
                    <a href="/" className="btn-primary">Go Home</a>
                  </div>
                </div>
              }
            />
          </Routes>
        </main>
        <Footer />
      </div>
    </BrowserRouter>
  )
}
