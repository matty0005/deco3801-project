<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray">
            <div class="container mx-auto mt-12 bg-white rounded-xl shadow p-6 mb-12">

                <div class="flex flex-row">
                    <div class="flex flex-row cursor-pointer hover:underline" @click="this.$inertia.visit('/resources')"> 
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg>

                        <p class="text-sm font-medium text-gray-600 self-center">Resources</p>
                    </div>
                    
                    <LikeBar class="ml-auto" :id="resource.id" :likes="resource.likes" :status="resource.liked" />
                </div>

                <p class="text-2xl font-semibold text-gray-700 sm:text-3xl text-center mt-4 sm:mt-0">
                    {{resource.title}}
                </p>
                <div class="text-base md:text-lg lg:text-xl text-gray-700 text-justify mt-4" v-html="resource.content">
                </div>
            </div>
    </Layout>
</template>

<script>
import Layout from '@/Layouts/AppLayout'
import LikeBar from './LikeBar'

export default {
    components: {
        Layout,
        LikeBar,
    },

    props: {
        resource: Object,
    }
}
</script>