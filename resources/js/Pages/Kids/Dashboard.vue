<template>
  <layout class="bg-gray-100 min-h-screen">
    <div class="container m-auto text-gray-800">
        <div class="mb-20">
          <div class="bg-white overflow-hidden w-1/2 mx-auto shadow-2xl rounded-3xl">
            <div class="px-4 py-5 sm:p-6">
              <h1 class="text-center text-9xl">Seedlings</h1>
              <h2 class="text-center text-5xl">for kids</h2>
             </div>
           </div>
            <!-- <h1 class="text-center text-9xl">Seedlings</h1>
            <h2 class="text-center text-5xl">for kids</h2> -->
        </div>
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
                  <h3 class="py-2 my-6 w-64 mb-24 bg-white bg-opacity-90 ring-3 ring-gray-300 border rounded-full text-center text-4xl md:mb-6">Draw</h3>
                </Link>
            </div>
      </div> -->
      <div class="flex flex-row-reverse mt-64 -mb-32">
        <div class=" h-64 flex flex-row ">
          <Link href="/kids/activities">
            <h3 class="py-2 my-6 w-64 mb-24 bg-white bg-opacity-90 ring-3 ring-gray-300 border rounded-full text-center text-4xl md:mb-6">Activities</h3>
          </Link>
          <div class="w-4 h-96 bg-gray-50 border-2 border-gray-300 rounded-t-xl"></div>
          <Link href="/kids/draw">
            <h3 class="py-2 my-6 w-64 mb-24 bg-white bg-opacity-90 ring-3 ring-gray-300 border rounded-full text-center text-4xl md:mb-6">Draw</h3>
          </Link>
        </div>
      </div>
      <Mascot />
    </div>
  </layout>
</template>

<script>
import Layout from "@/Layouts/KidsAppLayout";
import CallToActionCard from "@/Shared/CallToActionCard.vue";
import { Link } from '@inertiajs/inertia-vue3';
import Mascot from "@/Shared/Mascot"

export default {
  components: {
    Layout,
    CallToActionCard,
    Link,
    Mascot
  },
  data: () => {
    return {
      isHappy: true,
    };
  },
  mounted() {
    var audio = new Audio('/audio/welcome_to_kids_mode.mp3'); // path to file
    audio.play();

  },
  methods: {
    startActivity() {
      // Take to another page for activity
      // 
    },

  },
};
</script>
