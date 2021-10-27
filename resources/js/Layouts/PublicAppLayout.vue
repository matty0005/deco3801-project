<template>
  <div class="min-h-screen relative overflow-hidden felx">
    <header class="relative">
      <div class="bg-green-800 pt-6">
        <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
          <div class="flex items-center flex-1">
            <div class="flex items-center justify-between w-full md:w-auto">
              <Link href="/">
                <span class="sr-only">Seedlings</span>
                <img class="h-8 w-auto sm:h-10" src="/images/logo_name_white_3.svg" alt="">
              </Link>
            </div>
          </div>
          <div v-if="$page.props.auth.user == null" class="md:flex md:items-center md:space-x-6">
            <Link href="/login" class="mx-2 text-base font-medium text-white hover:text-parent-200">
              Log in
            </Link>
            <Link href="/register" class="mx-4 inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-parent-600 hover:bg-parent-700">
              Sign up
            </Link>
          </div>
          <div v-else class="md:flex md:items-center md:space-x-6">
            <Link href="/dashboard" class="x-4 inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-parent-600 hover:bg-parent-700">
              Dashboard
            </Link>
          </div>
        </nav>
      </div>

    </header>
    <main class=" flex-grow">
      <div class="pt-6 bg-green-800  lg:overflow-hidden">
        <div class="mx-auto max-w-7xl lg:px-8">
        </div>
      </div>
      <slot/>
    </main>
    <Footer />
  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import Footer from '@/Components/Footer'

export default {
    components: {
        Link,
        Footer
    }
}
</script>

<style>

</style>