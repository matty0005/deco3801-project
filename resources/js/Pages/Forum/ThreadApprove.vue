<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray">
        <div class="container  mx-auto mt-12 bg-white overflow-hidden shadow rounded-lg">
            <div class="text-3xl px-4 pt-5 py-3 sm:px-6">
                Approve Forum
            </div>
            <div class="px-4 py-5 sm:p-6">
                <NativeDropdown class="z-50" :options="forumsToApprove" selectType="option" modelType="id" label="Approve" v-model="toApprove"/>

            </div>
        </div>

        <div class="container mx-auto mt-4">
        </div>

        <div class="container  mx-auto mt-4 overflow-hidden rounded-lg flex flex-row-reverse ">
            <button v-on:click="submitQuiz" type="submit" class="bg-parent-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-parent-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-600">
                Save
            </button>

        </div>
    </Layout>
</template>

<script>
    import Layout from '@/Layouts/AppLayout'
    import List from "@/Shared/Lists"
    import Select from '@/Shared/Select.vue'
    import Textfield from "@/Shared/Textfield.vue"
    import DatePicker from "@/Shared/DatePicker.vue"
    import NativeDropdown from "@/Shared/NativeDropdown.vue"

    export default {
        components: {
            Layout,
            List,
            Select,
            Textfield,
            DatePicker,
            NativeDropdown
        },
        props: {
            errors: Object,
            forumsToApprove: Array
        },

        data: () => {
            return {
               childName: "",
               childAge: "2021-01-01",
               toApprove: null
            }
        },
        mounted() {
            try {
                this.toApprove = this.forumsToApprove[0].id
            } catch (e) {}
        },
        
        methods: {
            submitQuiz() {
                this.$inertia.post('/forum/approve', {
                    'id': this.toApprove,
                })
            }

        }
    }
</script>
