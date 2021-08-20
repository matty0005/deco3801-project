<template>
    <layout class="bg-gray-100 min-h-screen">
        <div class="container mx-auto">
           HELLO
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
