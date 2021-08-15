<template>
    <layout class="bg-gray-100 min-h-screen">
        <div class="container mx-auto">
            <canvas class="border-2 boder-gray-300" id="drawingCanvas" @mousedown="beginDrawing" @mousemove="keepDrawing" @mouseup="stopDrawing" />
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
                canvas.height = 1000
                canvas.width = 1000

            },
        methods: {
            drawLine(x1, y1, x2, y2) {
                let ctx = this.ctx;
                ctx.beginPath();
                ctx.strokeStyle = 'black';
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
            }
        }
    }
</script>
