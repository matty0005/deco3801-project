<template>
    <div>
        <!-- {{ label }} -->
        <button v-for="option in options" :key="option.id" @click="selected(option.id)" type="button" 
        :class="optionsSelected.indexOf(options.id) >= 0 ? 'bg-parent-600 hover:bg-parent-700 text-parent-200' : 'bg-parent-200 hover:bg-parent-300 text-parent-800'"
        class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            {{ option.text }}
        </button>
    </div>
</template>

<script>
export default {
    props: {
        label: String,
        options: Array,
        multiSelect: {
            type: Boolean,
            default: false
        }
    },

    data: () => {
        return {
            optionsSelected: []
        }
    },

    methods: {
        selected(id) {
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
            }
            this.$emit("selected", this.optionsSelected)
        }

    }

}
</script>

<style>

</style>