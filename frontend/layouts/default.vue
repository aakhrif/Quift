<!-- layouts/default.vue -->
<template>
  <div>
    <BannerTop />
    <NavigationBar />
    <NuxtPage />
  </div>
</template>

<script setup>
import BannerTop from '@/components/BannerTop.vue'
import NavigationBar from '@/components/NavigationBar.vue'
</script>