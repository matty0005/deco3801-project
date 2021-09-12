<template>
    <layout class="bg-gray-100 min-h-screen">
        <div class="container mx-auto">
            <div class=" bg-white overflow-hidden shadow rounded-lg mt-2 lg:mt-8">
                <div class="px-4 py-5 sm:p-6 ">    
                    
                    <div class="flex flex-row-reverse relative">
                        <div class="absolute right-48">
                            <SpeechBubble class="" :text="textInSpeechBubble" />
                        </div>

                        <img class="mt-20 h-96 w-96" src="/images/kids/mascot.png"/>
                        
                        
                        <div class="mt-20 flex flex-row ml-12 flex-grow">
                            <div class="flex flex-col">
                                <Select class="mt-24 w-72 " :options="questionsToAsk"/>
                            </div>
                        </div>

                    </div>

                   
                    <div class="w-96 mx-auto ">
                        <Button class="w-full mx-auto h-16" text="Continue" @onClick="nextStage" />
                    </div>

                </div>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from '@/Layouts/KidsAppLayout'
    import CallToActionCard from "@/Shared/CallToActionCard.vue"
    import SpeechBubble from "@/Shared/SpeechBubble"
    import Button from "@/Components/Kids/Button.vue"
    import Select from "@/Components/Kids/Select.vue"


    export default {
        components: {
            Layout,
            CallToActionCard,
            SpeechBubble,
            Button,
            Select
        },
        data: () => {
            return {
                textInSpeechBubble: "",
                questionsToAsk: [],
                responses: {}
            }
        },
        mounted () {
            this.textInSpeechBubble = `Hello ${this.$page.props.auth.user.display_name}, how are you today?`
            this.questionsToAsk = [{title:'Good'}, {title:'Ok'}, {title:'Bad'}]
        },
        methods: {
            startActivity() {
                // Take to another page for activity
            },
            nextStage() {
                // this.responses['stage1'] = 
                this.textInSpeechBubble = `${this.$page.props.auth.user.display_name}, I'm feeling a bit sleepy, are you able to help me with something?`
                this.questionsToAsk = [{title:'Sure'}, {title:'Not right now'}]

            }
        }
    }
</script>
