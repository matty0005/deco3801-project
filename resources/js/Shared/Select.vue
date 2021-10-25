<template>
    <div>
        <div class="flex items-center text-small sm:text-base font-medium text-gray-700">
            {{ label }}
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 my-2 gap-x-4 sm:gap-x-6 md:gap-x-8">
            <button v-for="option in options" :key="option" @click="selected(option)" type="button" 
            :class="optionsSelected.indexOf(option) >= 0 ? 'bg-parent-400 hover:bg-parent-500 text-parent-100' : 'bg-parent-100 hover:bg-parent-200 text-parent-800'"
            class="inline-flex items-center my-2 px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm focus:outline-none">
                <div class="mx-auto text-center text-sm sm:text-base">
                    {{ option }}
                </div>
            </button>
        </div>
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