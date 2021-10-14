<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray min-h-screen ">
        <!-- <div class="bg-green-200 h-48"></div> -->
        <div class="container mx-auto mt-12 ">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <!-- Main 3 column grid -->
                <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8 pb-24">
                    <!-- Left column -->
                    <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                    <!-- Welcome panel -->
                    <section aria-labelledby="profile-overview-title">
                        <div class="rounded-lg bg-white overflow-hidden shadow">
                        <div class="bg-white ">
                            <div class="sm:flex sm:items-center sm:justify-between ">
                                <div class="flex flex-row w-full">
                                    <!-- <div class="flex-shrink-0">
                                        <img class="mx-auto h-32 w-auto" src="https://variety.com/wp-content/uploads/2017/07/rilakkuma.jpg?w=681&h=383&crop=1" alt="">
                                    </div> -->
                                    <div class="w-5/12 p-6 mt-6 text-center sm:mt-6 sm:pt-1 sm:text-left">
                                        <p class="text-xl sm:text-lg md:text-xl font-medium text-gray-600">
                                            Welcome back,
                                        </p>
                                        <p class="text-3xl sm:text-2xl md:text-3xl font-bold text-gray-700 sm:text-3xl">
                                            {{ $page.props.auth.user.name }}!
                                        </p>
                                    </div>
                                    
                                    <Link  href="/switch/kids" method="post" class="invisible sm:visible flex flex-row kidsModeBg w-full">
                                        <div class="flex-grow flex flex-row- ml-32 my-auto">
                                            <div class=" flex-col ">
                                                <div class="text-sm md:text-base text-gray-600">
                                                    Enter 
                                                </div>
                                                <div class="text-2xl md:text-3xl font-bold text-gray-700">
                                                    Kids Mode
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <svg class="hidden lg:block right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2 " fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                                            <polygon points="50,0 100,0 50,100 0,100" />
                                        </svg> -->
                                        
                                        <Mascot class="flex-grow-0" emotion="excited" height="h-24"/>
                                    </Link>
                                </div>
                            </div>
                        </div>
                        </div>
                    </section>

                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="">
                            <!-- Content goes here -->
                            <div class="px-4 py-5 sm:p-6 sm:pb-4 text-xl font-bold text-gray-700">
                                My Consultations
                            </div>
                            <hr class=" mx-4 "/>
                            <StackedConsultations :bookings="bookings"/>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="">
                            <!-- Content goes here -->
                            <div class="px-4 py-5 sm:p-6 sm:pb-4 text-xl font-bold text-gray-700">
                                Trending Community Posts
                            </div>
                            <hr class=" mx-4 "/>
                            <StackedForum />
                        </div>
                    </div>

                  
                    <!-- Actions panel -->
                    
                    </div>

                    <!-- Right column -->
                    <div class="grid grid-cols-1 gap-4">
                    <!-- Recent Hires -->
                    <section>
                        <div class="">
                            <div  v-if="!week(7)" class="h-64 w-96 rounded-lg bg-white overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-2 sm:gap-px"></div>
                            <!-- <Datepicker v-if="week(7)" class="mx-6/12" v-model="date"/> -->
                        </div>
                    </section>
                    <section aria-labelledby="recent-hires-title" v-if="week(7)">
                        <div class="rounded-lg bg-white overflow-hidden shadow -mt-4">
                        <div class="p-6">
                            <h2 class="text-base font-medium text-gray-900">MY SPECIALISTS</h2>
                            <div class="flow-root mt-6">
                            <ul class="-my-5 divide-y divide-gray-200">
                                <li v-for="doctor in doctors" :key="doctor" class="py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                        <img class="h-8 w-8 rounded-full" :src="doctor.avatar" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            {{ doctor.name }}
                                        </p>
                                        <p class="text-sm text-gray-500 truncate">
                                            {{ doctor.specialisation }} Specialist
                                        </p>
                                        </div>
                                        <div>
                                        <a href="#" class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-parent-100 hover:bg-parent-300">
                                            View
                                        </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            </div>
                            <div class="mt-6">
                            <a href="#" class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                View all
                            </a>
                            </div>
                        </div>
                        </div>
                    </section>

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
    import Datepicker from '@/Components/Datepicker'
    import isWeek from "@/utils"
    import { Link } from '@inertiajs/inertia-vue3'
    import StackedConsultations from "@/Components/Parents/StackedConsultations"
    import StackedForum from "@/Components/Parents/StackedForum"
    import Mascot from "@/Shared/Mascot"
    
    export default {
        data: () => {
            return {
                username: "John Smith",
                date: new Date(),
            }
        },
        props: {
            doctors: Array,
            bookings: Array,
        },
        components: {
            Layout,
            Datepicker,
            Link,
            StackedConsultations,
            StackedForum,
            Mascot
        },
        methods: {
            week(weekNum) {
                return isWeek.isWeek(weekNum)
            },
        },
    }
</script>

<style scoped>
.kidsModeBg {
    
    background-image: url("/images/kids_portal.png");
    background-size: cover;
    

}
</style>
