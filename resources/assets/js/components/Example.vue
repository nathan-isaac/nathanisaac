<template>
    <canvas width="440" height="640" ref="canvas"></canvas>
</template>

<script>
    export default {
        data() {
            return {
                canvas: null,
                ctx: null,
                particle: {
                    position: {
                        x: 100,
                        y: 100
                    },
                    velocity: {
                        x: .2,
                        y: .2
                    },
                    radius: 10,
                    color: '#8BC34A'
                }
            }
        },
        mounted() {
            this.canvas = this.$refs.canvas;
            this.ctx = this.canvas.getContext('2d');
            this.drawParticle();
            window.requestAnimationFrame(this.animateCanvas);
        },
        methods: {
            drawParticle() {
                this.ctx.beginPath();
                this.ctx.arc(this.particle.position.x, this.particle.position.y, this.particle.radius, 0, Math.PI * 2, true);
                this.ctx.closePath();
                this.ctx.fillStyle = this.particle.color;
                this.ctx.fill();
            },
            animateCanvas() {
                this.ctx.clearRect(0,0, this.canvas.width, this.canvas.height);

                this.drawParticle();

                this.particle.position.x += this.particle.velocity.x;
                this.particle.position.y += this.particle.velocity.y;

                if (this.particle.position.y + this.particle.velocity.y > this.canvas.height || this.particle.position.y + this.particle.velocity.y < 0) {
                    this.particle.velocity.y = -this.particle.velocity.y;
                }

                if (this.particle.position.x + this.particle.velocity.x > this.canvas.width || this.particle.position.x + this.particle.velocity.x < 0) {
                    this.particle.velocity.x = -this.particle.velocity.x;
                }

                window.requestAnimationFrame(this.animateCanvas);
            }
        }
    }
</script>

<style lang="sass" rel="stylesheet/sass">
    canvas
        border: 5px solid #8BC34A
</style>