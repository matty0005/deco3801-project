<template>
    <div>
        <div class="mx-3 font-bold text-gray-700">
            Question asked
            {{ label }}
        </div>
        <div class="w-1/4 mx-3 my-3">
            <input class="slider" type="range" min="1" max="100" value="0" id="range">
        </div>
    </div>
</template>

<script>
export default {
    props: {
        label: String
    },

    data: () => {
    },

    methods: {
        adjust() {

        }
    }

}
</script>

<style>
.slider {
    -webkit-appearance: none;
    width: 100%;
    height: 0.75rem;
    border-radius: 9999px;  
    --tw-border-opacity: 1;
    background-color: rgba(229, 231, 235, var(--tw-border-opacity));
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}
.slider:hover {
  opacity: 1; /* Fully shown on mouse-over */
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 1.25rem;
    height: 1.25rem;
    border-radius: 9999px; 
    border-width: 1px ;
    --tw-border-opacity: 1;
    border-color: rgba(209, 213, 219, var(--tw-border-opacity));
    /* border-color: #d8d4dc; */
    background: white;
    --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    cursor: pointer;
}

.slider::-moz-range-thumb {
    width: 1.25rem;
    height: 1.25rem;
    border-radius: 9999px;
    border-width: 1px ;
    --tw-border-opacity: 1;
    border-color: rgba(209, 213, 219, var(--tw-border-opacity));
    /* border-color: #d8d4dc; */
    background: white;
    --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    cursor: pointer;
}
</style>