<template>
    <canvas width="440" height="640" ref="canvas"></canvas>
</template>

<script>
    export default {
        data() {
            return {
                canvas: null,
                ctx: null,
                particles: []
            }
        },
        mounted() {
            this.canvas = this.$refs.canvas;
            this.ctx = this.canvas.getContext('2d');

            this.resetCanvasSize(window.innerWidth, window.innerHeight);

            let particles = _.range(125);

            _.forEach(particles, particle => {
                this.particles.push({
                    position: {
                        x: _.random(0,this.canvas.width),
                        y: _.random(0,this.canvas.height)
                    },
                    velocity: {
                        x: _.random(-.5,.5),
                        y: _.random(-.5,.5)
                    },
                    radius: 2,
                    color: '#8BC34A'
                });
            });

            this.drawParticles();
            this.drawLines();

            window.requestAnimationFrame(this.animateCanvas);
            window.addEventListener('resize', event => {
                this.resetCanvasSize(event.target.innerWidth, event.target.innerHeight);
            })
        },
        methods: {
            resetCanvasSize(width, height) {
                this.ctx.canvas.width = width;
                this.ctx.canvas.height = height;
            },
            distance(x1, y1, x2, y2) {
                let distanceSquared = Math.pow(x1 - x2, 2) + Math.pow(y1 - y2, 2);
                return Math.sqrt(distanceSquared);
            },
            drawLines() {
                _.forEach(this.particles, particleA => {
                    _.forEach(this.particles, particleB => {
                        let distance = this.distance(particleA.position.x, particleA.position.y, particleB.position.x, particleB.position.y);
                        this.drawLine(particleA.position.x, particleA.position.y, particleB.position.x, particleB.position.y, distance);
                    });
                });
            },
            drawLine(x1, y1, x2, y2, distance) {
                let opacity = 0;
                let maxDistance = 150;
                let minDistance = 1;

                if (distance == 0) {
                    opacity = 1;
                } else if ( distance <= maxDistance - 1 ) {
                    opacity = 1 - _.round((distance - minDistance) / (maxDistance - minDistance), 2);
                }

                opacity = opacity - 0.4;

                let color = `rgba(139, 195, 74, ${opacity})`;

                this.ctx.beginPath();
                this.ctx.moveTo(x1, y1);
                this.ctx.lineTo(x2, y2);
                this.ctx.closePath();
                this.ctx.strokeStyle = color;
                this.ctx.stroke();
            },
            drawParticles() {
                _.forEach(this.particles, particle => {
                    this.ctx.beginPath();
                    this.ctx.arc(particle.position.x, particle.position.y, particle.radius, 0, Math.PI * 2, true);
                    this.ctx.closePath();
                    this.ctx.fillStyle = particle.color;
                    this.ctx.fill();
                });
            },
            animateCanvas() {
                this.ctx.clearRect(0,0, this.canvas.width, this.canvas.height);

                this.drawParticles();
                this.drawLines();

                _.forEach(this.particles, particle => {
                    particle.position.x += particle.velocity.x;
                    particle.position.y += particle.velocity.y;

                    if (particle.position.y + particle.velocity.y > this.canvas.height || particle.position.y + particle.velocity.y < 0) {
                        particle.velocity.y = -particle.velocity.y;
                    }

                    if (particle.position.x + particle.velocity.x > this.canvas.width || particle.position.x + particle.velocity.x < 0) {
                        particle.velocity.x = -particle.velocity.x;
                    }
                });

                window.requestAnimationFrame(this.animateCanvas);
            }
        }
    }
</script>

<style lang="sass" rel="stylesheet/sass">
    canvas
        width: 100%
        height: 100vh
        position: absolute
        top: 0
        left: 0
        z-index: -100
</style>