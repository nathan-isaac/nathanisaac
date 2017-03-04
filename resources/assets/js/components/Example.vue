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

            let particles = _.range(100);

            _.forEach(particles, particle => {
                this.particles.push({
                    position: {
                        x: _.random(0,440),
                        y: _.random(0,640)
                    },
                    velocity: {
                        x: _.random(-.2,.2),
                        y: _.random(-.2,.2)
                    },
                    radius: 2,
                    color: '#8BC34A'
                });
            });

            this.drawParticles();
            this.drawLines();

            window.requestAnimationFrame(this.animateCanvas);
        },
        methods: {
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
                let maxDistance = 100;
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
    /*#app*/
        /*height: 100vh*/
        /*border: 5px solid #8BC34A*/

    /*canvas*/
        /*width: 100%*/
        /*height: 100vh*/

</style>