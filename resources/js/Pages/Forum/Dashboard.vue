<template>
    <Layout class="bg-gray-100 min-h-screen">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-3xl">
                       Forums
                    </div>
                    
                    <div class="flex flex-row">
                        <div class="mx-2" v-for="(topic, index) in topics" :key="index" :value="topic">
                            <button @click="selectedTopic = topic"> {{topic.title}} </button>
                        </div>
                    </div>

                    <Topic v-if="selectedTopic.id" :topic="selectedTopic" />
                    
                    <div v-else v-for="(thread, index) in threads" :key="index" :value="thread"> 
                        <Thread :thread="thread" />
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
    import Layout from '@/Layouts/AppLayout'
    import Topic from './Topic.vue'
    import Thread from './Thread.vue'

    import axios from 'axios'

    export default {
        components: {
            Layout,
            Topic,
            Thread,
        },

        data() {
            return {
                topics: [],
                selectedTopic: [],
                threads: [],
            }
        },

        mounted() {
            this.getTopics();
            this.getThreads();
        },

        methods: {
            getTopics() {
                axios.get('/forum/gettopics').then(response => {
                    this.topics = response.data;
                });
            },

            getThreads() {
                axios.get('/forum/getthreads').then(response => {
                    this.threads = response.data;
                });
            }
        },
    }
</script>
