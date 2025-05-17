const API_BASE = import.meta.env.VITE_API_BASE_URL
console.log('API_BASE ', API_BASE)
export async function login(email: string, password: string) {
  const res = await fetch(`${API_BASE}/login`, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ email, password })
  })

  if (!res.ok) {
    const error = await res.json()
    throw new Error(error.error || 'Login failed')
  }

  return await res.json() // { token: '...' }
}
