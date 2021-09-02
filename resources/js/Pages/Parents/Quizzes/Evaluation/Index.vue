<<<<<<< HEAD
<template>
    <Layout class="bg-gray-100 min-h-screen">
        <div class="bg-green-200 h-48"></div>
        <div class="container  mx-auto -mt-24 bg-white overflow-hidden shadow rounded-lg">
            <div class="text-3xl px-4 pt-5 py-3 sm:px-6">
                Evaluation
            </div>
            <div class="px-4 py-5 sm:p-6">
                Provide habits and behaviour to for feedback and provide doctor's with information.
            </div>
        </div>
        <div class="container mx-auto mt-4">
            <List :list="quizList" @onClicked="handleQuizClick" />
        </div>
        <div class="container mx-auto mt-4">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6 text-2xl">
                    <!-- Content goes here -->
                    Progressive quiz
                </div>
                <div class="text-gray-600 mt-2 ml-6 mb-8">
                    Please complete this quiz to continue. The data from this quiz will be used to help you asses your childs progression throught their expereience. 
                </div>
                <button class="px-4 py-2 bg-parent-500 text-white rounded-md m-4" v-on:click="submitQuiz" >Submit</button>
            </div>
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
=======
<template>
    <Layout class="bg-gray-100 min-h-screen">
        <div class="bg-green-200 h-48"></div>
        <div class="container  mx-auto -mt-24 bg-white overflow-hidden shadow rounded-lg">
            <div class="text-3xl px-4 pt-5 py-3 sm:px-6">
                Evaluation
            </div>
            <div class="px-4 py-5 sm:p-6">
                Take short surveys of your childs behaviour to identify possible symptopms and prodvide details to professionals 
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
>>>>>>> origin/main
