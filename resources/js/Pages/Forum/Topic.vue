<template>
    <Dashboard :topics="topics" :threads="threads" :searched="searched"> 
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div>
                    <div class="my-2">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <div class="mt-1">
                            <input type="text" name="title" id="title"  v-model="title" placeholder="title" 
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" 
                                :class="(errors.title ? ' border-red-400 ':'')"
                            >
                            <div class="text-xs text-red-400" v-show="errors.title"> Valid Title Required </div>
                        </div>
                    </div>
                    <div class="my-4">
                        <label for="comment" class="block text-sm font-medium text-gray-700">Comment</label>
                        <div class="mt-1">
                            <textarea type="text" name="comment" id="comment"  v-model="comment" 
                                placeholder="comment" class="h-64 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" 
                                :class="(errors.comment ? ' border-red-400 ':'')"
                            ></textarea>
                            <div class="text-xs text-red-400" v-show="errors.comment"> Valid Comment Required </div>
                        </div>
                    </div>
                    <div class="flex flex-row my-4">
                        <div class="relative flex items-start">
                            <div class="flex items-center h-5">
                                <input v-model="doctors_only" id="comments" name="comments" type="checkbox" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300 rounded" />
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="comments" aria-describedby="comments-description" class="font-medium text-gray-700">Doctor Only Comments</label>
                                <p id="comments-description" class="text-gray-500">Only allow doctors to comment on your thread.</p>
                            </div>
                        </div>

                        <div class="relative flex items-start ml-10">
                            <div class="flex items-center h-5">
                                <input v-model="anonymous" id="anonymous" name="anonymous" type="checkbox" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300 rounded" />
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="anonymous" aria-describedby="anonymous-description" class="font-medium text-gray-700">Anonymous</label>
                                <p id="anonymous-description" class="text-gray-500">Remain Anonymous, nobody can see that you posted.</p>
                            </div>
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
        searched: Array,
        thread_topic_title: String,
        errors: Object,
    },

    data() {
        return {
            title: '',
            comment: '',
            doctors_only: false,
            anonymous: false,
        }
    },

    methods: {
        addThread() {
            this.$inertia.post('/forum/newthread', {
                title: this.title,
                comment: this.comment,
                thread_topic_title: this.thread_topic_title,
                doctors_only: this.doctors_only,
                anonymous: this.anonymous,
            }, {
                preserveScroll: true,
                onFinish: () =>  {
                    if (!this.errors.title && !this.errors.comment) {
                        this.title = '';
                        this.comment = '';
                    }
                },
            });
        }
    },
}
</script>