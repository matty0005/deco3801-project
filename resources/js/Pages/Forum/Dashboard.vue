<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray">
        <div v-if="topics" class="py-12">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class=" ">
                    <div class="bg-white overflow-visible shadow rounded-lg relative">
                        <div class="px-4 pt-2 sm:pt-5 sm:p-6 sm:pb-0  flex flex-col">
                            <div class="flex flex-col justify-start sm:flex-row">
                                <div class="px-2 sm:px-4 pt-4 pb-2 text-3xl font-semibold">
                                    <p class="text-sm text-gray-400 pb-2" v-if="topic">Most Recent in:</p>
                                    <p class="text-gray-700" v-if="topic">{{topic.title}}</p>
                                    <p class="text-gray-700" v-else>Community</p>
                                </div>

                                <div class="px-2 sm:px-4 sm:p-2 self-start sm:self-center sm:ml-auto flex flex-col relative w-full sm:w-8/12">
                                    <input v-model="searchText" class="text-sm sm:text-base border-2 border-parent-500 rounded-md py-2 w-full mx-0 lg:mx-auto px-2 mb-2 outline-none focus:ring-1 sm:focus:ring-2 mt-1 focus:ring-parent-600" :placeholder="searchPlaceholder" />

                                    <div class="shadow-sm absolute z-50 top-12 left-1/2 transform  -translate-x-1/2 w-full mx-auto  rounded-md rounded-t-none">
                                        <div class="border border-l-0 border-r-0 border-t-0 border-gray-200" v-for="(thread, index) in searched" :key="index" :value="thread"> 
                                            <ThreadSearched :thread="thread" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <slot>
                                <div class="px-2 sm:px-4 mt-2 mb-4 text-sm text-gray-500">
                                    Share experiences and discuss mental health issues with other parents in our friendly community forum.
                                </div>

                                <div class="w-full grid grid-cols-2 ">
                                    <div v-for="(topic, index) in topics" :key="index"
                                        @click="changeTopic(topic.title)"
                                        class="py-4 hover:bg-gray-100 flex flex-row cursor-pointer border-b border-gray-300 pl-6 sm:pl-8"
                                        :class="(index % 2 == 0 ? ' border-l-0 border-r -ml-4 sm:-ml-6 ':' border-r-0  -mr-4 sm:-mr-6 ').concat(
                                        index == 0 || index == 1 ? ' border-t ':'')">
                                        <img class="hidden sm:block h-12 w-12 self-center" :src="topic.icon">
                                        <div class="self-center sm:ml-10"> 
                                            <div class="font-medium text-gray-700 text-lg sm:text-xl md:text-2xl"> 
                                                {{topic.title}}
                                            </div>
                                            <div class="text-xs sm:text-sm text-gray-600 pr-4"> 
                                                {{topic.short_description}}
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </slot>
                        </div>
                    </div>

                    <div v-if="topic && threads.length == 0" class="text-sm sm:text-base w-full bg-white px-5 py-1 text-gray-500 py-16 rounded my-4 text-center">
                        There are currently no posts in {{topic.title}}.
                    </div>
                   
                    <div class="pt-4"  v-for="(thread, index) in threads" :key="index" :value="thread"> 
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
            topic: Object,
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

                    if (this.searchText == '' ||  this.searchText == null) {
                        searchParams.delete('search')
                    } 

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
                    return 'Search threads...';
                }

                return 'Search threads in ' + this.currentTopic + '...';
            }
        }
    }
</script>
