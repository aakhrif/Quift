import tailwindcss from "@tailwindcss/vite";
import { defineNuxtConfig } from 'nuxt/config';

export default defineNuxtConfig({
  css: ['@/assets/css/tailwind.css'],

  vite: {
    plugins: [
      tailwindcss(),
    ],
  },

   runtimeConfig: {
    public: {
      apiUrl: process.env.API_URL || 'http://localhost:8080'
    }
  },
})
