<template>
  <layout class="bg-gray-100 min-h-screen ">
    <div class="relative m-auto text-gray-800 min-h-80v">
      <div class="cloud w-128 h-64 mx-auto absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/4">
        <div class="pt-28 pb-2 pr-12">
          <h1 class="text-center text-6xl">Seedlings</h1>
          <h2 class="text-center text-3xl">for kids</h2>
        </div>
      </div>
            <!-- <h1 class="text-center text-9xl">Seedlings</h1>
            <h2 class="text-center text-5xl">for kids</h2> -->
        <!-- <div class="flex flex-col items-center md:flex-row">
            <div class="mx-auto">
                <Link href="/kids/activities">
                    <div class="bg-white rounded-full h-64 w-64 mx-auto">
                    <img
                        class="h-48 w-48 mx-auto pt-4"
                        src="/images/kids/name_icon.png"
                    />
                    </div>
                </Link>
                <Link href="/kids/activities">
                  <h3 class="py-2 my-6 w-64 mb-24 bg-white bg-opacity-90 ring-3 ring-gray-300 border rounded-full text-center text-4xl md:mb-6">Activities</h3>
                </Link>
            </div>
            <div>
                <Link href="/kids/draw">
                    <div class="bg-white rounded-full h-64 w-64 mx-auto">
                    <img
                        class="h-48 w-48 mx-auto pt-4"
                        src="/images/kids/name_icon.png"
                    />
                    </div>
                </Link>
                <Link href="/kids/draw">
                  <h3 class="py-2 my-6 w-64 mb-24 bg-white ring-3 ring-gray-300 border rounded-full text-center text-4xl md:mb-6">Draw</h3>
                </Link>
            </div>
      </div> -->

      <div class="flex flex-row-reverse absolute bottom-1/8 right-0 transform -translate-x-1/3">
        <div class="flex flex-col">
          <SpeechBubble class="mb-4" side="right" :text="iWannaDraw" />
          <Link href="/kids/draw" class="mx-auto">
            <img class="h-25v" src="/images/kids/easel.png"/> 
          </Link>
        </div>
      </div>
      <Select @selected="nextStage" v-model="selectNumber" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 w-72 mx-auto "  :options="questionsToAsk"/>

      <SpeechBubble side="right" class="absolute bottom-3/4 left-1/6" :text="textInSpeechBubble" />
      <Mascot emotion="excited" class="absolute bottom-1/4 left-1/6"/>
     
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
      questions: Array
  },
  data: () => {
    return {
      isHappy: true,
      iWannaDraw: "I want to draw",
      textInSpeechBubble: "",
      questionsToAsk: [],
      index: 0,
      selectNumber: null,
    };
  },
  mounted() {
     this.getQuestionAtIndex();
    this.soundOn = this.$page.props.auth.user.kids_audio == 1;
    if (this.soundOn) {
      console.log("here we go again!");
      var audio = new Audio('/audio/welcome_to_kids_mode.mp3'); // path to file
      audio.play();
    }
  },
  methods: {
    startActivity() {
      // Take to another page for activity
      // 
    },
    getQuestionAtIndex() {
        this.textInSpeechBubble = this.questions[this.index]['chatbox']
        this.questionsToAsk = this.getSelectArray(this.questions[this.index]['answers'])

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
