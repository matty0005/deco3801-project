<template>
    <Layout class="bg-gray-100 min-h-screen">
        <div v-if="topics" class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="mb-4 flex flex-col">
                        <input v-model="searchText" class="rounded-md w-1/2 mx-auto px-2" placeholder="Search Threads" />

                        <div class="w-1/2 mx-auto bg-gray-300 rounded-md rounded-t-none">
                            <div class="mt-1" v-for="(thread, index) in searched" :key="index" :value="thread"> 
                                <ThreadSearched :thread="thread" />
                            </div>
                        </div>
                        
                    </div>

                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                             <div class="p-6 text-3xl" @click="goToDashboard">
                                Forums
                            </div>
                            
                            <div class="flex flex-row">
                                <div v-for="(topic, index) in topics" :key="index" 
                                    @click="changeTopic(topic.title)" 
                                    class="mx-2 my-2 py-2 px-8 rounded-md" 
                                    :class="isOnPage(topic.title) ? 'bg-parent-300':'bg-parent-100'"  
                                    :value="topic"
                                    >

                                    <button> {{topic.title}} </button>
                                </div>
                            </div>
                        </div>

                        <slot />
                    </div>
                   
                    <div class="mt-6" v-for="(thread, index) in threads" :key="index" :value="thread"> 
                        <Thread :thread="thread" />
                    </div>
                </div>
                    
            </div>
        </div>

    </Layout>
</template>

<script>
    import Layout from '@/Layouts/AppLayout'
    import Thread from './Thread.vue'
    import ThreadSearched from './ThreadSearched.vue'

    export default {

        components: {
            Layout,
            Thread,
            ThreadSearched,
        },

        props: {
            threads: Array,
            topics: Array,
            searched: Array,
        },
        
        data() {
            return {
                searchText: '',
            }
        },

        watch: {
            searchText() {
                if ('URLSearchParams' in window) {
                    var searchParams = new URLSearchParams(window.location.search);
                    searchParams.set("search", this.searchText);
                    var newRelativePathQuery = window.location.pathname + '?' + searchParams.toString();
                    history.pushState(null, '', newRelativePathQuery);
                    this.$inertia.reload({ only: ['searched'] })
                }
            }
        },

        methods: {
            goToDashboard() {
                this.$inertia.visit(`/forum`)
            },

            changeTopic(topic) {
                this.$inertia.visit(`/forum/topic/${topic}`)
            },
            
            isOnPage (url) {
                var ver = 2
                // var urlMod = url.split("/").filter(l => l)[ver]
                var currentUrl = window.location.pathname.split("/").filter(t => t)[ver]
                return url === currentUrl
            },
        },
    }
</script>
