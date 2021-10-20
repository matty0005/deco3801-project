<template>
    <div>
        <transition
            enter-active-class="ease-out duration-300"
            enter-from-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            enter-to-class="opacity-100 translate-y-0 sm:scale-100"
            leave-active-class="ease-in duration-200"
            leave-class="opacity-100 translate-y-0 sm:scale-100"
            leave-to-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            >
            <div v-if="modelValue" class="fixed  inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div @click="closeModal" v-if="modelValue" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                    
                    <div v-if="modelValue" class="inline-block align-bottom bg-white rounded-lg pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:p-6" :class="(defaultWidth ? 'sm:max-w-lg sm:w-full px-4':'px-30')">
                    <div>
                        <div v-if="defaultWidth" :class="getColor" class="mx-auto flex items-center justify-center h-12 w-12 rounded-full ">
                        <svg v-if="type == 'tick'" class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <svg  v-if="type == 'warning'" class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-5">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            {{ title }}
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">
                            {{ body }}
                            </p>
                        </div>
                        <slot/>
                        </div>
                    </div>
                    <div class="mt-5 flex flex-row-reverse">
                        <button @click="confirmClick" type="button" class="px-6 inline-flex justify-center rounded-md border border-transparent shadow-sm py-2 bg-parent-600 text-base font-medium text-white hover:bg-parent-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-500 sm:col-start-2 sm:text-sm">
                            {{ confirmText }}
                        </button>
                        <button @click="cancelClick" type="button" class="mt-3 mr-2 inline-flex justify-center rounded-md  shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-500 sm:mt-0 sm:col-start-1 sm:text-sm">
                            {{cancelText }}
                        </button>
                    </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    props: {
        modelValue: Boolean,
        type: String,
        confirmText: {
            type: String, 
            default: 'Ok'
        },
        cancelText: {
            type: String, 
            default: 'Cancel'
        },
        autoClose: {
            type: Boolean,
            default: false
        },
        defaultWidth: {
            type: Boolean,
            default: true,
        },
    },
    methods: {
        closeModal() {
            this.$emit('update:modelValue', false)
        },
        cancelClick () {
             if (this.autoClose) {
               this.closeModal
            }
            this.$emit('onClose')
        },
        confirmClick() {
             if (this.autoClose) {
               this.closeModal
            }
            this.$emit('onConfirm')
        }
    },
    computed: {
        getColor() {
            var color = ""
            switch (this.type) {
                case 'warning':
                    color = 'bg-yellow-100'
                    break
                case 'tick':
                default:
                    color = 'bg-green-100'
            }

            return color
        }
    },
    data: () => {
        return {
            showModal: false
        }
    }

}
</script>

<style>

</style>