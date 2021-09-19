<template>
    <Layout class="bg-gray-100 min-h-screen">
        <div class="bg-green-200 h-48"></div>
        <div class="container  mx-auto -mt-24 bg-white overflow-hidden shadow rounded-lg">
            <div class="text-3xl px-4 pt-5 py-3 sm:px-6">
                Evaluation
            </div>
            <div class="px-4 py-5 sm:p-6">
                Take short surveys of your childs behaviour to identify possible symptoms and provide details to professionals 
            </div>
        </div>
        <div class="container mx-auto mt-4">
            <List :list="quizList" @onClicked="handleQuizClick" />
        </div>
    </Layout>
</template>

<script>
    import Layout from '@/Layouts/AppLayout'
    import List from "@/Shared/Lists"

    export default {
        components: {
            Layout,
            List
        },
        props: {
            quizList: Array
        },
        methods: {
            submitQuiz() {
                // this.$inertia.post('/quiz/parent/progressive', {
                //     'responses': [{'question1': 'response1'}, {'question2': 'response2'}]
                // })
            },
            handleQuizClick (id) {
                this.$inertia.visit(`/evaluate/parent/${id}`)
            }
        }
    }
</script>
