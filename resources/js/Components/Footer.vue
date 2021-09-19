<template>
  <footer class="bg-white">
  <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
    <div class="flex justify-center space-x-6 md:order-2">
      <Link href="/home" class="text-gray-400 hover:text-gray-500">
        Home
      </Link>

      <Link href="/dashboard" class="text-gray-400 hover:text-gray-500">
        Dashboard
      </Link>

      <Link href="/attributions" class="text-gray-400 hover:text-gray-500">
        Attributions
      </Link>        
    </div>
    <div class="mt-8 md:mt-0 md:order-1">
      <p class="text-center text-base text-gray-400">
        &copy; 2021 Team SMOJGY. All rights reserved.
      </p>
    </div>
  </div>
</footer>
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link
    }
}
</script>

<style>

</style>