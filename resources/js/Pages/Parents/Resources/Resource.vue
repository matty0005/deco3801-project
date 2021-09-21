<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray min-h-screen ">
        <div class="container mx-auto mt-12 bg-white rounded-xl shadow p-6">

            <div class="flex flex-row cursor-pointer" @click="this.$inertia.visit('/resources')"> 
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg>

                <p class="text-sm font-medium text-gray-600 self-center"> Resources </p>
            </div>

            <p class="text-3xl font-bold text-gray-900 sm:text-3xl text-center">{{resource.title}}</p>
            <p class="text-xl font-medium text-gray-600 text-justify mt-4"> {{resource.content}} </p>
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
        resource: Object,
    }
}
</script>