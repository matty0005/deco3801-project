<template>
    <layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 bg-green-400 rounded-md">
                        You're in Kids Mode
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from '@/Layouts/KidsAppLayout'

    export default {
        components: {
            Layout,
        },
    }
</script>
