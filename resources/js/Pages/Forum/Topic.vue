<template>
    <div> 
        <button @click="addThread"> Add Thread </button>

        <input class="border-b-2 border-black" v-model="title" placeholder="title"/>
        <input class="border-b-2 border-black" v-model="comment" placeholder="comment"/>

        <div v-for="(thread, index) in topic.threads" :key="index"> 
            <Thread :thread="thread" />
        </div>
    </div>
</template>


<script>

import Thread from './Thread.vue'
import axios from 'axios'

export default {

    components: {  
        Thread,
    },

    props: ['topic'],

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

            axios.post('/forum/newthread', {
                title: this.title,
                comment: this.comment,
                thread_topic_id: this.topic.id,
            }).then(response => {
                this.title = ''
                this.comment = ''
            });
        }
    },
}
</script>