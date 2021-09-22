<template>
    <Layout class="bg-gradient-to-b from-parent-200 to-blueGray mix-blend-multiply h-128">
        <!-- <div class="bg-green-200 h-48"></div> -->
        <div class="container mx-auto mt-12 bg-white overflow-hidden shadow rounded-xl">
            <div class="text-gray-700 text-3xl px-4 pt-5 py-3 sm:px-6">
                Evaluation
            </div>
            <div class="text-gray-600 px-4 py-5 sm:p-6">
                Take short surveys regarding your child's behaviour to identify possible difficulties they are experiencing. All responses are confidential and can be changed. Professionals may request your responses to a specific survey to provide you with the best possible support. 
            </div>
        </div>
        <div class="container mx-auto mt-4">
            <List :list="quizList" @onClicked="handleQuizClick" />
        </div>
        <div class="py-5"></div>
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
