<template>
    <div @click="visitThread" class="bg-white overflow-hidden shadow rounded-lg hover:bg-gray-50 cursor-pointer">
        <div class="px-4 py-5 sm:p-6">
            <div class="m-3">


                <div class="font-bold text-gray-700 text-xl mb-2 flex flex-row"> 
                    <p> {{thread.title}} </p>

                    <p class="ml-auto" v-if="thread.thread_topic_title"> posted in {{thread.thread_topic_title}} </p>
                </div>
                <div class="border-2 border-parent-300 rounded-md p-4 mb-6">
                    <div class="font-bold text-parent-600">
                        {{thread.name}} <span class="text-sm mb-4 ">posted at {{(new Date(thread.created_at)).toDateString()}}</span>
                    </div>
                     <div class="mt-2 mb-2 ml-4">
                        {{thread.comment}}
                    </div>
                </div>
                
                {{thread.count}} total comments

            </div>
        </div>
    </div>

</template>

<script>

import axios from 'axios'

export default {
    props: ['thread'],

    methods: {
        visitThread() {
            this.$inertia.visit(`/forum/thread/${this.thread.id}`)
        },
    }
}
</script>