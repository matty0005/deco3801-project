<template>
    <layout class="bg-gray-100 min-h-screen">
        <div class="container mx-auto mt-8">
            <div class="flex flex-row">
                <div @click="changeColor('#EF4444')" class="bg-red-500 h-8 w-8 mr-1 rounded"></div>
                <div @click="changeColor('#F97316')" class="bg-orange-500 h-8 w-8 mr-1 rounded"></div>
                <div @click="changeColor('#FACC15')" class="bg-yellow-400 h-8 w-8 mr-1 rounded"></div>
                <div @click="changeColor('#84CC16')" class="bg-lime-500 h-8 w-8 mx-1 rounded"></div>
                <div @click="changeColor('#22C55E')" class="bg-green-500 h-8 w-8 mx-1 rounded"></div>
                <div @click="changeColor('#22D3EE')" class="bg-cyan-400 h-8 w-8 mx-1 rounded"></div>
                <div @click="changeColor('#3B82F6')" class="bg-blue-500 h-8 w-8 mx-1 rounded"></div>
                <div @click="changeColor('#A855F7')" class="bg-purple-500 h-8 w-8 mx-1 rounded"></div>
                <div @click="changeColor('#D946EF')" class="bg-fuchsia-500 h-8 w-8 mx-1 rounded"></div>
                <div @click="changeColor('#EC4899')" class="bg-pink-500 h-8 w-8 mx-1 rounded"></div>
                <div @click="changeColor('#000000')" class="bg-black h-8 w-8 ml-4 rounded"></div>
                
            </div>
            <canvas class="my-4 border-2 bg-white boder-gray-300" id="drawingCanvas" @mousedown="beginDrawing" @mousemove="keepDrawing" @mouseup="stopDrawing" />
        </div>
    </layout>
</template>

<script>
    import Layout from '@/Layouts/KidsAppLayout'

    export default {
        components: {
            Layout,
        },
        data: () => {
            return {
                drawing: false,
                ctx: null,
                x: 0,
    y: 0,
    isDrawing: false,
    canvas: null,
            }
        },
        mounted() {
                console.log("hoo")
                var canvas = document.getElementById('drawingCanvas')
                this.ctx = canvas.getContext('2d')
                this.ctx.strokeStyle = 'black';

                canvas.height = 1000
                canvas.width = 1000

            },
        methods: {
            drawLine(x1, y1, x2, y2) {
                let ctx = this.ctx;
                ctx.beginPath();
                ctx.lineCap = 'round'
                ctx.lineWidth = 5;
                ctx.moveTo(x1, y1);
                ctx.lineTo(x2, y2);
                ctx.stroke();
                ctx.closePath();
            },
            beginDrawing(e) {
                this.x = e.offsetX;
                this.y = e.offsetY;
                this.isDrawing = true;
                this.drawLine(this.x, this.y, e.offsetX, e.offsetY);

            },
            keepDrawing(e) {
                if (this.isDrawing === true) {
                    this.drawLine(this.x, this.y, e.offsetX, e.offsetY);
                    this.x = e.offsetX;
                    this.y = e.offsetY;
                }
            },
            stopDrawing(e) {
                if (this.isDrawing === true) {
                    this.drawLine(this.x, this.y, e.offsetX, e.offsetY);
                    this.x = 0;
                    this.y = 0;
                    this.isDrawing = false;
                }
            },
            changeColor(color) {
                let ctx = this.ctx
                ctx.strokeStyle = color
            }
        }
    }
</script>
