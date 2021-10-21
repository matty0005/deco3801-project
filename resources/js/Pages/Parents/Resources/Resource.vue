<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray">
            <div class="container mx-auto mt-12 bg-white rounded-xl shadow p-6 mb-12">

                <div class="flex flex-row">
                    <div class="flex flex-row cursor-pointer hover:underline" @click="this.$inertia.visit('/resources')"> 
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
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