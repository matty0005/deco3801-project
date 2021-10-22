
<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray">
        <div class="container  mx-auto mt-12">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8 pb-24">
                    <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                            
                        <div class="bg-white overflow-hidden shadow rounded-lg">
                            <div class="px-4 pt-2 sm:pt-5 sm:p-6 sm:pb-0  flex flex-col">
                                <div class="flex flex-col justify-start">
                                    <div class="px-2 sm:px-4 pt-4 pb-2 text-3xl">
                                        <p class="text-gray-700 font-semibold">Book a Consultation</p>
                                    </div>
                                    <div class="px-2 sm:px-4 pt-4 pb-2 text-3xl">
                                        <p class="text-sm text-gray-500 font-regular">Schedule a session with a professional you would like your child to consult with. You can view ratings and specialisations to find the most suited professional for you.</p>
                                    </div>
                                    <div class="px-2 sm:px-4 pt-2 pb-2 text-3xl">                                       
                                        <input v-model="filter" class="text-sm sm:text-base border-2 border-parent-500 rounded-md py-2 w-full mx-0 lg:mx-auto px-2 mb-2 outline-none focus:ring-1 sm:focus:ring-2 mt-1 focus:ring-parent-600" placeholder="Search for a specialist..." />
                                    </div>
                                </div> 
                            </div>
            
                            <div class="pt-2 w-full">
                                <div class="overflow-hidden border-b pb-2"> 
                                    <table class="divide-y divide-gray"> 
                                        <thead class="bg-parent-50">
                                            <tr>
                                                <th @click="sort('name')" class="px-6 py-5 text-left text-xs font-heavy text-gray-500 hover:text-gray-700 uppercase tracking-wider cursor-pointer" scope="col">Name</th>
                                                <th @click="sort('special')" class="hidden sm:table-cell px-6 py-5 text-left text-xs font-heavy text-gray-500 hover:text-gray-700 uppercase tracking-wider cursor-pointer" scope="col">Specialty</th>                                    
                                                <th @click="sort('rating')" class="hidden sm:table-cell px-6 py-5 text-left text-xs font-heavy text-gray-500 hover:text-gray-700 uppercase tracking-wider cursor-pointer" scope="col">Rating</th>
                                                <th @click="sort('gender')" class="hidden sm:table-cell px-6 py-5 text-left text-xs font-heavy text-gray-500 hover:text-gray-700 uppercase tracking-wider cursor-pointer" scope="col">Gender</th>
                                                <th class="pl-6 py-5 w-full text-left text-xs font-heavy text-gray-500 uppercase tracking-wider" scope="col">
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
                                                            <img class="flex-row-reverse sm:flex-row h-10 w-10 rounded-full" :src="doctor.avatar" alt="profile picture">
                                                        </div>
                                                        <div class="sm:ml-4">
                                                            <div class="text-sm font-medium text-gray-700">
                                                                {{doctor.name}}
                                                            </div>
                                                            <div class="text-sm text-gray-500">
                                                                {{doctor.email}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="hidden sm:table-cell px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">{{doctor.specialty}}</div>
                                                </td>
                                                <td class="hidden sm:table-cell px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-700">{{doctor.rating}}/5</div>
                                                    <div class="text-sm text-gray-500">{{doctor.count}} Reviews </div>
                                                </td>
                                                <td class="hidden sm:table-cell px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">{{doctor.gender === 0 ? "Male" : "Female"}}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div>

                                                        <Link :href="`/consultation/book/${doctor.user_id}`" class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                                            Book Session
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
                    <Datepicker class="mx-6/12" v-model="date"/>                     
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
        import Datepicker from '@/Components/Datepicker.vue'


    export default {
        data: () => {
            return {
                date: new Date(), 
                filter: '', 
                currentSort: 'name',
                currentSortDir: 'asc'
            }
        },
        components: {
            Layout,
            StackedConsultations,
            Link,
            Datepicker
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

