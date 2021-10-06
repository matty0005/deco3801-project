
<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray">
        <div class="container  mx-auto mt-12">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8 pb-24">
                    <div class="grid grid-cols-1 gap-4 lg:col-span-2">
            
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
                                            <p class="text-3xl font-bold text-gray-900 sm:text-3xl"> Hey {{ $page.props.auth.user.name }}!</p>
                                            <p class="text-3xl text-gray-700 sm:text-3xl">Here are all our specialists</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </section>
                        </div>

                            
                        <div class="bg-white overflow-hidden shadow rounded-lg">
                            <div class="grid grid-flow-col space-around ">
                                <div class=""> 
                                    <img class="h-36 rounded-full" src="/images/doctor.png"/>
                                </div>
                                <div class="my-auto">
                                    <div class="mt-6 text-center sm:mt-6 sm:pt-1 sm:text-left">
                                        <p class="text-3xl font-bold text-gray-900 sm:text-3xl"> Book a doctor you would like your child to consult with! </p>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="group border shadow rounded-md py-2 w-4/5 mx-auto px-2 mb-2 outline-none focus-within:shadow-lg focus-within:text-gray-600 hover:shadow-lg mt-1 flex flex-direction-row"> 
                                <div class=""> 
                                    <svg class="h-10 w-100" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="#9cffb6" stroke="gray" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                    </svg>
                                </div>
                                <input v-model="filter" class="mx-2 px-2 w-full focus:outline-none focus:ring-2 focus:ring-green-100" placeholder="Search for a specific doctor" />
                            </div>

                            <div class="pt-2 pb-5 align-middle inline-block sm:px-6 lg:px-3">
                                <div class="shadow-xl overflow-hidden border-b border-gray-200 sm:rounded-lg"> 

                                    <table class="divide-y divide-gray"> 
                                        <thead class="bg-blue-50">
                                            <tr>
                                                <th @click="sort('name')" class="px-6 py-5 text-left text-xs font-heavy text-gray-500 uppercase tracking-wider" scope="col">Name</th>
                                                <th @click="sort('special')" class="px-6 py-5 text-left text-xs font-heavy text-gray-500 uppercase tracking-wider" scope="col">Specialty</th>                                    
                                                <th @click="sort('rating')" class="px-6 py-5 text-left text-xs font-heavy text-gray-500 uppercase tracking-wider" scope="col">Rating</th>
                                                <th @click="sort('gender')" class="px-6 py-5 text-left text-xs font-heavy text-gray-500 uppercase tracking-wider" scope="col">Gender</th>
                                                <th class="pl-6 py-5 text-left text-xs font-heavy text-gray-500 uppercase tracking-wider" scope="col">
                                                    <div class="flex flex-row items-center content-center">
                                                        <div class="">
                                                            Book
                                                        </div>
                                                        <div class="mx-5"> 
                                                            <svg class="h-6 w-6" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                                                <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"></path>
                                                            </svg>
                                                        </div>
                                                        
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">

                                            <tr v-for="(doctor, index) in filteredRows" :key="index" :value="doctor">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 h-10 w-10">
                                                            <img v-if="doctor.gender === 0" class="h-10 w-10 rounded-full" src="/images/temp-male-avatar.png"/>
                                                            <img v-else class="h-10 w-10 rounded-full" src="/images/temp-female-avatar.png"/>
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                {{doctor.name}}
                                                            </div>
                                                            <div class="text-sm text-gray-500">
                                                                {{doctor.email}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">{{doctor.specialty}}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">{{doctor.rating}}/5</div>
                                                    <div class="text-sm text-gray-500">{{doctor.count}} Reviews </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">{{doctor.gender === 0 ? "Male" : "Female"}}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div>

                                                        <Link :href="`/consultation/book/${doctor.user_id}`" class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                                            Book Doctor!
                                                        </Link>
                                                    
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
        data: () => {
            return {
                filter: '', 
                currentSort: 'name',
                currentSortDir: 'asc'
            }
        },
        components: {
            Layout,
            StackedConsultations,
            Link
            },
        
        props: {
            doctors: Array,
        },
        computed: {
            filteredRows() { 
                return this.doctors.filter(row => {
                    const name = row.name.toString().toLowerCase(); 
                    const email = row.email.toString().toLowerCase(); 
                    const searchTerm = this.filter.toLowerCase(); 
                    return name.includes(searchTerm) || email.includes(searchTerm) ;
                }).sort((a,b) => {
                    let modifier = 1; 
                    if (this.currentSortDir === 'desc') modifier = -1; 
                    if (this.currentSort === 'name') {
                        if (a.name < b.name) return -1 * modifier; 
                        if(a.name > b.name) return 1 * modifier;
                        return 0;
                    } 
                    if (this.currentSort === 'special') {
                        if (a.specialty < b.specialty) return -1 * modifier; 
                        if(a.specialty > b.specialty) return 1 * modifier;
                        return 0;
                    } 
                    if (this.currentSort === 'rating') {
                        if (a.rating < b.rating) return -1 * modifier; 
                        if(a.rating > b.rating) return 1 * modifier;
                        return 0;
                    } 
                    if (this.currentSort === 'gender') {
                        if (a.gender < b.gender) return -1 * modifier; 
                        if(a.gender > b.gender) return 1 * modifier;
                        return 0;
                    } 
                })
            }
        },
        methods: {
            sort:function(s) {
                if (s === this.currentSort) {
                    this.currentSortDir = this.currentSortDir==='asc'?'desc':'asc'; 
                }
                this.currentSort = s; 
            }
        }
    }
</script>

