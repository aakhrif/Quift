# Backend API Service (PHP + Slim + GraphQL)

This service provides a lightweight, containerized PHP backend using Slim Framework and GraphQL.

## 🚀 Stack

- PHP 8.2 (FPM)
- Slim Framework
- webonyx/graphql-php
- nginx (as reverse proxy)
- Docker Compose

## 📁 Project Structure

```
backend-api/
├── public/              # Web entry point (index.php)
├── src/                 # Business logic (optional)
├── graphql/             # GraphQL types and resolvers
├── Dockerfile           # PHP-FPM + Composer
├── docker-compose.yml   # Defines services and network
├── nginx.conf           # Nginx config
└── .env                 # Environment config
```

## 🐳 Usage

1. Create Docker network (if not already exists):
   ```bash
   docker network create crm-net
   ```

2. Build and start the containers:
   ```bash
   docker compose up --build -d
   ```

3. Service will be accessible at:  
   `http://localhost:8080/graphql`

## ✅ Test the API

### Via `curl`
```bash
curl -X POST http://localhost:8080/graphql \
  -H "Content-Type: application/json" \
  -d '{ "query": "{ hello }" }'
```

### Via Postman / Thunder Client

- **Method:** POST  
- **URL:** `http://localhost:8080/graphql`  
- **Headers:** `Content-Type: application/json`  
- **Body:**
```json
{
  "query": "{ hello }"
}
```

### Expected response
```json
{
  "data": {
    "hello": "Hello, world!"
  }
}
```

## 🛠 Customize

- Define your schema and resolvers under `/graphql` or `/src`
- Update `public/index.php` to wire them into the endpoint
