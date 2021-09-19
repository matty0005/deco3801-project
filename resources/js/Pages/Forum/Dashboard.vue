<template>
    <Layout class="bg-gray-100 min-h-screen">
        <div v-if="topics" class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="mb-4 flex flex-col relative">
                        <input v-model="searchText" class="rounded-md w-1/2 mx-auto px-2" :placeholder="searchPlaceholder" />

                        <div class="shadow-xl absolute z-90 top-6 left-1/2 transform -translate-x-1/2 w-1/2 mx-auto bg-gray-300 rounded-md rounded-t-none">
                            <div class="mt-1" v-for="(thread, index) in searched" :key="index" :value="thread"> 
                                <ThreadSearched :thread="thread" />
                            </div>
                        </div>
                        
                    </div>

                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6 flex flex-col">
                            <div class="p-6 text-3xl" @click="goToDashboard">
                                Forums
                            </div>
                            
                            <div class="hidden lg:flex lg:flex-row lg:flex-wrap ">
                                <div v-for="(topic, index) in topics" :key="index" 
                                    @click="changeTopic(topic.title)" 
                                    class="mx-2 my-2 py-2 px-8 rounded-md" 
                                    :class="isOnPage(topic.title) ? 'bg-parent-300':'bg-parent-100'"  
                                    :value="topic"
                                    >

                                    <button> {{topic.title}} </button>
                                </div>
                            </div>

                            <div class="ml-auto relative inline-block text-left lg:hidden">
                                <div>
                                    <button @click="dropdown = !dropdown" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-parent-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    <div v-if="currentTopic" >{{currentTopic}}</div>
                                    <div v-else>Topics</div>
                                    
                                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                    </button>
                                </div>

                                <div v-if="dropdown" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                    <div class="py-1" role="none">
                                    <a @click="changeTopic(topic.title)" v-for="(topic, index) in topics" :key="index" href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" :id="'menu-item-' + index">{{topic.title}}</a>
                                    </div>
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
                dropdown: false,
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
            },
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

        computed: {
            currentTopic() {
                var ver = 2
                var currentUrl = window.location.pathname.split("/").filter(t => t)[ver]
                return currentUrl;
            },

            searchPlaceholder() {
            
                if (this.currentTopic === undefined) {
                    return 'Search Threads';
                }

                return 'Search Threads in ' + this.currentTopic;
            }
        }
    }
</script>
