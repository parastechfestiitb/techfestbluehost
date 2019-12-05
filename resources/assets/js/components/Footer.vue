<template>
    <div class="homepage-footer">
        <a class="message-footer" href="https://techfest.org/innovationchallenge">Know more about Innovation Challenge</a>
        <img src="https://techfest.org/2018/footer.svg" alt="footer-background" class="pen footer-background">
        <div class="d-flex justify-content-between">
            <div class="left-footer d-flex justify-content-start">
                <div class="nav-button" @click="$root.routeChange('/about-techfest')">About</div>
                <div class="nav-button" @click="$root.routeChange('/Sponsors')">Sponsors</div>
                <div class="nav-button" @click="$root.routeChange('/media')">Media</div>
                <!--<div class="nav-button">Merchandise</div>-->
            </div>
            <div class="center-footer d-flex justify-content-center">
                <a href="https://www.facebook.com/iitbombaytechfest/" target="_blank" class="fa fa-facebook footer-icon"></a>
                <a href="https://www.instagram.com/techfest_iitbombay/" target="_blank" class="fa fa-instagram footer-icon"></a>
                <a href="https://twitter.com/Techfest_IITB"  target="_blank" class="fa fa-twitter footer-icon"></a>
                <a href="https://www.linkedin.com/company/techfest/" target="_blank" class="fa fa-linkedin footer-icon"></a>
                <a href="https://in.pinterest.com/techfestiitbombay/" target="_blank" class="fa fa-pinterest footer-icon"></a>
                <a href="https://www.youtube.com/user/techfestiitbombay" target="_blank" class="fa fa-youtube footer-icon"></a>
                <a href="https://blog.techfest.org" target="_blank" class="fa fa-bold footer-icon"></a>
            </div>
            <div class="right-footer d-flex justify-content-end">
                <div class="nav-button" @click="$root.routeChange('/Hospitality')">Hospitality</div>
                <div @click="$root.routeChange('/legal')" class="nav-button">Legal</div>
                <div class="nav-button" @click="$root.routeChange('/contact-us')">Contact Us</div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Footer",
        mounted: function(){
            setTimeout(function(){
                let countdown, init_countdown, set_countdown;

                countdown = init_countdown = function() {
                    let cd = document.getElementById('countdown');
                    countdown = new FlipClock(cd, {
                        clockFace: 'DailyCounter',
                        language: 'en',
                        autoStart: false,
                        countdown: true,
                        showSeconds: true,
                        callbacks: {
                            start: function() {
                                return false;
                            },
                            stop: function() {
                                return false;
                            },
                            interval: function() {
                                var time;
                                time = this.factory.getTime().time;
                                if (time) {
                                    return false;
                                }
                            }
                        }
                    });
                    return countdown;
                };

                set_countdown = function(days, hours, minutes, start) {
                    var elapsed, end, left_secs, now, seconds;
                    if (countdown.running) {
                        return;
                    }
                    now = new Date();
                    end = new Date('14 Dec 2018');
                    end = end.getTime();
                    left_secs = Math.round((end - now.getTime()) / 1000);
                    elapsed = false;
                    if (left_secs < 0) {
                        left_secs *= -1;
                        elapsed = true;
                    }
                    countdown.setTime(left_secs);
                    return countdown.start();
                };

                init_countdown();

                set_countdown(14, 5, 48, new Date());

            },500);

        }
    }
</script>

<style scoped>
    .message-footer{
        padding-bottom: 1vw;
        text-decoration: none;
        color: #ffffff !important;
    }
    .homepage-footer{
        position: fixed;
        bottom: 0.6vw;
        left: 3vw;
        right:3vw;
        margin: auto;
        font-size: 1.04vw;
        color: white;
        font-family: "Roboto", sans-serif;
        transition: bottom 300ms;
        z-index:2;
    }
    .homepage-footer .footer-background{
        width: 140vw;
        position: absolute;
        bottom: -3.4vw;
        left: -200vw;
        right: -200vw;
        margin: auto;
    }
    .center-footer a{
        color:white !important;
        text-decoration: none !important;
        transition: color 1s;
    }
    .center-footer a:hover{
        color: #aaa !important;
    }
    .pen{
        pointer-events: none;
    }
    body {
        background: black;
    }

    .countdown-wrapper {
        left: 50%;
        position: fixed;
        bottom: -2vw;
        transform: translate(-54%, -47%) scale(0.35);
    }

    .countdown.flip-clock-wrapper ul {
        height: 3.75vw;
        margin: 0 0.18vw;
        width: 2.5vw;
        box-shadow: 0 0.1vw 0.26vw rgba(0, 0, 0, 0.7);
    }

    .countdown.flip-clock-wrapper ul li {
        line-height: 3.75vw;
    }

    .countdown.flip-clock-wrapper ul li a div div.inn {
        background-color: white;
        color: black;
        font-size: 3.12vw;
        text-shadow: 0 0.05vw 0.10vw #000;
    }

    .countdown.flip-clock-wrapper ul,
    .countdown.flip-clock-wrapper ul li a div div.inn {
        border-radius: 0.26vw;
    }

    .countdown.flip-clock-wrapper ul li a div.down {
        border-bottom-left-radius: 0.26vw;
        border-bottom-right-radius: 0.26vw;
    }

    .countdown.flip-clock-wrapper ul li a div.up:after {
        top: 1.83vw;
    }

    .countdown .flip-clock-dot.top {
        top: 1.07vw;
    }

    .countdown .flip-clock-dot.bottom {
        top: 2.32vw;
    }

    .countdown .flip-clock-dot {
        height: 0.36vw;
        left: 0.36vw;
        width: 0.36vw;
        background: white;
    }

    .countdown .flip-clock-divider {
        height: 3.75vw;
        width: 1.1vw;
    }
    .countdown .flip-clock-divider:first-child {
        width: 0;
    }

    .countdown .flip-clock-divider.seconds .flip-clock-label,
    .countdown .flip-clock-divider.minutes .flip-clock-label {
        right: -5.73vw;
    }

    .countdown .flip-clock-divider .flip-clock-label {
        color: white;
        display: none;
        font-size: 0.78vw;
        width: 5.73vw;
    }

</style>
