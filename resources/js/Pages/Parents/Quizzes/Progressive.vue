<template>
    <Layout class="bg-gray-100 min-h-screen">
        <div class="container mx-auto mt-8">
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

    export default {
        components: {
            Layout,
        },
        props: {
            errors:Object
        },
        methods: {
            submitQuiz() {
                this.$inertia.post('/quiz/parent/progressive', {
                    'responses': [{'question1': 'response1'}, {'question2': 'response2'}]
                })
            }
        }
    }
</script>
