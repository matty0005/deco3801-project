<template>
    <div class="mt-4 ml-4">
        <div>
            You are not signed in, please sign in here
        </div>
        <inertia-link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
            Login
        </inertia-link>

    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>