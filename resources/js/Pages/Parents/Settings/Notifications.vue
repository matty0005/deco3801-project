<template>
<div>
    <Layout class="bg-blueGray-100" >
        <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Notifications</h3>
                        <p class="mt-1 text-sm text-gray-500">Configure your email notifications from here.</p>
                    </div>

                    <fieldset>
                        <legend class="text-base font-medium text-gray-900">By Email</legend>
                        <div class="mt-4 space-y-4">
                        <div class="flex items-start">
                            <div class="h-5 flex items-center">
                            <input v-model="forum" id="comments" name="comments" type="checkbox" class="focus:ring-parent-500 h-4 w-4 text-parent-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                            <label for="comments" class="font-medium text-gray-700">Forum</label>
                            <p class="text-gray-500">Get notified when someones posts a comment on your forum thread.</p>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-start">
                            <div class="h-5 flex items-center">
                                <input v-model="quiz" id="candidates" name="candidates" type="checkbox" class="focus:ring-parent-500 h-4 w-4 text-parent-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="candidates" class="font-medium text-gray-700">Quizzes</label>
                                <p class="text-gray-500">Get notified when a new quiz becomes available.</p>
                            </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-start">
                            <div class="h-5 flex items-center">
                                <input v-model="consultation" id="offers" name="offers" type="checkbox" class="focus:ring-parent-500 h-4 w-4 text-parent-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="offers" class="font-medium text-gray-700">Consultation</label>
                                <p class="text-gray-500">Get email reminders on an upcoming consulation.</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                    </div>
                </div>
                <div class="flex flex-row-reverse  mx-4 lg:mx-0">
                    <button v-on:click="submitData" type="submit" class="bg-parent-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-parent-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-600">
                        Save
                    </button>
                </div>
            </div>
    </Layout>
</div>
</template>

<script>
    import Layout from '@/Layouts/SettingsLayout'

    export default {
        components: {
            Layout,
        },
        props: {
            forumStatus: Boolean,
            quizStatus: Boolean,
            consultationStatus: Boolean
        },

        methods: {
            submitData () {
                this.$inertia.post('/account/notifications', {
                    forum: this.forum,
                    quiz: this.quiz,
                    consultation: this.consultation
                })
            }
        },
        mounted () {
            this.forum = this.forumStatus
            this.quiz = this.quizStatus
            this.consultation = this.consultationStatus
        },
        data: () => {
            return {
               forum: false,
               quiz: false,
               consultation: false
            }
        },
    }
</script>
