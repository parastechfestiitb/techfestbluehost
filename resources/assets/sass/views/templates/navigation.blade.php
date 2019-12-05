<div class="navigation d-flex flex-row-reverse play-font" v-if="showNav">
    <div class="icon user-search-icons text-center ">
        <div class="i fas fa-search"></div>
        <div class="i fas fa-user" id="signinButton"></div>
    </div>
    <div class="block d-flex flex-column">
        <div class="lecture">Lectures</div>
        <div class="exhi">Exhibitions</div>
        <div class="techX">Technoholix</div>
        <div class="ozone">Ozone</div>
    </div>
    <div class="block d-flex flex-column">
        <router-link to="/2018/competitions" class="competitions pointer">Competitions</router-link>
        <div class="ideate">Ideate</div>
        <div class="esports">Esports</div>
        <div class="robo">Robowars</div>
    </div>
    <div class="block d-flex flex-column">
        <div class="workshop">Workshop</div>
        <div class="summit">Summit</div>
        <div class="TWMUN">TWMUN</div>
    </div>
    <div class="block d-flex flex-column">
        <div @click="routeChange('/2018')" class="home pointer">Home</div>
        <div class="initiatives">Initiatives</div>
    </div>
</div>
<div class="navigation d-flex flex-row-reverse" v-else>
    <div class="icon user-search-icons text-center">
        <div class="i fas fa-address-book"></div>
        <div class="i fas fa-search"></div>
        <div class="i fas fa-user"></div>
    </div>
</div>
<div class="overlay-navigation">
</div>
