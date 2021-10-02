<template>
    <div class="flex flex-row text-gray-700">
        
        {{likes}}

        <svg :class="(status == 1 ? ' text-blue-500 ':'')" @click.stop="like(1)" class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
    </div>
</template>


<script>
export default {
    props: {
        likes: Number,
        status: Number,
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

            this.$inertia.post('/resources/like', {
                resource_id: this.id,
                liked: update,
            }, {
                preserveScroll: true,
            })
        },
    }
}
</script>