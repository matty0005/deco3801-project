<template>
  <layout class="bg-gray-100 min-h-screen ">
    <div class="relative m-auto text-gray-800 min-h-80v">

      <div class="absolute flex flex-row -mt-24 top-0 left-0"> 
        <img class="h-16" src = "/images/sunflower-icon.svg"/>
        <p class="text-6xl">{{question_count}}</p>
      </div>

      <div class="cloud w-128 h-64 mx-auto absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/4">
        <div class="pt-28 pb-2 pr-12">
          <h1 class="text-center text-6xl">Seedlings</h1>
          <h2 class="text-center text-3xl">for kids</h2>
        </div>
      </div>

      <div class="flex flex-row-reverse absolute bottom-1/8 right-0 transform -translate-x-1/3">
        <div class="flex flex-col">
          <SpeechBubble class="mb-4" side="right" :text="iWannaDraw" />
          <Link href="/kids/draw" class="mx-auto">
            <img class="h-25v" src="/images/kids/easel.png"/> 
          </Link>
        </div>
      </div>
      <Select @selected="clickedAnswer" v-model="selectNumber" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 w-72 mx-auto "  :options="questionsToAsk"/>

      <SpeechBubble v-if="textInSpeechBubble != ''" side="right" class="absolute bottom-3/4 left-1/6" :text="textInSpeechBubble" />
      <div class="flex flex-col absolute bottom-1/4 left-1/6">
        <div class="flex flex-row">
          <button v-on:click="prevMascot">&#10094;</button>
          <div>
            <Mascot :key="selectedMascot" :emotion="mascots[selectedMascot]"/>
          </div>
          <button v-on:click="nextMascot">&#10095;</button>
        </div>
        <!-- <button class="mx-auto mt-16 -mb-16 w-16 bg-white border border-transparent font-medium rounded-full shadow-sm" type="button">Save!</button> -->
      </div>
    </div>
  </layout>
</template>

<script>
import Layout from "@/Layouts/KidsAppLayout";
import CallToActionCard from "@/Shared/CallToActionCard.vue";
import { Link } from '@inertiajs/inertia-vue3';
import Mascot from "@/Shared/Mascot"
import SpeechBubble from "@/Shared/SpeechBubble"
import Select from "@/Components/Kids/Select.vue"
import axios from 'axios'

export default {
  components: {
    Layout,
    CallToActionCard,
    Link,
    Mascot,
    SpeechBubble,
    Select
  },
  props: {
      questions: Array,
      question_count: Number,
      selected_mascot: String,
  },
  data: () => {
    return {
      isHappy: true,
      iWannaDraw: "I want to draw",
      textInSpeechBubble: "",
      questionsToAsk: [],
      index: 0,
      selectNumber: null,
      mascots: ["excited"],
      selectedMascot: 0,
    };
  },
  mounted() {
    this.soundOn = this.$page.props.auth.user.kids_audio == 1;
    this.selectedMascot = this.mascots.indexOf(this.selected_mascot);

    this.getQuestionAtIndex();
    this.unlockMascot();
    
    

    // if (this.soundOn) {
    //   axios.post('/text/to/speech', {
    //     text: "Hi welcome to kids mode"
    //   }).then(response => {
    //     console.log(response)
    //     console.log(response.data.path)
    //     var audio = new Audio(response.data.path); // path to file
    //     audio.play();
    //   })
    // }
  },
  methods: {
    startActivity() {
      // Take to another page for activity
      // 
    },
    getQuestionAtIndex() {
        this.textInSpeechBubble = this.questions[this.index]['chatbox']
        this.questionsToAsk = this.getSelectArray(this.questions[this.index]['answers'])

        if (this.$page.props.auth.user.kids_audio == 1) {
          axios.post('/text/to/speech', {
            text: this.textInSpeechBubble
          }).then(response => {
            console.log(response)
            console.log(response.data.path)
            var audio = new Audio(response.data.path); // path to file
            audio.play();
          })
        }

        if (this.questions[this.index]['end']) {
            this.ended();
            return 
        }
    },
    getSelectArray(bare){
        var tmp = []

        for (var i = 0; i < bare.length; i++) {
            tmp.push({title: bare[i]})
        }

        return tmp
    },
    nextStage() {
        this.index = this.index + this.questions[this.index].offset + this.selectNumber + 1
        this.getQuestionAtIndex()
        this.selectNumber = null
    },
    clickedAnswer() {

      this.$inertia.post('/kids/activities/count', {}, {
        onFinish: () => {
          this.$inertia.reload({
            only: ['question_count']
          })
        }
      })
      this.nextStage()
    },
    unlockMascot() {
      if (this.question_count <= 2) {
        this.mascots = ["excited", "sad"];
      } else if (this.question_count <= 4) {
        this.mascots = ["excited", "sad", "confused"];
      } else {
        this.mascots = ["excited", "sad", "confused", "angry"];
      }
    },
    nextMascot() {
      this.selectedMascot = (this.selectedMascot + 1) % this.mascots.length
      axios.post('/kids/mascot', {
        selected_mascot: this.mascots[this.selectedMascot]
      })    
    },
    prevMascot() {
      if (this.selectedMascot == 1) {
        this.selectedMascot = this.mascots.length
      } else {
        this.selectedMascot -= 1
      }
      axios.post('/kids/mascot', {
        selected_mascot: this.mascots[this.selectedMascot]
      })   
    },
    ended() {
      var _this = this;
      setTimeout(function() { 
        _this.textInSpeechBubble = "";
        setTimeout(function() {
          _this.$inertia.reload({
            only: ['questions'], 
            onFinish: () => {
                        _this.index = 0;
                        _this.getQuestionAtIndex();
                      },
            });
        }, 3000);
      }, 5000);
    },
  },
};
</script>

<style>
.arrowLeft {
  width: 0;
  height: 0;
  border-top: 30px solid transparent;
  border-bottom: 30px solid transparent;
  border-right: 30px solid white;
}

.arrowRight {
  width: 0;
  height: 0;
  border-top: 30px solid transparent;
  border-bottom: 30px solid transparent;
  border-left: 30px solid white;
}

.cloud {
  background-image: url("/images/cloud.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: contain;
}
</style>
