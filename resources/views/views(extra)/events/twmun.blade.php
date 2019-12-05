<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Techfest World MUN | 2018</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300|Ubuntu:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("asset/css/twmun.css")}}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Techfest World MUN or TWMUN is an international conference organized by Techfest, IIT Bombay. It is an annual simulation of United Nations committees, which invites you to debate, discuss and build a better future.">
    <meta name="keywords" content="conferences, meeting, meetings, committee, committees, UN, UNESCO, UNHRC, HRC, Human, Rights, Human Rights Council, COPUOS, Outer, Space, HUNSC, UNSC, Security, Council, Security Council, CSTD, SPECPOL, Police, SOCHUM, CSW, Women, UN-Habitat, DISEC, AU, African, Union, African Union, Disarmament, WTO, World, Trade, Organization, World Trade Organization, International, International Conference, Model, United, Nations, Model United Nations, United Nations, Model UN, Agenda, Agendas, TWMUN, Techfest World MUN, World MUN, TFMUN, TFWMUN, World Model United Nations ">
    <meta rel="canonical" content="https://m.techfest.org">
    <link rel="author" href="https://plus.google.com/117706965098999491468" />
    <link rel="icon" href="https://techfest.org/2018/favicon.png">
    <meta name="theme-color" content="#000">

    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{asset('2018/thumbnail.png')}}">
    <meta property="og:description" content="Techfest World MUN or TWMUN is an international conference organized by Techfest, IIT Bombay. It is an annual simulation of United Nations committees, which invites you to debate, discuss and build a better future.">
    <meta property="og:title" content="Techfest World MUN | 2018">
    <meta property="og:site_name" content="Techfest 2018-19">
    <meta property="og:see_also" content="https://m.techfest.org">

    <meta itemprop="name" content="Techfest World MUN | 2018">
    <meta itemprop="description" content="Techfest World MUN or TWMUN is an international conference organized by Techfest, IIT Bombay. It is an annual simulation of United Nations committees, which invites you to debate, discuss and build a better future.">
    <meta itemprop="image" content="{{asset('2018/thumbnail.png')}}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="{{url()->current()}}">
    <meta name="twitter:title" content="Techfest World MUN | 2018">
    <meta name="twitter:description" content="Techfest World MUN or TWMUN is an international conference organized by Techfest, IIT Bombay. It is an annual simulation of United Nations committees, which invites you to debate, discuss and build a better future.">
    <meta name="twitter:image" content="{{asset('2018/thumbnail.png')}}">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>

    <style>
        #countdown li:nth-child(3) {
            clear: left;
            margin-left: 156px;
        }

        #countdown li div {
            transform: rotate(45deg);
            display: table-cell;
            vertical-align: middle;
        }

        #countdown li div span {
            display: block;
            font-size: 3rem;
            color: #323031;
        }
        #countdown span{
            color:white !important;
        }

        #countdown{
            position: absolute;
            right:-15px;
            top: 5px;
        }
        #countdown li {
            display: table;
            text-align: center;
            float: left;
            border: 10px solid white;
            color:#fff !important;
            mix-blend-mode: color-burn;
            margin: 2px;
            width: 150px;
            height: 150px;
            border-radius: 100%;
        }
        .hour{
            position: absolute;
            left: 250px;
            top: 140px;
            transform: scale(0.75) translateX(-79px) translateY(-30px);

        }
        .mins{
            position: absolute;
            left: -63px;
            top: 160px;
            transform: scale(0.5);
            transform: translateX(-20px) translateY(-27px) scale(0.6);
        }
        .days{
            position: absolute;
            top: 10px;
            left: 100px;
        }
        @media(max-width:992px){
            .comm-img{
                display: block;
                margin-bottom: 10px;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

<div id="app">
    <div class="d-flex main">
        <div class="d-flex align-items-center h-100" style="width: calc(100vw - 52px) !important;left: 52px;position: relative;">
            <div class="d-flex justify-content-center w-100">
                <div class="d-flex flex-column">
                    <div class="d-flex justify-content-center w-100" style="text-align: center;">
                        <img src="{{asset('asset/images/logo.png')}}" alt="logo" class="logo" style="margin: 8vh;">
                    </div>

                    <div class="tw center" style="padding: 0 25px;">
                        TECHFEST WORLD MUN
                    </div>
                    <div class="center">14<sup>th</sup> - 16<sup>th</sup> December 2018</div>
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="align-items-center">
                <div class="home menu-item">
                    <div class="HOME" @click="removeModal">
                        <div class="logo-item">
                            <img src="http://www.tematy.info/library/h/home-icon-png-transparent/home-icon-png-transparent-02.jpg" alt="HOME" class="logo-icon">
                        </div>
                        <div class="text">
                            HOME
                        </div>
                    </div>
                </div>
                <template v-for="(value,key) in menu">
                    <div  class="menu-item">
                        <div :class="key" @click="key!=='RESOURCES'?showModal(key):openresource('https://drive.google.com/drive/folders/1O36tYco4kHEuCprvqEmWwW1L_uXlbUdo?usp=sharing')">
                            <div class="logo-item">
                                <img :src="value" :alt="value" :class="key+'-logo'" class="logo-icon">
                            </div>
                            <div class="text">
                                @{{ key }}
                            </div>
                        </div>
                    </div>
                </template>
            </div>

        </div>
        <div class="screen">
            <div class="d-flex align-items-center abcd">
                <div class="social">
                    <div v-for="(val,key) in soc" class="soc-item">
                        <a :href="val.url" target="blank"><i :class="val.icon" class="soc-icons"></i></a>
                    </div>
                </div>
            </div>
            <div class="modal-menu" :class="currentModal==='AMBASSADORS'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <h1 style="text-align: center;">AMBASSADORS</h1><br>
                <h2>Releasing soon!</h2>
            </div>
            <div class="modal-menu" :class="currentModal==='FAQ'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <h1 style="text-align: center;">FREQUENTLY ASKED QUESTIONS</h1><br>
                <div class="questions" v-for="(val,key) in qa">
                    <div class="q">
                        @{{ val.q }}
                    </div>
                    <div class="a">
                        @{{ val.a }}
                    </div>
                    <br>
                </div>
            </div>
            <div class="modal-menu contactus-modal" :class="currentModal==='CONTACT US'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <h1 style="text-align: center;">CONTACT US</h1><br>
                <div class="d-flex align-items-center">
                    <div>
                        <div class="row">
                            <div class="col-md-6 col-12 text-left">
                                For any queries or details/collaborations, feel free to reach out to us! <br>
                                <b>Email ID:</b><br>
                                <div class="pl-5 pr-5">mun@techfest.org</div><br>
                                <b>Address:</b>
                                <div class="pl-5 pr-5">
                                    Techfest Office
                                    Students' Activity Center
                                    IIT Bombay, Powai, Mumbai
                                    Maharashtra, India - 400076
                                    <br>
                                    <br>
                                </div>
                                <strong>
                                    To get in touch with the Secretariat, <br><button class="button-style play-font btn btn-primary btnn btn-sm" style="padding: 0.65rem !important;margin-left: 5.8rem !important;" @click="showModal('about4')">Click Here!</button>
                                    <br><br>
                                </strong>
                            </div>
                            <div class="map col-md-6 col-12" style="opacity: 1 !important;">
                                <iframe height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.4121005393417!2d72.91107921475432!3d19.13343018705502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7f189efc039%3A0x68fdcea4c5c5894e!2sIndian+Institute+of+Technology+Bombay!5e0!3m2!1sen!2sin!4v1533363986438" width="800" height="600" frameborder="0" style="border:0" allowfullscreen class="h-100 w-100"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="about1Modal modal-menu" :class="currentModal==='about1'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <div class="modal-head">ABOUT TECHFEST WORLD MUN</div>
                <div class="modal-text">
                    <br>
                    <i style="font-size: 18px">“Innovation and persuasion are the distinguishing factors between a leader and a follower.”</i><br><br>
                    Techfest recognizes the limitless potential in the young minds all over the world to come together and innovate comprehensive and convincing solutions to some of the most pressing international concerns. For this, we invite you to 3 days of intense debating, discussing, interacting and socializing at the Techfest World Model United Nations 2018.
                    Techfest World Model United Nations or TWMUN invites the young and enthusiastic minds to cater to the need to recognize leaders and innovators globally.
                    <br><br>Techfest World MUN, with the motto of ‘Evolving with Diplomacy’, aims to emphasize the importance of developing mutual agreements and understanding while prioritizing diplomacy. Being one of the highest followed conferences all over the world, with 550,000+ online follower count, this year we bring you a simulation of 12 eccentric committees with a total prize worth of over 300,000 INR.
                    <br><br>
                    This 14th, 15th and 16th December, come, join the global renascence by choosing from 12 different committees. With thrilling agendas, suit up to delve into this escapade of debating and professionalism!
                </div>
            </div>
            <div class="about2Modal modal-menu" :class="currentModal==='about2'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <div class="modal-head">ABOUT TECHFEST</div>
                <div class="row">
                    <div class="modal-text col-md-6 col-12 mb-5">
                        <br>
                        The Annual Science and Technological festival of IIT Bombay-Techfest is recognized as Asia’s largest Science and Technological Festival patronized by MAKE IN INDIA, UNESCO, STARTUP INDIA, SAYEN & CEE with a footfall of more than 1,75,000+ people comprising mainly of the youth from across the nation and an outreach of over 2,500+ colleges across India and over 500+ overseas.
                        Techfest provides a platform for one and all to witness one of the most beautiful and groundbreaking amalgamations of science and technology with pure delight and enthusiasm. With display of motivating orations, state of the art technology, cut-throat competitions and breathtaking performances for its audience, Techfest for the past 21 years has served to be the ideal destination for the millenials to learn, create and experience the beauty of technology.
                        <br><br>
                        <button class="button-style play-font btn btn-primary btnn" data-toggle="modal" @click="stopScroll">Watch the Aftermovie</button>
                    </div>
                    <div class="d-flex align-items-start modal-img col-md-6 col-12" style="opacity: 1 !important;">
                        <img src="https://techfest.org/2018/Get/letter.jpg" alt="PM Letter" class="letter">
                    </div>
                    <br>
                </div>
            </div>
            <div class="modal fade" id="afterMovie" tabindex="-1" role="dialog" aria-labelledby="after-movie" aria-hidden="true" v-if="showAfterMovie" @click="hideAfterMovie">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="d-flex w-100 h-100 justify-content-center">
                            <div class="d-flex h-100  align-items-center">
                                <div class="modal-body">
                                    <div class="cross">
                                        <button type="button" class="close fa-3x " data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <iframe width="960" height="500" src="https://www.youtube.com/embed/2z3CEBv8PLI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about3Modal modal-menu" :class="currentModal==='about3'?'active':''">
                <div class="close" @click="removeModal">X</div>
                Dear visitors,
                <br><br>
                It is with the utmost pleasure that we address you here. At Techfest World MUN, we have always believed in the ability of diplomacy to extend beyond the realms of boardrooms and international conventions. We believe that diplomacy is not a skill or a characteristic that can be possessed by an entity but rather is an art that needs to be learnt and appreciated by everyone. The theme for our conference this year is “Evolving with Diplomacy.”
                <br><br>
                This theme was chosen after great deliberation to encompass and acknowledge the fact that it would not be fair to assume that two people, corporations, organisations, or nations shall continue to treat and communicate with each other in a consistent manner with no regard to the continually propelled chain of events around the context and the chaos they generate. For example, the two executive board members that you may or may not have interacted with at Techfest World MUN 2016 would not have taken effort to assure to you the highest standards of debate that the conference aims to deliver. While the two Deputy Secretary Generals at Techfest World MUN 2017 would possibly not have looked into making sure that you are aware of the realm of hospitality and logistical comfort that the conference delivers to you.
                <br><br>
                We, the same set of people are now capable of, and more importantly, allowed to promise and so we do.

                <br><br>
                Techfest MUN World has taught us a lot and it is a matter of prestige for us. It is an honour to be able to be able to contribute to the propagation of this legacy: a legacy you could be a part of.
                We hope we live up to the hype and execute another excellent conference.
                <br><br>
                Warmest Regards,
                <br><br>
                <div class="d-flex justify-content-between">
                    <div>
                        Abhishek Patil
                        <br>
                        Secretary General
                    </div>
                    <div>
                        Avi Seth
                        <br>
                        Secretary General
                    </div>
                </div>
            </div>
            <div class="about4Modal modal-menu" :class="currentModal==='about4'?'active':''" style="opacity: 0.95 !important;">
                <div class="close" @click="removeModal">X</div>
                <div class="modal-head" style="text-align: center;">SECRETARIAT</div>
                <br><br>
                <div class="row">
                    <div class="posts col-12 col-md-6" v-for="s in secrt">
                        <div class="card bg-dark" style="width: 18rem;">
                            <img class="card-img-top w-100 h-auto" :src="s.img" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-text">
                                    @{{  s.name }}
                                </div>
                                <div>
                                    @{{ s.post }}
                                </div>
                                <div v-if="s.email!=null">
                                    Email: @{{ s.email }}
                                </div>
                                <div v-if="s.contact!=null">
                                    Contact: @{{ s.contact }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comm1Modal modal-menu" :class="currentModal==='comm1'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <div class="center">
                    The United Nations Educational, Scientific and Cultural Organization (School)
                </div>
                <hr width="100%" color="white">
                <div class="d-md-flex justify-content-around align-items-center">
                    <div>Access to education and healthcare in conflict and post-conflict zones.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/unesco1.jpg')}}" alt=""></div>
                </div>
                <div class="d-md-flex justify-content-around align-items-center flex-row-reverse">
                    <div>To suggest measures for the protection of cultural heritage in the middle east.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/unesco2.jpg')}}" alt=""></div>
                </div>
                <br>
                <div class="mod-text">
                    The United Nations Educational, Scientific and Cultural Organization seeks to build peace through international cooperation in Education, the Sciences and Culture. UNESCO's programmes contribute to the achievement of the Sustainable Development Goals defined in Agenda 2030, adopted by the UN General Assembly in 2015.

                    UNESCO develops educational tools to help people live as global citizens free of hate and intolerance. UNESCO works so that each child and citizen has access to quality education. By promoting cultural heritage and the equal dignity of all cultures, UNESCO strengthens bonds among nations. UNESCO fosters scientific programmes and policies as platforms for development and cooperation. UNESCO stands up for freedom of expression, as a fundamental right and a key condition for democracy and development. Serving as a laboratory of ideas, UNESCO helps countries adopt international standards and manages programmes that foster the free flow of ideas and knowledge sharing.
                </div>

            </div>
            <div class="comm2Modal modal-menu" :class="currentModal==='comm2'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <div class="center">
                    United Nations Human Rights Council
                </div>
                <hr width="100%" color="white">
                <div class="d-md-flex justify-content-around align-items-center">
                    <div>To suggest measure for the Protection of freedom of expression in the middle east with special emphasis on atheists/unaffiliated.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/hrc11.jpg')}}" alt="" class="hrc"></div>
                </div>
                <div class="d-md-flex flex-row-reverse justify-content-around align-items-center flex-row-reverse">
                    <div>To discuss the promotion of Gender Equality in Education.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/hrc22.png')}}" alt="" style="filter: invert(100%);width: 175px;"></div>
                </div>
                <br>
                <div class="mod-text">
                    The Human Rights Council is an organ which handles human rights violations in different parts of the globe. The UN-member nations try to collectively to find amicable solutions to the problems and work in order to prevent them from even coming into existence in the first place. Although there are many different cultures and aspects which shall be valued, there are universal basic rights such as, but not limited to, right to life, right to freedom, right to subsistence level and right to religious freedom which are supposed to be granted to all human beings without discrimination. The Council is made up of 47 United Nations Member States which are elected by the UN General Assembly.
                </div>
            </div>
            <div class="comm3Modal modal-menu" :class="currentModal==='comm3'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <div class="center">
                    United Nations Committee on the Peaceful Uses of Outer Space
                </div>
                <hr width="100%" color="white">

                <div class="d-md-flex justify-content-around align-items-center">
                    <div>To discuss the need for improvement in the International Legislation on the Commercial Uses of Outer Space.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/copuos13.jpg')}}" alt=""></div>
                </div>

                <div class="d-md-flex justify-content-around align-items-center flex-row-reverse">
                    <div>To discuss the threat of use of Nuclear Power Sources in Outer Space.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/copuos21.jpg')}}" alt=""></div>
                </div>
                <br>
                <div class="mod-text">
                    United Nations Committee on the Peaceful Uses of Outer Space was formed under the General Assembly Fourth Committee: Special, Political and Decolonization, in 1959. It is tasked with regulating the exploration, and use of space for the benefit of all humanity; for peace, security and development along with studying legal problems arising from space exploration.
                    In the past, UNCOPUOS played crucial roles in adapting the five treaties and five principles of outer space and with the fast-paced technological development, the agenda of the Committee is constantly evolving. However, the fundamental duty of the Committee is to form international cooperation in space exploration and find ways to use space technology the global development agenda.

                </div>
            </div>
            <div class="comm4Modal modal-menu" :class="currentModal==='comm4'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <div class="center">
                    Historical United Nations Security Council
                </div>
                <hr width="100%" color="white">

                <div class="d-md-flex align-items-center justify-content-around">
                    <div>
                        The nationalization of Suez Canal.
                    </div>
                    <div class="comm-img">
                        <img src="{{asset('asset/images/hunsc11.jpg')}}" alt="" style="height: 275px;width: 385px;">
                    </div>
                </div>
                <div class="mod-text">
                    The United Nations Security Council is one of the six principal organs and the primary decision-making body of the United Nations. In effect since 1946, the UNSC undertakes matters of peacekeeping and security, rules out international sanctions and is responsible for new membership to the UN and amendments to the existing UN Charter. The UNSC typically consists of 15 member nations, of which 5 - USSR (now Russian Federation), United Kingdom, France, United States of America and China (now People’s Republic of China) - are permanent members with veto powers. The remaining 10 members are elected on a biennial basis with the presidency of the SC switching between its members on a monthly basis.
                </div>
            </div>
            <div class="comm5Modal modal-menu" :class="currentModal==='comm5'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <div class="center">
                    Commission on Science and Technology for Development
                </div>
                <hr width="100%" color="white">

                <div class="d-md-flex justify-content-around align-items-center">
                    <div>To discuss measures for ensuring the safety and ethical use of Artifical Intelligence and algorithm learning machines.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/uncstd1.jpg')}}" alt=""></div>
                </div>

                <div class="d-md-flex justify-content-around align-items-center  flex-row-reverse">
                    <div>To discuss the need for Global Internet Privacy Regulations.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/uncstd2.jpg')}}" alt=""></div>
                </div>
                <br>
                <div class="mod-text">
                    The Commission on Science and Technology for Development is a subsidiary organization of the Economic and Social Council of the United Nations. Formed in 1992, the CSTD has provided the General Assembly and ECOSOC with sophisticated insight on relevant issues through policy recommendations. It serves as the UN’s forum for discussion of science and technology, the Commission aims to develop goals and policy to promote progress throughout the world, especially in developing nations. The CSTD has focused on newly emerging technologies, establishing the infrastructure to foster development, and promoting employment in newly forming sectors of the economy.
                </div>
            </div>
            <div class="comm8Modal modal-menu" :class="currentModal==='comm8'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <div class="center">
                    GA IV : Special Political and Decolonization Committee (School)
                </div>
                <hr width="100%" color="white">

                <div class="d-md-flex justify-content-around align-items-center">
                    <div>Discussing the Jerusalem issue: Holy Sites.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/specpol1.jpg')}}" alt="" style="height: 235px;width: 335px;"></div>
                </div>

                <div class="d-md-flex justify-content-around align-items-center flex-row-reverse">
                    <div>Stockpile destruction of Explosive Remnants of War.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/specpol2.jpg')}}" alt="" style="height: 235px;width: 335px;"></div>
                </div>
                <br>
                <div class="mod-text">
                    The Fourth Committee of the United Nations General Assembly is the Special Political and Decolonization Committee. The committee was initially bifurcated into two separate committees: the Decolonization Committee and the Special Political Committee. The committee consists of all 193 Member States, all with the intention of helping previously colonized developing countries decrease their dependency on their former colonizers. The aim of the committee is to help more countries become independent, self-sufficient, and to free them of their troubling history.
                </div>
            </div>
            <div class="comm7Modal modal-menu" :class="currentModal==='comm7'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <div class="center">
                    GA III : Social, Cultural and Humanitarian Affairs Committee (School)
                </div>
                <hr width="100%" color="white">

                <div class="d-md-flex justify-content-around align-items-center">
                    <div>To discuss Climate Change induced migration.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/sochum1.jpg')}}" alt="" style="width: 310px;"></div>
                </div>

                <div class="d-md-flex justify-content-around align-items-center flex-row-reverse">
                    <div>To discuss the issue of child trafficking in the Indian subcontinent.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/sochum2.jpg')}}" alt=""></div>
                </div>
                <br>
                <div class="mod-text">
                    The United Nations’ General Assembly’s Third Committee is the Social, Cultural and Humanitarian Committee that deals with matters of cultural and humanitarian relevance, this includes broad mandate discussion on the preservation of cultures and languages, the ongoing refugee crisis and other humanitarian issues.
                </div>
            </div>
            <div class="comm9Modal modal-menu" :class="currentModal==='comm9'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <div class="center">
                    Commission on the Status of Women
                </div>
                <hr width="100%" color="white">

                <div class="d-md-flex justify-content-around align-items-center">
                    <div>To discuss the status of women in polygamous relationships with special emphasis on polygyny.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/csw1.jpg')}}" alt=""></div>
                </div>

                <div class="d-md-flex justify-content-around align-items-center flex-row-reverse">
                    <div>To discuss global sexual health & reproductive rights of women.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/csw2.jpg')}}" alt=""></div>
                </div>
                <br>
                <div class="mod-text">
                    The Commission on the Status of Women (CSW) is the principal global intergovernmental body exclusively dedicated to the promotion of gender equality and the empowerment of women. A functional commission of the Economic and Social Council (ECOSOC), it was established by Council resolution 11(II) of 21 June 1946.
                    The CSW is instrumental in promoting women’s rights, documenting the reality of women’s lives throughout the world, and shaping global standards on gender equality and the empowerment of women.UN Women supports all aspects of the Commission’s work. The Entity also facilitates the participation of civil society representatives. The Commission adopts multi-year work programmes  to appraise progress and make further recommendations to accelerate the implementation of the Platform for Action. These recommendations take the form of negotiated agreed conclusions on a priority theme.
                </div>
            </div>
            <div class="comm10Modal modal-menu" :class="currentModal==='comm10'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <div class="center">
                    UN Habitat (School)
                </div>
                <hr width="100%" color="white">

                <div class="d-md-flex justify-content-around align-items-center    ">
                    <div>Discussing sustainable urban development.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/hab1.jpg')}}" alt="" style="height: 240px;width: 325px;"></div>
                </div>

                <div class="d-md-flex justify-content-around align-items-center flex-row-reverse">
                    <div>To discuss measure for post-disaster victim rehabilitation.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/hab2.jpg')}}" alt="" style="height: 240px;width: 325px;"></div>
                </div>
                <br>
                <div class="mod-text">
                    UN-Habitat is the United Nations programme working towards a better urban future. Its mission is to promote socially and environmentally sustainable human settlements development and the achievement of adequate shelter for all.

                    Mandated by the UN General Assembly in 1978 to address the issues of urban growth, it is a knowledgeable institution on urban development processes and understands the aspirations of cities and their residents. For 40 years UN-Habitat has been working on  human settlements throughout the world, focusing on building a brighter future for villages, towns, and cities of all sizes. Because of these four decades of extensive experience, from the highest levels of policy to a range of specific technical issues, UN-Habitat has gained a unique and a universally acknowledged expertise in all things urban.
                    This has placed UN-Habitat in the best position to provide answers and achievable solutions to the current challenges faced by our cities. UN-Habitat is capitalizing on its experience and position to work with partners in order to formulate the urban vision of tomorrow. It works to ensure that cities become inclusive and affordable drivers of economic growth and social development.
                </div>
            </div>
            <div class="comm6Modal modal-menu" :class="currentModal==='comm6'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <div class="center">
                    GA I : Disarmament and International Security Committee
                </div>
                <hr width="100%" color="white">

                <div class="d-md-flex justify-content-around align-items-center">
                    <div>Threats to international peace and security due to cyberspace.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/disec1.jpg')}}" alt="" style="height: 230px;width: 340px;"></div>
                </div>

                <div class="d-md-flex justify-content-around align-items-center flex-row-reverse">
                    <div>Concerns over the use of UAVs.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/disec2.jpg')}}" alt="" style="height: 230px;width: 340px;"></div>
                </div>
                <br>
                <div class="mod-text">
                    The United Nations’ General Assembly’s First Committee on Disarmament and International Security is one of six main committees of the UNGA. As the name suggests, this committee discusses issues concerning disarmament and related international security threats. All 193 member states of the UN are mandated to attend the annual DISEC meetings held in the month of October.
                </div>
            </div>
            <div class="comm11Modal modal-menu" :class="currentModal==='comm11'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <div class="center">
                    African Union
                </div>
                <hr width="100%" color="white">

                <div class="d-md-flex justify-content-around align-items-center">
                    <div>Discussion on measures to address the issue of conflict diamonds.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/au1.jpg')}}" alt=""></div>
                </div>

                <div class="d-md-flex justify-content-around align-items-center flex-row-reverse">
                    <div>Discussion on the issue of maternal health in Africa.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/au2.jpg')}}" alt=""></div>
                </div>
                <br>
                <div class="mod-text">
                    The African Union emerged from the Organisation of African Unity (OAU) which was established in 1963 with a charter signed by 32 countries in Addis Ababa. The AU replaced the OAU in 2002 with 51 members.AU has 12 organs including the Assembly of the Union, the Pan-African Parliament, the AU Commission, the Specialized Technical Committees , the Financial Institutions, AU advisory board on corruption, the Executive Council, the Peace and Security Council, the Permanent Representatives Committee, Judicial and Human Rights Institutions, the Economic Social and Cultural Council and the AU Commission on International Law.

                    It was developed along the lines of the European Union and has ten commissioners overseeing departments including political affairs, agriculture and peace and security. Its founding charter mandates it to work for “democracy, human rights and development”, while it also promotes investment in the continent and sends peacekeepers to trouble spots.
                </div>
            </div>
            <div class="comm12Modal modal-menu" :class="currentModal==='comm12'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <div class="center">
                    World Trade Organization
                </div>
                <hr width="100%" color="white">

                <div class="d-md-flex justify-content-around align-items-center">
                    <div>Investment Facilitation with Special Reference to Belt and Road Initiative.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/wto1.jpg')}}" alt="" style="height: 250px;width: 330px;"></div>
                </div>

                <div class="d-md-flex justify-content-around align-items-center flex-row-reverse">
                    <div>Discussing economic alternatives to tourism for small island developing states.</div>
                    <div class="comm-img"><img src="{{asset('asset/images/wto2.jpg')}}" alt="" style="height: 250px;width: 330px;"></div>
                </div>
                <br>
                <div class="mod-text">
                    The WTO provides a forum for negotiating agreements aimed at reducing obstacles to international trade and ensuring a level playing field for all, thus contributing to economic growth and development. The WTO also provides a legal and institutional framework for the implementation and monitoring of these agreements, as well as for settling disputes arising from their interpretation and application.
                    <br>
                    The WTO's founding and guiding principles remain the pursuit of open borders, the guarantee of most-favoured-nation principle and non-discriminatory treatment by and among members, and a commitment to transparency in the conduct of its activities. The opening of national markets to international trade, with justifiable exceptions or with adequate flexibilities, will encourage and contribute to sustainable development, raise people's welfare, reduce poverty, and foster peace and stability.
                </div>
            </div>
            <div class="reg1Modal modal-menu" :class="currentModal==='reg1'?'active':''">
                <h1 style="text-align: center;">Executive Board Member</h1>
                <br><br>
                <div class="d-flex h-100">
                    <div>
                        <div class="close" @click="removeModal">X</div>

                        <h2>Things to be provided :</h2>
                        1). Lunch & Breakfast for 3 days <br>
                        2). Executive Board Renumeration <br>
                        3). Free Accommodation <br>
                        4). VIP access to all afternights at Techfest <br>
                        5). Executive Board Kit <br> <br>
                        <div>
                            To register,<a href="https://tiny.cc/EBApps" target="blank"><button class="button-style play-font btn btn-primary btnn btn-sm p-1 ml-2">Click Here</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reg2Modal modal-menu" :class="currentModal==='reg2'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <h1 style="text-align: center;">Rapporteur</h1>
                <br>
                <h2>Things to be provided :</h2>
                1). Lunch & Breakfast for 3 days<br>
                2). Free Accommodation<br>
                3). VIP access to all afternights at Techfest<br>
                4). Executive Board Kit<br>
                <br>
                To register, <a href="https://docs.google.com/forms/d/e/1FAIpQLSczoxO3KvVgEYZAh79zDPcZUjlMfuOCYOteqmOuNupMGbx9cQ/viewform" target="blank"><button class="button-style play-font btn btn-primary btnn btn-sm p-1 ml-2">Click Here</button></a>
            </div>
            <div class="reg3Modal modal-menu" :class="currentModal==='reg3'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <h1 style="text-align: center;">International Ambassador</h1><br>
                Register, and join the organising team of one of the largest international conferences in India! <br>
                Opportunities provided : <br>
                1). A chance to lead the contingent from your country <br>
                2). Discounted registration and accommodation rates <br>
                3). Certificate of Appreciation from Techfest, IIT Bombay <br>
                4). Coordinate and interact with ambassadors from all over the world<br><br><br>
                To become an International Ambassador:<br>
                <a href="http://tiny.cc/IntlAmbassadors" target="_blank">
                    <button class="btn btn-lg btn-secondary">Click here </button>
                </a>

                <div class="row">
                    <div class="posts col-12 col-md-6">
                        <div class="card bg-dark" style="width: 18rem;">
                            <img src="{{asset('asset/images/amb1.jpg')}}" class="card-img-top w-100 h-auto" alt="amb">
                        </div>
                    </div>
                    <div class="posts col-12 col-md-6">
                        <div class="card bg-dark" style="width: 18rem;">
                            <img src="{{asset('asset/images/amb2.jpg')}}" class="card-img-top w-100 h-auto" alt="amb">
                           </div>
                    </div>
                    <div class="posts col-12 col-md-6">
                        <div class="card bg-dark" style="width: 18rem;">
                            <img src="{{asset('asset/images/amb3.jpg')}}" class="card-img-top w-100 h-auto" alt="amb">
                         </div>
                    </div>
                    <div class="posts col-12 col-md-6">
                        <div class="card bg-dark" style="width: 18rem;">
                            <img src="{{asset('asset/images/amb4.jpg')}}" class="card-img-top w-100 h-auto" alt="amb">
                          </div>
                    </div>
                </div>
                {{--Payment portal launching soon.--}}
                {{--<h2 style="text-align: center;">Releasing soon!</h2>--}}
            </div>
            <div class="reg4Modal modal-menu" :class="currentModal==='reg4'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <h1 style="text-align: center;">Delegate</h1><br>
                Things to be provided : <br>
                1). Lunch & Breakfast for 3 days <br>
                2). Delegate Kit <br>
                3). Accommodation kit for participants taking accommodation <br>
                4). VIP access to all afternights at Techfest <br><br><br>
                PRIORITY ROUND is now open! To register and avail discounted rates: <br>
                <a href="https://goo.gl/forms/3HG2waBFQLzM9wR12" target="_blank">
                    <button class="btn btn-lg btn-secondary w-25">Register</button>
                </a>
                <br>
                <br>
                Payment portal has started, click below to proceed to payment portal.<br>
                <button class="btn btn-primary btn-lg w-25" onclick="window.open('https://techfest.org/payment')">Pay Now</button>
            </div>
            <div class="reg5Modal modal-menu" :class="currentModal==='reg5'?'active':''">
                <div class="close" @click="removeModal">X</div>
                <h1 style="text-align: center;">Delegation</h1><br>
                Register together as a delegation to avail discounted rates!<br>
                Things to be provided : <br>
                1). Lunch & Breakfast for 3 days <br>
                2). Delegate Kit <br>
                3). Accommodation kit for participants taking accommodation <br>
                4). VIP access to all afternights at Techfest <br><br><br>
                {{--<h2 style="text-align: center;">Priority Round releasing soon!</h2>--}}
                PRIORITY ROUND is now open! To register and avail discounted rates: <br>
                <a href="https://docs.google.com/forms/d/1Xuj0oDna7UY-SdmJ0a5_apSe04UwK8ZWGQyIu6BaIsY/viewform?edit_requested=true" target="_blank">
                    <button class="btn btn-lg btn-secondary">Click here </button>
                </a>
            </div>

            <div class="about-menu" :class="currentModal==='ABOUT'?'active1':''">
                <div class="about about1" @click="showModal('about1')" @click="removeModal">TWMUN</div>
                <div class="about about2" @click="showModal('about2')" @click="removeModal">TECHFEST</div>
                <div class="about about3" @click="showModal('about3')" @click="removeModal">WELCOME LETTER</div>
                <div class="about about4" @click="showModal('about4')" @click="removeModal">SECRETARIAT</div>
            </div>

            <div class="comm-menu" :class="currentModal==='COMMITTEES'?'active1':''">
                <div class="comm comm2" @click="showModal('comm2')" @click="removeModal">HRC</div>
                <div class="comm comm3" @click="showModal('comm3')" @click="removeModal">COPUOS</div>
                <div class="comm comm4" @click="showModal('comm4')" @click="removeModal">HUNSC</div>
                <div class="comm comm5" @click="showModal('comm5')" @click="removeModal">CSTD</div>
                <div class="comm comm6" @click="showModal('comm6')" @click="removeModal">DISEC</div>
                <div class="comm comm9" @click="showModal('comm9')" @click="removeModal">CSW</div>
                <div class="comm comm11" @click="showModal('comm11')" @click="removeModal">AU</div>
                <div class="comm comm12" @click="showModal('comm12')" @click="removeModal">WTO</div>
                <div class="comm comm7" @click="showModal('comm7')" @click="removeModal">SOCHUM <span class="text-sm">(School)</span></div>
                <div class="comm comm8" @click="showModal('comm8')" @click="removeModal">SPECPOL <span class="text-sm">(School)</span></div>
                <div class="comm comm1" @click="showModal('comm1')" @click="removeModal">UNESCO <span class="text-sm">(School)</span></div>
                <div class="comm comm10" @click="showModal('comm10')" @click="removeModal">UN Habitat <span class="text-sm">(School)</span></div>
            </div>

            <div class="reg-menu" :class="currentModal==='REGISTRATION'?'active1':''">
                <div class="reg reg1" @click="showModal('reg1')" @click="removeModal">
                    Executive Board Member
                </div>
                {{----}}
                <div class="reg reg2" @click="showModal('reg2')" @click="removeModal">Rapporteur</div>
                <div class="reg reg3" @click="showModal('reg3')" @click="removeModal">International Ambassador</div>
                <div class="reg reg4" @click="showModal('reg4')" @click="removeModal">
                    Delegate
                </div>
                <div class="reg reg5" @click="showModal('reg5')" @click="removeModal">
                    Delegation
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('asset/js/twmun.js')}}"></script>
</body>
</html>

