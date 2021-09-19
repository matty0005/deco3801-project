<template>
    <layout class="bg-gray-100 min-h-screen">

        <div id="container" class="container mx-auto mt-2 lg:mt-8">

            <div class="flex flex-row">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-3 lg:py-5 lg:p-6">
                            <div class="flex flex-col lg:flex-row">
                                <div class="flex flex-row mb-4 lg:mb-0">
                                    <div @click="changeColor('#000000')" :class="color == '#000000' ? 'border-4 border-gray-800':''" class="bg-black h-6 w-6 lg:h-8 lg:w-8 mr-1 rounded"></div>
                                    <div @click="changeColor('#EF4444')" :class="color == '#EF4444' ? 'border-4 border-red-600':''" class="bg-red-500 h-6 w-6 lg:h-8 lg:w-8 mx-1 rounded"></div>
                                    <div @click="changeColor('#F97316')" :class="color == '#F97316' ? 'border-4 border-orange-600':''" class="bg-orange-500 h-6 w-6 lg:h-8 lg:w-8 mx-1 rounded"></div>
                                    <div @click="changeColor('#FACC15')" :class="color == '#FACC15' ? 'border-4 border-yellow-600':''" class="bg-yellow-400 h-6 w-6 lg:h-8 lg:w-8 mx-1 rounded"></div>
                                    <div @click="changeColor('#84CC16')" :class="color == '#84CC16' ? 'border-4 border-lime-600':''" class="bg-lime-500 h-6 w-6 lg:h-8 lg:w-8 mx-1 rounded"></div>
                                    <div @click="changeColor('#22C55E')" :class="color == '#22C55E' ? 'border-4 border-green-600':''" class="bg-green-500 h-6 w-6 lg:h-8 lg:w-8 mx-1 rounded"></div>
                                    <div @click="changeColor('#22D3EE')" :class="color == '#22D3EE' ? 'border-4 border-cyan-600':''" class="bg-cyan-400 h-6 w-6 lg:h-8 lg:w-8 mx-1 rounded"></div>
                                    <div @click="changeColor('#3B82F6')" :class="color == '#3B82F6' ? 'border-4 border-blue-600':''" class="bg-blue-500 h-6 w-6 lg:h-8 lg:w-8 mx-1 rounded"></div>
                                    <div @click="changeColor('#A855F7')" :class="color == '#A855F7' ? 'border-4 border-purple-600':''" class="bg-purple-500 h-6 w-6 lg:h-8 lg:w-8 mx-1 rounded"></div>
                                    <div @click="changeColor('#D946EF')" :class="color == '#D946EF' ? 'border-4 border-fuchsia-600':''" class="bg-fuchsia-500 h-6 w-6 lg:h-8 lg:w-8 mx-1 rounded"></div>
                                    <div @click="changeColor('#EC4899')" :class="color == '#EC4899' ? 'border-4 border-pink-600':''" class="bg-pink-500 h-6 w-6 lg:h-8 lg:w-8 mx-1 rounded"></div>
                                </div>
                                <div class="flex flex-row">

                                    <div @click="eraser" class=" h-8 w-8 mx-4  ml-2 mlg:ml-16 rounded">
                                        <svg :class="erase ? '':''" class=" h-8 w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8786 2.70705C14.0502 1.53547 15.9497 1.53548 17.1213 2.70705L22.2928 7.87862C23.4644 9.0502 23.4644 10.9497 22.2928 12.1213L14.4142 19.9999H17.9999C18.5522 19.9999 18.9999 20.4477 18.9999 20.9999C18.9999 21.5522 18.5522 21.9999 17.9999 21.9999H5.99994C5.73473 21.9999 5.48037 21.8946 5.29284 21.7071L1.70705 18.1213C0.535474 16.9497 0.535477 15.0502 1.70705 13.8786L12.8786 2.70705ZM11.5857 19.9999L14.5857 16.9999L7.99994 10.4142L3.12126 15.2928C2.73074 15.6834 2.73074 16.3165 3.12126 16.707L6.41416 19.9999H11.5857ZM9.41416 8.99994L15.9999 15.5857L20.8786 10.707C21.2691 10.3165 21.2691 9.68336 20.8786 9.29284L15.707 4.12126C15.3165 3.73074 14.6834 3.73074 14.2928 4.12126L9.41416 8.99994Z" fill="#293644"/>
                                        </svg>
                                    </div>
                                    <div @click="changeStrokeSize(5)" class="flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"  class="h-3 w-3 mx-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><circle cx="12" cy="12" r="10"></circle></svg>
                                    </div>
                                    <div @click="changeStrokeSize(10)" class="flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"   class="h-6 w-6 mx-1"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><circle cx="12" cy="12" r="10"></circle></svg>
                                    </div>
                                    <div @click="changeStrokeSize(20)" class="flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"  class="h-8 w-8 mx-1"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><circle cx="12" cy="12" r="10"></circle></svg>
                                    </div>
                                    <div class="flex-grow">
                                    </div>
                                    
                                </div>
                            </div>
                            <canvas class="my-4 border-2 bg-white boder-gray-300" id="drawingCanvas" @touchstart="beginDrawing" @touchmove="keepDrawing" @touchend="stopDrawing" @mousedown="beginDrawing" @mousemove="keepDrawing" @mouseup="stopDrawing" />
                        </div>

                </div>
                
                <div class="self-end ml-8">
                <div class="flex flex-col">
                        <input class="rounded-lg border-2 border-gray-300" v-if="askName" type="text" v-model="drawName"/>

                        <transition
                            enter-active-class="transition ease-out duration-200"
                            enter-from-class="transform opacity-0 scale-95"
                            enter-to-class="transform opacity-100 scale-100"
                            leave-active-class="transition ease-in duration-75"
                            leave-from-class="transform opacity-100 scale-100"
                            leave-to-class="transform opacity-0 scale-95">
                            <Select v-if="showSelect"  class="w-72 mx-auto " @onClick="handleKidInput" :options="questionsList"/>
                        </transition>

                        <SpeechBubble :text="speechBubbleText" class="mb-24 "/>
                        <Mascot />
                    </div>
                </div>
            </div>
        </div>
       
    </layout>
</template>

<script>
    import Layout from '@/Layouts/KidsAppLayout'
    import SpeechBubble from "@/Shared/SpeechBubble"
    import Mascot from "@/Shared/Mascot"
    import Select from "@/Components/Kids/Select.vue"

    export default {
        components: {
            Layout,
            SpeechBubble,
            Mascot,
            Select
        },
        props: {
            itemID: Number,
            item: String,
        },
        data: () => {
            return {
                drawing: false,
                ctx: null,
                x: 0,
                y: 0,
                isDrawing: false,
                canvas: null,
                erase: false,
                color: 'black',
                size: 5,
                freestyleMode: true,
                speechBubbleText: "",
                questionsList: [],
                selectNumber: null,
                showSelect: false,
                questionsId: null,
                isDrawing: false,
                positiveResponses: ['Wow! That is looking great', "You're an amazing artist", "You should be an artist", "Fantastic work! It's really good"],
                drawName: "",
                soundOn: true
            }
        },
        mounted() {
            this.soundOn = this.$page.props.auth.user.kids_audio == 1;

            console.log("hoo")
            this.canvas = document.getElementById('drawingCanvas')
            this.ctx = this.canvas.getContext('2d')
            this.ctx.strokeStyle = 'black';

            var container = document.getElementById('container')

            console.log("container.heigh", container.height)

            this.canvas.style.width ='100%';
            this.canvas.style.height='58vh';
            // set the internal size to match
            this.canvas.width  = this.canvas.offsetWidth;
            this.canvas.height = this.canvas.offsetHeight;

            this.ctx.lineWidth = 5;

            window.addEventListener('resize', this.updateCanvasSize);

            // Randomly pick if in freestyle mode or not.
            this.freestyleMode = Math.random() < 0.5

            if (this.freestyleMode) {
                this.freestyleModeStart()
            } else {
                this.setModeStart()
            }
            this.showSelect = true

            setInterval(() => {
                let _t = this
                if (this.isDrawing) {
                    _t.speechBubbleText = _t.positiveResponses[_t.randomNumber(0, _t.positiveResponses.length)]
                }
            }, 60000);

        },
        methods: {
            handleKidInput(index) {
                console.log("index", index)
                console.log("questionsId", this.questionsId)
                this.showSelect = false
                let _t = this


                if (this.questionsId == 0 && index == 1) {
                    this.speechBubbleText = `Hmmm... Okay, draw me a ${this.item}, let me know when you finish!`
                    this.questionsList = [{title: "I'm done, what do you think"}, {title: 'Can you please clear the screen'}]
                    this.questionsId = 10
                    setTimeout(() => {
                        _t.showSelect = true
                    }, 750); 

                    return
                }


                if (this.questionsId == 1 && index == 1) {
                    this.freestyleMode = true
                }

                if (this.questionsId == 1 || this.questionsId == 0 && index == 0) {
                    this.freestyleMode = true
                    this.speechBubbleText = `Okay, Let me know when you're finished then.`
                    this.questionsList = [{title: "I'm done, what do you think"}, {title: 'Can you please clear the screen'}]
                    this.questionsId = 11

                    this.playAudio('/audio/kids_drawing_waiting_for_finish.mp3')

                    
                    setTimeout(() => {
                        _t.showSelect = true
                    }, 1000);
                    return 
                }

                if (this.questionsId == 10 || this.questionsId == 11) {
                    if (index == 1) {
                        this.clear()

                        setTimeout(() => {
                            _t.showSelect = true
                        }, 750); 
                        return
                    }

                    if (this.freestyleMode && this.drawName == '') {
                        this.askName = true
                        this.speechBubbleText = `So, what are you going to call this?`
                        this.questionsList = [{title: "Ok"}]
                        this.showSelect = true
                        this.playAudio('/audio/kids_drawing_ask_name.mp3')


                      
                        return
                    }

                    this.askName = false

                    // Must be done
                    this.speechBubbleText = `That looks absoultely fantastic! Well Done! What do you want to do now? `
                    this.playAudio('/audio/kids_drawing_complete.mp3')

                    this.questionsList = [{title: "Go to home page"}, {title: 'Draw something else'}]
                    setTimeout(() => {
                        _t.showSelect = true
                    }, 750); 
                    this.questionsId = 21

                    return 
                    
                }

                if (this.questionsId == 21) {
                    if (index == 0) {
                        this.saveDrawing()
                    } else {
                        this.saveDrawingRedraw()
                    }
                }
                
                console.log(" this.speechBubbleText", this.speechBubbleText)
                console.log(" this.questionsList", this.questionsList)




            


            },

            playAudio(file) { 
                if (this.soundOn) {
                    var audio = new Audio(file); // path to file
                    audio.play();
                }
            },
            randomNumber(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            },
            freestyleModeStart() {
                // Maybe have this slow move out
                this.speechBubbleText = `Hey there, I don't have any current requests from any of my friends. Let's see what you can draw - draw anything you like.`
                this.questionsList = [{title: 'Okay!'}, {title: "Hmmm I'm unsure, can you help me out."}]
                this.questionsId = 0
                this.playAudio('/audio/no_request_kids_draw.mp3')

            },
            setModeStart () {
                var options = [
                    {
                        speechBubble: "Hi there! I've been asked by a friend of mine to ask you to see if you could draw me something. Would you be able to help me out?",
                        response: [{title:'Sure!'}, {title:'I want to draw on my own'}],
                        audio: '/audio/request_2_kids_draw.mp3'

                    },
                    {
                        speechBubble: "Hey, I've heard that you are an amazing artist? Can I ask for you to draw me something so I can see how good of an artist you are?",
                        response: [{title:'Sure! What do you want me to draw'}, {title:'Okay, but I want to choose what I draw'}],
                        audio: '/audio/request_1_kids_draw.mp3'
                    }
                    
                ]

                var randNum = this.randomNumber(0,2)
                this.speechBubbleText = options[randNum].speechBubble
                this.questionsList = options[randNum].response
                this.questionsId = 1
                this.playAudio(options[randNum].audio)

            },
            drawLine(x1, y1, x2, y2) {
                let ctx = this.ctx;

                
                ctx.beginPath();
                ctx.lineCap = 'round'
                
                ctx.moveTo(x1, y1);
                ctx.lineTo(x2, y2);
                ctx.stroke();
                ctx.closePath();
            },
            beginDrawing(e) {
                this.x = e.offsetX;
                this.y = e.offsetY;
                this.isDrawing = true;
                this.drawLine(this.x, this.y, e.offsetX, e.offsetY);

            },
            keepDrawing(e) {
                if (this.isDrawing === true) {
                    this.drawLine(this.x, this.y, e.offsetX, e.offsetY);
                    this.x = e.offsetX;
                    this.y = e.offsetY;
                }
            },
            stopDrawing(e) {
                if (this.isDrawing === true) {
                    this.drawLine(this.x, this.y, e.offsetX, e.offsetY);
                    this.x = 0;
                    this.y = 0;
                    this.isDrawing = false;
                }
            },
            changeColor(color) {
                this.erase = false
                let ctx = this.ctx
                ctx.globalCompositeOperation="source-over";
                ctx.strokeStyle = color
                this.color = color
            },
            clear() {
                let ctx = this.ctx
                ctx.fillStyle = '#ffffff'
                ctx.clearRect(0,0,this.canvas.width, this.canvas.height)
                ctx.fillRect(0,0,this.canvas.width, this.canvas.height)
            },
            eraser () {
                this.erase = true
                let ctx = this.ctx
                ctx.globalCompositeOperation = 'destination-out';
            },
            changeStrokeSize(size) {
                this.ctx.lineWidth = size;
                this.size = size
            },
            updateCanvasSize () {
                console.log("Yeet")
                this.canvas.style.width ='100%';
                this.canvas.style.height='80vh';
                // set the internal size to match
                this.canvas.width  = this.canvas.offsetWidth;
                this.canvas.height = this.canvas.offsetHeight;

                this.ctx.lineWidth = this.size;
                this.ctx.strokeStyle = this.color;

            },
            saveDrawing() {
                //canvas.toDataURL('image/jpeg', 0.5);
                console.log("Hooot")
                var img = this.canvas.toDataURL()
                console.log("img", img)
                this.$inertia.post('/kids/draw', {
                        drawing: img,
                        item_id: this.itemID
                    })

            },
            saveDrawingRedraw () {
               var img = this.canvas.toDataURL()
                console.log("img", img)
                this.$inertia.post('/kids/draw/redraw', {
                        drawing: img,
                        item_id: this.itemID
                    }) 
            }
        }
    }
</script>
