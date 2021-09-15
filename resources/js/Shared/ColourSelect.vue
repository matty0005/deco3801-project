<template>
    <div>
        <div class="mx-3 flex items-center justify-center font-semibold text-gray-600">
            {{ label }}
        </div>
        <div class="mx-3 my-3 flex items-center justify-center space-x-4 md:space-x-6 lg:space-x-8">
            
            <div class="px-3 md:px-4 lg:px-5 text-small lg:text-base font-medium text-parent-600">
                Agree      
            </div>
            
            <div class="h-10 w-10 md:h-12 md:w-12 lg:h-14 lg:w-14 rounded-full border-3 cursor-pointer"
            :class="optionSelected == 7 ? 'bg-parent-500 border-parent-200' : 'bg-white border-parent-500 hover:bg-parent-200'"
            @click="selected(7)"></div>
            
            <div class="h-8 w-8 md:h-10 md:w-10 lg:h-12 lg:w-12 rounded-full border-3 cursor-pointer"
            :class="optionSelected == 6 ? 'bg-parent-500 border-parent-200' : 'bg-white border-parent-500 hover:bg-parent-200'"
            @click="selected(6)"></div>
            
            <div class="h-7 w-7 md:h-8 md:w-8 lg:h-10 lg:w-10 rounded-full border-3 cursor-pointer" 
            :class="optionSelected == 5 ? 'bg-parent-500 border-parent-200' : 'bg-white border-parent-500 hover:bg-parent-200'"
            @click="selected(5)"></div>
            
            
            <div class="h-6 w-6 md:h-7 md:w-7 lg:h-8 lg:w-8 rounded-full shadow border-3 cursor-pointer"
            :class="optionSelected == 4 ? 'bg-gray-400 border-gray-200' : 'bg-white border-gray-400 hover:bg-gray-200'"
            @click="selected(4)"></div>
            
            <div class="h-7 w-7 md:h-8 md:w-8 lg:h-10 lg:w-10 rounded-full border-3 cursor-pointer"
            :class="optionSelected == 3 ? 'bg-red-900 border-red-200' : 'bg-white border-red-900 hover:bg-red-200'"
            @click="selected(3)"></div>
            
            <div class="h-8 w-8 md:h-10 md:w-10 lg:h-12 lg:w-12 rounded-full border-3 cursor-pointer"
            :class="optionSelected == 2 ? 'bg-red-900 border-red-200' : 'bg-white border-red-900 hover:bg-red-200'"
            @click="selected(2)"></div>
            
            <div class="h-10 w-10 md:h-12 md:w-12 lg:h-14 lg:w-14 rounded-full border-3 cursor-pointer"
            :class="optionSelected == 1 ? 'bg-red-900 border-red-200' : 'bg-white border-red-900 hover:bg-red-200'"
            @click="selected(1)"></div>
            
            <div class="px-3 md:px-4 lg:px-5 text-small lg:text-base font-medium text-red-900">
                Disagree 
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