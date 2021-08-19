<template>
    <Layout class="bg-gray-100 min-h-screen">
        <div class="bg-green-200 h-48"></div>
        <div class="container  mx-auto -mt-24 bg-white overflow-hidden shadow rounded-lg">
            <div class="text-3xl px-4 pt-5 py-3 sm:px-6">
                {{ content.title }}
            </div>
            <div class="px-4 py-5 sm:p-6">
                Evaluation Quiz
            </div>
        </div>

        <div class="container mx-auto mt-4 bg-white overflow-hidden shadow rounded-lg">
            <div class="py-5" v-for="question in content.questions" :key="question">
                <Select class="mx-4" :label="question.question" multiSelect :options="question.answers" @selected="userSelect"/>
            </div>
            <div class="py-5">
                <Slider class="mx-4"/>
            </div>
            <div class="py-5">
                <ColourSelect class="mx-4"/>
            </div>
        </div>

        <div class="container mx-auto mt-4">
        </div>
        <div class="flex container flex-row-reverse">
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
    import Slider from '@/Shared/Slider.vue'
    import ColourSelect from '@/Shared/ColourSelect.vue'

    export default {
        components: {
            Layout,
            List,
            Select,
            Slider,
            ColourSelect
        },

        data: () => {
            return {
                options: [
                    {
                        id: 1,
                        text: "Lonely"},
                    {
                        id: 2,
                        text: "Depressed"},
                    {
                        id: 3,
                        text: "String3"},
                    {
                        id: 4,
                        text: "String4"},
                    {
                        id: 5,
                        text: "String5"}
                ],

                response: {
                }
            }
        },
        props: {
            content: Object
        },
        methods: {
            submitQuiz() {
                this.$inertia.post(window.location.pathname, {
                    'response': this.response
                })
            },
            handleQuizClick (id) {
                this.$inertia.visit(`/evaluate/parent/${id}`)
            },

            userSelect (id) {
                console.log(id)
                this.response["Question 1"] = id 
            }


        }
    }
</script>
