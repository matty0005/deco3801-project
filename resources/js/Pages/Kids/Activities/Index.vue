<template>
    <layout class="bg-gray-100 min-h-screen">
        <div class="container mx-auto">
            <div class="w-128 bg-white overflow-hidden shadow rounded-lg mt-2 lg:mt-36">
                <div class="px-4 py-5 sm:p-6 ">    
                    
                        
                    <div class="mt-0 flex flex-row mx-auto flex-grow">
                        <div class="flex flex-col mx-auto ">
                            <Select v-if="notEnd" class="w-72 mx-auto " v-model="selectNumber" :options="questionsToAsk"/>
                        </div>
                    </div>


                    <div class="w-96 mx-auto ">
                        <Button v-if="notEnd" class="w-full mx-auto h-16" text="Continue" @onClick="nextStage" />
                    </div>

                </div>
            </div>



            <div class="absolute right-64 -mt-36 ">
                <div class="absolute right-64">
                    <SpeechBubble class="" :text="textInSpeechBubble" />
                </div>

                <Mascot class="absolute right-32 top-16 mt-16 h-96 w-96"/>
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
    import Mascot from "@/Shared/Mascot"

    export default {
        components: {
            Layout,
            CallToActionCard,
            SpeechBubble,
            Button,
            Select,
            Mascot
        },
        props: {
            level: String,
            questions: Array
        },
        data: () => {
            return {
                textInSpeechBubble: "",
                questionsToAsk: [],
                responses: {},
                index: 0,
                selectNumber: null,
                notEnd: true,
                soundOn: true
            }
        },
        mounted () {
            this.getQuestionAtIndex()
            this.soundOn = this.$page.props.auth.user.kids_audio == 1
        },
        methods: {
            getQuestionAtIndex() {

                
                
                this.textInSpeechBubble = this.questions[this.index]['chatbox']
                if (this.questions[this.index]['end']) {
                    this.notEnd = false
                    return 
                }
                this.questionsToAsk = this.getSelectArray(this.questions[this.index]['answers'])
            },
            getSelectArray(bare){
                var tmp = []

                for (var i = 0; i < bare.length; i++) {
                    tmp.push({title: bare[i]})
                }

                return tmp
            },

            startActivity() {
                // Take to another page for activity
            },
            nextStage() {
                // this.responses['stage1'] = 
                console.log(this.questions[this.index].offset)
                console.log(this.questions[this.index].offset + this.selectNumber + 1)

                console.log(this.questions[this.index])
                console.log(this.questions[this.index]['end'])

                if (this.questions[this.index]['end']) {
                    this.notEnd = false
                    return 
                }

                this.index = this.index + this.questions[this.index].offset + this.selectNumber + 1
                this.getQuestionAtIndex()
                this.selectNumber = null

            }
        }
    }
</script>
