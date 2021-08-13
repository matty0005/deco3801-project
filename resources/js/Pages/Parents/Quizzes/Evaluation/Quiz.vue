<template>
    <Layout class="bg-gray-100 min-h-screen">
        <div class="bg-green-200 h-48"></div>
        <div class="container  mx-auto -mt-24 bg-white overflow-hidden shadow rounded-lg">
            <div class="text-3xl px-4 pt-5 py-3 sm:px-6">
                {{ content.title }}
            </div>
            <div class="px-4 py-5 sm:p-6">
                In this section you can assess blah
            </div>
        </div>

        <div class="container  mx-auto mt-4 bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                {{ content.questions }}
            </div>
            <Select label="Select the following that applies:" :options="options" @selected="userSelect"/>
        </div>

        <div class="container mx-auto mt-4">
            
        </div>
    </Layout>
</template>

<script>
    import Layout from '@/Layouts/AppLayout'
    import List from "@/Shared/Lists"
    import Select from '@/Shared/Select.vue'

    export default {
        components: {
            Layout,
            List,
            Select
        },

        data: () => {
            return {
                options: [
                    {id: 1,
                    text: "Lonely"},
                    {id: 2,
                    text: "String2"},
                    {id: 3,
                    text: "String3"},
                    {id: 4,
                    text: "String4"},
                    {id: 5,
                    text: "String5"}
                ]
            }
        },
        props: {
            content: Object
        },
        methods: {
            submitQuiz() {
                // this.$inertia.post('/quiz/parent/progressive', {
                //     'responses': [{'question1': 'response1'}, {'question2': 'response2'}]
                // })
            },
            handleQuizClick (id) {
                this.$inertia.visit(`/evaluate/parent/${id}`)
            },

            userSelect (id) {
                console.log(id)
            }
        }
    }
</script>
