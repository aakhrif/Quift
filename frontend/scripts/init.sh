#!/bin/sh
set -e

echo "📦 Installing dependencies..."
npm install

echo "📁 Listing available CLI binaries..."
ls -la node_modules/.bin/

echo "⚙️ Preparing Nuxt project..."
if [ -f ./node_modules/.bin/nuxi ]; then
  ./node_modules/.bin/nuxi prepare
else
  echo "❌ nuxi binary not found."
  exit 1
fi

echo "🎨 Initializing Tailwind..."
if [ -f ./node_modules/.bin/tailwindcss ]; then
  chmod +x ./node_modules/.bin/tailwindcss
  ./node_modules/.bin/tailwindcss init -p
else
  echo "❌ tailwindcss binary not found."
  exit 1
fi

echo "✅ Setup complete."
