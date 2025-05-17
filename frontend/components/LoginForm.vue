<!-- pages/login.vue -->
<template>
  <!-- <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4 py-12"> -->
    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg">
      <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Sign in to your account</h2>

      <form @submit.prevent="handleLogin" class="space-y-6" novalidate>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
          <input
            id="email"
            v-model="email"
            name="email"
            type="email"
            required
            autocomplete="email"
            class="mt-1 block w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
          />
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input
            id="password"
            v-model="password"
            name="password"
            type="password"
            required
            autocomplete="current-password"
            class="mt-1 block w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
          />
        </div>

        <div class="flex items-center justify-between">
          <label class="flex items-center">
            <input type="checkbox" class="h-4 w-4 text-blue-600 border-gray-300 rounded" />
            <span class="ml-2 text-sm text-gray-600">Remember me</span>
          </label>
          <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
        </div>

        <button
          type="submit"
          class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
          Sign in
        </button>
      </form>

      <p class="mt-6 text-center text-sm text-gray-600">
        Don't have an account?
        <a href="/register" class="text-blue-600 hover:underline">Sign up</a>
      </p>
    </div>
  <!-- </div> -->
</template>

<script setup>
import { ref } from 'vue'
import { login } from '@/libs/api'

const email = ref('')
const password = ref('')
const error = ref(null)

async function handleLogin() {
  try {
    const { token } = await login(email.value, password.value)
    localStorage.setItem('jwt', token)
    console.log('Login successful')
  } catch (err) {
    error.value = err.message
  }
}
</script>

