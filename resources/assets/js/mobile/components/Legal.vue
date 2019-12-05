<template>
    <main v-if="competition!==null">
        <div class="navigation play">
            <div class="title">Legals</div>
            <div class="hirarchy"><span @click="$root.changeRoute('/')">Home</span>&gt;<span>Legal</span></div>
        </div>
        <div class="navigation-group">
            <div class="nav-tab" v-for="(description,key) in competition" :class="'compi-'+key">
                <div class="name"  @click="compiActivate(key)" >{{key}}</div>
                <div class="description" v-if="activeCompi===key">
                    <div class="desc" v-html="description"></div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    export default {
        name: "Competition",
        data: function(){
            return{
                competition: {
                    // language=HTML
                    'Privacy-Policy':"\n<p><span>Effective date: July 08, 2018</span></p>\n<p><span>Techfest, IIT Bombay (referred to as \"us\", \"we\", or \"our\" in this page) operates the https://techfest.org website (referred to as the \"Service\" in this page).</span></p>\n<p><span>This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data. This Privacy Policy for Techfest, IIT Bombay is powered by </span><a href=\"https://freeprivacypolicy.com/\"><span>FreePrivacyPolicy.com</span></a><span>.</span></p>\n<p><span>We use your data to provide and improve the Service. By using the Service, you agree to the collection and use of information in accordance with this policy.</span></p>\n<h2><span>Information Collection And Use</span></h2>\n<p><span>We collect several different types of information for various purposes to provide and improve our Service to you.</span></p>\n<h3><span>Types of Data Collected</span></h3>\n<h4><span>Personal Data</span></h4>\n<p><span>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you (\"Personal Data\"). Personally identifiable information may include, but is not limited to:</span></p>\n<ul>\n    <li><span>Email address</span></li>\n    <li><span>First name and last name</span></li>\n    <li><span>Phone number</span></li>\n    <li><span>Address, State, Province, ZIP/Postal code, City</span></li>\n    <li><span>Cookies and Usage Data</span></li>\n</ul>\n<h4><span>Usage Data</span></h4>\n<p><span>We may also collect information how the Service is accessed and used (\"Usage Data\"). This Usage Data may include information such as your computer\'s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</span></p>\n<h4><span>Tracking &amp; Cookies Data</span></h4>\n<p><span>We use cookies and similar tracking technologies to track the activity on our Service and hold certain information.</span></p>\n<p><span>Cookies are files with small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Tracking technologies also used are beacons, tags, and scripts to collect and track information and to improve and analyze our Service.</span></p>\n<p><span>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.</span></p>\n<p><span>Examples of Cookies we use:</span></p>\n<ul>\n    <li><strong>Session Cookies.</strong><span> We use Session Cookies to operate our Service.</span></li>\n    <li><strong>Preference Cookies.</strong><span> We use Preference Cookies to remember your preferences and various settings.</span></li>\n    <li><strong>Security Cookies.</strong><span> We use Security Cookies for security purposes.</span></li>\n</ul>\n<h2><span>Use of Data</span></h2>\n<p><span>Techfest, IIT Bombay uses the collected data for various purposes:</span></p>\n<ul>\n    <li><span>To provide and maintain the Service</span></li>\n    <li><span>To notify you about changes to our Service</span></li>\n    <li><span>To allow you to participate in interactive features of our Service when you choose to do so</span></li>\n    <li><span>To provide customer care and support</span></li>\n    <li><span>To provide analysis or valuable information so that we can improve the Service</span></li>\n    <li><span>To monitor the usage of the Service</span></li>\n    <li><span>To detect, prevent and address technical issues</span></li>\n</ul>\n<h2><span>Transfer Of Data</span></h2>\n<p><span>Your information, including Personal Data, may be transferred to &mdash; and maintained on &mdash; computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from your jurisdiction.</span></p>\n<p><span>If you are located outside India and choose to provide information to us, please note that we transfer the data, including Personal Data, to India and process it there.</span></p>\n<p><span>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</span></p>\n<p><span>Techfest, IIT Bombay will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of your data and other personal information.</span></p>\n<h2><span>Disclosure Of Data</span></h2>\n<h3><span>Legal Requirements</span></h3>\n<p><span>Techfest, IIT Bombay may disclose your Personal Data in the good faith belief that such action is necessary to:</span></p>\n<ul>\n    <li><span>To comply with a legal obligation</span></li>\n    <li><span>To protect and defend the rights or property of Techfest, IIT Bombay</span></li>\n    <li><span>To prevent or investigate possible wrongdoing in connection with the Service</span></li>\n    <li><span>To protect the personal safety of users of the Service or the public</span></li>\n    <li><span>To protect against legal liability</span></li>\n</ul>\n<h2><span>Security Of Data</span></h2>\n<p><span>The security of your data is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</span></p>\n<h2><span>Service Providers</span></h2>\n<p><span>We may employ third party companies and individuals to facilitate our Service (\"Service Providers\"), to provide the Service on our behalf, to perform Service-related services or to assist us in analyzing how our Service is used.</span></p>\n<p><span>These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</span></p>\n<h3><span>Analytics</span></h3>\n<p><span>We may use third-party Service Providers to monitor and analyze the use of our Service.</span></p>\n<ul>\n    <li><strong>Google Analytics</strong></li>\n    <li><span>Google Analytics is a web analytics service offered by Google that tracks and reports website traffic. Google uses the data collected to track and monitor the use of our Service. This data is shared with other Google services. Google may use the collected data to contextualize and personalize the ads of its own advertising network.</span></li>\n    <li><span>You can opt-out of having made your activity on the Service available to Google Analytics by installing the Google Analytics opt-out browser add-on. The add-on prevents the Google Analytics JavaScript (ga.js, analytics.js, and dc.js) from sharing information with Google Analytics about visits activity.</span></li>\n    <li><span>For more information on the privacy practices of Google, please visit the Google Privacy &amp; Terms web page: </span><a href=\"https://policies.google.com/privacy?hl=en\"><span>https://policies.google.com/privacy?hl=en</span></a></li>\n</ul>\n<h2><span>Links To Other Sites</span></h2>\n<p><span>Our Service may contain links to other sites that are not operated by us. If you click on a third party link, you will be directed to that third party\'s site. We strongly advise you to review the Privacy Policy of every site you visit.</span></p>\n<p><span>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</span></p>\n<h2><span>Children\'s Privacy</span></h2>\n<p><span>Our Service does not address anyone under the age of 18 (\"Children\").</span></p>\n<p><span>We do not knowingly collect personally identifiable information from anyone under the age of 18. If you are a parent or guardian and you are aware that your Children has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from children without verification of parental consent, we take steps to remove that information from our servers.</span></p>\n<h2><span>Changes To This Privacy Policy</span></h2>\n<p><span>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</span></p>\n<p><span>We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update the \"effective date\" at the top of this Privacy Policy.</span></p>\n<p><span>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</span></p>\n<h2><span>Contact Us</span></h2>\n<p><span>If you have any questions about this Privacy Policy, please contact us:</span></p>\n<ul>\n    <li><span>By email: info@techfest.org</span></li>\n    <li><span>By visiting this page on our website: https://techfest.org/legal</span></li>\n</ul>\n",
                    'Terms-And-Conditions':"<p>These terms and conditions (\"Terms\", \"Agreement\") are an agreement between Website Operator (\"Website Operator\", \"us\", \"we\" or \"our\") and you (\"User\", \"you\" or \"your\"). This Agreement sets forth the general terms and conditions of your use of the <a target=\"_blank\" rel=\"nofollow\" href=\"https://techfest.org\">https://techfest.org</a> website and any of its products or services (collectively, \"Website\" or \"Services\").</p>\n                <h2>Accounts and membership</h2>\n                <p>If you create an account on the Website, you are responsible for maintaining the security of your account and you are fully responsible for all activities that occur under the account and any other actions taken in connection with it. Providing false contact information of any kind may result in the termination of your account. You must immediately notify us of any unauthorized uses of your account or any other breaches of security. We will not be liable for any acts or omissions by you, including any damages of any kind incurred as a result of such acts or omissions. We may suspend, disable, or delete your account (or any part thereof) if we determine that you have violated any provision of this Agreement or that your conduct or content would tend to damage our reputation and goodwill. If we delete your account for the foregoing reasons, you may not re-register for our Services. We may block your email address and Internet protocol address to prevent further registration.</p>\n                <h2>Backups</h2>\n                <p>We are not responsible for Content residing on the Website. In no event shall we be held liable for any loss of any Content. It is your sole responsibility to maintain appropriate backup of your Content. Notwithstanding the foregoing, on some occasions and in certain circumstances, with absolutely no obligation, we may be able to restore some or all of your data that has been deleted as of a certain date and time when we may have backed up data for our own purposes. We make no guarantee that the data you need will be available.</p>\n                <h2>Links to other websites</h2>\n                <p>Although this Website may be linked to other websites, we are not, directly or indirectly, implying any approval, association, sponsorship, endorsement, or affiliation with any linked website, unless specifically stated herein. We are not responsible for examining or evaluating, and we do not warrant the offerings of, any businesses or individuals or the content of their websites. We do not assume any responsibility or liability for the actions, products, services, and content of any other third-parties. You should carefully review the legal statements and other conditions of use of any website which you access through a link from this Website. Your linking to any other off-site websites is at your own risk.</p>\n                <h2>Intellectual property rights</h2>\n                <p>This Agreement does not transfer to you any intellectual property owned by Website Operator or third-parties, and all rights, titles, and interests in and to such property will remain (as between the parties) solely with Website Operator. All trademarks, service marks, graphics, and logos used in connection with our Website or Services, are trademarks or registered trademarks of Website Operator or Website Operator licensors. Other trademarks, service marks, graphics and logos used in connection with our Website or Services may be the trademarks of other third-parties. Your use of our Website and Services grants you no right or license to reproduce or otherwise use any Website Operator or third-party trademarks.</p>\n                <h2>Indemnification</h2>\n                <p>You agree to indemnify and hold Website Operator and its affiliates, directors, officers, employees, and agents harmless from and against any liabilities, losses, damages or costs, including reasonable attorneys' fees, incurred in connection with or arising from any third-party allegations, claims, actions, disputes, or demands asserted against any of them as a result of or relating to your Content, your use of the Website or Services or any willful misconduct on your part.</p>\n                <h2>Severability</h2>\n                <p>All rights and restrictions contained in this Agreement may be exercised and shall be applicable and binding only to the extent that they do not violate any applicable laws and are intended to be limited to the extent necessary so that they will not render this Agreement illegal, invalid or unenforceable. If any provision or portion of any provision of this Agreement shall be held to be illegal, invalid or unenforceable by a court of competent jurisdiction, it is the intention of the parties that the remaining provisions or portions thereof shall constitute their agreement with respect to the subject matter hereof, and all such remaining provisions or portions thereof shall remain in full force and effect.</p>\n                <h2>Dispute resolution</h2>\n                <p>The formation, interpretation, and performance of this Agreement and any disputes arising out of it shall be governed by the substantive and procedural laws of Maharashtra, India without regard to its rules on conflicts or choice of law and, to the extent applicable, the laws of India. The exclusive jurisdiction and venue for actions related to the subject matter hereof shall be the state and federal courts located in Maharashtra, India, and you hereby submit to the personal jurisdiction of such courts. You hereby waive any right to a jury trial in any proceeding arising out of or related to this Agreement. The United Nations Convention on Contracts for the International Sale of Goods does not apply to this Agreement.</p>\n                <h2>Changes and amendments</h2>\n                <p>We reserve the right to modify this Agreement or its policies relating to the Website or Services at any time, effective upon posting of an updated version of this Agreement on the Website. When we do we will revise the updated date at the bottom of this page. Continued use of the Website after any such changes shall constitute your consent to such changes. Policy was created with <a style=\"color:#222\" target=\"_blank\" title=\"Generate terms and conditions\" href=\"https://www.websitepolicies.com/terms-and-conditions-generator\">WebsitePolicies.com</a></p>\n                <h2>Acceptance of these terms</h2>\n                <p>You acknowledge that you have read this Agreement and agree to all its terms and conditions. By using the Website or its Services you agree to be bound by this Agreement. If you do not agree to abide by the terms of this Agreement, you are not authorized to use or access the Website and its Services.</p>\n                <h2>Contacting us</h2>\n                <p>If you have any questions about this Agreement, please contact us: info@techfest.org</p>\n                <p>This document was last updated on July 8, 2018</p>"
                },
                activeCompi: -1,
                showReg: null,
                isRegistered: false,
                isLeader: false,
                team: []
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
                        console.log($('.desc').height() + 100);
                        $('.compi-'+e).css('height',$('.desc').height()+100).addClass('active');
                    },10);
                }
            },
            prettyNumber: function(x){
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
        },
        created: function(){
            setTimeout(function(){
                $('.page-transition').animate({
                    left:'-200vw'
                },500);
            },300);
        },
        watch: {
            registerModal: function(){
                this.manageTeam();
            }
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
    .navigation-group{
        margin-top:125px;
    }
    main{
        background: #000;
        color: #fff;
    }
    .navigation .title{
        font-size: 30px;
        width: 90vw;
        overflow: hidden;
        white-space: nowrap;
        -ms-text-overflow: ellipsis;
        text-overflow: ellipsis;
        text-align:left !important;
    }
    .hirarchy{
        font-size: 13px;
        width:90vw;
        white-space: nowrap;
        text-overflow:ellipsis;
        overflow: hidden;
    }
    .hirarchy span{
        margin: auto 0.5em;
    }
    .description{
        padding: 15px;
        text-align: justify;
        font-size: 15px;
    }
    .description .title{
        font-size: 1.5em;
    }
    .nav-tab{
        border-bottom: 2px solid white;
        padding: 15px 10px;
        position: relative;
        transition: all 1s;
        height:55px;
        overflow: hidden;
    }
    .nav-tab .name:after{
        content: "›";
        position: absolute;
        right: 10px;
        padding: 15px;
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
        top: 80px;
        width: 100%;
        margin-top: 140px;
    }
    .no-wrap{
        white-space: nowrap;
    }
    .prize-money{
        color: lightgoldenrodyellow;
        font-size: 1.2em;
        margin-top: 10px;
    }
    .name{
        font-size:20px;
        line-height: 20px;
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
    .login-modal{
        position: fixed;
        top: 50px;
        left: 0;
        width: 100vw;
        height: 100%;
        background: #000000;
        z-index: 4;
        overflow:auto;
    }
    .input-group {
        width: 100%;
        margin-top: 25px;
    }
    .input-group input, .input-group select, .input-group textarea {
        margin-left: 1rem;
        display: inline-block;
        background: transparent;
        border: none;
        border-bottom: 1px solid white;
        color: white;
        line-height: 20px;
        width: 60vw;
    }
    option{
        color:black;
    }
    input:focus,input:active,
    select:focus,select:active,
    textarea:focus,textarea:active{
        outline: none;
    }
    .title-modal-login{
        font-size: 2em;
    }
    textarea{
        height:30px;
    }
    .title {
        width: 30vw;
        display: inline-block;
        text-align: right;
        padding-right: 5px;
        font-family: 'Play',sans-serif;
    }
    .input-group button{
        width: 80vw;
        margin: auto;
    }
    .error{
        color:#ffce00;
        font-size:10px;
        padding-left:35vw;
    }
    .manage-modal{
        position: fixed;
        top:50px;
        left:0;
        height: calc(100% - 50px);
        overflow: auto;
        width: 100vw;
        z-index: 9;
        background: #000000;
        padding: 1rem;
    }
    .instructions{
        border-bottom: 2px solid white;
        padding-bottom: 1rem;
        margin-bottom: 1rem;
    }
    .instructions .inst{
        font-size: 2em;
    }
    .team-member {
        margin-bottom: 10px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.4);
        padding: 0 1rem 1rem;
    }
    .manage-modal input {
        background: transparent;
        border: none;
        border-bottom: 2px solid white;
        margin-bottom: 10px;
        width: 90%;
        color: white;
        margin-left: 10%;
    }
    .message{
        color: #ffe0ef;
    }
    .add-members{
        border-bottom: none !important;
        padding-bottom: 0 !important;
    }
    .footer-add-member{
        text-align:right;
    }
    .invite-link{
        margin-left: 0!important;
        font-size: 0.8em !important;
        padding: 0.3em !important;
        border: 2px solid white !important;
        text-overflow: ellipsis !important;
    }
    .fa-clipboard{
        font-size: 1.5em;
        padding-top: 0.2em;
    }
</style>