# Docker Resources

This repository contains containerized infrastructure components for development and production use.

## 📁 Structure

```
/docker-resources
├── mariadb/      # MariaDB with SQL initialization and .env
├── redis/        # Redis with optional configuration
└── ...
```

## 📦 Included Services

### ✅ mariadb/

- Runs MariaDB 11 with initial database setup (`schema.sql`)
- Configurable via `.env` file
- Optionally usable with Adminer (locally or embedded)

**Start:**
```bash
cd mariadb
docker compose up -d
```

### ✅ redis/

- Runs Redis (currently without persistence or password)

**Start:**
```bash
cd redis
docker compose up -d
```

## 📁 .gitignore Notes

- `.env` and SQL files are **not versioned**
- Use `.env.example` to share sample values

## ℹ️ Notes

- Services are independently usable
- Each Compose file runs standalone
- Data is persisted via Docker volumes
