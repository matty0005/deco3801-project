<template>
  <div>
    <nav class="bg-white shadow">
    <div class="container mx-auto ">
      <div class="flex justify-between h-16">
        <div class="flex">
          <div class="flex-shrink-0 flex items-center">
            <img class="block lg:hidden h-8 w-auto" src="/images/logo_name_3.svg" alt="Workflow">
            <img class="hidden lg:block h-8 w-auto" src="/images/logo_name_3.svg" alt="Workflow">
          </div>
          <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
            <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
            <Link href="/dashboard" :class="isOnPage('dashboard') ? 'border-parent-500 text-gray-900':'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'"  class=" inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium" role="menuitem" tabindex="-1" >Dashboard</Link>
            <Link href="/forum" :class="isOnPage('forum') ? 'border-parent-500 text-gray-900':'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'"  class=" inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium" role="menuitem" tabindex="-1" >Forum</Link>
            <Link href="/evaluate" :class="isOnPage('evaluate') ? 'border-parent-500 text-gray-900':'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'"  class=" inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium" role="menuitem" tabindex="-1" >Evaluate</Link>
            <Link href="/consultation" :class="isOnPage('consultation') ? 'border-parent-500 text-gray-900':'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'"  class=" inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium" role="menuitem" tabindex="-1" >Consultation</Link>


          </div>
        </div>
        <div class="hidden sm:ml-6 sm:flex sm:items-center">

          <!-- Profile dropdown -->
          <div class="ml-3 relative">
            <div>
              <button type="button" @click="showProfileDropdown = !showProfileDropdown" class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full" :src="$page.props.auth.user.avatar" alt="">
              </button>
            </div>

            <transition
              enter-active-class="transition ease-out duration-100"
              enter-from-class="transform opacity-0 scale-95"
              enter-to-class="transform opacity-100 scale-100"
              leave-active-class="transition ease-in duration-75"
              leave-class=" transform opacity-100 scale-100"
              leave-to-class="transform opacity-0 scale-95"
            >
            <div v-if="showProfileDropdown" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <Link href="/account" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" >Settings</Link>
              <Link v-if="week(5)" href="/switch/kids" method="post"  as="button" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" >Kids mode</Link>
              <Link href="/logout" method="post"  as="button" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" >Sign out</Link>
            </div>
            </transition>
          </div>
        </div>
        <div class="-mr-2 flex items-center sm:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-parent-500" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg v-if="showProfileDropdown" :class="showProfileDropdown ? 'hidden':'block'" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg v-if="!showProfileDropdown" :class="!showProfileDropdown ? 'hidden':'block'" class=" h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div v-if="showProfileDropdown" class="sm:hidden" id="mobile-menu">
      <div class="pt-2 pb-3 space-y-1">
        <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
        <Link href="/dashboard"   class=" border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium" role="menuitem" tabindex="-1" >Dashboard</Link>
        <Link href="/forum"   class=" border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium" role="menuitem" tabindex="-1" >Forum</Link>
        <Link href="/evaluate"   class=" border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium" role="menuitem" tabindex="-1" >Evaluate</Link>
        <Link href="/consulation"   class=" border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium" role="menuitem" tabindex="-1" >Consultation</Link>
       
      </div>
      <div class="pt-4 pb-3 border-t border-gray-200">
        <div class="flex items-center px-4">
          <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" :src="$page.props.auth.user.avatar" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base font-medium text-gray-800">Tom Cook</div>
            <div class="text-sm font-medium text-gray-500">tom@example.com</div>
          </div>
        </div>
        <div class="mt-3 space-y-1">
            <Link href="/account"  class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100" role="menuitem" tabindex="-1" >Settings</Link>

            <Link v-if="week(5)" href="/switch/kids" method="post"  as="button" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100" role="menuitem" tabindex="-1" >Kids mode</Link>

            <Link href="/logout" method="post"  as="button" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100" role="menuitem" tabindex="-1" >Sign out</Link>
        </div>
      </div>
    </div>
  </nav>
    <main class="h-main">
        <slot />
    </main>
  </div>
</template>

<script>
import isWeek from "@/utils"
import { Link } from '@inertiajs/inertia-vue3'
export default {
    data: () => {
        return {
            showProfileDropdown: false
        }
    },
    components: {
        Link
    },
    methods: {
        week (weekNum) {
            return isWeek.isWeek(weekNum)
        },
        onClickOutside () {
            this.showProfileDropDown = false
        },
        isOnPage (url) {
            var ver = 0
            var urlMod = url.split("/").filter(l => l)[ver]
            var currentUrl = window.location.pathname.split("/").filter(t => t)[ver]
            return urlMod === currentUrl
        },
    },
    mounted() {
        document.addEventListener("click", this.onClickOutside, true);
    }

}
</script>

<style>

</style>