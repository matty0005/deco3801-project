<template>
  <div :class="cardClass" class="relative  h-52 w-80 rounded-2xl">
      <MasterCardIcon v-if="this.details.brand == 'mastercard'" class="absolute top-4 right-4 w-16 h-12"/>
      <VisaIcon v-else-if="this.details.brand == 'visa'" class="absolute top-1 right-2 w-20 h-16"/>
      <AmexIcon v-else-if="this.details.brand == 'amex'" class="absolute top-4 right-4 w-14 h-14"/>
      <div v-else class="absolute top-4 right-4 text-xl text-white text-bold"> {{ cardName }} </div>

      <div class="text-white absolute top-24 left-6 ">
          <div class="text-sm">
              Card Number
          </div>
          <div class="font-bold text-lg tracking-widest">
          **** ****  ****  {{ details.last4}}
          </div>
      </div>
      <div class="text-white absolute bottom-4 left-6 ">
          <div class="text-xs">
              Valid
          </div>
          <div class="text-bold text-sm">
              {{ details.exp_month}}/{{ details.exp_year }}
          </div>
      </div>
      <div class="text-white absolute bottom-4 left-32 ">
          <div class="text-xs">
              Name
          </div>
          <div class="text-bold text-sm">
              {{ details.name}}
          </div>
      </div>
  </div>
</template>

<script>
import MasterCardIcon from "@/Components/Billing/MasterCardIcon"
import VisaIcon from "@/Components/Billing/VisaIcon"
import AmexIcon from "@/Components/Billing/AmexIcon"
export default {
    computed: {
        cardName () {
            var name = this.details.brand.replace("_", " ")
            return name.charAt(0).toUpperCase() + name.slice(1);
        },
        cardClass () {
            var colour = ""
            switch(this.details.brand) {
                case 'visa':
                    colour = "bg-gradient-to-r from-blue-600 to-blue-900"
                    break 
                case 'amex':
                    colour = "bg-gradient-to-r from-gray-400 to-gray-200" 
                    break
                case 'mastercard':
                default:
                    colour = "bg-gradient-to-r from-gray-600 to-gray-900" 
                    break
            }
            return colour
            
        }
    },
    props: {
        details: Object
    },
    components: {
        MasterCardIcon,
        VisaIcon,
        AmexIcon
    }
}
</script>

<style>

</style>