<template>
  <div class="">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
      <span class="block">{{ topTitle }}</span>
      <span class="block text-indigo-600">{{ bottomTitle}}</span>
    </h2>
    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
      <div class="inline-flex rounded-md shadow">
        <a href="#" v-on:click="buttonPress" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
          {{ buttonText }}
        </a>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
    props: {
        topTitle: String,
        bottomTitle: String, 
        buttonText: String

    },
    methods: {
        buttonPress() {
            this.$emit('onClicked')
        }
    }
}
</script>

<style>

</style>