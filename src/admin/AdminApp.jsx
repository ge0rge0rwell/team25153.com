import { Routes, Route, Navigate } from 'react-router-dom'
import { Loader2 } from 'lucide-react'
import { AuthProvider, useAuth } from './AuthContext'
import Login from './components/Login'
import Layout from './components/Layout'
import Dashboard from './pages/Dashboard'
import DocumentEditor from './pages/DocumentEditor'
import BlogList from './pages/BlogList'
import BlogEditor from './pages/BlogEditor'
import MediaLibrary from './pages/MediaLibrary'
import Users from './pages/Users'
import Settings from './pages/Settings'
import Applications from './pages/Applications'
import Submissions from './pages/Submissions'
import Messages from './pages/Messages'

export default function AdminApp() {
  return (
    <AuthProvider>
      <Gate />
    </AuthProvider>
  )
}

function Gate() {
  const { user, loading } = useAuth()

  if (loading) {
    return (
      <div className="flex min-h-screen items-center justify-center bg-gray-100">
        <Loader2 size={28} className="animate-spin text-crimson" />
      </div>
    )
  }

  if (!user) return <Login />

  return (
    <Layout>
      <Routes>
        <Route path="/cms" element={<Dashboard />} />
        <Route path="/cms/collections/:name" element={<DocumentEditor />} />
        <Route path="/cms/blog" element={<BlogList />} />
        <Route path="/cms/blog/new" element={<BlogEditor />} />
        <Route path="/cms/blog/:slug" element={<BlogEditor />} />
        <Route path="/cms/applications" element={<Applications />} />
        <Route path="/cms/messages" element={<Messages />} />
        <Route path="/cms/submissions" element={<Submissions />} />
        <Route path="/cms/media" element={<MediaLibrary />} />
        <Route path="/cms/users" element={<Users />} />
        <Route path="/cms/settings" element={<Settings />} />
        <Route path="*" element={<Navigate to="/cms" replace />} />
      </Routes>
    </Layout>
  )
}
