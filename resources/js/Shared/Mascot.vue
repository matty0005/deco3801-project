<template>
    <div>
        <img v-if="showFirst && emotion == 'happy'" :class="height" class=" object-contain transform" src="/images/kids/mascot_1.png"/> 
        <img v-if="showSecond && emotion == 'happy'" :class="height" class=" object-contain transform" src="/images/kids/mascot_2.png"/> 
        <img v-if="showFirst && emotion == 'excited'" :class="height" class=" object-contain transform" src="/images/kids/Sprout_happy_1.svg"/> 
        <img v-if="showSecond && emotion == 'excited'" :class="height" class=" object-contain transform translate-y-6" src="/images/kids/Sprout_happy_2.svg"/> 
        <img v-if="showFirst && emotion == 'sad'" :class="height" class=" object-contain transform" src="/images/kids/Sprout_sad_1.svg"/> 
        <img v-if="showSecond && emotion == 'sad'" :class="height" class=" object-contain transform translate-y-6" src="/images/kids/Sprout_sad_2.svg"/> 
        <img v-if="showFirst && emotion == 'angry'" :class="height" class=" object-contain transform" src="/images/kids/Sprout_angry_1.svg"/> 
        <img v-if="showSecond && emotion == 'angry'" :class="height" class=" object-contain transform translate-y-6" src="/images/kids/Sprout_angry_2.svg"/> 
        <img v-if="showFirst && emotion == 'confused'" :class="height" class=" object-contain transform" src="/images/kids/Sprout_confused_1.svg"/> 
        <img v-if="showSecond && emotion == 'confused'" :class="height" class=" object-contain transform translate-y-6" src="/images/kids/Sprout_confused_2.svg"/> 
    </div>
</template>

<script>
export default {
    props: {
        emotion: {
            type: String,
            default: "happy"
        },
        height: {
            type: String,
            default: 'h-25v'
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