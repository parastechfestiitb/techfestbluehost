<template>
    <main>
        <div class="navigation play">
            <div class="title">Exhibitions</div>
            <div class="hirarchy"><span @click="$root.changeRoute('/')">Home</span>><span>Exhibitions</span></div>
        </div>
        <div class="description description-top">
            <div class="image-gallery" v-if="competitions.images[0].length!==0">
                <img :src="competitions.images[0][ind]" alt="Loading Image">
            </div>
            <div class="content" v-html="competitions.about"></div>
        </div>
        <div class="navigation-group">
            <div class="nav-tab" v-for="(competition,key) in competitions.content" :class="'compi-'+key">
                <div class="name d-flex justify-content-between"  @click="compiActivate(key)" >
                    <div class="name-text">{{key}}</div>
                    <div class="is-zonal" v-if="competition.zonal===1">ZONAL</div>
                </div>
                <div class="description" v-if="activeCompi===key">
                    <div class="desc" v-html="competition">
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    export default {
        name: "Exhibitions",
        data: function(){
            return{
                competitions: {
                    about:'<span class="quote">&ldquo;It’s not what you look at that matters, it’s what you see.<br> See it to Believe it&rdquo;</span><br> In its 22nd edition, Techfest is back and ready to amaze you, showcasing the technologies of the times of ancient civilizations to the modern out of the box innovations. Exhibitions at Techfest are one of those rare avenues where you can see and experience the grandeur of what the world calls modern science and technology. It provides an amazing and unique experience. With exhibits of such quality to Techfest, IIT Bombay, Exhibitions provide you an ideal platform to explore technological advancement and update your tech know-how.\n',
                    content: {
                        'tech-connect':'Techfest in association with IRCC (Industrial Research and Consulting Centre), IIT Bombay is organizing TechConnect to demonstrate the R&D activities of IIT Bombay. It will also highlight the fundamental research being carried out and the technologies developed at IIT Bombay. TechConnect showcased 120+ projects from 15 Academic Units from IIT Bombay which included working models, demos, and products. TechConnect brings out the technologies flourished in IIT Bombay, reaching out to critical social needs of the country, also to simultaneously satisfy the requirements of industry and maximize the benefit to society. ',
                        'for-visitors':'There is no entry fee for Exhibitions at Techfest, everybody can attend it free of cost. <br> They must, at all times carry a valid ID proof with them. Visitors below 14 years of age are advised to visit the Exhibitions in the early morning. Exhibitions will be at display from 9:00 A.M. to 3:00 P.M. on all 3 days of the Festival.',
                        // 'exhibitors-not-given':'',
                        'contact':'Feel free to mail us at <a href="mailto:exhibitions@techfest.org">exhibitions@techfest.org</a>. We will get back to you within 3-4 working days. <br>You can also call us at <a href="tel:+918369597198">+91 836 959 7198</a>'
                    },
                    s3: s3Link,
                    contentIndex: 'about',
                    images:[
                        [
                            'https://techfest.org/2018/Exhibitions/s-1.jpg',
                            'https://techfest.org/2018/Exhibitions/s-2.jpg'
                        ],[
                            'https://techfest.org/2018/Exhibitions/l-1.jpg',
                            'https://techfest.org/2018/Exhibitions/l-2.jpg'
                        ],[
                            'https://techfest.org/2018/Exhibitions/l-3.jpg',
                            'https://techfest.org/2018/Exhibitions/l-4.jpg'
                        ],[
                            'https://techfest.org/2018/Exhibitions/s-3.jpg',
                            'https://techfest.org/2018/Exhibitions/s-4.jpg'
                        ]
                    ]
                },
                activeCompi: -1,
                ind:0
            }
        },
        methods:{
            compiActivate: function(e){
                if($('.compi-'+e).hasClass('active')) {
                    $('.nav-tab').css('height',50).removeClass('active');
                    this.activeCompi = -1;
                }
                else {
                    this.activeCompi = e;
                    $('.nav-tab').css('height',50).remove('active');
                    setTimeout(function(){
                        console.log($('.desc').height() + 80);
                        $('.compi-'+e).css('height',$('.desc').height()+100).addClass('active');
                    },100);
                }
            },
            prettyNumber: function(x){
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
        },
        created: function(){
            this.competitions.images[0] = this.competitions.images[0].concat(this.competitions.images[3]);
            let t = this;
            setInterval(function(){
                t.ind = (t.ind+1)%t.competitions.images[0].length;
            },3000);
        }
    }
</script>

<style scoped>
    .navigation{
        padding-left: 15px;
        margin-bottom: 10px;
        padding-bottom: 15px;
        left: 0;
        right: 0;
        height: 80px;
        position: fixed;
        top: 50px;
        -webkit-backface-visibility: hidden;
        border-bottom: 2px solid white;
        background: #000000;
        z-index: 2;
    }
    main{
        background: #000;
        color: #fff;
    }
    .navigation .title{
        font-size: 30px;
    }

    .name-text{
        text-transform: capitalize;
    }
    .hirarchy{
        font-size: 13px;
    }
    .hirarchy span{
        margin:auto 0.5em;
    }
    .description{
        text-align: justify;
        font-size: 15px;
        padding: 40px 15px 15px;
    }

    .description-top{
        text-align: justify;
        font-size: 15px;
        margin-top:100px;
        padding: 40px 15px 15px;
    }
    .description .title{
        font-size: 1.5em;
    }
    .nav-tab{
        border-bottom: 2px solid white;
        padding: 0 10px 15px 10px;
        position: relative;
        transition: all 1s;
        height:55px;
        overflow: hidden;
    }
    .nav-tab.active{
        height: 400px;
    }
    .nav-tab .name:after{
        content: "›";
        position: absolute;
        right: 10px;
        padding: 13px;
        top:0;
        transition: all 1s;
    }
    .nav-tab.active .name:after{
        transform: rotate(90deg);
    }
    .nav-tab:first-child{
        border-top: 2px solid white;
        margin-top:10px;
    }
    .nav-tab:last-child{
        margin-bottom: 10px;
    }
    .content{
        width: 100%;
    }
    .prize-money{
        color: lightgoldenrodyellow;
        font-size: 1.2em;
        margin-top: 10px;
    }
    .name{
        font-size:20px;
        line-height: 20px;
        padding-top:15px;
    }
    .desc{
        line-height: 22px;
        font-size: 15px;
    }
    .explore-more{
        font-size: 16px;
        line-height: 16px;
        margin-top: 10px;
    }
    .is-zonal{
        font-size: 0.5em;
        padding-right:30px;
    }
    .name-text{
        text-transform: capitalize;
    }

    .image-gallery{
        width:100%;
        margin-bottom: 2em;
    }
    .image-gallery img{
        width:100%;
    }
</style>
