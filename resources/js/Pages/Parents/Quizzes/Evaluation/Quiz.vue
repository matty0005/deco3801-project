<template>
    <Layout class="min-h-screen bg-gradient-to-b from-parent-300 to-blueGray">
        <div class="container mx-auto mt-12">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="">
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="text-3xl font-semibold text-gray-700 px-4 pt-5 py-3 sm:px-6">
                            {{ content.title }}
                        </div>
                        <div class="text-3x1 text-gray-500 px-4 pt-5 py-5 sm:p-6">
                            {{ content.description }}
                        </div>
                    </div>

                    <div class="container mx-auto mt-4 bg-white overflow-hidden shadow rounded-lg divide-y divide-gray-200 px-3">
                        <div class="py-3" v-for="question in content.questions" :key="question">
                            <div v-if="question.type.includes('select')">
                                <Select class="mx-4" :label="question.question" :multiSelect="question.type == 'multiselect'" :options="question.answers" @selected="userSelect"/>
                            </div>
                            <div v-else-if="question.type.includes('slider')">
                                <Slider class="mx-4" :label="question.question"/>
                            </div>
                            <div v-else-if="question.type.includes('colour')">
                                <ColourSelect class="mx-4" :label="question.question" @selected="userSelect"/>
                            </div>
                            <div v-else>
                                <Break class="mx-4" :label="question.question"/>
                            </div>
                        </div>
                    </div>
                    <div class="container mx-auto mt-4">
                    </div>
                    <div class="flex container flex-row-reverse">
                        <button v-on:click="submitQuiz" type="submit" class="bg-parent-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-parent-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-600">
                            Save
                        </button>
                    </div>
                    <div class="py-4"></div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
    import Layout from '@/Layouts/AppLayout'
    import List from "@/Shared/Lists"
    import Select from '@/Shared/Select.vue'
    import ColourSelect from '@/Shared/ColourSelect.vue'
    import Slider from '@/Shared/Slider.vue'
    import Break from '@/Shared/Break.vue'

    export default {
        components: {
            Layout,
            List,
            Select,
            ColourSelect,
            Slider, 
            Break,
        },

        data: () => {
            return {
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
                this.response["Question #"] = id 
            }
        }
    }
</script>
