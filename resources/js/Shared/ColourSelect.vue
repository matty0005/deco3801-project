<template>
    <div>
        <div class="mx-3 font-bold text-gray-700">
            Text
            {{ label }}
        </div>
        <div class="mx-3 my-3 flex w-140 items-center gap-x-3">
            <div class="w-1/7">
                <div class="h-12 w-12 rounded-full bg-white shadow border-2 border-parent-600"
                @click="selected(option)"></div>
            </div>
                <div class="h-10 w-10 rounded-full bg-white shadow border-2 border-parent-600"
                @click="selected(option)"></div>
            <div class="w-1/7">
                <div class="h-8 w-8 rounded-full bg-white shadow border-2 border-parent-600"
                @click="selected(option)"></div>
            </div>
            <div class="w-1/7">
                <div class="h-7 w-7 rounded-full bg-white shadow border-2 border-gray-400"
                @click="selected(option)"></div>
            </div>
            <div class="w-1/7">
                <div class="h-8 w-8 rounded-full bg-white shadow border-2 border-red-800"
                @click="selected(option)"></div>
            </div>
            <div class="w-1/7">
                <div class="h-10 w-10 rounded-full bg-white shadow border-2 border-red-800"
                @click="selected(option)"></div>
            </div>
            <div class="w-1/7">
                <div class="h-12 w-12 rounded-full bg-white shadow border-2 border-red-800"
                @click="selected(option)"></div>

            </div>
        </div>
        <div class="mx-3 my-3 flex gap-x-60">
            <div class="text-left font-medium text-xs text-parent-600">
                AGREE      
            </div>   
            <div class="text-left font-medium text-xs text-red-800">
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
            optionSelected: String
        }
    },

    methods: {
        selected(id) {
            this.optionsSelected = id
            this.$emit("selected", this.optionSelected)
        }
    }
}
</script>

<style>

</style>