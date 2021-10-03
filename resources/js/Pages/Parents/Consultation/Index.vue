<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray">
        <div class="container mx-auto min-h-screen">
            <div class="max-w-3xl mx-auto mt-12 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
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
            </div>

            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 my-4"> 
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

