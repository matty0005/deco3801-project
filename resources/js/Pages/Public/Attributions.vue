<template>
  <layout>
      <!-- Feature section with grid -->
      <div class="relative bg-white py-12">
        <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
          <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
            Attributions
          </p>
          <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">
            All of the attributions used throughout the website can be found here to prevent the attributuions from detracting from the overall look and feel of the site.
          </p>
          <div class="mt-12">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        

              <div class="pt-6" v-for="attribute in attributes" :key="attribute.name">
                <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                    <a :href="attribute.link">
                        <div class="-mt-6">
                            <div>
                            <!-- <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-md shadow-lg"> -->
                            <span class="inline-flex items-center justify-center p-3 bg-white rounded-md shadow-xl">
                                <img :src="attribute.src" class="w-24 h-24 bg-white" />
                            </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">{{ attribute.name }}</h3>
                            <p class="mt-5 text-base text-gray-500">
                            {{ attribute.author }} - {{ attribute.license }}
                            </p>
                        </div>
                    </a>
                </div>
              </div>

      


       
            </div>
          </div>
        </div>
      </div>
  </layout>
</template>

<script>
import layout from "@/Layouts/PublicAppLayout"
export default {
    components: {
        layout
    },
    data: () => {
        return {
            attributes: [
                {name: 'Doctor Icon 1', license: 'NC 4.0 Licence', author: 'Vectorified', link: 'https://vectorified.com/father-icon', src: '/images/temp-male-avatar.png', used: '/'},
                {name: 'Doctor Icon 2', license: 'NC 4.0 Licence', author: 'Vectorified', link: 'https://vectorified.com/mother-icon', src: '/images/temp-female-avatar.png', used: '/'},
            ]
        }
    }

}
</script>

<style>

</style>