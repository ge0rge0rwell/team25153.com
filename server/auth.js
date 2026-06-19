// Authentication: username/password login backed by data/users.json.
// Passwords are bcrypt-hashed; sessions are stateless JWTs.
import fs from 'node:fs'
import fsp from 'node:fs/promises'
import path from 'node:path'
import crypto from 'node:crypto'
import bcrypt from 'bcryptjs'
import jwt from 'jsonwebtoken'
import { DATA_DIR } from './store.js'

const USERS_FILE = path.join(DATA_DIR, 'users.json')
const SECRET_FILE = path.join(DATA_DIR, '.jwt-secret')
const TOKEN_TTL = '30d'

function loadSecret() {
  if (process.env.JWT_SECRET) return process.env.JWT_SECRET
  if (fs.existsSync(SECRET_FILE)) return fs.readFileSync(SECRET_FILE, 'utf8').trim()
  const secret = crypto.randomBytes(48).toString('hex')
  fs.writeFileSync(SECRET_FILE, secret, { mode: 0o600 })
  return secret
}
let SECRET

async function readUsers() {
  if (!fs.existsSync(USERS_FILE)) return []
  return JSON.parse(await fsp.readFile(USERS_FILE, 'utf8'))
}
async function writeUsers(users) {
  await fsp.writeFile(USERS_FILE, JSON.stringify(users, null, 2) + '\n', 'utf8')
}

// Create the first admin from env (or sensible defaults) if no users exist.
export async function ensureAdmin() {
  await fsp.mkdir(DATA_DIR, { recursive: true })
  SECRET = loadSecret()
  const users = await readUsers()
  if (users.length === 0) {
    const username = process.env.ADMIN_USERNAME || 'admin'
    const password = process.env.ADMIN_PASSWORD || 'changeme'
    users.push({
      username,
      name: 'Administrator',
      role: 'admin',
      passwordHash: bcrypt.hashSync(password, 10),
    })
    await writeUsers(users)
    console.log(
      `\n  ✦ Seeded admin user "${username}". ` +
        (process.env.ADMIN_PASSWORD
          ? 'Password from ADMIN_PASSWORD.'
          : 'Default password is "changeme" — change it after first login.') +
        '\n',
    )
  }
}

export async function login(username, password) {
  const users = await readUsers()
  const user = users.find((u) => u.username === username)
  if (!user || !bcrypt.compareSync(password, user.passwordHash)) return null
  const token = jwt.sign({ username: user.username, role: user.role }, SECRET, {
    expiresIn: TOKEN_TTL,
  })
  return { token, user: publicUser(user) }
}

const publicUser = (u) => ({ username: u.username, name: u.name, role: u.role })

export function requireAuth(req, res, next) {
  const header = req.headers.authorization || ''
  const token = header.startsWith('Bearer ') ? header.slice(7) : null
  if (!token) return res.status(401).json({ error: 'Not authenticated' })
  try {
    req.user = jwt.verify(token, SECRET)
    next()
  } catch {
    res.status(401).json({ error: 'Invalid or expired session' })
  }
}

export async function getMe(username) {
  const users = await readUsers()
  const u = users.find((x) => x.username === username)
  return u ? publicUser(u) : null
}

export async function listUsers() {
  return (await readUsers()).map(publicUser)
}

export async function createUser({ username, name, password }) {
  const users = await readUsers()
  if (users.some((u) => u.username === username)) {
    throw Object.assign(new Error('Username already exists'), { status: 409 })
  }
  users.push({
    username,
    name: name || username,
    role: 'editor',
    passwordHash: bcrypt.hashSync(password, 10),
  })
  await writeUsers(users)
  return publicUser(users[users.length - 1])
}

export async function deleteUser(username) {
  const users = await readUsers()
  const remaining = users.filter((u) => u.username !== username)
  if (remaining.length === 0) {
    throw Object.assign(new Error('Cannot delete the last user'), { status: 400 })
  }
  await writeUsers(remaining)
}

export async function changePassword(username, password) {
  const users = await readUsers()
  const user = users.find((u) => u.username === username)
  if (!user) throw Object.assign(new Error('User not found'), { status: 404 })
  user.passwordHash = bcrypt.hashSync(password, 10)
  await writeUsers(users)
}
