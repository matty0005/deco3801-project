
<template>
    
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray min-h-screen">
        <div class="container  mx-auto mt-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
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
        </div>

        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 my-4"> 
            
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="grid grid-flow-col space-around ">
                    <div class=""> 
                        <img class="h-40 rounded-full" src="/images/doctor.png"/>
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

                <div class="pt-2 pb-5 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow-xl overflow-hidden border-b border-gray-200 sm:rounded-lg"> 

                        <table class="min-w-full divide-y divide-gray"> 
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

