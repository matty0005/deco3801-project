<template>
<div>
    <Layout class="bg-blueGray-100 min-h-screen pb-8" >
        <div class="container mx-auto mt-8">
   
            <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
            <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
                <nav class="space-y-1">
                <!-- Current: "bg-gray-50 text-parent-700 hover:text-parent-700 hover:bg-white", Default: "text-gray-900 hover:text-gray-900 hover:bg-gray-50" -->
                <a href="#" class="bg-gray-50 text-parent-700 hover:text-parent-700 hover:bg-white group rounded-md px-3 py-2 flex items-center text-sm font-medium" aria-current="page">
                    <!--
                    Heroicon name: outline/user-circle

                    Current: "text-parent-500 group-hover:text-parent-500", Default: "text-gray-400 group-hover:text-gray-500"
                    -->
                    <svg class="text-parent-500 group-hover:text-parent-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="truncate">
                    Account
                    </span>
                </a>

                <a href="#" class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <!-- Heroicon name: outline/key -->
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                    <span class="truncate">
                    Password
                    </span>
                </a>

                <a href="#" class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <!-- Heroicon name: outline/credit-card -->
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                    <span class="truncate">
                    Plan &amp; Billing
                    </span>
                </a>

                <a href="#" class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <!-- Heroicon name: outline/user-group -->
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="truncate">
                    Team
                    </span>
                </a>

                <a href="#" class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <!-- Heroicon name: outline/view-grid-add -->
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                    </svg>
                    <span class="truncate">
                    Integrations
                    </span>
                </a>
                </nav>
            </aside>

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


                <form method="POST" @submit.prevent="submit">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Profile</h3>
                            <p class="mt-1 text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
                        </div>

                        <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3">
                                <label class="block text-sm font-medium text-gray-700">
                                    Avatar
                                </label>
                                <div class="mt-1 border-2 border-gray-300 border-dashed rounded-md px-6 pt-5 pb-6 flex justify-center" @drop="dropHandler" @dragover="dragOverHandler">
                                    <div class="space-y-1 text-center">
                                        <svg v-if="!newAvatar" class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <img class="max-w-48 max-h-48 mx-auto" v-else :src="newAvatar" />

                                        <div class="flex text-sm text-gray-600">
                                        <label class="relative cursor-pointer bg-white rounded-md font-medium text-parent-500 hover:text-parentPrimary ">
                                            <span>Upload a file</span>
                                            <input  type="file" class="sr-only" @input="avatarToUpload.avatar = $event.target.files[0]" @change="onAvatarChange($event, false)">
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
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="bg-parent-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-parent-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-500">
                            Upload
                        </button>
                        </div>
                    </div>
                </form>

                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-500">Use a permanent address where you can recieve mail.</p>
                    </div>

                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                        <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                        <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                        <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                        <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>
                        <select id="country" name="country" autocomplete="country" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                        </select>
                        </div>

                        <div class="col-span-6">
                        <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
                        <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                        <input type="text" name="city" id="city" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>
                        <input type="text" name="state" id="state" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal</label>
                        <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
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
            
            </div>
        
        </div>
   
    </Layout>
</div>
</template>

<script>
    import Layout from '@/Layouts/AppLayout'
    import { useForm } from '@inertiajs/inertia-vue3'

    export default {
        components: {
            Layout,
        },
        props: {
            displayName: String
        },
        methods: {
            onAvatarChange(event, isDrop) {
                var file = null
                if (isDrop) {
                     file = event.dataTransfer.items[0].getAsFile()
                } else {
                    file = event.target.files[0];
                }

                this.newAvatar = URL.createObjectURL(file)
            },
            dropHandler(ev) {
                // Prevent default behavior (Prevent file from being opened)
                console.log("YEET")
                ev.preventDefault();

                if (ev.dataTransfer.items) {

                    this.avatarToUpload.avatar = ev.dataTransfer.items[0].getAsFile()
                    this.onAvatarChange(ev, true)
                    // // Use DataTransferItemList interface to access the file(s)
                    // for (var i = 0; i < ev.dataTransfer.items.length; i++) {
                    // // If dropped items aren't files, reject them
                    // if (ev.dataTransfer.items[i].kind === 'file') {
                    //     var file = ev.dataTransfer.items[i].getAsFile();
                    //     console.log('... file[' + i + '].name = ' + file.name);
                    // }
                    // }
                } else {
                    // Use DataTransfer interface to access the file(s)
                    for (var i = 0; i < ev.dataTransfer.files.length; i++) {
                    console.log('... file[' + i + '].name = ' + ev.dataTransfer.files[i].name);
                    }
                }
            },
            dragOverHandler(ev) {
                // Prevent default behavior (Prevent file from being opened)
                ev.preventDefault();
            },
            submitData() {
                this.$inertia.post('/profile',{
                    'display_name': this.display_name
                })
            },
        },
        data: () => {
            return {
                newAvatar: null,
                display_name: ""
            }
        },
        mounted () {
            this.display_name = this.displayName
        },
        setup () {
            const avatarToUpload = useForm({
                avatar: null,
                displayName: null
            })

            function submit() {
                avatarToUpload.post('/profile/avatar')
            }

            return { avatarToUpload, submit }
        },
    }
</script>
