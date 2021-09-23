<template>
    <button type="button" @click="select"  class="inline-flex items-center px-4 py-2 border-4 border-gray-300 hover:bg-gray-50 shadow-sm text-base font-medium rounded-full text-gray-700 bg-white  focus:outline-none focus:ring-none">
        <div class="text-center mx-auto">
            {{ text }}
        </div>
    </button>
</template>

<script>
export default {
    props: {
        text:String,
        changeColor: {
            type: Boolean,
            default: false
        }
    },
    data: () => {
        return {
            isSelected: false
        }
    },
    methods: {
        select() {
            this.$emit('onClick')
        }
    }
}
</script>

<style>

</style>