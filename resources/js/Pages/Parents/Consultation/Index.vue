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
                                                    <img class="mx-auto h-32 w-auto" src="/images/doctor.png" alt="doctor">
                                                </div>
                                                <div class="mt-6 text-center sm:mt-6 sm:pt-1 sm:text-left">
                                                    <p class="text-xl font-medium text-gray-600">Book and view your consultations here,</p>
                                                    <p class="text-3xl font-bold text-gray-700 sm:text-3xl"> {{ $page.props.auth.user.name }}! </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        

                    
                        <div class="bg-white overflow-hidden shadow rounded-lg">
                            <div class="">
                                <div class="px-4 py-5 sm:p-6 sm:pb-4 text-xl font-semibold text-gray-700">
                                    Your Consultations
                                </div>
                                <hr class=" mx-4 "/>
                                <StackedConsultations :bookings="bookings"/>
                            </div>
                        </div>

                        <div class="bg-white overflow-hidden shadow rounded-lg">

                            <div class="grid grid-flow-col">
                                <div class="px-2 py-5 sm:p-6 sm:pb-4 text-xl flex flex-col divide-y divide-gray-200">
                                    <div class="font-semibold text-gray-700 pb-4 px-2"> 
                                        Make a Consultation 
                                    </div>
                                    <div class="px-2">
                                        <div class="text-base font-regular text-gray-500 py-3">
                                            Search from a wide range of specialists to select the perfect professional to support your child.
                                        </div>
                                        <div class="flex items-center justify-center py-1">
                                            <Link href="/consultation/book" class="inline-flex font-semibold items-center shadow-sm px-5 py-3 border border-gray-300 leading-5 rounded-full text-gray-700 bg-parent-100 hover:bg-parent-300">
                                                Book now!
                                            </Link>
                                        </div> 
                                    </div>
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
            bookings: Array, 
        },
    }
</script>

