# Nuxt 3 App mit TailwindCSS v4

## 🚀 Projektüberblick

Moderne Webanwendung mit:

- **Nuxt 3**
- **TailwindCSS v4**
- **Vite**
- Mobile-first Design
- Komponentenbasiertes Layout

## 📁 Projektstruktur

```
components/
├─ Logo.vue
├─ LoginButton.vue
└─ NavigationBar.vue

layouts/
└─ default.vue

assets/
└─ css/
   └─ input.css (Tailwind-Einstiegspunkt)

public/
└─ (nicht verwendet)
```

## 🛠 Setup

```bash
npm install
npm run dev
```

## 🧩 Tailwind-Konfiguration

Tailwind wird eingebunden via `nuxt.config.ts`:

```ts
import tailwindcss from 'tailwindcss'
import autoprefixer from 'autoprefixer'

export default defineNuxtConfig({
  css: ['@/assets/css/input.css'],
  postcss: {
    plugins: {
      tailwindcss: tailwindcss(),
      autoprefixer: autoprefixer(),
    },
  },
})
```

## ✅ Responsives Design

- `sm:`, `md:`, `lg:` Breakpoints
- Keine Media Queries direkt notwendig
- Layout basiert auf Utility-Klassen (`flex`, `px-4`, `h-16`, ...)

## 📦 Abhängigkeiten (Auszug)

```json
"nuxt": "^3.x",
"tailwindcss": "^4.x",
"@tailwindcss/vite": "^4.x",
"autoprefixer": "^10.x",
"postcss": "^8.x"
```

## ✍️ Autor

Amine Akhrif  
> Architektur, Umsetzung & Tailwind-Voodoo
