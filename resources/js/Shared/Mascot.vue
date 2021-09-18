<template>
    <div>
        <img v-if="showFirst" class="h-96 object-contain" src="/images/kids/mascot_1.png"/> 
        <img v-if="showSecond" class="h-96 object-contain" src="/images/kids/mascot_2.png"/> 
    </div>
</template>

<script>
export default {
    mounted() {
        let _t = this
        setInterval(() => {
            _t.showFirst = !_t.showFirst
            _t.showSecond = !_t.showSecond

        }, 350);
    },
    data: () => {
        return {
            showFirst: true,
            showSecond: false
        } 
    }

}
</script>

<style>

</style>