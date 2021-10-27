<template>
    <div @click="visitThread" class="bg-white overflow-hidden shadow rounded-lg" 
        :class="clickable ? ' hover:bg-gray-50 cursor-pointer ':''"
        >
        <div class="px-4 py-5 sm:p-6">
            <div class="m-3">
                <slot name="header" />
                
                <InlineAlert class="mb-4" v-if="thread.approved == 0" title="Awaiting Approval" body="To uphold the community standards of this forum, this post will be first moderated before becoming visible to the broader community"/>

                <div class="font-medium text-gray-700 text-base sm:text-lg md:text-xl mb-2 flex flex-col md:flex-row gap-x-2"> 
                    <p> {{thread.title}} </p>

                    <p class="md:ml-auto text-xs md:text-base text-gray-400" v-if="thread.topic_on_dashboard"> posted in {{thread.topic_on_dashboard}} </p>
                </div>
                <div class="border-2 border-parent-300 rounded-md p-4 mb-6">
                    <div v-if="!thread.anonymous" class="font-bold text-parent-600 flex flex-row">

                        <img class="rounded-full mr-3 h-14 w-14 sm:h-16 sm:w-16" :src="thread.avatar"/>

                        <div class="text-sm sm:text-base">
                            {{thread.display_name}} 
                            <span class="text-xs sm:text-sm mb-4 ">
                                posted at {{time}}
                            </span>
                        </div>
                    </div>
                    <div v-else class="font-bold text-parent-600 flex flex-row">
                        <img class="rounded-lg mr-3 h-14 w-14 sm:h-16 sm:w-16" src="/images/default_avatar.png"/>

                        <div class="text-sm sm:text-base"> 
                            Anonymous 
                            <span class="text-xs sm:text-sm mb-4 ">
                                posted at {{time}}
                            </span>
                        </div>
                    </div>
                     <div class="mt-2 mb-2 ml-4 text-sm sm:text-base text-gray-600">
                        {{thread.comment}}
                    </div>
                </div>
                <div class="flex flex-row flex-start gap-x-4 -mb-2">
                    <LikeBar :likes="thread.likes" :dislikes="thread.dislikes" :status="thread.liked" :id="thread.id" :isThread="true" />
                    <div class="flex">
                        <p class="text-gray-700" v-if="thread.count >= 0">{{thread.count}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                    </div>                
                </div>
                <slot/>

            </div>
        </div>
    </div>

</template>

<script>

import LikeBar from './LikeBar.vue'
import InlineAlert from "@/Shared/InlineAlert"

export default {

    components: {
        LikeBar,
        InlineAlert
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

                var raw = new Date(this.thread.created_at.replace(' ', 'T'));

                return raw.toLocaleTimeString().split(":")[0] + ":" + 
                    raw.toLocaleTimeString().split(":")[1] + " " + raw.toDateString();
            }
            return "";
        },
    }
}
</script>