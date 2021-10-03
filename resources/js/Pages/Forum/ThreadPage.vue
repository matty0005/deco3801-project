<template>
    <Dashboard :topics="topics" :searched="searched">
        <Thread v-if="thread" :thread="thread" :clickable="false">
            <div v-if="!thread.doctors_only || this.$page.props.auth.user.is_doctor" class="flex flex-row my-4 ">
                <div class="flex-grow">
                    <label for="message" class="block text-sm font-medium text-gray-700">Reply</label>
                    <div class="mt-1">
                        <textarea type="text" v-model="msg" name="message" id="message" 
                            class="shadow-sm h-36 focus:ring-parent-500 focus:border-parent-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="message"
                            :class="((errors.message || foul_language) ? ' border-red-400 ':'')"
                        ></textarea>
                        <div v-show="errors.message" class="text-xs text-red-400"> Valid Message Required </div>
                        <div v-show="foul_language" class="text-xs text-red-400"> Foul Language Detected </div>
                    </div>
                </div>

                <button class="bg-parent-300 hover:bg-parent-400 text-parent-800 rounded-md h-10 px-8 py-2 mt-6  text-sm mx-8" 
                    @click="sendMsg"
                    > Reply 
                </button>
            </div>
            <div v-else class="my-4">

            </div>
            <hr class="my-8"/>
            <div v-for="(message, index) in messages" :key="index"> 
                <div class="font-bold flex flex-row mb-2">
                    
                    <div>
                        <img class="rounded-lg mr-3 h-12 w-12" :src="message.avatar" />
                        <LikeBar :likes="message.likes" :dislikes="message.dislikes" :status="message.liked" :isThread="false" :id="message.id" />
                    </div>

                    <div>
                        <div>{{message.display_name}} <span class="text-sm mb-4 text-gray-600">posted at {{time(message)}}</span></div>
                        <div class="mt-2 mb-6 ml-10 font-normal">
                            {{message.message}}
                        </div>
                    </div>
                </div>
                
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
        errors: Object,
        searched: Array,
    },

    data() {
        return {
            msg: '',
            foul_language: false,
        }
    },

    methods: {

        sendMsg() {

            var Filter = require('bad-words'),
                filter = new Filter();

            if (filter.clean(this.msg) === this.msg) {
                
                this.foul_language = false;

                this.$inertia.post('/forum/addthreadmessage', {
                    thread_id: this.thread.id,
                    message: this.msg,
                }, {
                    preserveScroll: true,
                    onFinish: () => {
                        if (!this.errors.message) {
                            this.msg = '';
                        }
                    },
                })
            } else {
                this.foul_language = true;
            }
            
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