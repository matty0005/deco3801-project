<template>
    <Layout class="bg-blueGray-100 min-h-screen">
        <div class="bg-green-200 h-48"></div>
        <div class="container mx-auto -mt-24">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6 text-3xl">
                    Book a Consultation
                </div>
                <div class="text-gray-600 mt-2 px-6 mb-8">
                    Here you can book the consultation with the doctor of your choice. 
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-4">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="flex flex-row">
                    <div class="flex justify-center items-center ml-6">
                        <img class="h-10" src="/images/user-plus.svg"/>
                    </div>
                   
                    <div>

                        You are booking for {{doctor.name}} with a rating of {{doctor_info.rating}}
                        <DatePicker v-model="consultationDate"/>


                        <button v-on:click="submitConsultation" type="submit" class="bg-parent-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-parent-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-600">
                            Save
                        </button>

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
    import DatePicker from "@/Shared/DatePicker.vue"
    export default {
        components: {
            Layout,
            Link,
            Dropdown,
            DatePicker,
            },
        props: {
            doctor: Object,
            doctor_info: Object, 
        },

        data: () => {
            return {
                consultationDate: "2021-01-01"
            }
        },

        methods: {
            submitConsultation() {
                this.$inertia.post('/consultation/create', {
                    doctor_id: this.doctor.id, 
                    consultation: this.consultationDate
                })
            }
        }
    }
</script>