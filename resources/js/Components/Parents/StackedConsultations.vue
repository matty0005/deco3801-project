<template>
  <div>
      <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul v-if='bookings.count' role="list" class="divide-y divide-gray-200">

            <li v-for="booking in bookings" :key="booking">
                <Link :href="`/consultation/${booking.id}`"  class="block hover:bg-gray-50">
                    <div class="flex items-center px-4 py-4 sm:px-6">
                    <div class="min-w-0 flex-1 flex items-center">
                        <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" :src="booking.avatar" alt="">
                        </div>
                        <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                        <div>
                            <p class="text-sm font-medium text-parent-600 truncate">{{ booking.who }}</p>
                            <p class="mt-2 flex items-center text-sm text-gray-500">
                            <!-- Heroicon name: solid/mail -->
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <span class="truncate">{{ booking.contact }}</span>
                            </p>
                        </div>
                        <div class="hidden md:block">
                            <div>
                            <p class="text-sm text-gray-900">
                                At
                                <time datetime="2020-01-07">{{ booking.when }}</time>
                            </p>
                            <p class="mt-2 flex items-center text-sm text-gray-500">
                                <!-- Heroicon name: solid/check-circle -->
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                {{booking.type}}
                            </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div>
                        <!-- Heroicon name: solid/chevron-right -->
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    </div>
                </Link>
            </li>

         
        </ul>
        <div v-else class=""> 
            <div class="">
               <div class="px-4 py-5 sm:p-6 sm:pb-4 text-xl font-bold text-gray-700 text-center">
                    You have no consultations scheduled! 
                </div>
            </div>
        </div>
        </div>
  </div>
</template>

<script>


 import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: {
            Link,
        },
    data: () => {
        return {
            bookings: [
                {who: 'Josh Wallace', when: '12:30 20/09/21', contact: 'jw@gmail.com', type: 'Consult', id: 0},
                {who: 'Guinea Pig', when: '9:25 30/09/21', contact: 'gp@gmail.com', type: 'Nom Nom', id: 0},
            ]
        }
    },

    props : {
        bookings : Array, 
    }

}
</script>

<style>

</style>
