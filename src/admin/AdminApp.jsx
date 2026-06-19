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
        <Route path="/admin" element={<Dashboard />} />
        <Route path="/admin/collections/:name" element={<DocumentEditor />} />
        <Route path="/admin/blog" element={<BlogList />} />
        <Route path="/admin/blog/new" element={<BlogEditor />} />
        <Route path="/admin/blog/:slug" element={<BlogEditor />} />
        <Route path="/admin/applications" element={<Applications />} />
        <Route path="/admin/media" element={<MediaLibrary />} />
        <Route path="/admin/users" element={<Users />} />
        <Route path="/admin/settings" element={<Settings />} />
        <Route path="*" element={<Navigate to="/admin" replace />} />
      </Routes>
    </Layout>
  )
}
