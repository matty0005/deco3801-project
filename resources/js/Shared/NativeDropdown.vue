<template>
    <div>
        <div class="flex">
            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">{{ label }}</label>
            <span class="ml-1 text-sm text-red-400" id="email-optional" v-if="required">*</span>
        </div>
        <select id="location" name="location"  @change="selectNew($event.target.value)"  :class="error ? 'border-red-400 border-2 focus:border-red-600':''" class="mt-1 text-sm block w-full pl-3 pr-10 py-2  border-gray-300 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm rounded-md">
            <option v-if="options.length > 1" value="" disabled :selected="modelValue == ''">Select {{ label }}</option>
            <option v-for="option in options"  :key="option" :selected="modelType == '' ? option == modelValue : option[modelType] == modelValue" :value="selectType == '' ? option : option[selectType]">{{ selectType == '' ? option : option[selectType] }}</option>
        </select>
        <div class="m-1 text-red-400 text-sm" v-if="error">{{ error }}</div>
    </div>
</template>

<script>
export default {
    props: {
        label: String,
        options: Array,
        modelValue: String,
        selectType: {
            type: String,
            default: ''
        },
        modelType: {
            type: String,
            default: ''
        },
        required: {
            type: Boolean,
            default: false
        },
        error: {
            type: Object,
            default: null
        },
    },
    emits: ['update:modelValue'],
    data: () => {
        return {
            map: {}
        }
    },
    mounted() {
        for (var i = 0; i < this.options.length; i++) {
            if (this.selectType == '') {
                 this.map[this.options[i]] = i
            } else {
                this.map[this.options[i][this.selectType]] = i
            }
        }
    },
    methods: {
        selectVal(event) {
        },
        selectNew(option) {
            this.$emit('update:modelValue', this.modelType == '' ? option : this.options[this.map[option]][this.modelType])
            this.$emit('onSelect', this.modelType == '' ? option :this.options[this.map[option]][this.modelType])
        }
    }
}
</script>

<style>
</style>