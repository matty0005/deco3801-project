<template>
<div>
    <Layout class="bg-blueGray-100 min-h-screen pb-8" >
        <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-500">Use a permanent address where you can recieve mail.</p>
                    </div>

                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                        <label for="display_name" class="block text-sm font-medium text-gray-700">Display name</label>
                        <input v-model="display_name" type="text" name="display_name" id="display_name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                        </div>
                    </div>
                    </div>
    
                </div>


                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Notifications</h3>
                        <p class="mt-1 text-sm text-gray-500">Provide basic informtion about the job. Be specific with the job title.</p>
                    </div>

                    <fieldset>
                        <legend class="text-base font-medium text-gray-900">By Email</legend>
                        <div class="mt-4 space-y-4">
                        <div class="flex items-start">
                            <div class="h-5 flex items-center">
                            <input id="comments" name="comments" type="checkbox" class="focus:ring-parent-500 h-4 w-4 text-parent-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                            <label for="comments" class="font-medium text-gray-700">Comments</label>
                            <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-start">
                            <div class="h-5 flex items-center">
                                <input id="candidates" name="candidates" type="checkbox" class="focus:ring-parent-500 h-4 w-4 text-parent-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="candidates" class="font-medium text-gray-700">Candidates</label>
                                <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                            </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-start">
                            <div class="h-5 flex items-center">
                                <input id="offers" name="offers" type="checkbox" class="focus:ring-parent-500 h-4 w-4 text-parent-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="offers" class="font-medium text-gray-700">Offers</label>
                                <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                    <fieldset class="mt-6">
                        <legend class="text-base font-medium text-gray-900">Push Notifications</legend>
                        <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>
                        <div class="mt-4 space-y-4">
                        <div class="flex items-center">
                            <input id="push-everything" name="push-notifications" type="radio" class="focus:ring-parent-500 h-4 w-4 text-parent-600 border-gray-300">
                            <label for="push-everything" class="ml-3">
                            <span class="block text-sm font-medium text-gray-700">Everything</span>
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="push-email" name="push-notifications" type="radio" class="focus:ring-parent-500 h-4 w-4 text-parent-600 border-gray-300">
                            <label for="push-email" class="ml-3">
                            <span class="block text-sm font-medium text-gray-700">Same as email</span>
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="push-nothing" name="push-notifications" type="radio" class="focus:ring-parent-500 h-4 w-4 text-parent-600 border-gray-300">
                            <label for="push-nothing" class="ml-3">
                            <span class="block text-sm font-medium text-gray-700">No push notifications</span>
                            </label>
                        </div>
                        </div>
                    </fieldset>
                    </div>
                </div>
                <div class="flex flex-row-reverse">
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

        methods: {},
        data: () => {
            return {
                newAvatar: null,
                display_name: ""
            }
        },
    }
</script>
