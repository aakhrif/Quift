<template>
  <section class="bg-gray-900 text-white py-20 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-3xl px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl sm:text-4xl font-bold mb-8 text-center">Quiz Time!</h2>
      <form class="space-y-6">
        <div>
          <label for="question" class="block mb-2 text-sm sm:text-base font-medium">What is 2 + 2?</label>
          <input
            type="text"
            id="question"
            placeholder="Your answer"
            class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500"
          />
        </div>
        <button
          type="submit"
          class="w-full py-3 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-semibold transition text-sm sm:text-base"
        >
          Submit Answer
        </button>
      </form>
    </div>
  </section>
</template>
