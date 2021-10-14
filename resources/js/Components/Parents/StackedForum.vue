<template>
  <div class="">
      <Link :href="`/forum/topic/${thread.topic_on_dashboard}/${thread.id}`" class="font-bold text-gray-700 text-xl flex flex-row border border-l-0 border-r-0 border-b-0 border-gray-300 px-4" v-for="thread in $page.props.trendingForumPosts" :key="thread"> 
                    <!-- <p> {{thread.title}} </p> -->
                <div class="justify-center items-start sm:items-center flex flex-col sm:flex-row flex-grow">
                    <!-- <p class="ml-auto text-base text-gray-400" v-if="thread.topic_on_dashboard"> posted in {{thread.topic_on_dashboard}} </p> -->
                    <div class="justify-center items-center rounded-md  flex-grow my-4">
                        <div v-if="!thread.anonymous" class="font-bold flex flex-row">
        
                            <img class="rounded-lg h-10 w-10 mr-4 sm:h-12 sm:w-12" :src="thread.avatar"/>
                            <div class="flex flex-col">
                                <div class="text-gray-600 text-base sm:text-lg md:text-xl"> {{thread.title}} </div>

                                <div class="text-gray-500 text-sm flex-grow font-normal">posted in {{thread.topic_on_dashboard}} - <span class="text-xs">by {{thread.display_name}} </span></div>
                                <p class="font-normal text-sm text-gray-500" v-if="thread.count >= 0"> {{thread.comments}} comments </p>
                            </div>
                        </div>

                        <div v-else class="font-bold text-parent-600 flex flex-row">
                            <img class="rounded-lg mr-3 h-16 w-16" src="/images/default_avatar.png"/>

                            <div class="text-gray-400"> Anonymous <span class="text-gray-400 text-sm mb-4 ">posted at {{thread.time}}</span></div>
                        </div>
                    </div>
                    <div class="ml-14 sm:ml-0 flex-shrink-0 flex flex-row sm:flex-col text-sm font-normal gap-x-8 text-left justify-center pb-2 sm:px-2 md:px-3 items-center">
                        <div class="text-gray-500">Likes: {{ thread.likes }}</div>
                        <div class="text-gray-500">Comments: {{ thread.comments }}</div>
                    </div>
                </div>

                <div class=" flex flex-col justify-center items-center">
                    <!-- Heroicon name: solid/chevron-right -->
                    <svg class="h-8 w-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                
        </Link>

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