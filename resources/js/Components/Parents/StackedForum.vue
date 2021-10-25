<template>
  <div class="bg-white overflow-hidden">
      <ul class="divide-y divide-gray-200">
        <li v-for="thread in $page.props.trendingForumPosts" :key="thread">
            <Link :href="`/forum/topic/${thread.topic_on_dashboard}/${thread.id}`" class="hover:bg-gray-50 font-medium text-gray-700 text-lg flex flex-row border-r-0 border-b-0 border-gray-300 px-4"> 
                    <div class="justify-center items-start sm:items-center flex flex-col sm:flex-row flex-grow">
                        <div class="justify-center items-center rounded-md  flex-grow my-4">
                            <div v-if="!thread.anonymous" class="font-medium flex flex-row">
                                <img class="rounded-full h-10 w-10 mr-4 sm:h-12 sm:w-12" :src="thread.avatar"/>
                                <div class="flex flex-col">
                                    <div class="text-gray-700 text-base sm:text-lg md:text-xl"> {{thread.title}} </div>

                                    <div class="text-gray-500 text-sm flex-grow font-normal">posted in {{thread.topic_on_dashboard}} - <span class="text-xs">by {{thread.display_name}} </span></div>
                                    <p class="font-normal text-sm text-gray-500" v-if="thread.count >= 0"> {{thread.comments}} comments </p>
                                </div>
                            </div>

                            <div v-else class="font-medium text-parent-600 flex flex-row">
                                <img class="rounded-full h-10 w-10 mr-4 sm:h-12 sm:w-12" src="/images/default_avatar.png"/>

                                <div class="text-gray-400"> Anonymous <span class="text-gray-400 text-sm mb-4 ">posted at {{thread.time}}</span></div>
                            </div>
                        </div>
                        <div class="ml-14 sm:gap-y-1 sm:ml-0 flex-shrink-0 flex flex-row sm:flex-col text-sm font-normal gap-x-8 text-left justify-center pb-2 sm:px-2 md:px-3">
                            <LikeBar :likes="thread.likes" :dislikes="thread.dislikes" :status="thread.liked" :id="thread.id" :isThread="true" />
                            <div class="flex flex-row">
                                <p class="text-gray-700">
                                    {{thread.comments}}
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class=" flex flex-col justify-center items-center">
                        <!-- Heroicon name: solid/chevron-right -->
                        <svg class="h-8 w-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </div> 
                </Link>
            </li>
        </ul>

  </div>
</template>

<script>
import LikeBar from '@/Pages/Forum/LikeBar'
import { Link } from '@inertiajs/inertia-vue3'
export default {
    components: {
        LikeBar,
        Link
    },
    data: () => {
        return {
            threads: [
                {
                    title: 'Please help me boi',
                    topic_on_dashboard: 'Autism',
                    avatar: '/images/default_avatar.png',
                    display_name: 'George Mihnea',
                    time: '12:21',
                    comments: 4,
                    likes: 2,
                    id: 1
                },
                {
                    title: 'Is my child autistic',
                    topic_on_dashboard: 'Autism',
                    avatar: '/images/default_avatar.png',
                    display_name: 'Kevin Huynh',
                    time: '12:21',
                    comments: 1,
                    likes: 0,
                    id: 2
                },
            
            ]
        }
    }
}
</script>

<style>
</style>