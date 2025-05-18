<template>
  <section class="bg-white text-gray-900 py-20 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-3xl px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl sm:text-4xl font-bold mb-8 text-center">Contact Us</h2>
      <form class="space-y-6">
        <div>
          <label for="name" class="block mb-2 text-sm sm:text-base font-medium">Your Name</label>
          <input
            type="text"
            id="name"
            placeholder="Max Mustermann"
            class="w-full px-4 py-3 bg-gray-100 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500"
          />
        </div>
        <div>
          <label for="email" class="block mb-2 text-sm sm:text-base font-medium">Email</label>
          <input
            type="email"
            id="email"
            placeholder="you@example.com"
            class="w-full px-4 py-3 bg-gray-100 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500"
          />
        </div>
        <div>
          <label for="message" class="block mb-2 text-sm sm:text-base font-medium">Message</label>
          <textarea
            id="message"
            rows="4"
            placeholder="Your message..."
            class="w-full px-4 py-3 bg-gray-100 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500"
          ></textarea>
        </div>
        <button
          type="submit"
          class="w-full py-3 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-semibold transition text-sm sm:text-base"
        >
          Send Message
        </button>
      </form>
    </div>
  </section>
</template>
