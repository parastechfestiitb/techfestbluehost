<template>
    <main>

        <h1 class="title uppercase">
            Hospitality
        </h1>
        <div class="d-flex relative">
            <div class="sidenav">
                <div v-for="(item,key) in content" @click="changeTab(key)" class="item about pointer nowrap" :class="key===visibleContent?'active':''">{{key}}</div>
            </div>
            <div class="data about-content" v-html="content[visibleContent]">
            </div>
            <div class="hider"></div>
        </div>
        <v-footer></v-footer>
    </main>
</template>

<script>
    export default {
        name: "Hospitality",
        data: function(){
          return {
              visibleContent: 'Introduction',
              content: {
                  "Introduction": "<p>Techfest has been an example in achieving huge feats with unparalleled figures ever since its inception in 1998. Techfest has grown in stature in terms of its content, infrastructure and logistics. The overwhelming crowd of such a high magnitude and a world-class technological display along with a tinge of enjoyment has made our dream a technological extravaganza. With such vastness and diversity, the hospitality of the guests is of paramount importance.</p>\n<br />\n<p>We, at Techfest, constantly strive towards the satisfaction of everyone. We shall leave no stone unturned in fulfilling the needs of a secure accommodation away from home. Along with accommodation facilities for our participants, we also set up a cafeteria serving a variety of cuisines satisfying the needs of every palate. We strive to make your stay comfortable and your experience, a memorable one. Hospitality management would be one of the prime focuses of Team Techfest 2018-19.</p>\n<br />\n<p>Hope to see you at Techfest 2018-19. We will be more than happy to receive your suggestions and queries.</p>\n<br />\n<p>Sahil Singh</p>\n<p>+91 8708072652</p>\n<a href=\"mailto:sahil@techfest.org\">sahil@techfest.org</a></li>\n</ol>",
                  "Instructions": "<ol>\n<li> All guests carrying electronic items of any kind will have to declare them at the IIT Bombay main gate through a &lsquo;Gate Pass&rsquo;. The belongings will also be checked on the way out of IIT Bombay along with the &lsquo;Gate Pass&rsquo;, failing to do so will result in the belongings being impounded. </li>\n</ol>\n<ol start=\"2\">\n<li> All guests will be provided with mattress. Techfest will not provide mattress cover, blankets or pillows. The guests are encouraged to arrange them on their own (if required), since the weather might get cold during the night. </li>\n</ol>\n<ol start=\"3\">\n<li> Any commodities issued to the guests would have to be returned in sound condition to the organisers during check-out. Caution money (refundable deposit) will also be refunded during the time slots mentioned by Techfest. </li>\n</ol>\n<ol start=\"4\">\n<li> Random checks would be made to avoid any illegal stay at the campus. Any team failing to produce their electronic/physical receipts of accommodation would be heavily fined and disqualified. </li>\n</ol>\n<ol start=\"5\">\n<li> Entry will be only through the 'Main Gate' of IIT Bombay. All other gates will be closed for entry. </li>\n</ol>\n<ol start=\"6\">\n<li> All guests are required to carry their valid government photo id proofs at all times. In addition, the student participants are also required to carry their valid College photo id card. Any guest failing to produce their id card will not be permitted inside the campus during Techfest 2018-2019. </li>\n</ol>\n<ol start=\"7\">\n<li> Alcohol, drugs, sharp objects and explosives of any kind are strictly prohibited inside the campus. Any other item if deemed unsafe will be prohibited. The decision of Security and Techfest team will be final in case of any disputes. </li>\n</ol>\n<ol start=\"8\">\n<li> No outside vehicles will be allowed into the campus during the Techfest 2018-19. </li>\n</ol>\n<ol start=\"9\">\n<li> All guests are required to maintain the decorum and cleanliness of the campus, and follow the rules of the campus at all times. </li>\n</ol>\n<ol start=\"10\">\n<li> Techfest 2018-19 and IIT Bombay will not be responsible for any mishaps that occur through the duration of stay for Techfest 2018-19. </li>\n</ol>\n<ol start=\"11\">\n<li> All those who does not have accommodation inside the campus, will not be allowed to stay in the campus after 5pm. </li>\n</ol>\n<ol start=\"12\">\n<li> ONLY the guests having their accommodation in the campus will be allowed in the campus premises after 5pm. </li>\n</ol>\n<p>Hope to see you here at Techfest 2018-19. We will be more than happy to receive your suggestions and queries. </p>\n<p><br />Techfest 2018-2019 is awaiting your presence. Any suggestions or queries are welcome. Kindly email at <a href=\"mailto:hospitality@techfest.org\">hospitality@techfest.org</a> .</p>",
                  "Accommodation-Charges": "<p>Accommodation to the guest would be provided in the campus of IIT Bombay and it will be purely on a shared basis. These facilities would be separate for girls and boys.</p>\n<p>Charges for accommodation are INR 2000 + 100(Cautionary amount). Food would not be provided, you will have to buy your own food from the facilities available in the campus(Food-Court, Cafeteria, Canteen, Mess).</p>\n<p>Accommodation facility would be made available from 5 PM on 12th of December, 2018 onwards and you would be required to vacate the room on or before 10 AM on 17th December, 2018.</p>\n<p>Accommodation Fees (i.e. INR 2100) is irrespective of the number of days you are staying in the institute.</p>\n<p>Caution Money Policy</p>\n<p>A security deposit of INR 100 will be taken as caution money. It will be refunded to the guests within 30 working days from the 20th December, 2018.</p>\n<p>Caution Money will be directly transferred the bank account from which payment was done.</p>\n<p>NOTE: In case of any discrepancy, decision of Team Techfest 2018-19 would be final and abiding to all.</p>\n<p>Payment Procedure: The payment has to be made online via the accommodation portal. Guests with a valid Techfest ID are eligible for accommodation.</p>\n<p>Cancellation Policy :-</p>\n<p>Confirmed Accommodation can be cancelled through email only.</p>\n<p>Send an e-mail having your Techfest ID and the number of members for whom accommodation has to be cancelled, at hospitality@techfest.org.</p>\n<p>The subject of the email should be &ldquo;Cancellation of Accommodation&rdquo;</p>\n<p>The last date for any cancellation request is 15th November 2018 (23:59 hrs).</p>\n<p>For any cancellations before deadline, 75% of the total amount shall be refunded within 15 working days after the festival.</p>\n<p>There shall be no refunds for cancellation after the deadline</p>",
                  "Register": "<p><span style=\"font-weight: 400;\">Note: The accommodation will be given in groups. The group which is registered below might be given accommodation together and needs to pay the fee together. </span></p>\n<p><span style=\"font-weight: 400;\">(Boys and girls will be given accommodation in different hostel).</span></p><br>Only paid workshop Hand competition participants are eligible for accomodation. <br><br>To visit accomodation portal, <a href='https://techfest.org/accommodation'><span class='text-warning' style='text-decoration: none;'>click here</span></a> ",
                  "Reaching-IITB": "<p>Travelling in Mumbai is very easy and systematic. The modes of travelling in Mumbai are taxis, auto rickshaws, local train and BEST Buses. IIT Bombay is located at Powai, which is an eastern suburb in the North-Eastern part (Central Railway Line) of Mumbai.</p>\n<p>The following link may provide you a rough estimate of the auto fares between two stations Taxi Auto fare</p>\n<p>Mumbai is in the form of a long narrow island, almost a peninsula, thrusting southwards into the Arabian Sea. In Mumbai, local trains run through the following routes.</p>\n<p>Western Railway: Churchgate to Borivali/Virar and return.</p>\n<p>Central Railway: Mumbai CST to Karjat/Kasara and return.</p>\n<p>Harbour Route: Mumbai CST to Andheri and return</p>\n<p>New Bombay Route: Mumbai CST to Vashi/Panvel and return.</p>\n<p>Kanjur Marg, a Local Train Station is the closest local train stop to IIT Bombay. It is located on Central Railway line.</p>\n<p>Kanjur Marg Local Train Station is the closest local train stop to IIT Bombay. It is located on Central Railway line. An auto rickshaw from Kanjur-Marg station to IIT Bombay Main Gate costs Rs.45 approx.</p>\n<p>Important railway stations where you can get down are (also refer map):</p>\n<p>Chhatrapati Shivaji Terminal (CST)</p>\n<p>Churchgate</p>\n<p>Mumbai Central</p>\n<p>Dadar</p>\n<p>Lokmanya Tilak Terminus</p>\n<p>Thane</p>\n<p>Borivali</p>\n<p>Andheri</p>\n<p>Bandra</p>\n<p>kalyn</p>\n<p>Thane is the nearest station to IIT Bombay. Next is Lokmanya Tilak Terminus (LTT) (near Kurla) and Dadar is third in this regard.</p>\n<p>The taxis ply through all of the Mumbai. Auto rickshaws ply between Bandra-Borivali and Sion-Mulund and should be preferred if you have some heavy luggage, which may otherwise cause you inconvenience while travelling by local trains and buses. In taxis, you also have an option of AC Taxis-Cool Cabs, which is a more comfortable way of travel.</p>\n<p>Trains/buses should be preferred if you carry less baggage with you, say a small bag per person. Please beware of pickpockets in locals and BEST buses.</p>\n<p>Southbound trains on all the Local train lines are more crowded in the morning and thus should be avoided if the passenger is carrying baggage. Similarly, the northbound trains in the evening are more crowded.</p>\n<p>With respect to mornings at Kanjurmarg station, travelling from Mumbai CST, Dadar or Kurla would be less crowded that travelling from Kalyan or Thane.</p>\n<p>For buses/autorickshaws, the destination should be stated as \"IIT Main Gate, Powai\".</p>\n<p>Please download m-indicator mobile application for hands-on maps & routes of Mumbai</p>",
                  "FAQs": "<p><span style=\"font-weight: 400;\">1. How to avail accommodation?</span></p>\n<p><span style=\"font-weight: 400;\">Step1) Go to URL and fill the registration form </span></p>\n<p><span style=\"font-weight: 400;\">Step2) Complete the payment procedure.</span></p>\n<p><span style=\"font-weight: 400;\">Step3) Confirmation will be sent to you</span></p>\n<p><span style=\"font-weight: 400;\">Step4) Report at accommodation desk </span></p>\n<p> </p>\n<p><span style=\"font-weight: 400;\">2. What is the payment procedure?</span></p>\n<p><span style=\"font-weight: 400;\">The payment procedure will be online. </span></p>\n<p><span style=\"font-weight: 400;\">The accommodation charges are provided under the tab Accommodation Charges on the hospitality page. You will have to report at the accommodation desk near the Old Swimming Pool with the email print out and the mandatory documents. Failing to bring any of the documents may lead to cancellation of your accommodation. </span></p>\n<p> </p>\n<p><span style=\"font-weight: 400;\">3. Where do I have to report during the fest? </span></p>\n<p><span style=\"font-weight: 400;\">Confirmation is not confirmed till confirmation mail is not received in 24 hours</span></p>\n<p><span style=\"font-weight: 400;\">If not received confirmation in 24 hours then mail your transaction ID, Techfest ID, name, amount to hospitality@techfest.org with subject as (Transaction ID :: team ID ::Confirmation mail not received).</span></p>\n<p> </p>\n<p>4.Documents that guests should carry?</p>\n<p><span style=\"font-weight: 400;\">Any valid Govt photo ID</span></p>\n<p><span style=\"font-weight: 400;\">Print out of Email confirmation </span></p>\n<p><span style=\"font-weight: 400;\">Gate pass</span></p>\n<p><span style=\"font-weight: 400;\">Valid College ID for participants </span></p>\n<p> </p>\n<p><span style=\"font-weight: 400;\">5. Shall I carry my ID card with me?</span></p>\n<p><span style=\"font-weight: 400;\">It is mandatory for all guest participants to carry college IDs. This is for your own convenience. Moreover, you will be asked to produce your college ID cards at the time of allotment of rooms.</span></p>\n<p> </p>\n<p><span style=\"font-weight: 400;\">6. What are the accommodation charges?</span></p>\n<p><span style=\"font-weight: 400;\">The accommodation charges and other necessary details regarding the payment will be available under the tab Accommodation Charges.</span></p>\n<p> </p>\n<p><span style=\"font-weight: 400;\">7. Will all the team members be given accommodation at the same place?</span></p>\n<p><span style=\"font-weight: 400;\">We will try but there is no surety for the same.</span></p>\n<p><span style=\"font-weight: 400;\">Outstation guest who have registered for accommodation are requested to report to the accommodation desk (near Old Swimming Pool IITB) where the required formalities involving checking of documents, allotment of rooms will be done.</span></p>\n<p> </p>\n<p><span style=\"font-weight: 400;\">8. What kind of accommodation is provided?</span></p>\n<p><span style=\"font-weight: 400;\">Accommodation is provided on a shared basis inside campus hostels or outside hotels. One mattress, and an enough space for keeping luggage, and other essential commodities will be provided. Girls and boys will be accommodated separately. Number of guest in a room will be decided by Techfest and will be allotted by Techfest team.</span></p>\n<p> </p>\n<p><span style=\"font-weight: 400;\">9. Does the accommodation charges include food facilities too?</span></p>\n<p><span style=\"font-weight: 400;\">No, the accommodation charges does not include food facilities. Guest can purchase their meals from the food court, night cafeteria or private hostel canteens or hostel messes</span></p>\n<p> </p>\n<p><span style=\"font-weight: 400;\">10. Do we get any food facilities at outside accommodation places?</span></p>\n<p><span style=\"font-weight: 400;\">You can purchase your meals from the hotels or the nearby restaurants.</span></p>\n<p> </p>\n<p><span style=\"font-weight: 400;\">11. What are the food facilities inside the campus?</span></p>\n<p><span style=\"font-weight: 400;\">For all our guests and guest we set up a huge cafeteria serving a variety of cuisines satisfying the needs of every palate. In addition, you can also eat in the many canteens, messes, and restaurant inside the campus.</span></p>\n<p><br /><br /></p>\n<p><span style=\"font-weight: 400;\">12. What about the hospital facility? </span></p>\n<p><span style=\"font-weight: 400;\">There is an institute Hospital located near the Canara Bank. In case you fall ill, you are advised to report to us at accommodation desk. We shall make appropriate arrangements for you to be treated at the Institute hospital. We shall also be carrying a first aid kit with us, at the accommodation desk.</span></p>\n<p> </p>\n<p><span style=\"font-weight: 400;\">13. What about the security facilities?</span></p>\n<p><span style=\"font-weight: 400;\">IIT Bombay campus has a vigilant and round-the-clock security service. To ensure the safety of the participants, there will be additional security guards in hostels in order to avoid thefts and other mishaps. Although Techfest team will not take responsibility for any theft or other mishaps. So guest are requested to take care of their luggage and valuable items.</span></p>\n<p> </p>\n<p><span style=\"font-weight: 400;\">14. Where will I get my accommodation?</span></p>\n<p><span style=\"font-weight: 400;\">You might get accommodation outside as well as inside the campus depending upon availability, however, girls with confirmed accommodation will get accommodation inside the IIT-B campus only.</span></p>\n<p> </p>\n<p><span style=\"font-weight: 400;\">15. Can I enter IIT-B campus anytime?</span></p>\n<p><span style=\"font-weight: 400;\">You can enter IIT Main gate anytime by showing valid photo ID proof during 6am to 10pm, however, you need to have accommodation inside the campus to stay in the campus after 10pm.</span></p>\n<p> </p>\n<p><span style=\"font-weight: 400;\">16.We are a group of people not participating in any of competitions or workshops and just coming to techfest for enjoyment. Would we be provided accommodation?</span></p>\n<p><span style=\"font-weight: 400;\">No, Accommodation would be confirmed strictly subject to availability of rooms.</span></p>",
                  "Contact-Us": "<div class=\"row\"> <div class=\"col-md-6\"> <p><span style=\"font-weight: 400;\">Manjeet Singh</span></p><p><span style=\"font-weight: 400;\">Coordinator, Hospitality & Marketing</span></p><p><a href=\"mailto:sahil@techfest.org\"><span style=\"font-weight: 400;\">manjeet.techfest@gmail.com</span></a></p><p><span style=\"font-weight: 400;\">+91 7568387238</span></p></div><div class=\"col-md-6\"> <p><span style=\"font-weight: 400;\">Abhinav Kumar</span></p><p><span style=\"font-weight: 400;\">Coordinator, Hospitality & Marketing</span></p><p><a href=\"mailto:sahil@techfest.org\"><span style=\"font-weight: 400;\">abhinav.techfestiitb@gmail.com</span></a></p><p><span style=\"font-weight: 400;\">+91 8299544527</span></p></div><hr><div class=\"col-md-6\"> <p><span style=\"font-weight: 400;\">Pankaj Gupta</span></p><p><span style=\"font-weight: 400;\">Coordinator, Hospitality & Marketing</span></p><p><a href=\"mailto:sahil@techfest.org\"><span style=\"font-weight: 400;\"> pankaj.techfest@gmail.com</span></a></p><p><span style=\"font-weight: 400;\">+91 9988053681</span></p></div><div class=\"col-md-6\"> <p><span style=\"font-weight: 400;\">Jatin Lamba</span></p><p><span style=\"font-weight: 400;\">Coordinator, Hospitality & Marketing</span></p><p><a href=\"mailto:sahil@techfest.org\"><span style=\"font-weight: 400;\"> jatin.techfest@gmail.com</span></a></p><p><span style=\"font-weight: 400;\">+91 8708878868</span></p></div></div>"
              },
          }
        },
        methods: {
            changeTab: function(e){
                this.visibleContent=e;
                console.log(this.visibleContent);
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
        width: 35vw;
        padding-left: 10vw;
        font-size: 1vw;
    }
    .relative{
        position: relative;
    }
    .data{
        width: 50vw;
        overflow: auto;
        padding-bottom: 5vh;
        padding-left: 0vw;
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
        margin-left: 35vw;
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
        height: 50vh;
        overflow: auto;
        text-align: justify;
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
    .nowrap{
        white-space: nowrap;
    }
</style>
