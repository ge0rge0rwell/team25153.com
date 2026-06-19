import { createContext, useContext, useEffect, useState } from 'react'
import { api, getToken, clearToken } from './api'

const AuthContext = createContext(null)

export function AuthProvider({ children }) {
  const [user, setUser] = useState(null)
  // Only "loading" when there's a stored token to validate; otherwise we already
  // know there's no session and can render the login screen immediately.
  const [loading, setLoading] = useState(() => !!getToken())

  // Validate any stored token on load so a returning editor stays logged in.
  useEffect(() => {
    if (!getToken()) return
    api
      .get('/auth/me')
      .then(setUser)
      .catch(() => clearToken())
      .finally(() => setLoading(false))
  }, [])

  const login = async (username, password) => {
    const u = await api.login(username, password)
    setUser(u)
    return u
  }

  const logout = () => {
    clearToken()
    setUser(null)
  }

  return (
    <AuthContext.Provider value={{ user, loading, login, logout }}>
      {children}
    </AuthContext.Provider>
  )
}

export const useAuth = () => useContext(AuthContext)
