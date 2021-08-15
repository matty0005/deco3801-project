<template>
    <Dashboard :topics="topics">
        <div v-if="thread" class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="m-3">


                    <div class="font-bold text-gray-700 text-xl mb-2"> {{thread.title}} </div>
                    <div class="border-2 border-parent-300 rounded-md p-4 mb-6">
                        <div class="font-bold text-parent-600">
                            {{thread.display_name}} <span class="text-sm mb-4 ">posted at {{(new Date(thread.created_at)).toDateString()}}</span>
                        </div>
                        <div class="mt-2 mb-2 ml-4">
                            {{thread.comment}}
                        </div>
                    </div>

                    <div class="flex flex-row my-4 ">
                        <div class="flex-grow">
                            <label for="message" class="block text-sm font-medium text-gray-700">Reply</label>
                            <div class="mt-1">
                                <input type="text" v-model="msg" name="message" id="message" class="shadow-sm focus:ring-parent-500 focus:border-parent-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="message">
                            </div>
                        </div>

                        <button class="bg-parent-300 hover:bg-parent-400 rounded-md px-8 py-2 mt-6  text-sm mx-8" @click="sendMsg">Reply </button>
                    </div>
                    
                    <div v-for="(message, index) in messages" :key="index"> 
                        <div class="font-bold">
                            {{message.display_name}} <span class="text-sm mb-4 text-gray-600">posted at {{(new Date(message.created_at)).toDateString()}}</span>
                        </div>
                        <div class="mt-2 mb-6 ml-4">
                            {{message.message}}
                        </div>
                    </div> 

                </div>
            </div>
        </div>
    </Dashboard>
</template>

<script>

import Dashboard from './Dashboard.vue'

export default {

    components: {
        Dashboard,
    },

    props: {
        thread: Object,
        messages: Array,
        topics: Array,
    },

    data() {
        return {
            msg: '',
        }
    },

    methods: {
        sendMsg() {
            this.$inertia.post('/forum/addthreadmessage', {
                thread_id: this.thread.id,
                message: this.msg,
            })

            this.msg = '';
        },
    },
}
</script>