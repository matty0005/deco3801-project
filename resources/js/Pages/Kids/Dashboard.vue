<template>
    <layout class="bg-gray-100 min-h-screen">
        <div class="container mx-auto">
            <div class="py-12 ">
                <div class="mx-auto ">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-green-800 border-b border-gray-200 bg-green-300 rounded-md">
                            You're in Kids Mode
                        </div>
                    </div>
                </div>
            </div>
            <div class=" bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <CallToActionCard topTitle="You have a game to play" bottomTitle="Play the game now!" buttonText="Play" @onClicked="startActivity" kidsMode/>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from '@/Layouts/KidsAppLayout'
    import CallToActionCard from "@/Shared/CallToActionCard.vue"

    export default {
        components: {
            Layout,
            CallToActionCard
        },
        data: () => {
            return {
                isHappy: true
            }
        },
        methods: {
            startActivity() {
                // Take to another page for activity
            }
        }
    }
</script>
