<template>
  <div class="flex flex-row">
        <div class="mx-2 ">
            <label for="location" class="block text-sm font-medium text-gray-700">Day</label>
            <select id="location" name="location" class="mt-1 block w-24 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option v-for="day in getDays" :key="day" :selected="day == selectedDay" @click="setDay(day)">{{ day }}</option>

            </select>
        </div>

        <div class="mx-2 ">
            <label for="location" class="block text-sm font-medium text-gray-700">Month</label>
            <select id="location" name="location" class="mt-1 block w-32 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option v-for="month in months" :selected="month == selectedMonth"  :key="month" @click="setMonth(month)">{{ month }}</option>
            </select>
        </div>

        <div class="mx-2 ">
            <label for="location" class="block text-sm font-medium text-gray-700">Year</label>
            <select id="location" name="location" class="mt-1 block w-36 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option v-for="year in years" :selected="year == selectedYear" :key="year" @click="setYear(year)">{{ year }}</option>
            </select>
        </div>

  </div>
</template>

<script>
export default {
    data: () => {
        return {
            days: [],
            months: [],
            years: [],
            selectedDay: 1,
            selectedMonth: 'Jan',
            selectedYear: 2021
        }
    },
    props: {
        modelValue: String
    },
    mounted() {
        this.months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']

        for (var year = 1970; year <= 2021; year++) {
            this.years.push(year)
        }
    },
    computed: {
        getDays() {
            var thirtyDays = ['Apr', 'Jun', 'Sep', 'Nov']
            
            var dayCount = 31

            if (thirtyDays.includes(this.selectedMonth)) {
                dayCount = 30
            }

            if (this.selectedMonth == 'Feb') {
                dayCount = 28
            }

            var tmp = []

            for (var i = 1; i <= dayCount; i++) {
                tmp.push(i)
            }

            return tmp
        }
    },
    methods: {
        getDate() {
            // var tmpDate = new Date(this.selectedYear, this.months.indexOf(this.selectedMonth), this.selectedDay)
            // return tmpDate.toISOString()
            return `${this.selectedYear}-${this.months.indexOf(this.selectedMonth) + 1}-${this.selectedDay}`

        },
        setMonth(month) {
            this.selectedMonth = month
            this.$emit('update:modelValue', this.getDate())
        },
        setYear(year) {
            this.selectedYear = year
            this.$emit('update:modelValue', this.getDate())
        },
        setDay(day) {
            this.selectedDay = day
            this.$emit('update:modelValue', this.getDate())
        }
    }

}
</script>

<style>

</style>