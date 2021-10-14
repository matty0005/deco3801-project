<template>
    <div>
        <img v-if="showFirst && emotion == 'happy_old'" :class="height" class=" object-contain" src="/images/kids/mascot_1.png"/> 
        <img v-if="showSecond && emotion == 'happy_old'" :class="height" class=" object-contain" src="/images/kids/mascot_2.png"/> 
        <img v-if="showFirst && (emotion == 'happy' || emotion == 'excited')" :class="height.concat(height == 'h-24' ? ' transform translate-y-6':' transform translate-y-16')" class=" object-contain" src="/images/kids/Sprout_happy_3.svg"/> 
        <img v-if="showSecond && (emotion == 'excited' || emotion == 'happy')" :class="height.concat(height == 'h-24' ? ' transform translate-y-4':' transform translate-y-14')" class=" object-contain" src="/images/kids/Sprout_happy_4.svg"/> 
        <img v-if="showThird && emotion == 'excited'" :class="height.concat(height == 'h-24' ? ' transform translate-y-3':' transform translate-y-10')" class=" object-contain " src="/images/kids/Sprout_happy_1.svg"/> 
        <img v-if="showForth && emotion == 'excited'" :class="height.concat(height == 'h-24' ? ' transform translate-y-0':' transform translate-y-0')" class=" object-contain" src="/images/kids/Sprout_happy_2.svg"/> 
        <img v-if="showFith && emotion == 'excited'" :class="height.concat(height == 'h-24' ? ' transform translate-y-3':' transform translate-y-6')" class=" object-contain " src="/images/kids/Sprout_happy_1.svg"/> 
        <img v-if="showSixth && emotion == 'excited'" :class="height.concat(height == 'h-24' ? ' transform translate-y-6':' transform translate-y-16')" class=" object-contain" src="/images/kids/Sprout_happy_4.svg"/> 
        <img v-if="showFirst && emotion == 'sad'" :class="height.concat(height == 'h-24' ? ' transform translate-y-6':' transform translate-y-6')" class=" object-contain" src="/images/kids/Sprout_sad_1.svg"/> 
        <img v-if="showSecond && emotion == 'sad'" :class="height.concat(height == 'h-24' ? ' transform translate-y-6':' transform translate-y-6')" class=" object-contain " src="/images/kids/Sprout_sad_2.svg"/> 
        <img v-if="showFirst && emotion == 'confused'" :class="height.concat(height == 'h-24' ? ' transform translate-y-6':' transform translate-y-6')" class=" object-contain" src="/images/kids/Sprout_confused_1.svg"/> 
        <img v-if="showSecond && emotion == 'confused'" :class="height.concat(height == 'h-24' ? ' transform translate-y-6':' transform translate-y-6')" class=" object-contain " src="/images/kids/Sprout_confused_2.svg"/> 
        <img v-if="showFirst && emotion == 'angry'" :class="height.concat(height == 'h-24' ? ' transform translate-y-6':' transform translate-y-6')" class=" object-contain" src="/images/kids/Sprout_angry_1.svg"/> 
        <img v-if="showSecond && emotion == 'angry'" :class="height.concat(height == 'h-24' ? ' transform translate-y-6':' transform translate-y-6')" class=" object-contain " src="/images/kids/Sprout_angry_2.svg"/> 
       
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
            if (_t.emotion == "excited") {
                var tmpFirst = _t.showFirst
                var tmpSecond = _t.showSecond
                var tmpThird = _t.showThird
                var tmpForth = _t.showForth
                var tmpFith = _t.showFith

                _t.showFirst = _t.showSixth
                _t.showSecond = tmpFirst
                _t.showThird = tmpSecond
                _t.showForth = tmpThird
                _t.showFith = tmpForth
                _t.showSixth = tmpFith
                return 
            }
            _t.showFirst = !_t.showFirst
            _t.showSecond = !_t.showSecond


        }, this.emotion == "excited" ? 150:350);
    },
    data: () => {
        return {
            showFirst: true,
            showSecond: false,
            showThird: false,
            showForth: false,
            showFith: false,
            showSixth: false
        } 
    }

}
</script>

<style>

</style>