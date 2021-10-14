<template>
<div>
    <Layout class="bg-blueGray-100" >
        <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-500">Update your childs settings here.</p>
                    </div>

                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                        <label for="display_name" class="block text-sm font-medium text-gray-700">Display name</label>
                        <input v-model="display_name" type="text" name="display_name" id="display_name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                        </div>
                    </div>

                    <DatePicker v-model="childAge"/>



                    </div>


    
                </div>


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
                            <input id="comments" name="comments" type="checkbox" class="focus:ring-parent-500 h-4 w-4 text-parent-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                            <label for="comments" class="font-medium text-gray-700">Forum</label>
                            <p class="text-gray-500">Get notified when someones posts a comment on your forum thread.</p>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-start">
                            <div class="h-5 flex items-center">
                                <input id="candidates" name="candidates" type="checkbox" class="focus:ring-parent-500 h-4 w-4 text-parent-600 border-gray-300 rounded">
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
                                <input id="offers" name="offers" type="checkbox" class="focus:ring-parent-500 h-4 w-4 text-parent-600 border-gray-300 rounded">
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
    import DatePicker from "@/Shared/DatePicker"

    export default {
        components: {
            Layout,
            DatePicker
        },
        props: {
            displayName: String,
            dob: String,
        },
        beforeMount () {
            this.display_name = this.displayName
            this.childAge = this.dob
        },
        methods: {
            submitData() {
                this.$inertia.post('/account/manage/child', {
                    name: this.display_name,
                    dob: this.childAge
                })
            },
        },
        data: () => {
            return {
                newAvatar: null,
                display_name: "",
                childAge: ''
            }
        },
    }
</script>
