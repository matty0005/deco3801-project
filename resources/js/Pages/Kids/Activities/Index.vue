<template>
    <layout class="bg-gray-100 min-h-screen">
        <div class="container mx-auto">
            <div class=" bg-white overflow-hidden shadow rounded-lg mt-2 lg:mt-8">
                <div class="px-4 py-5 sm:p-6">                    
                    <SpeechBubble :text="textInSpeechBubble" />

                    <img class="lg:ml-72 h-96 w-96" src="/images/kids/mascot.png"/>

                </div>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from '@/Layouts/KidsAppLayout'
    import CallToActionCard from "@/Shared/CallToActionCard.vue"
    import SpeechBubble from "@/Shared/SpeechBubble"

    export default {
        components: {
            Layout,
            CallToActionCard,
            SpeechBubble
        },
        data: () => {
            return {
                textInSpeechBubble: ""
            }
        },
        mounted () {
            this.textInSpeechBubble = `Hello ${this.$page.props.auth.user.display_name}, how are you today?`
        },
        methods: {
            startActivity() {
                // Take to another page for activity
            }
        }
    }
</script>
