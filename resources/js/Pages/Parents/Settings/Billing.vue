<template>
<div>
    <Layout class="bg-blueGray-100 min-h-screen pb-8" >
        <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
            
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Invoices</h3>
                        <p class="mt-1 text-sm text-gray-500">Here you can download your past invoices</p>
                    </div>

                        <Datatable :cols="invoiceCols" :rows="invoiceRows"/>

                    </div>    
                </div>
                
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Billing details</h3>
                        <p class="mt-1 text-sm text-gray-500">Please add a payment method to book consulations</p>
                    </div>

                    <!-- <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                        <label for="display_name" class="block text-sm font-medium text-gray-700">Bank username and password</label>
                        <input v-model="display_name" type="text" name="display_name" id="display_name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                        </div>
                    </div>
                    </div> -->

                    <div v-if="details != [] && details != undefined && details.brand != undefined">
                        <div class="mb-2 text-lg text-gray-700 ">
                            Current card details
                        </div>
                        <CardDetails class="mx-auto lg:mx-0 lg:ml-4" :details="details"/>
                        <div class="mt-16 mb-0 text-lg text-gray-700 ">
                            Update card details
                        </div>
                    </div>

                    <div class="m-4 w-72 lg:w-96 flex flex-col">
                        <div class="">
                            <div class="">
                                <label for="cardHolder" class="block text-sm font-medium text-gray-700">Card holders name</label>
                                <input v-model="cardHolder" type="text" name="cardHolder" id="cardHolder" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-parent-500 focus:border-parent-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="my-4 border-2 rounded-md p-2" ref="card_details"></div>

                    </div>
                </div>
                </div>





                <div class="flex flex-row-reverse  mx-4 lg:mx-0">
                    <button v-on:click="sendStripe" type="submit" class="bg-parent-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-parent-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-parent-600">
                        Save
                    </button>
                </div>
            </div>
    </Layout>
</div>
</template>

<script>

    import Layout from '@/Layouts/SettingsLayout'
    import CardDetails from "@/Components/Billing/CardDetails.vue"
    import Datatable from "@/Shared/Datatable.vue"

    let stripe = Stripe(process.env.MIX_STRIPE_KEY),
    elements = stripe.elements(),
    card = undefined;

    export default {
        components: {
            Layout,
            CardDetails,
            Datatable
        },
        props: {
            errors: Object,
            intent: Object,
            details: Object,
            invoiceCols: Array,
            invoiceRows: Array
        },

        methods: {
             async sendStripe() {
                // this.$refs.stripe_card_ref.submit();
                let _this = this

                const { setupIntent, error } = await stripe.confirmCardSetup(
                    this.intent.client_secret, {
                        payment_method: {
                            card: card,
                            billing_details: { name: this.cardHolder }
                        }
                    }
                );

                if (error) {
                    // Display "error.message" to the user...
                    console.log("Error: ", this.errors)
                } else {
                    // The card has been verified successfully...
                    _this.addPaymentMethod(setupIntent.payment_method)
                }



            },
            addPaymentMethod(token) {
                this.$inertia.post('/account/billing', {token})
            }


        },
        data: () => {
            return {
                newAvatar: null,
                display_name: "",
                token: null,
                pulishableKey: process.env.STRIPE_KEY,
                cardHolder: "",
            }
        },
        beforeMount () {

            try {
                card = elements.create('card');
            } catch (e) {
                location.reload();
            }

            //this.details['brand'] = 'mastercard'
            // this.details['brand'] = 'amex'
            //this.details['brand'] = 'unionpay'
        },
        mounted() {
            try {
                card.mount(this.$refs.card_details);
            } catch (e) {
                location.reload();
            }
            
        },

        
    }
</script>
