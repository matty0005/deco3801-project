<template>
    <Dashboard :topic="topic" :topics="topics" :threads="threads" :searched="searched"> 

        <div class="ml-5 mt-2 mb-4 text-sm text-gray-600 flex flex-row">
            <p @click="goToDashboard" class="cursor-pointer hover:underline hover:text-gray-800"> Community </p>
            <p>&nbsp;>>&nbsp;{{topic.title}} </p>
        </div>

        <div class="ml-5 flex flex-row text-gray-700">
            <div class="w-9/12">
                {{topic.desc}}
            </div>

            <div @click="modal = true" class="ml-auto shadow py-3 px-5 self-end rounded-xl bg-parent-300 hover:bg-parent-400"> New Post</div>
        </div>

        <ModalContainer @onConfirm="addThread" @onClose="modal = false" v-model="modal" :confirmText="'Make Post'">
            <div class="px-4 py-5 sm:p-6 text-left">
                <div>
                    <div class="my-2">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <div class="mt-1">
                            <input type="text" name="title" id="title"  v-model="title" placeholder="title" 
                                class="shadow-sm focus:ring-parent-500 focus:border-parent-500 block w-full sm:text-sm border-gray-300 rounded-md" 
                                :class="((errors.title || foul_title) ? ' border-red-400 ':'')"
                            >
                            <div class="text-xs text-red-400" v-show="errors.title"> Valid Title Required </div>
                            <div class="text-xs text-red-400" v-show="foul_title"> Foul Language Detected </div>
                        </div>
                    </div>
                    <div class="my-4">
                        <label for="comment" class="block text-sm font-medium text-gray-700">Comment</label>
                        <div class="mt-1">
                            <textarea type="text" name="comment" id="comment"  v-model="comment" 
                                placeholder="comment" class="h-64 shadow-sm focus:ring-parent-500 focus:border-parent-500 block w-full sm:text-sm border-gray-300 rounded-md" 
                                :class="((errors.comment || foul_comment) ? ' border-red-400 ':'')"
                            ></textarea>
                            <div class="text-xs text-red-400" v-show="errors.comment"> Valid Comment Required </div>
                            <div class="text-xs text-red-400" v-show="foul_comment"> Foul Language Detected </div>
                        </div>
                    </div>
                    <div class="flex flex-row my-4">
                        <div class="relative flex items-start">
                            <div class="flex items-center h-5">
                                <input v-model="doctors_only" id="comments" name="comments" type="checkbox" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300 rounded" />
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="comments" aria-describedby="comments-description" class="font-medium text-gray-700">Doctor Only Comments</label>
                                <p id="comments-description" class="text-gray-500 hidden lg:block">Only allow doctors to comment on your thread.</p>
                            </div>
                        </div>

                        <div class="relative flex items-start ml-10">
                            <div class="flex items-center h-5">
                                <input v-model="anonymous" id="anonymous" name="anonymous" type="checkbox" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300 rounded" />
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="anonymous" aria-describedby="anonymous-description" class="font-medium text-gray-700">Anonymous</label>
                                <p id="anonymous-description" class="text-gray-500 hidden lg:block">Remain Anonymous, nobody can see that you posted.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </ModalContainer>
    </Dashboard>
</template>


<script>
import Dashboard from './Dashboard.vue'
import Thread from './Thread.vue'
import ModalContainer from '@/Shared/ModalContainer'

export default {

    components: {  
        Dashboard,
        Thread,
        ModalContainer
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
            foul_title: false,
            foul_comment: false,
            modal: false,
        }
    },

    computed: {
        topic() {
            for (let topic of this.topics) {
                if (topic.title === this.thread_topic_title) {
                    return topic;
                }
            }

            return null;
        }
    },

    methods: {
        addThread() {

            var Filter = require('bad-words'),
                filter = new Filter();

            if (filter.isProfane(this.title)) {
                this.foul_title = true;
            } else {
                this.foul_title = false;
            }

            if (filter.isProfane(this.comment)) {
                this.foul_comment = true;
            } else {
                this.foul_comment = false;
            }

            if (!(this.foul_comment || this.foul_title)) {
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
        goToDashboard() {
            this.$inertia.visit(`/forum`)
        },
    },
}
</script>