<template>
    <main>

        <h1 class="title play-font uppercase">
            ABOUT TECHFEST
        </h1>
        <div class="d-flex relative">
            <div class="sidenav">
                <div @click="changeTab('about')" class="item play-font about active pointer">About</div>
                <div @click="changeTab('history')" class="item play-font history pointer">History</div>
                <div @click="changeTab('awards')" class="item play-font awards pointer">Recognitions</div>
            </div>
            <div v-if="visibleContent === 'about' " class="data about-content">
                Started in 1998 as a department festival, Techfest emerged to be Asia’s Largest Science and
                Technology Festival, a conglomeration of scientific thinking and innovation. With a foot in
                every genre, the fest caters to an audience of 1,75,000 and more, one of the largest college
                gatherings across the continent. Techfest, IIT Bombay stands strong with its reach into 2500+
                colleges nationwide and 500+ universities across the globe.How is Techfest built?Techfest is
                built afresh by the students of IIT Bombay working in a three-tier system. The core team
                comprises of 23 members with 1 Overall Coordinator guiding 22 Managers. Techfest is a true
                believer in the concept of a team of equals. Every brickbat is shared equally by the team as
                is in every bouquet. Although every aspect of Techfest is no closer to one manager than the
                other, for smooth functioning, certain portfolios are allocated to every manager. The portfolios
                can be broadly categorised into two sections - administration and events. The administrative
                portfolios primarily include tasks like accounts, infrastructure, media and marketing, hospitality,
                publicity, web and creatives. The events portfolios include responsibility for each of the numerous
                happenings and initiatives taken by Techfest each year. A team of over 800 Coordinators and Organisers
                along with their respective managers work in synchronisation to execute and implement the splendid
                spectacle called Techfest.<br><br><b>WHY COME TO TECHFEST?</b> <br>Techfest provides a platform
                for one and all to witness one of the most beautiful and groundbreaking amalgamations of science
                and technology with pure delight and enthusiasm. With a display of motivating orations, state
                of the art technology, cut-throat competitions and breathtaking performances for its audience,
                Techfest for the past 21 years has served to be the ideal destination for the millennials to
                learn, create and experience the beauty of technology.
            </div>
            <div v-else-if="visibleContent === 'history'" class="data history-content">
                The very first edition of Techfest was organised in 1998. The underlying spirit of Techfest was "to promote technology and scientific thinking and innovation", a motto that has been followed by every Techfest since. Techfest‘98 also set the broad outlines of Techfest in the form of competitions, lectures, workshops, and exhibitions which went on to become a standard feature at every Techfest. Entrepreneurship also made an appearance in the 1999 and 2000 editions. Technoholix—Techfest in the Dark, showcasing technological entertainment at the end of each day as well as the hub of on the spot activities, made their debut during these years.
                <br><br>
                Techfest 2001-2002 saw the incorporation of IIT Bombay's department oriented events like Yantriki, Chemsplash and Last Straw. Students from G H Raisoni College of Engineering got the Engineering Excellence Award for best design. Mr Amit Shankar Choudhary, Mr Fahad Azad, Mr Bodhisatta Ganguly was in the team of designers from GHRCE, Nagpur.
                <br><br>
                Techfest 2002-2003 launched the Techfest trophy to make the competitions more interesting. Colleges from all over India participated in multiple segments to win the trophy.
                <br><br>
                Techfest 2003-2004 marked a big milestone in the growth of Techfest as this was the year Techfest became an International event with the introduction of International Machine design contest - Cliffhanger. It also saw the introduction of the renowned robotics competition, Micromouse for the first time in India. Teams from Nepal, Sri Lanka and Singapore also participated in Cliffhanger.
                <br><br>
                Techfest 2004-2005 added challenging problem statements in the form of competitions like Survivor as well as Drishti, which was conceived with the National Association for the Blind (NAB) in order to provide aids for the visually challenged.
                <br><br>
                The emphasis at Techfest 2006 was on technology and its applications rather than just engineering know—how. With this view, a section of competitions held under the name E-Rustique had problem statements that encouraged the participants to come up with solutions to existing rural problems and hence contribute to the development of modern India.
                <br><br>
                Techfest 2006-2007 introduced an event Nexus to take robotics to the masses via robotics workshops and subsequent competitions with easy problem statements in many cities other than Mumbai.
                <br><br>
                In Techfest 2007-2008, Nexus was conducted at 7 centres across India namely Indore, Calicut, Jaipur, New Delhi, Pune, Surat and Mumbai respectively. Techfest 2008 also returned to the trend of taking up of initiatives by the Techfest team for social and public causes through their campaign on Global Warming.
                <br><br>
                Techfest 2008-2009 featured the iNexus taking Nexus international to Sri Lanka, UAE and Denmark, whose finalists were flown to India to compete with their counterparts from India, making Techfest the first ever student organization to go truly international. It also saw the creation of an open innovation platform called Prayaas to try come up with implementable solutions to problems existing in rural India.
                <br><br>
                Techfest 2009-2010 added a new segment to their festival called Scintillations. The segment consisted of night exhibitions and thrilling interactive shows. The exhibitions had quite a nationalistic flavour with hanger space devoted to ISRO, Indian Navy and National Disaster Management Authority.
                <br><br>
                Techfest 2010-2011 added more entertainment events to the festival with a new section called Crossroads which featured Street Magic Shows, Stunt Shows etc. Some of the featured events at 2011 were the VirtuSphere and Laser Tag, lecture by the likes of Harold Kroto and Richard Stallman, an exhibition of Science and inventions of Leonardo da Vinci and PR2, energy-saving competition among all IITs. Technoholix saw the world's best Double Dutch (jump rope) crew.
                <br><br>
                Techfest 2011-2012 took a unique initiative Ummeed-e-Milaap to step towards a peaceful future between India and Pakistan. WAVE-India was launched with the motto of spreading awareness about electric vehicles through a road-trip covering over 2500 kilometres through India. Great lecturers viz. Venki Ramakrishnan (Nobel Laureate in Chemistry), Karlheinz Brandenburg (Co-Inventor of MP3) and many amazing exhibits like Nao Robot(France), Crazy file (Sweden) etc. were a part of the festival.
                <br><br>
                Techfest 2012-2013 created a benchmark for itself with its lecture series, competitions and initiatives. This stint of Lecture Series at Techfest was graced by Amartya Sen, Ei-ichi Negishi (Nobel Laureate in Chemistry), Rakesh Sharma and many more. International Robotics Challenge(IRC), the flagship event of Techfest 2013, witnessed participation from 8 countries. A new competition TechOlympics was launched which saw 240 teams from India participate to solve multiple problem statements and compete to be crowned the winner. The initiatives - Techfest Green Campus Challenge (participation from 750 colleges and formation of 150 new Eco-clubs) and Give-A-Coin aimed at awareness of financial child adoption were a huge success and well appreciated all over the country.
                <br><br>
                Techfest 2013-2014 registered a participation of 1.35 lakhs which turned out to be the highest till that year. The lecture series witnessed Prof. C.N.R. Rao (Bharat Ratna 2014), Pranav Mistry (Inventor of SixthSense Technology), Kiran Bedi and many renowned personalities. The technoholix segment witnessed the World Premiere of a 3D projection mapping play, June, covered in Indian as well as Italian media. An anti-smoking campaign, I SMOKE featured in Limca Book of Records for the most number of doodles collected. The 16th edition also saw the launch of 4G services for the first time in India by Reliance Jio.
                <br><br>
                Techfest 2014-2015 recorded a footfall of 1.45 lakhs. The edition featured a stellar lineup of eminent lecturers like late APJ Abdul Kalam, inventor of C++, Bjarne Stroustrup and one of the founding fathers of internet Vint Cerf. The social initiatives Techfest had undertaken over the past years were nominated for Times of India Social Impact Award. Smart City Challenge, inspired by Prime Minister Narendra Modi's vision of 100 smart cities in India, engaged college students to think of innovative ideas for making a smart city. ASK, the nationwide campaign of Techfest, with the partnership of NCPRI, was aimed at creating awareness of the Right to Information Act.
                <br><br>
                Techfest 2015-2016 witnessed the highest ever footfall at 1.65 lakhs. The lecture series was graced by renowned personalities like Prof. Serge Haroche (Physics Nobel Laureate), Eric Klinker (CEO of BitTorrent) and Dr K. Radhakrishnan (Former Chairman of ISRO). This edition included an International Summit to unite a dynamic community of global leaders and activists to discuss solutions for challenges and analyze the impact of technology. ReCycle, a college campaign of Techfest, aimed at creating awareness about physical fitness and environmental protection among the youth in society. Internet for All, a social initiative, with the association of NIELIT, aimed at improving digital literacy in India by teaching the basics of the internet to school students.
                <br><br>
                Techfest 2016-2017 was based on the theme "A Space Expedition". The lecture series was graced by Rakesh Sharma (1st Indian in Space), Bruce Allen (American Physicist and Principal Investigator, LIGO Project), Mark Papermaster (Former CTO, Apple Inc.) and many more eminent personalities. This edition hosted World MUN with 525 delegates from all over the world. CURED?, a social initiative to make the masses aware of the causes and effects of Diabetes for which over 200+ camps were set up all across India. Save The Souls was an initiative aimed at stopping the inhumane testing of Beagle dogs in laboratories for which an online petition campaign was run. IAmPower was initiated with an aim to empower girls to become leaders of technology, innovators in STEM and build their own future through exposure to computer science and technology.
                <br><br>
                Techfest 2017-18 was based on “Digitalization, Sustainability and Biotechnology”, and recorded a participation of 1.75 lakhs which has been the highest for any college festival. Sophia, the first ever humanoid robot to get citizenship made its appearance for the first time in India. The lecture series was adorned by Tanmay Bakshi (youngest IBM Watson Developer), Manohar Parrikar( Chief Minister of Goa), Jayanth Sinha ( Minister of State, Civil Aviation) and many more distinguished personalities. International Robowars saw participation from 5 countries and had a massive response from its audience for its grandeur. SHE (Sanitary Health Education), a social initiative focused on emancipating the taboo of menstruation in India by conducting hygiene management sessions and distributing 2 Lakh sanitary napkins. Nirbhaya was another initiative which stood for women empowerment by conducting workshops on self-defence in various cities across the nation to help them stand up for themselves.
            </div>
            <div v-else-if="visibleContent === 'awards'" class="data awards-content">
                Techfest is among the very few student organizations to have received patronage from United Nations organisations. Among its various recognitions, prominent ones are listed below:
                <br><br>
                UNESCO for promotion of technical knowledge
                UNICEF for the social causes taken up through Ideate competitions and other initiatives over the years
                Make In India, Digital India, Startup India for its Innovation challenge and Ideate
                Centre for environment education(CEE) and South Asia Youth Environment Network(SAYEN) for its approach and initiatives towards environment changes
                Techfest has also been nominated for the Times of India Social Impact Award 2015 for its unique social campaigns in the field of child education, women empowerment, encouraging Indo-Pak relations and creating awareness
            </div>
            <div class="hider"></div>
        </div>
        <v-footer></v-footer>
    </main>
</template>

<script>
    export default {
        name: "About",
        data: function(){
            return {
                visibleContent: 'about'
            }
        },
        methods: {
            changeTab: function(e){
                this.visibleContent=e;
                $('.item').removeClass('active');
                $('.'+e).addClass('active');
            }
        },
        created: function(){
            setTimeout(function(){
                $('.page-transition').animate({
                    left:'-200vw'
                },500);
            },300);
        },
        components:{
            'v-footer':require('./Footer')
        }
    }
</script>

<style scoped>
    *{
        font-size: 1.1vw;
    }
    main{
        height:100%;
        padding-top:20vh;
        color:white;
    }
    .sidenav{
        width: 20vw;
        padding-left: 8vw;
        font-size: 1vw;
    }
    .relative{
        position: relative;
    }
    .data{
        width: 50vw;
        overflow: auto;
        padding-bottom: 5vh;
        padding-left:10vw;
    }
    .hider{
        position: absolute;
        bottom: 0;
        height: 10vh;
        width: 100vw;
        background: linear-gradient(to top, rgba(0,0,0,1),rgba(0,0,0,0));
    }
    .title{
        font-size: 2.2vw;
        margin-left: 30vw;
        margin-bottom: 5vh;
        text-transform: uppercase;
        text-decoration: underline;
    }
    .title::first-letter{
        text-transform: uppercase;
    }

    .name-text{
        text-transform: capitalize;
    }
    .content{
        height: 50vh;
        margin-top:10vh;
        overflow: auto;
    }
    .data{
        height: 60vh;
        overflow: auto;
        position: relative;
        -webkit-box-decoration-break: clone;
        box-decoration-break: clone;
    }
    .active{
        font-size:2em;
    }
    p span,p{
        font-size:1vw;
        margin-bottom: 0.2vw;
    }
    h2 span,h2{
        font-size: 1.7vw !important;
    }
    h3 span,h3{
        font-size:1.5vw !important;
    }
    h4 span,h4{
        font-size: 1.3vw !important;
    }
</style>
