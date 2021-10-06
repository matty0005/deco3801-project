<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray">
        <div class="container mx-auto mt-12">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8 pb-24">
                    <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                    
                        <!-- Card -->
                        <div class="bg-white overflow-hidden shadow rounded-lg">
                            <section aria-labelledby="profile-overview-title">
                                <div class="rounded-lg bg-white overflow-hidden shadow">
                                    <div class="bg-white p-6">
                                        <div class="sm:flex sm:items-center sm:justify-between">
                                            <div class="sm:flex sm:space-x-5">
                                                <div class="flex-shrink-0">
                                                    <img class="mx-auto h-32 w-auto" src="https://variety.com/wp-content/uploads/2017/07/rilakkuma.jpg?w=681&h=383&crop=1" alt="">
                                                </div>
                                                <div class="mt-6 text-center sm:mt-6 sm:pt-1 sm:text-left">
                                                    <p class="text-xl font-medium text-gray-600">Here are your consultations,</p>
                                                    <p class="text-3xl font-bold text-gray-900 sm:text-3xl"> {{ $page.props.auth.user.name }}! </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        

                    
                        <div class="bg-white overflow-hidden shadow rounded-lg mb-4">
                            <div class="">
                                <div class="px-4 py-5 sm:p-6 sm:pb-4 text-xl font-bold text-gray-700">
                                    My Consultations
                                </div>
                                <hr class=" mx-4 "/>
                                <StackedConsultations :bookings="bookings"/>
                            </div>
                        </div>

                        <div class="bg-white overflow-hidden shadow rounded-lg">

                            <div class="grid grid-flow-col">
                                <div> 
                                    <img class="h-40 rounded-full" src="/images/doctor.png"/>
                                </div>
                                <div class="px-4 py-5 sm:p-6 sm:pb-4 text-xl font-bold text-gray-700">
                                    <div> 
                                        Need some advice on your child? 
                                    </div>
                                    <div class="">
                                        <Link href="/consultation/book" class="inline-flex items-center shadow-sm px-5 py-3 border border-gray-300 leading-5 rounded-full text-gray-700 bg-parent-100 hover:bg-parent-300">
                                            Book a Consultation!
                                        </Link>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="grid grid-cols-1 gap-4 lg:col-span-1">

                        <section aria-labelledby="quick-links-title">
                            <div class="flex flex-col rounded-lg bg-gray-200 overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-1 sm:gap-px">
                            <h2 class="sr-only" id="quick-links-title">Quick links</h2>
                            
                            <Link href="/forum" class="sm:rounded-tr-lg relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-gray-200">
                                <div>
                                <span class="rounded-lg inline-flex p-3 bg-parent-50 text-teal-700 ring-4 ring-white">
                                    <!-- Heroicon name: outline/badge-check -->
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"></path>
                                        <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"></path>
                                    </svg>
                                </span>
                                </div>
                                <div class="mt-8">
                                <h3 class="text-lg font-medium">
                                    <div class="focus:outline-none">
                                    <!-- Extend touch target to entire panel -->
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Forum
                                    </div>
                                </h3>
                                <p class="mt-2 text-sm text-gray-500">
                                    Engage with professionals and other parents on experiences, stories and topics related to mental health.
                                </p>
                                </div>
                                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                                </svg>
                                </span>
                            </Link>

                            <Link href="/consultation/book" class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-gray-200">
                                <div>
                                <span class="rounded-lg inline-flex p-3 bg-parent-50 text-teal-700 ring-4 ring-white">
                                    <!-- Heroicon name: outline/users -->
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                </div>
                                <div class="mt-8">
                                <h3 class="text-lg font-medium">
                                    <a href="#" class="focus:outline-none">
                                    <!-- Extend touch target to entire panel -->
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Search for specialists
                                    </a>
                                </h3>
                                <p class="mt-2 text-sm text-gray-500">
                                    Find specialists that meet your needs and requirements. We have a range doctors specialising in children's mental health.
                                </p>
                                </div>
                                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                                </svg>
                                </span>
                            </Link>

                            <Link href="/resources" class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-gray-200">
                                <div>
                                <span class="rounded-lg inline-flex p-3 bg-parent-50 text-teal-700 ring-4 ring-white">
                                    <!-- Heroicon name: outline/cash -->
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
                                    </svg>
                                </span>
                                </div>
                                <div class="mt-8">
                                <h3 class="text-lg font-medium">
                                    <div class="focus:outline-none">
                                    <!-- Extend touch target to entire panel -->
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Resources
                                    </div>
                                </h3>
                                <p class="mt-2 text-sm text-gray-500">
                                    Access resources to learn more about mental health and news in the medical world.
                                </p>
                                </div>
                                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                                </svg>
                                </span>
                            </Link>
                            </div>
                        </section>
                        </div>
                </div>
            </div>
        </div>
    </Layout>
</template>


<script>
    import Layout from '@/Layouts/AppLayout'
    import Button from '@/Components/Button.vue'
    import StackedConsultations from "@/Components/Parents/StackedConsultations"
    import { Link } from '@inertiajs/inertia-vue3'

    export default {
        
        components: {
            Layout,
            StackedConsultations,
            Link
            },
        props: {
            doctors: Array,
            bookings: Array, 
        },
    }
</script>

