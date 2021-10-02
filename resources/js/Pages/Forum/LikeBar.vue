<template>
    <div class="flex flex-row text-gray-700 mt-3">
        
        {{likes}}

        <svg :class="(status == 1 ? ' text-blue-500 ':'')" @click.stop="like(1)" class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
    
        <!-- {{dislikes}}

        <svg :class="(status == 2 ? ' text-red-500 ':'')" @click.stop="like(2)" class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14H5.236a2 2 0 01-1.789-2.894l3.5-7A2 2 0 018.736 3h4.018a2 2 0 01.485.06l3.76.94m-7 10v5a2 2 0 002 2h.096c.5 0 .905-.405.905-.904 0-.715.211-1.413.608-2.008L17 13V4m-7 10h2m5-10h2a2 2 0 012 2v6a2 2 0 01-2 2h-2.5"></path></svg> -->
    </div>
</template>


<script>
export default {
    props: {
        likes: Number,
        dislikes: Number,
        status: Number,
        isThread: Boolean,
        id: Number,
        disabled: {
            type: Boolean,
            default: false,
        }
    }, 
    
    methods: {
        like(likeStatus) {
            
            if (this.disabled) {
                this.$emit('disabled');
                return;
            }

            var update = likeStatus;
            if (likeStatus == this.status) {
                update = 0;
            }

            if (this.isThread) {
                this.$inertia.post('/forum/likethread', {
                    thread_id: this.id,
                    liked: update,
                }, {
                    preserveScroll: true,
                })
            } else {
                this.$inertia.post('/forum/likethreadmessage', {
                    thread_message_id: this.id,
                    liked: update,
                }, {
                    preserveScroll: true,
                })
            }
        },
    }
}
</script>