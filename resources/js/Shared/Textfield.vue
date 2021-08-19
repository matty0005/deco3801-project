<template>
    <div>
        <div class="flex">
            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">{{ label }}</label>
            <span class="ml-1 text-sm text-red-400" id="email-optional" v-if="required">*</span>
        </div>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input :type="password ? 'password' :'text'" v-model="inputVal" :disabled="disabled" :class="''.concat(disabled ?'bg-gray-200':'').concat(error ? 'border-red-400 border-2 focus:border-red-600':'')" class="form-input rounded-md border-gray-200 focus:ring-gray-100 focus:border-none block w-full sm:text-sm sm:leading-5" :placeholder="placeholder">
        </div>
        <div class="m-1 text-red-400 text-sm" v-if="error">{{ error }}</div>

    </div>
</template>

<script>
export default {
    props: {
        placeholder: String, 
        label: String,
        modelValue: String,
        required: {
            type: Boolean,
            default: false
        },
        error: {
            type: Object,
            default: null
        },
        disabled: {
            type: Boolean,
            default: false
        },
        password: {
            type: Boolean,
            default: false
        }
    },
    emits: ['update:modelValue'],
    computed: {
        inputVal: {
            get () {
                return this.modelValue
            },
            set (val) {
                this.$emit('update:modelValue', val.trim())
            }
        }
    }
}
</script>

<style>

</style>