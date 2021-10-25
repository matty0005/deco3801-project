<template>
    <div class="">
        <div>
            <!-- Used to detect outiside clicks / clicks off focus-->
            <div v-show="showDatepicker" class="fixed  inset-0 overflow-y-auto" v-on:click="onClickOutside">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div  class="fixed inset-0 transition-opacity">
                        <div class="absolute inset-0 bg-white opacity-0"></div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto">
                <div :class="flex ? 'flex':'w-40'">
                    <label for="datepicker" class="my-0 text-sm text-gray-600 block">{{ title }}</label>
                    <div class="relative ">
                        <input type="hidden" name="date" ref="date">
                        <input type="text" v-model="datepickerValue" @click="showDatepicker = !showDatepicker" :class="(square ? '':'rounded-md ').concat(borderNone ? 'border-none':'border-gray-200').concat(error ? 'border-red-400 border-2 focus:border-red-600':'')" class="form-input mt-0 pt-1 focus:ring-gray-50 focus:border-none w-full">

                        <div class="m-1 text-red-400 text-sm" v-if="error">{{ error }}</div>


                            <!-- <div x-text="no_of_days.length"></div>
                            <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                            <div x-text="new Date(year, month).getDay()"></div> -->

                            <div 
                                class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0" 
                                style="width: 17rem" 
                                v-show="showDatepicker"><!--
                                @click="showDatepicker = false">-->

                                <div class="flex justify-between items-center mb-2">
                                    <div>
                                        <span class="text-lg font-bold text-gray-800">{{ month_names[month] }}</span>
                                        <span class="ml-1 text-lg text-gray-600 font-normal">{{ year }}</span>
                                    </div>
                                    <div>
                                        <button 
                                            type="button"
                                            class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
                                            @click.stop="decrementMonth(); getNoOfDays()">
                                            <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                            </svg>  
                                        </button>
                                        <button 
                                            type="button"
                                            class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
                                            @click.stop="incrementMonth(); getNoOfDays()">
                                            <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>									  
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-wrap mb-3 -mx-1">
                                    <template v-for="(day, index) in days" :key="index">	
                                        <div style="width: 14.26%" class="px-1">
                                            <div class="text-gray-800 font-medium text-center text-xs">{{day}}</div>
                                        </div>
                                    </template>
                                </div>

                                <div class="flex flex-wrap -mx-1">
                                    <template v-for="blankday in blankdays">
                                        <div style="width: 14.28%" class="text-center border p-1 border-transparent text-sm"></div>
                                    </template>	
                                    <template v-for="(date, dateIndex) in no_of_days" :key="dateIndex">	
                                        <div style="width: 14.28%" class="px-1 mb-1">
                                            <div
                                                @click.stop="getDateValue(date)"
                                                class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                :class="{'bg-parent-500 text-parent-50': isToday(date) == true, 'bg-parent-600 text-parent-50': isSelected(date) == true, 'text-gray-700 hover:bg-parent-100': isToday(date) == false }"	
                                            > {{ date }}</div>
                                        </div>
                                    </template>
                                </div>
                            </div>

                    </div>	 
                </div>

            </div>
        </div>

        
        </div>
</template>

<script>
import Textfield from "@/Shared/Textfield"
export default {
    data: () => {
        return {
            showDatepicker: false,
            datepickerValue: '',
            dateSelected: '',
            month: '',
            year: '',
            no_of_days: [],
            blankdays: [],
            days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            month_names: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            dateSelected: "",
        }
    },
    props: {
        title: {
            type: String,
            default: ""
        },
        modelValue: String,
        square: {
            type: Boolean,
            default: false
        },
        borderNone: {
            type: Boolean, 
            default: false
        },
        flex: {
            type: Boolean,
            default: false
        },
        error: {
            type: Object,
            default: null
        },
    },
    emits: ['update:modelValue'],
    beforeMount() {
        this.initDate()
        this.getNoOfDays()
    },
    mounted () {
        //document.addEventListener("click", this.onClickOutside, true);
            //this.$emit('update:modelValue', this.datepickerValue)

    },
    watch: {
        modelValue: function(a,b) {
            var d = new Date(this.modelValue)
            this.datepickerValue = d.toDateString()
        },
        datepickerValue: function(a,b) {
            var d = new Date(a)
            this.year = d.getFullYear()
            this.month = d.getMonth()
            this.dateSelected = d
            this.getNoOfDays()
        }
    },

    methods: {
        initDate() {
            let today = new Date(this.modelValue);
            this.month = today.getMonth();
            this.year = today.getFullYear();
            this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
        },
        selectDate() {
        },
        onClickOutside () {
            this.showDatepicker = false
        },
        decrementMonth() {
            if(--this.month == -1) {
                this.month = 11
                this.year--
            }
        },

        incrementMonth() {
            if(++this.month == 12) {
                this.month = 0
                this.year++
            }
        },

        isToday(date) {
            const today = new Date();
            const d = new Date(this.year, this.month, date);

            return today.toDateString() === d.toDateString() ? true : false;
        },

        isSelected(date) {
            const d = new Date(this.year, this.month, date);
            const s = new Date(this.dateSelected)
            return s.toDateString() === d.toDateString() ? true : false;
        },        

        getDateValue(date) {
            let selectedDate = new Date(this.year, this.month, date);
            this.dateSelected = selectedDate
            this.datepickerValue = selectedDate.toDateString();

            this.$refs.date.value = selectedDate.getFullYear() +"-"+ ('0'+ selectedDate.getMonth() + 1).slice(-2) +"-"+ ('0' + selectedDate.getDate()).slice(-2);

            this.showDatepicker = false;
            this.$emit('update:modelValue', this.datepickerValue)
            this.$emit('change', selectedDate)


        },

        getNoOfDays() {
            let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

            // find where to start calendar day of week
            let dayOfWeek = new Date(this.year, this.month).getDay();
            let blankdaysArray = [];
            for ( var i=1; i <= dayOfWeek; i++) {
                blankdaysArray.push(i);
            }

            let daysArray = [];
            for ( var i=1; i <= daysInMonth; i++) {
                daysArray.push(i);
            }

            this.blankdays = blankdaysArray;
            this.no_of_days = daysArray;
        }
    },
    components: {
        Textfield
    }

          
}
</script>

<style>

</style>