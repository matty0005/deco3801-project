<template>
  <div class="bg-white shadow overflow-hidden sm:rounded-md">
  <ul class="divide-y divide-gray-200">
    <li v-for="item in list" :key="item.title">
      <div v-on:click="$emit('onClicked', item.id)" class="block hover:bg-gray-50">
        <div class="px-4 py-4 flex items-center sm:px-6">
          <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
            <div class="truncate">
              <div class="flex text-sm">
                <p class="font-medium text-parent-600 truncate">{{ item.title }}</p>
              </div>
              <div class="mt-2 flex">
                <div class="flex items-center text-sm text-gray-500">
                  <!-- Heroicon name: solid/calendar -->
                  <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                  </svg>
                  <p>
                    Closing on
                    <time datetime="2020-01-07">January 7, 2020</time>
                  </p>
                </div>
              </div>
            </div>
            <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
              <div class="flex overflow-hidden -space-x-1">
                <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                5 Min
              </p>
              </div>
            </div>
          </div>
          <div class="ml-5 flex-shrink-0">
            <!-- Heroicon name: solid/chevron-right -->
            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
          </div>
        </div>
      </div>
    </li>

  </ul>
</div>
</template>

<script>
export default {
    props: {
        list:Array
    }

}
</script>

<style>

</style>