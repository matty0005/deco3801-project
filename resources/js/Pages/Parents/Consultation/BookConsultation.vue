<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray">
        <div class="container mx-auto mt-12">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8 pb-24">
                    <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                        <div class="bg-white overflow-hidden shadow rounded-lg">
                            <section aria-labelledby="profile-overview-title">
                                <div class="rounded-lg bg-white overflow-hidden shadow">
                                    <div class="bg-white p-6 divide-y divide-gray-200">
                                        <div class="flex items-center pb-4">
                                            <div class="flex-shrink-0">
                                                <img class="flex-row-reverse sm:flex-row h-16 w-16 rounded-full" :src="doctor.avatar" alt="profile picture">
                                            </div>
                                            <div class="ml-2 sm:ml-4">
                                                <div class="text-lg sm:text-xl font-semibold text-gray-700">
                                                    {{doctor_info.title}} {{doctor.name}}
                                                </div>
                                                <div class="text-lg sm:text-xl font-medium text-gray-500">
                                                    {{ doctor_info.specialisation }}
                                                </div>
                                            </div>
                                            <div class="flex flex-row ml-auto mt-1.5 sm:mt-0 self-start cursor-pointer hover:underline" @click="this.$inertia.visit('/consultation/book')"> 
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                                </svg>
                                                <p class="text-sm font-medium text-gray-600 self-center">Search</p>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-x-20 py-3">
                                            <div class="text-sm gap-x-4 flex flex-row">
                                                <p class="text-gray-700">
                                                    Price (AUD)
                                                </p>
                                                
                                                <p class="text-gray-500">
                                                    &dollar;{{ doctor_info.cost }} <span class="text-xs"> hourly</span>
                                                </p>
                                            </div>
                                            <div class="text-sm gap-x-4 flex flex-row">
                                                <p class="text-gray-700">
                                                    Rating
                                                </p>
                                                <p class="text-gray-500">
                                                    {{ doctor_info.rating }}/5 <span class="text-xs">from {{doctor_info.count}} reviews</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm pt-3" v-html="doctor_info.desc"></div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="bg-white shadow-xl rounded-lg">
                            <div class="flex flex-row">
                                <div class="grid grid-flow-col space-around ">
                                </div>
                                <div class="py-4 px-6">
                                    <p class="text-sm text-gray-500 mb-3">
                                        Select when you would like to have your consultation with {{doctor_info.title}} {{doctor.name}}.
                                    </p>
                                    <div class="flex flex-direction-row content-center justify-start items-end">
                                        <div class="mr-2 flex flex-col">
                                            <label id="listbox-label" class="block text-sm font-medium text-gray-700">
                                                Date
                                            </label>
                                            <DatePickerText v-model="this.consultationDate" flex="true" class="mt-1" />
                                        </div>
                                        <Dropdown v-model="timeBooking" :options="timeOptions" label="Time" class="mx-2 w-36"/>

                                        <button v-on:click="submitConsultation" type="submit" class="ml-5 h-10 bg-parent-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-parent-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-600">
                                            Save
                                        </button>
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
    import Dropdown from '@/Shared/Dropdown.vue'
    import { Link } from '@inertiajs/inertia-vue3'
    import DateTimePicker from '@/Components/DateTimePicker.vue'
    import DatePickerText from "@/Shared/DatePickerText.vue"
    import Datepicker from '@/Components/Datepicker.vue'

    export default {
        components: {
            Layout,
            Link,
            Dropdown,
            Datepicker,
            DateTimePicker,
            DatePickerText,
            },
        props: {
            doctor: Object,
            doctor_info: Object, 
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
            submitConsultation() {
                var dateSplit = this.consultationDate.split(" ");
                var month = this.month_names.indexOf(dateSplit[1]) + 1;
                var tmpConsultationDate = `${dateSplit[3]}-${month}-${ dateSplit[2]} ${this.timeBooking}`
                
                console.log(tmpConsultationDate);
                this.$inertia.post('/consultation/create', {
                    doctor_id: this.doctor.id, 
                    consultation: tmpConsultationDate
                })
            },
            inputHandler (eventData) {
              console.log(this.consultationDate.split(" "));
              this.yourStringTimeValue = eventData["HH"] + ":" + eventData["mm"];
            }

        },
        computed: {

        }
    }
</script>