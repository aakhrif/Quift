# Docker Resources

This repository contains containerized infrastructure components and front-end applications for development and production use.

---

## 📁 Structure

```
/docker-resources
├── mariadb/        # MariaDB with SQL initialization and .env
├── redis/          # Redis with optional configuration
├── frontend/       # Nuxt 3 + TailwindCSS v4 application
└── ...
```

---

## 📦 Included Services

### ✅ mariadb/

- MariaDB 11 with initial schema via `schema.sql`
- Configurable via `.env`
- Optional Adminer support

```bash
cd mariadb
docker compose up -d
```

---

### ✅ redis/

- Lightweight Redis container (no persistence or password by default)

```bash
cd redis
docker compose up -d
```

---

### ✅ frontend/ (Nuxt 3 + TailwindCSS v4)

- Nuxt 3 app with Vite + TailwindCSS v4 setup
- Mobile-first, component-based structure
- TailwindCSS eingebunden via Vite + postcss inline in `nuxt.config.ts`

```bash
cd frontend
npm install
npm run dev
```

---

## 📁 .gitignore Notes

- `.env`, `*.sql`, and `node_modules` are **excluded**
- Use `.env.example` to distribute sample config

---

## ℹ️ General Notes

- Each service is standalone and isolated
- Docker volumes ensure persistence where needed
- Frontend app is designed for extension (e.g. SSR or API integration)
