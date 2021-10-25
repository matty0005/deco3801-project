<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray">
        <div class="container mx-auto mt-12">
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
                                            <img class="mx-auto h-32 w-auto" src="/images/doctor.png" alt="doctor">
                                        </div>
                                        <div class="mt-6 text-center sm:mt-6 sm:pt-1 sm:text-left">
                                            <p class="text-3xl font-semibold text-gray-700 sm:text-3xl"> Welcome, {{ $page.props.auth.user.name }}!</p>
                                            <p class="text-lg text-gray-500 sm:text-xl">This is your consultation booking page with {{ doctor_info.title }} {{  doctor.name }}.</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </section>
                        </div>
                        
                        <div class="bg-white overflow-visible shadow rounded-lg relative">
                            <div class="px-4 pt-2 sm:pt-2 sm:p-6 sm:pb-4 flex flex-col divide-y divide-gray-200">
                                <div class="flex flex-col px-2 sm:px-4 pt-4 pb-4">
                                    <p class="text-lg sm:text-xl font-semibold text-gray-700">
                                        Consultation Details
                                    </p>
                                </div>
                                <div class="flex flex-col px-2 sm:px-4 pt-4 pb-2">
                                    <p class="text-sm text-gray-600">
                                        You have a consultation scheduled with {{ doctor_info.title }} {{ doctor.name }} scheduled for:
                                    </p>
                                    <p class="self-center text-sm sm:text-base text-gray-700 py-2">
                                        {{ consultation.when }}
                                    </p>
                                    <p class="text-sm text-gray-600 py-2">
                                        At this allocated time, please join this <a class="underline text-700 font-medium" :href="`{doctor_info.link}`" target="_blank">link</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white overflow-visible shadow rounded-lg relative">
                            <div class="px-4 pt-2 sm:pt-2 sm:p-6 sm:pb-4 flex flex-col divide-y divide-gray-200">
                                <div class="flex flex-col px-2 sm:px-4 pt-4 pb-4">
                                    <p class="text-lg sm:text-xl font-semibold text-gray-700">
                                        Cancellation
                                    </p>
                                </div>
                                <div class="flex flex-col px-2 sm:px-4 pt-4 pb-2">
                                    <p class="text-sm text-gray-600 pb-3"> 
                                        If this consultation is no longer suitable for you, you can cancel it and reschedule.
                                    </p>
                                    <button v-on:click="deleteConsultation" type="submit" class="self-center h-10 bg-parent-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-parent-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-600">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="">
                            <Datepicker class="mx-6/12" v-model="date"/>
                        </div>
                        <div class="rounded-lg bg-white overflow-hidden shadow">
                            <div class="p-6">
                                <h2 class="text-base font-medium text-gray-700">SPECIALIST INFORMATION</h2>
                                <div class="flow-root mt-6">
                                    <ul class="-my-5 divide-y divide-gray-200 text-sm">
                                        <li class="py-4">
                                            <div class="flex items-center">
                                                <p class="text-gray-700 font-medium w-5/12">
                                                    Contact
                                                </p>
                                                <p class="text-gray-600">
                                                    {{ doctor.email }}
                                                </p>
                                            </div>
                                        </li>
                                        <li class="py-4">
                                            <div class="flex items-center">
                                                <p class="text-gray-700 font-medium w-5/12">
                                                    Specialisation
                                                </p>
                                                <p class="text-gray-600">
                                                    {{ doctor_info.specialisation }}
                                                </p>
                                            </div>
                                        </li>
                                        <li class="py-4">
                                            <div class="flex items-center">
                                                <p class="text-gray-700 font-medium w-5/12">
                                                    Rating
                                                </p>
                                                <p class="text-gray-600">
                                                    Fix
                                                </p>
                                            </div>
                                        </li>
                                        <li class="py-4">
                                            <div class="flex items-center">
                                                <p class="text-gray-700 font-medium w-5/12">
                                                    Gender
                                                </p>
                                                <p class="text-gray-600">
                                                    {{doctor_info.gender === 0 ? "Male" : "Female"}}
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
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
    import Dropdown from '@/Shared/Dropdown.vue'
    import { Link } from '@inertiajs/inertia-vue3'
    import DateTimePicker from '@/Components/DateTimePicker.vue'
    import Datepicker from '@/Components/Datepicker.vue'
    import DatePickerText from "@/Shared/DatePickerText.vue"
    export default {
        components: {
            Layout,
            Link,
            Dropdown,
            Datepicker,
            DateTimePicker,
            DatePickerText
            },
        props: {
            doctor: Object,
            doctor_info: Object, 
            consultation: Object,
        },

        data: () => {
            return {
                date: new Date(),
                consultationDate: "2021-09-29",
                example: "2021-09-29 09:10:00",
                timeBooking: '10:00',
                month_names: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                timeOptions: ['9:00', '9:30', '10:00','10:30', '11:00','11:30', '12:00','12:30', '13:00','13:30', '14:00','14:30', '15:00','15:30', '16:00','16:30', '17:00','17:30 ', '18:00']
            }
        },
        beforeMount(){
            var tmp = new Date()
            this.consultationDate = `${tmp.getFullYear()}-${tmp.getMonth() + 1}-${tmp.getDate()}`
        },

        methods: {
            deleteConsultation() {
                this.$inertia.post('/consultation/delete', {
                    consultation_id: this.consultation.id
                });
            }
        },
        computed: {

        }
    }
</script>