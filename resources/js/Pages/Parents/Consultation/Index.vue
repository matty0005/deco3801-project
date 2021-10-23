<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray">
        <div class="container mx-auto mt-12">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8 pb-24">
                    <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                        <section aria-labelledby="profile-overview-title">
                            <div class="bg-white overflow-visible shadow rounded-lg relative">
                                <div class="px-4 pt-2 sm:pt-5 sm:p-6 sm:pb-0  flex flex-col">
                                    <div class="flex flex-col justify-start">
                                        <div class="px-2 sm:px-4 pt-4 pb-2 text-3xl font-semibold">
                                            <p class="text-gray-700">Consultation</p>
                                        </div>
                                    </div>
                                    <div class="px-2 sm:px-4 mt-4 mb-4 text-sm text-gray-500">
                                        Welcome to your consultation page, {{ $page.props.auth.user.name }}. View consultations with our specialists you have scheduled here. Want to book a consult? Select a professional from our wide range of specialists at your preferred date and time. 
                                    </div>
                                </div>
                            </div>
                        </section>
                                            
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
                                        Schedule a Consultation 
                                    </div>
                                    <div class="px-2">
                                        <div class="text-sm font-regular text-gray-500 py-3">
                                            Search from a wide range of specialists to select the perfect professional to support your child.
                                        </div>
                                        <div class="flex items-center justify-center py-1">
                                            <Link href="/consultation/book" class="self-center h-10 bg-parent-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-parent-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-600">
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

