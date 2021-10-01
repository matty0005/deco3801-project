<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray min-h-screen">
        <div class="container max-w-4xl mx-auto mt-20">
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

        <div class="container max-w-4xl mx-auto mt-4 mb-4">
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
                            <DatePickerText v-model="this.consultationDate" flex="true"/>
                            <VueTimepicker v-model="this.yourStringTimeValue" format="HH:mm" @input="inputHandler"/>
                            <button v-on:click="submitConsultation" type="submit" class="ml-5 bg-parent-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-parent-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-600">
                                  Save
                            </button>
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
    import Dropdown from '@/Components/Dropdown.vue'
    import { Link } from '@inertiajs/inertia-vue3'
    import DateTimePicker from '@/Components/DateTimePicker.vue'
    import DatePicker from "@/Shared/DatePicker.vue"
    import DatePickerText from "@/Shared/DatePickerText.vue"
    import TimePicker from "@/Shared/TimePicker.vue"
    import VueTimepicker from "@/Shared/TimePicker";
    export default {
        components: {
          VueTimepicker,
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
                yourStringTimeValue: '10:05',
                month_names: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            }
        },

        methods: {
            submitConsultation() {
                var dateSplit = this.consultationDate.split(" ");
                var month = this.month_names.indexOf(dateSplit[1]) + 1;
                this.consultationDate = dateSplit[3] + "-" + month + "-" + dateSplit[2] + " " + this.yourStringTimeValue;
                console.log(this.consultationDate);
                this.$inertia.post('/consultation/create', {
                    doctor_id: this.doctor.id, 
                    consultation: this.consultationDate
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