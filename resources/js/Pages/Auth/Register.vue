<template>
    <div class="min-h-screen bg-white flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
                <img class="h-12 w-auto" src="/images/logo.svg" alt="Workflow">
                <h2  v-on:click="registerMe" class="mt-6 text-3xl font-extrabold text-gray-900">
                Register
                </h2>
            </div>
            <Warning />

            <div class="mt-8">


                <div class="mt-6">
                <form  @submit.prevent="submit" class="space-y-6">
                    <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">
                        Name
                    </label>
                    <div class="mt-1">
                        <input id="name" name="name" type="text" autocomplete="name" v-model="form.name" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                    </div>
                    </div>

                    <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email address
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" v-model="form.email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                    </div>
                        <div v-if="errors.email" class="mt-1 text-red-500 text-xs">{{ errors.email }}</div>

                    </div>

                    <div class="space-y-1">
                    <label for="password" class="block text-sm font-medium text-gray-700" >
                        Password
                    </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" v-model="form.password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                    </div>
                        <div v-if="errors.password" class="mt-1 text-red-500 text-xs">{{ errors.password }}</div>

                    </div>

                    <div class="space-y-1">
                    <label for="password" class="block text-sm font-medium text-gray-700" >
                        Confirm Password
                    </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" v-model="form.password_confirmation" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                    </div>
                        <div v-if="errors.password_confirmation" class="mt-1 text-red-500 text-xs">{{ errors.password_confirmation }}</div>

                    </div>

                  
                    <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-parent-600 hover:bg-parent-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-500">
                        Register
                    </button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1">
            <img class="absolute inset-0 h-full w-full object-cover" src="/images/login_background.jpg" alt="">
        </div>
    </div>
</template>

<script>
    import BreezeButton from '@/Components/Button'
    import BreezeGuestLayout from '@/Layouts/Guest'
    import BreezeInput from '@/Components/Input'
    import BreezeLabel from '@/Components/Label'
    import BreezeValidationErrors from '@/Components/ValidationErrors'
    import Warning from "@/Shared/Warning"

    export default {
        // layout: BreezeGuestLayout,

        components: {
            BreezeButton,
            BreezeInput,
            BreezeLabel,
            BreezeValidationErrors,
            Warning
        },
        props: {
            errors: Object
        },

        data() {
            return {
                form: this.$inertia.form({
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    terms: false,
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('register'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }
        }
    }
</script>
