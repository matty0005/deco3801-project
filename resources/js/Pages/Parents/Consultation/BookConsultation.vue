<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray min-h-screen">
        <div class="container mx-auto mt-12">
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
                                <p class="text-2xl text-gray-700 sm:text-2xl">You are booking a consult with Dr. {{doctor.name}}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 my-4">
            <div class="bg-white  shadow-xl rounded-lg">


                <div class="flex flex-row">

                   <div class="grid grid-flow-col space-around ">
                    <div class=""> 
                        <img class="h-40 rounded-full" src="/images/doctor.png"/>
                    </div>
                    
                </div>
                    <div class="mt-3 ml-2">
                        <p class="text-xl text-gray-700 sm:text-xl mb-3">When would you like to book your consult with Dr. {{doctor.name}}? </p>
                        <div class="flex flex-direction-row content-center justify-start ">
                            <div class="mx-2 flex flex-col">
                                <label id="listbox-label" class="block text-sm font-medium text-gray-700">
                                    Date
                                </label>
                                <DatePickerText v-model="this.consultationDate" flex="true" class="mt-1" />
                            </div>
                            <Dropdown v-model="timeBooking" :options="timeOptions" label="Time" class="mx-2 w-36"/>

                            <button v-on:click="submitConsultation" type="submit" class="ml-5 h-10 bg-parent-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-parent-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-600">
                                  Save
                            </button>
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
    import DatePicker from "@/Shared/DatePicker.vue"
    import DatePickerText from "@/Shared/DatePickerText.vue"
    export default {
        components: {
            Layout,
            Link,
            Dropdown,
            DatePicker,
            DateTimePicker,
            DatePickerText
            },
        props: {
            doctor: Object,
            doctor_info: Object, 
        },

        data: () => {
            return {
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