<template>
    <div>
        <img v-if="showFirst && emotion == 'happy'" class="h-96 object-contain" src="/images/kids/mascot_1.png"/> 
        <img v-if="showSecond && emotion == 'happy'" class="h-96 object-contain" src="/images/kids/mascot_2.png"/> 
        <img v-if="showFirst && emotion == 'excited'" class="h-96 object-contain" src="/images/kids/Sprout_happy_1.svg"/> 
        <img v-if="showSecond && emotion == 'excited'" class="h-96 object-contain transform translate-y-6" src="/images/kids/Sprout_happy_2.svg"/> 
        <img v-if="showFirst && emotion == 'sad'" class="h-96 object-contain" src="/images/kids/Sprout_sad_1.svg"/> 
        <img v-if="showSecond && emotion == 'sad'" class="h-96 object-contain transform translate-y-6" src="/images/kids/Sprout_sad_2.svg"/> 
        
    </div>
</template>

<script>
export default {
    props: {
        emotion: {
            type: String,
            default: "happy"
        }
    },
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