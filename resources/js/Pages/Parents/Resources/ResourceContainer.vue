<template>
    <div @click="visitResource" class="bg-white overflow-hidden" 
        :class="clickable ? ' hover:bg-gray-50 cursor-pointer ':''"
        >
        <div class="border border-l-0 border-r-0 border-b-0 border-gray-300 px-4 pt-2 sm:px-6">
            <div class="m-3">

                <p class="font-medium text-gray-700">
                    {{resource.title}}
                </p>   

                <LikeBar class="ml-auto text-gray-500" 
                        :likes="resource.likes"
                        :status="resource.liked" :id="resource.id" 
                        :disabled="true" 
                        @disabled="visitResource"/>         
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
        'resource': Object,
        'clickable': {
            type: Boolean,
            default: true,
        },
    },

    methods: {
        visitResource() {
            if (!this.clickable) {
                return;
            }

            this.$inertia.visit(`/resources/${this.resource.id}`)
        },
    },
}
</script>