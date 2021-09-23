<template>
    <div>
        <slot :thread="thread" :clickable="clickable"
            :time="time" @clicked="visitThread" />
    </div>
</template>

<script>

export default {

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