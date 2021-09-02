<template>
    <div>
        <div class="mx-3 font-bold text-gray-700">
            Text
            {{ label }}
        </div>
        <div class="mx-3 my-3 flex w-1/2 items-center gap-x-3">
            <div>
                <div class="h-12 w-12 rounded-full border-2 cursor-pointer"
                :class="optionSelected == 7 ? 'bg-parent-500 border-parent-200' : 'bg-white border-parent-500 hover:bg-parent-200'"
                @click="selected(7)"></div>
            </div>
                <div class="h-10 w-10 rounded-full border-2 cursor-pointer"
                :class="optionSelected == 6 ? 'bg-parent-500 border-parent-200' : 'bg-white border-parent-500 hover:bg-parent-200'"
                @click="selected(6)"></div>
            <div>
                <div class="h-8 w-8 rounded-full border-2 cursor-pointer" 
                :class="optionSelected == 5 ? 'bg-parent-500 border-parent-200' : 'bg-white border-parent-500 hover:bg-parent-200'"
                @click="selected(5)"></div>
            </div>
            <div>
                <div class="h-7 w-7 rounded-full shadow border-2 cursor-pointer"
                :class="optionSelected == 4 ? 'bg-gray-400 border-gray-200' : 'bg-white border-gray-400 hover:bg-gray-200'"
                @click="selected(4)"></div>
            </div>
            <div>
                <div class="h-8 w-8 rounded-full border-2 cursor-pointer"
                :class="optionSelected == 3 ? 'bg-red-700 border-red-200' : 'bg-white border-red-700 hover:bg-red-200'"
                @click="selected(3)"></div>
            </div>
            <div>
                <div class="h-10 w-10 rounded-full border-2 cursor-pointer"
                :class="optionSelected == 2 ? 'bg-red-700 border-red-200' : 'bg-white border-red-700 hover:bg-red-200'"
                @click="selected(2)"></div>
            </div>
            <div>
                <div class="h-12 w-12 rounded-full border-2 cursor-pointer"
                :class="optionSelected == 1 ? 'bg-red-700 border-red-200' : 'bg-white border-red-700 hover:bg-red-200'"
                @click="selected(1)"></div>

            </div>
        </div>
        <div class="mx-3 my-3 flex gap-x-60">
            <div class="text-left font-medium text-xs text-parent-600">
                AGREE      
            </div>   
            <div class="text-left font-medium text-xs text-red-700">
                DISAGREE     
            </div>        
        </div>
    </div>
</template>

<script>
export default {
    props: {
        label: String,
        option: String
    },

    data: () => {
        return {
            optionSelected: 0
        }
    },

    methods: {
        selected(id) {
            this.optionSelected = id
            this.$emit("selected", this.optionSelected)
        }
    }
}
</script>

<style>

</style>