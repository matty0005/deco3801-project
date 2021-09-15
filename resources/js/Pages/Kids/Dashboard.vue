<template>
  <layout class="bg-gray-100 min-h-screen">
    <div class="container m-auto">
        <div class="mb-20">
            <h1 class="text-center text-9xl">Seedlings</h1>
            <h2 class="text-center text-5xl">for kids</h2>
        </div>
        <div class="flex flex-col items-center md:flex-row">
            <div class="mx-auto">
                <Link href="/kids/activities">
                    <div class="bg-white bg-opacity-90 rounded-full h-64 w-64 mx-auto">
                    <img
                        class="h-48 w-48 mx-auto pt-4"
                        src="/images/kids/name_icon.png"
                    />
                    </div>
                </Link>
                <h3 class="py-2 my-6 w-64 mb-24 bg-white bg-opacity-90 ring-3 ring-gray-300 border rounded-3xl text-center text-4xl md:mb-6">Activities</h3>
            </div>
            <div>
                <Link href="/kids/draw">
                    <div class="bg-white bg-opacity-90 rounded-full h-64 w-64 mx-auto">
                    <img
                        class="h-48 w-48 mx-auto pt-4"
                        src="/images/kids/name_icon.png"
                    />
                    </div>
                </Link>
                <h3 class="py-2 my-6 w-64 mb-24 bg-white bg-opacity-90 ring-3 ring-gray-300 border rounded-3xl text-center text-4xl md:mb-6">Draw</h3>
            </div>
            <div class="mx-auto">
                <Link href="/kids/profile">
                    <div class="bg-white bg-opacity-90 rounded-full h-64 w-64 mx-auto">
                    <img
                        class="h-48 w-48 mx-auto pt-4"
                        src="/images/kids/name_icon.png"
                    />
                    </div>
                </Link>
                <h3 class="py-2 my-6 w-64 mb-24 bg-white bg-opacity-90 ring-3 ring-gray-300 border rounded-3xl text-center text-4xl md:mb-6">Profile</h3>
            </div>
      </div>
    </div>
  </layout>
</template>

<script>
import Layout from "@/Layouts/KidsAppLayout";
import CallToActionCard from "@/Shared/CallToActionCard.vue";
import { Link } from '@inertiajs/inertia-vue3';

export default {
  components: {
    Layout,
    CallToActionCard,
    Link,
  },
  data: () => {
    return {
      isHappy: true,
    };
  },
  methods: {
    startActivity() {
      // Take to another page for activity
    },
  },
};
</script>
