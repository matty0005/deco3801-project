<template>
    <Dashboard :topics="topics">
        <Thread v-if="thread" :thread="thread" :clickable="false">
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
                <div class="font-bold flex flex-row">
                    
                    <img class="rounded-lg mr-3" :src="message.avatar" />

                    <div>{{message.display_name}} <span class="text-sm mb-4 text-gray-600">posted at {{time(message)}}</span></div>
                </div>
                <div class="mt-2 mb-6 ml-10">
                    {{message.message}}
                </div>
                <LikeBar @like="likeMessage(message.id,1)" @dislike="likeMessage(message.id,2)" :likes="message.likes" :dislikes="message.dislikes"/>
            </div> 
        </Thread>
    </Dashboard>
</template>

<script>

import Dashboard from './Dashboard.vue'
import Thread from './Thread.vue'
import LikeBar from './LikeBar.vue'

export default {

    components: {
        Dashboard,
        Thread,
        LikeBar,
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

        likeMessage(messageId, likeStatus) {
            axios.post('/forum/likethreadmessage', {
                thread_message_id: messageId,
                liked: likeStatus,
            })
        },

        sendMsg() {
            this.$inertia.post('/forum/addthreadmessage', {
                thread_id: this.thread.id,
                message: this.msg,
            })

            this.msg = '';
        },

        time(obj) {
            if (obj && obj.created_at) {

                var raw = new Date(obj.created_at);

                var rawHours = raw.getHours();
                var hours = rawHours < 10 ? "0" + rawHours : rawHours;

                var rawMinutes = raw.getMinutes();
                var minutes = rawMinutes < 10 ? "0" + rawMinutes : rawMinutes;

                return hours + ":" + minutes + " " + raw.toDateString();
            }
            return "";
        },
    },
}
</script>