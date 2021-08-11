<template>
    <Layout class="bg-blueGray-100 min-h-screen">
        <div class="container mx-auto mt-8">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6 text-2xl">
                    <!-- Content goes here -->
                    My Profile
                </div>
                <div class="text-gray-600 mt-2 ml-6 mb-8">
                    Here you can update your profile
                </div>
                <form @submit.prevent="submit" class="m-4">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-gray-200 sm:pt-5">
                        <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Avatar
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg v-if="!newAvatar" class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <img class="max-w-48 max-h-48 mx-auto" v-else :src="newAvatar" />

                                <div class="flex text-sm text-gray-600">
                                <label class="relative cursor-pointer bg-white rounded-md font-medium text-cyan-500 hover:text-parentPrimary ">
                                    <span>Upload a file</span>
                                    <input  type="file" class="sr-only" @input="avatarToUpload.avatar = $event.target.files[0]" @change="onAvatarChange">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">
                                PNG, JPG, GIF up to 4MB
                                </p>
                                <progress v-if="avatarToUpload.progress" :value="avatarToUpload.progress.percentage" max="100">
                                    {{ avatarToUpload.progress.percentage }}%
                                </progress>
                            </div>
                            </div>
                        </div>


                        
                    </div>
                    <div class="w-full flex flex-row-reverse">
                        <button class="w-24 mx-auto bg-parentPrimay hover:bg-parentPrimayHover text-white rounded-md px-6 py-2 m-2" type="submit">Submit</button>
                        <div class="flex-grow w-2"></div>
                    </div>

                     <!-- <form @submit.prevent="submit">
                        <input type="file" @input="avatarToUpload.avatar = $event.target.files[0]" />
                        <progress v-if="avatarToUpload.progress" :value="avatarToUpload.progress.percentage" max="100">
                        {{ avatarToUpload.progress.percentage }}%
                        </progress>
                        <button type="submit">Submit</button>
                    </form> -->
                </form>
            </div>
        </div>
    </Layout>
</template>

<script>
    import Layout from '@/Layouts/AppLayout'
    import { useForm } from '@inertiajs/inertia-vue3'

    export default {
        components: {
            Layout,
        },
        methods: {
            onAvatarChange(event) {
                const file = event.target.files[0];
                this.newAvatar = URL.createObjectURL(file)
            },
        },
        data: () => {
            return {
                newAvatar: null
            }
        },
        setup () {
            const avatarToUpload = useForm({
                avatar: null,
            })

            function submit() {
                avatarToUpload.post('/profile/avatar')
            }

            return { avatarToUpload, submit }
        },
    }
</script>
