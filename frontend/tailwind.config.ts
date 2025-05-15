import type { Config } from 'tailwindcss'

const config: Config = {
  content: [
    './components/**/*.{vue,js}',
    './layouts/**/*.vue',
    './pages/**/*.vue',
    './app.vue',
    './assets/css/**/*.{css,scss}',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#2563eb',
      },
    },
  },
  plugins: [],
}

export default config
