<template>
    <div @click="visitThread" class="bg-white overflow-hidden shadow" 
        :class="clickable ? ' hover:bg-gray-50 cursor-pointer ':''"
        >
        <div class="px-2 py-1">
            <div class="m-3">


                <div class="mb-2 flex flex-row"> 
                    <img v-if="!thread.anonymous" class="rounded-full mr-3 h-8 w-8" :src="thread.avatar"/>
                    <img v-else class="rounded-full mr-3 h-8 w-8" src="/images/default_avatar.png"/>
                    <p class="text-sm sm:text-base text-gray-700"> {{thread.title}} </p>

                    <p class="ml-auto text-sm sm:text-base text-gray-400" v-if="thread.topic_on_dashboard"> posted in {{thread.topic_on_dashboard}} </p>
                </div>
                
                <div class="flex flex-row"> 
                    <p class="text-sm sm:text-base text-gray-500" v-if="thread.count >= 0"> {{thread.count}} total comments </p>

                    <LikeBar class="ml-auto text-gray-500" 
                        :likes="thread.likes" :dislikes="thread.dislikes" 
                        :status="thread.liked" :id="thread.id" 
                        :isThread="true" :disabled="true" 
                        @disabled="visitThread"/>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

import LikeBar from './LikeBar.vue'

export default {

    components: {
        LikeBar,
    },

    props: {
        'thread': Object,
        'clickable': {
            type: Boolean,
            default: true,
        },
    },

    methods: {
        visitThread() {
            if (!this.clickable) {
                return;
            }

            this.$inertia.visit(`/forum/topic/${this.thread.thread_topic_title}/${this.thread.id}`)
        },
    },
}
</script>