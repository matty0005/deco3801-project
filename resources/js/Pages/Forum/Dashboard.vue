<template>
    <Layout class="bg-gray-100 min-h-screen">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-3xl">
                       Forums
                    </div>
                    
                    <button @click="getThreads"> Get Threads </button>
                    <button @click="addThread"> Add Thread </button>

                    <input class="border-b-2 border-black" v-model="title" placeholder="title"/>
                    <input class="border-b-2 border-black" v-model="comment" placeholder="comment"/>

                    <div v-for="(thread, index) in threads" :key="index"> 
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

    import axios from 'axios'

    export default {
        components: {
            Layout,
            Thread,
        },

        data() {
            return {
                threads: [],
                title: '',
                comment: '',
            }
        },

        methods: {
            getThreads() {
                axios.get('/forum/getthreads').then(response => {
                    this.threads = response.data;
                });
            },

            addThread() {
                
                if (this.title == '' || this.comment == '') {
                    return;
                }

                axios.post('/forum/newthread', {
                    title: this.title,
                    comment: this.comment,
                }).then(response => {
                    this.title = ''
                    this.comment = ''
                });
            }
        },


    }
</script>
