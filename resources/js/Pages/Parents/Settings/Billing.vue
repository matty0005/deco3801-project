<template>
<div>
    <Layout class="bg-blueGray-100 min-h-screen pb-8" >
        <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Billing details</h3>
                        <p class="mt-1 text-sm text-gray-500">Please add a payment method to book consulations</p>
                    </div>

                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                        <label for="display_name" class="block text-sm font-medium text-gray-700">Bank username and password</label>
                        <input v-model="display_name" type="text" name="display_name" id="display_name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                        </div>
                    </div>
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
