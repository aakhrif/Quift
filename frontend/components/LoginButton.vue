<template>
    <button
        @click="handleClick"
        type="button"
        class="inline-flex items-center justify-center rounded-md bg-primary px-5 py-2.5 text-white
            font-semibold shadow hover:bg-primary/90 active:scale-95 transition duration-150 ease-in-out
            cursor-pointer text-sm sm:text-base bg-blue-400 hover:bg-blue-600"
    >
    Login
  </button>
</template>

<script setup>
    const handleClick = () => {
        const token = localStorage.getItem('jwt')
        if (token) {
            navigateTo('/dashboard')
        }
        navigateTo('/login')
    }
</script>