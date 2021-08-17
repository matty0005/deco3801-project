<template>
<div>
    <Layout class="bg-blueGray-100 min-h-screen pb-8" >
        <div class="container mx-auto mt-8">
   
            <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
            <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
                <nav class="space-y-1">
                <!-- Current: "bg-gray-50 text-parent-700 hover:text-parent-700 hover:bg-white", Default: "text-gray-900 hover:text-gray-900 hover:bg-gray-50" -->
                <Link href="/account" :class="isOnPage('/account') ? 'text-parent-700 hover:text-parent-700 ':'text-gray-900 hover:text-gray-900'" class="hover:bg-white group rounded-md px-3 py-2 flex items-center text-sm font-medium" aria-current="page">
                    <!--
                    Heroicon name: outline/user-circle

                    Current: "text-parent-500 group-hover:text-parent-500", Default: "text-gray-400 group-hover:text-gray-500"
                    -->
                    <svg :class="isOnPage('/account') ? 'text-parent-500 group-hover:text-parent-500':'text-gray-400 group-hover:text-gray-500'" class=" flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="truncate">
                    Account
                    </span>
                </Link>

                <Link href="/account/change-password" :class="isOnPage('/account/change-password') ? 'text-parent-700 hover:text-parent-700 ':'text-gray-900 hover:text-gray-900'" class=" hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <!-- Heroicon name: outline/key -->
                    <svg :class="isOnPage('/account/change-password') ? 'text-parent-500 group-hover:text-parent-500':'text-gray-400 group-hover:text-gray-500'" class="flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                    <span class="truncate">
                    Password
                    </span>
                </Link>

                <Link href="/account/billing" :class="isOnPage('/account/billing') ? 'text-parent-700 hover:text-parent-700 ':'text-gray-900 hover:text-gray-900'" class=" hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <!-- Heroicon name: outline/credit-card -->
                    <svg :class="isOnPage('/account/billing') ? 'text-parent-500 group-hover:text-parent-500':'text-gray-400 group-hover:text-gray-500'" class=" flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                    <span class="truncate">
                    Plan &amp; Billing
                    </span>
                </Link>

                <Link href="/account/manage/child" :class="isOnPage('/account/manage/child') ? 'text-parent-700 hover:text-parent-700 ':'text-gray-900 hover:text-gray-900'" class=" hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <!-- Heroicon name: outline/user-group -->
                    <svg :class="isOnPage('/account/manage/child') ? 'text-parent-500 group-hover:text-parent-500':'text-gray-400 group-hover:text-gray-500'" class=" flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="truncate">
                    Child Account
                    </span>
                </Link>

                <Link href="/account/notifications" :class="isOnPage('/account/notifications') ? 'text-parent-700 hover:text-parent-700 ':'text-gray-900 hover:text-gray-900'" class=" hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <!-- Heroicon name: outline/view-grid-add -->
                    <svg :class="isOnPage('/account/notifications') ? 'text-parent-500 group-hover:text-parent-500':'text-gray-400 group-hover:text-gray-500'" class=" flex-shrink-0 -ml-1 mr-3 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
                    <span class="truncate">
                    Notifications
                    </span>
                </Link>
                </nav>
            </aside>

            <slot/>
            
            </div>
        
        </div>
   
    </Layout>
</div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

    import Layout from '@/Layouts/AppLayout'

    export default {
        components: {
            Link,
            Layout,
        },
        methods: {
            isOnPage (url) {
                var currentUrl = window.location.pathname

                // var ver = 1
                // var urlMod = url.split("/").filter(l => l)[ver]
                // console.log(`${urlMod}   ${currentUrl}`)
                return url === currentUrl
            },
        }
    }
</script>
