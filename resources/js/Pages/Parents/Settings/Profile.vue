<template>
    <Layout class="bg-blueGray-100" >
        <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Forum Information</h3>
                        <p class="mt-1 text-sm text-gray-500">Here you can configure your preferences for the forum.</p>
                    </div>

                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <Textfield label="Display name" v-model="display_name" :error="errors.display_name"/>
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
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Email Address</h3>
                        <p class="mt-1 text-sm text-gray-500">Here is where you can update your email address</p>
                    </div>

                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-4">
                            <Textfield label="Email Address" v-model="email_address" :error="errors.email_address"/>
                        
                        </div>
                    </div>
                    </div>
    
                </div>

                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-500">Use a permanent address where you can recieve mail.</p>
                    </div>

                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <Textfield label="First name" v-model="address.first_name" :error="errors.address"/>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <Textfield label="Last name" v-model="address.last_name" />
                        </div>


                        <div class="col-span-6">
                            <Textfield label="Street Address" v-model="address.street_address" />

                        </div>

                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <Textfield label="City" v-model="address.city" />
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                            <Textfield label="State" v-model="address.state" />
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                            <Textfield label="Postcode" v-model="address.postcode" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                        <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>
                        <select id="country" name="country" v-model="address.country" autocomplete="country" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                            <option v-for="country in countries" :key="country.id">{{ country.name }}</option>
                        </select>
                        </div>
                    </div>
                    </div>
        
                </div>

               
                <div class="flex flex-row-reverse mx-4 lg:mx-0">
                    <button v-on:click="submitData" type="submit" class="bg-parent-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-parent-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-600">
                        Save
                    </button>
                </div>
            </div>
    </Layout>
</template>

<script>
    import Layout from '@/Layouts/SettingsLayout'
    import { useForm } from '@inertiajs/inertia-vue3'
    import Textfield from "@/Shared/Textfield.vue"

    export default {
        components: {
            Layout,
            Textfield
        },
        props: {
            displayName: String,
            countries:Array,
            addressInformation: Object,
            emailAddress: String,
            errors: Object
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
                console.log("ADDR", this.address)
                this.$inertia.post('/account',{
                    'display_name': this.display_name,
                    'perosnal_info': JSON.stringify(this.address),
                    'email_address': this.email_address
                })
            },
        },
        data: () => {
            return {
                newAvatar: null,
                display_name: "",
                address: {
                    country: 'Australia',
                    first_name: '',
                    last_name: '',
                    street_address: '',
                    city: '',
                    state: '',
                    postcode: ''
                },
                email_address: ''
            }
        },
        mounted () {
            this.display_name = this.displayName
            this.email_address = this.emailAddress

            if (this.addressInformation == null) {
                return
            }

            var addr = JSON.parse(this.addressInformation)
            
            if (addr == null) {
                return
            }

            if (addr.country != null) {
                this.address.country = addr.country
            }
            if (addr.first_name != null) {
                this.address.first_name = addr.first_name
            }
            if (addr.last_name != null) {
                this.address.last_name = addr.last_name
            }
            if (addr.street_address != null) {
                this.address.street_address = addr.street_address
            }
            if (addr.city != null) {
                this.address.city = addr.city
            }
            if (addr.state != null) {
                this.address.state = addr.state
            }
            if (addr.postcode != null) {
                this.address.postcode = addr.postcode
            }


        },
        setup () {
            const avatarToUpload = useForm({
                avatar: null,
                displayName: null
            })

            function submit() {
                avatarToUpload.post('/account/avatar')
            }

            return { avatarToUpload, submit }
        },
    }
</script>
