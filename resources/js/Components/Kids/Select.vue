<template>
    <div>
        <div v-for="(option, index) in options" :key="option.title">
            <button type="button" @click="selected(option.title, index)" :class="optionsSelected.includes(option.title) ? 'bg-lime-300 hover:bg-lime-400':'hover:bg-gray-50 '" class="my-2 w-72 h-16 inline-flex items-center px-4 py-2 border-4 border-gray-300 shadow-sm text-base font-medium rounded-full text-gray-700 bg-white  focus:outline-none focus:ring-none">
                <div class="text-center mx-auto">
                    {{ option.title }}
                </div>
            </button>
        </div>
    </div>
  
</template>

<script>
import Button from "@/Components/Kids/Button.vue"

export default {
    components: {
        Button
    },
    props: {
        options: Array,
        multiSelect: {
            type: Boolean,
            default: false
        },
        modelValue: Number
    },
    data: () => {
        return {
            optionsSelected: []
        }
    },
    watch: {
        modelValue: function(a,b) {
            if (a == null) {
                this.optionsSelected = []
            }
        }
    },
    methods: {
         selected(id, index) {
            if (this.multiSelect) {
                var index = this.optionsSelected.indexOf(id)
                if (index >= 0) {
                    this.optionsSelected.splice(index, 1)
                }
                else {
                    this.optionsSelected.push(id)
                }
            }
            else {
                this.optionsSelected = []
                this.optionsSelected[0] = id
                this.$emit('update:modelValue', index)
            }
            this.$emit("selected", this.optionsSelected)
        }
    }

}
</script>

<style>

</style>