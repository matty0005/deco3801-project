<template>
    <Layout class="bg-gray-100 min-h-screen">
        
        <div class="bg-green-200 h-48"></div>
        <div class="container  mx-auto -mt-24 bg-white overflow-hidden shadow rounded-lg">
            <div class="text-3xl px-4 pt-5 py-3 sm:px-6">
                Create your child's account
            </div>
            <div class="px-4 py-5 sm:p-6">
                In order to enter kids mode, you must first configure a child account
            </div>
        </div>

        <div class="container  mx-auto mt-4 bg-white overflow-hidden shadow rounded-lg">
            <div class="m-4">
                <Textfield class="my-8 mx-4" placeholder="name" label="Child's name" v-model="childName" :error="errors.name"/>
                <Textfield class="my-8 mx-4" placeholder="yyyy-mm-dd" label="Child's date of birth (yyyy-mm-dd)" v-model="childAge" :error="errors.dob"/>

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

    export default {
        components: {
            Layout,
            List,
            Select,
            Textfield
        },
        props: {
            errors: Object
        },

        data: () => {
            return {
               childName: "",
               childAge: ""
            }
        },
        
        methods: {
            submitQuiz() {
                this.$inertia.post('/create/kid', {
                    'name': this.childName,
                    'dob': this.childAge
                })
            }

        }
    }
</script>
