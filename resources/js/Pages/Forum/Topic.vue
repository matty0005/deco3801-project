<template>
    <Dashboard :topics="topics" :threads="threads"> 
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div>
                    <div class="my-2">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <div class="mt-1">
                            <input type="text" name="title" id="title"  v-model="title" placeholder="title" 
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" 
                            >
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="comment" class="block text-sm font-medium text-gray-700">Comment</label>
                        <div class="mt-1">
                            <input type="text" name="comment" id="comment"  v-model="comment" 
                                placeholder="comment" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" 
                            >
                        </div>
                    </div>
                </div>
                <div class="flex flex-row-reverse">
                    <button class="bg-parent-200 text   -parent-800 py-2 px-4 rounded-md my-4" @click="addThread"> Add Thread </button>
                </div>
            </div>
        </div>
    </Dashboard>
</template>


<script>
import Dashboard from './Dashboard.vue'
import Thread from './Thread.vue'

export default {

    components: {  
        Dashboard,
        Thread,
    },

    props: {
        threads: Array,
        topics: Array,
        thread_topic_title: String,
    },

    data() {
        return {
            title: '',
            comment: '',
        }
    },

    methods: {
        addThread() {
            
            if (this.title == '' || this.comment == '') {
                return;
            }
            
            this.$inertia.post('/forum/newthread', {
                title: this.title,
                comment: this.comment,
                thread_topic_title: this.thread_topic_title
            });

            this.title = '';
            this.comment = '';
            
        }
    },
}
</script>