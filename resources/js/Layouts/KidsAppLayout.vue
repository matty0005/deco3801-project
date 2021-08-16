<template>
    <div>
        <nav class="bg-white shadow">
            <div class="container mx-auto ">
            <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
                <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg" alt="Workflow">
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                <!-- Current: "border-orange-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                <Link href="/dashboard" :class="isOnPage('/dashboard') ? 'border-kid-500 text-gray-900':'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'"  class=" inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium" role="menuitem" tabindex="-1" >Dashboard</Link>
                <Link href="/kids/draw" v-if="week(5)" :class="isOnPage('/kids/draw') ? 'border-kid-500 text-gray-900':'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'"  class=" inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium" role="menuitem" tabindex="-1" >Draw</Link>

                </div>
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                <!-- Profile dropdown -->
                <div class="ml-3 relative">
                <div>
                    <button type="button" @click="showProfileDropdown = !showProfileDropdown" class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
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
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Profile</a>
                    <a  @click="switchParents"  as="button" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" >Parent mode</a>
                </div>
                </transition>
                </div>
            </div>
            <div class="-mr-2 flex items-center sm:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500" aria-controls="mobile-menu" aria-expanded="false">
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
            <!-- Current: "bg-indigo-50 border-orange-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
            <Link href="/dashboard" :class="isOnPage('/dashboard') ? 'bg-kid-50 border-kid-500 text-kid-700':'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700'"  class=" block pl-3 pr-4 py-2 border-l-4 text-base font-medium" role="menuitem" tabindex="-1" >Dashboard</Link>
            <Link href="/kids/draw" :class="isOnPage('/kids/draw') ? 'bg-kid-50 border-kid-500 text-kid-700':'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700'"  class=" block pl-3 pr-4 py-2 border-l-4 text-base font-medium" role="menuitem" tabindex="-1" >Draw</Link>

            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <div class="ml-3">
                <div class="text-base font-medium text-gray-800">Tom Cook</div>
                <div class="text-sm font-medium text-gray-500">tom@example.com</div>
                </div>

            </div>
            <div class="mt-3 space-y-1">
                <a href="#" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Your Profile</a>
                <a @click="switchParents" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100" role="menuitem" tabindex="-1" >Parent mode</a>

            </div>
            </div>
        </div>
    </nav>
    <main class="h-main bg-warmGray-100">
        <slot />
    </main>

    <ModalContainer v-model="verifyParent" @onConfirm="verifyMe" type="warning"  confirmText="Verify" title="Change back to parents mode?" @keyup.enter="verifyMe">
        <div>
            <div>
                Are you sure you want to exit kids mode and go back to parents mode? Please put in your password to continue
            </div>
            <Textfield class="my-3" v-model="parentPassword" password /> 
        </div>
    </ModalContainer>


    
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import ModalContainer from "@/Shared/ModalContainer"
import Textfield from "@/Shared/Textfield"


import isWeek from "@/utils"

export default {
    data: () => {
        return {
            showProfileDropdown: false,
            verifyParent: false,
            parentPassword: "",
        }
    },
    props: {
        errors:Object
    },
    components: {
        Link,
        ModalContainer,
        Textfield
    },
    methods: {
        onClickOutside () {
            this.showProfileDropDown = false
        },
        switchParents() {
            this.verifyParent = true
            // /switch/parents
        },
        verifyMe () {
            this.$inertia.post('/switch/parents', {
                password: this.parentPassword
            })
            
        },
        isOnPage (url) {
            var ver = 0
            // var urlMod = url.split("/").filter(l => l)[ver]
            var currentUrl = window.location.pathname//.split("/").filter(t => t)[ver]
            return url === currentUrl
        },
        week (weekNum) {
            return isWeek.isWeek(weekNum)
        }
    },
    mounted() {
        document.addEventListener("click", this.onClickOutside, true);
    }


}
</script>

<style>

</style>