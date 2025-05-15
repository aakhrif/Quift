
import { defineNuxtRouteMiddleware } from '#app';
import { navigateTo } from 'nuxt/app';

export default defineNuxtRouteMiddleware(() => {
  if (process.client && !window.localStorage.getItem('jwt')) {
    return navigateTo('/login')
  }
})
