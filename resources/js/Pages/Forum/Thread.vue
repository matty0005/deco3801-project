<template>
    <div class="bg-gray-100 m-5">

        <p> {{thread.user.name}} posted at {{(new Date(thread.user.created_at)).toString()}}</p>

        <h1 class="font-bold"> {{thread.title}} </h1>

        <p> {{thread.comment}} </p>

        <input v-model="msg" />

        <button @click="sendMsg"> Send Message </button>

        <div v-for="(message, index) in thread.messages" :key="index"> 
            {{message.message}} from {{message.user.name}} posted at {{(new Date(message.user.created_at)).toString()}}
        </div> 
    </div>
</template>

<script>

import axios from 'axios'

export default {
    props: ['thread'],

    data() {
        return {
            msg: '',
        }
    },

    mounted() {
        console.log(this.thread);
    },

    methods: {
        sendMsg() {
            axios.post('/forum/addthreadmessage', {
                thread_id: this.thread.id,
                message: this.msg,
            }).then(response => {
                this.msg = ''
            })
        },
    },
}
</script>