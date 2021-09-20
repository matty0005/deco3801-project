
<template>
    
    <Layout class="bg-blueGray-100 min-h-screen">
        <div class="bg-green-200 h-48"></div>
        <div class="container mx-auto -mt-24">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6 text-3xl">
                    <!-- Content goes here -->
                    Doctor Consulation
                </div>
                <div class="text-gray-600 mt-2 px-6 mb-8">
                    In this section you can organise a consultation with a doctor of your choice. You are able 
                    to select a doctor based off your own preferences, their gender, their availability or their rating. 
                </div>
            </div>
        </div>

        <div class="container mx-auto mt-4"> 
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="flex flex-row">
                    
                    <div class="flex justify-center items-center ml-6">
                        <img class="h-10" src="/images/doctor-consultation.png"/>
                    </div>
                    
                    <div class="px-4 py-5 sm:p-6 text-2xl font-semibold">
                        All Doctors
                    </div>
                </div>
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"> 

                        <table class="min-w-full divide-y divide-gray"> 
                            <thead class="bg-blue-100">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Rating</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Gender</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Next Available Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Book</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="/images/temp-male-avatar.png"/>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    name
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    email
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">4.5/5</div>
                                        <div class="text-sm text-gray-500">300 Reviews</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">Male</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrapy">
                                        <div class="text-sm text-gray-900">August 19th</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="/images/temp-female-avatar.png"/>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    name
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    email
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">4.5/5</div>
                                        <div class="text-sm text-gray-500">300 Reviews</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">Female</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrapy">
                                        <div class="text-sm text-gray-900">August 19th</div>
                                    </td>
                                </tr>

                                <tr v-for="(doctor, index) in doctors" :key="index" :value="doctor">
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
                                        <div class="text-sm text-gray-900">{{doctor.rating}}/5</div>
                                        <div class="text-sm text-gray-500">{{doctor.count}} Reviews </div>
                                    </td>
                                    <td>
                                        <div class="text-sm text-gray-500">{{doctor.gender === 0 ? "Male" : "Female"}}</div>
                                    </td>
                                    <td>
                                        <div class="text-sm text-gray-900">{{doctor.time}}</div>
                                    </td>
                                    <td>
                                        <div>

                                            <a :href="`/consultation/book/${doctor.user_id}`" class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                                Book Doctor!
                                            </a>
                                        
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>


<script>
    import Layout from '@/Layouts/AppLayout'
import Button from '@/Components/Button.vue'

    export default {
        components: {
            Layout,
            },
        props: {
            doctors: Array,
        },
    }
</script>

