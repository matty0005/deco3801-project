<template>
    <div @click="visitThread" class="bg-white overflow-hidden shadow rounded-lg" 
        :class="clickable ? ' hover:bg-gray-50 cursor-pointer ':''"
        >
        <div class="px-4 py-5 sm:p-6">
            <div class="m-3">


                <div class="font-bold text-gray-700 text-xl mb-2 flex flex-row"> 
                    <p> {{thread.title}} </p>

                    <p class="ml-auto" v-if="thread.topic_on_dashboard"> posted in {{thread.topic_on_dashboard}} </p>
                </div>
                <div class="border-2 border-parent-300 rounded-md p-4 mb-6">
                    <div class="font-bold text-parent-600 flex flex-row">

                        <img class="rounded-lg mr-3 h-16 w-16" :src="thread.avatar"/>

                        <div> {{thread.display_name}} <span class="text-sm mb-4 ">posted at {{time}}</span></div>
                    </div>
                     <div class="mt-2 mb-2 ml-4">
                        {{thread.comment}}
                    </div>
                </div>
                
                <p v-if="thread.count >= 0"> {{thread.count}} total comments </p>

                <LikeBar :likes="thread.likes" :dislikes="thread.dislikes" :status="thread.liked" :id="thread.id" :isThread="true" />

                <slot/>

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

    computed:  {
        time() {
            if (this.thread && this.thread.created_at) {

                var raw = new Date(this.thread.created_at);

                var rawHours = raw.getHours();
                var hours = rawHours < 10 ? "0" + rawHours : rawHours;

                var rawMinutes = raw.getMinutes();
                var minutes = rawMinutes < 10 ? "0" + rawMinutes : rawMinutes;

                return hours + ":" + minutes + " " + raw.toDateString();
            }
            return "";
        },
    }
}
</script>