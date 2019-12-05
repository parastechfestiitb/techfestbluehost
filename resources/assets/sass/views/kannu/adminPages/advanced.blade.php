
@extends('kannu.eventLayer')

@section('title','Privacy Policy')
@section('style')

<link rel="stylesheet" type="text/css" href="css/button.css">
<link rel="stylesheet" type="text/css" href="css/eventmobile.css">
<link rel="stylesheet" type="text/css" href="css/hamburger.css">
<link rel="stylesheet" href="css/topNavBar.css">
<style type="text/css">
  @media (min-width:62em){
body{
  height:100%; 
}
html{
  height: 100%;
}
#overall{
  height: 100%;
}
.inelement{
  width:78%;
}
}
</style>


@endsection


@section('styling')
#inelement li{list-style-type:none}

#inelement b{font-size:110%}

#inelement li{
  margin-top:1vh;
    margin-bottom:1vh;
}


	#big{
		
		background-repeat: no-repeat;
		background-size: 1080px;
		background-image:url('');
		height: 100%;
		margin-top:2%;
		margin-left:5%;
		margin-right: 5%; 

	}

	
#small{
background-repeat: no-repeat;
		
		background-size:100% 100%;

		background-image:url('');
		height: 100%;
		width: 100%;
		margin-top:5%;
		margin-right: 5%;

}
body:not(:-moz-handler-blocked) {
    height: 100%;
}
html:not(:-moz-handler-blocked) {
    height: 100%;
}
#big:not(:-moz-handler-blocked) {
margin-top: 8%;
}

.inelement{font-size:2.4vh;text-align: justify;text-decoration: none;overflow:scroll;height:48vh;}
.center{margin-left: -5%;width:100vw;height:79%;background-image: url('img/eventsMob/box.png')}
.hrMobi{width: 86%;}

@media (max-width: 62em) and (orientation: landscape){
.center{width: 61vw;margin-left: 14vw;margin-top: 5vh;height:70%;background-image: none}
.hrMobi{width: 81%;}
.inelement{font-size:2.6vh;padding: 6vw;padding-top: 1vw;}
.content{padding-top:1vh}
}



@endsection




@section('content')




<div class="center" style="background: none">
<div class="content" style="position: absolute;">
<div>
    <h4 id="heading" class="heading">Privacy Policy</h4>
    <hr class="hrMobi">
</div>   

   <ul class="inelement" id="inelement" style="" >
   <b>Commitment</b>
   	<li>
   		Techfest is committed to protect the privacy and security of your personal information. We want  to share with you how we treat personal information about you that we receive in connection with this website.
   	</li>
   	<b> What information do we collect?</b>
   	<li>
   		We collect information from you when you register on our website or when you register to make the payment. When ordering or registering on our site, as appropriate, you may be asked to enter your name, e-mail address, mailing address, phone number or Credit Card/ Debit Card/Net Banking information (whichever you opted). You may, however, visit our site anonymously.
   	</li>
   	<b>What do we use your information for?</b>
   	<li>
   		Any information that is collected from you may be used in one of the following ways:
   		<ul style="list-style-type: circle;"><p>To personalize your experience </p>
   			<li>
   				Your information helps us to respond better to your individual needs.
   			</li>
   			<b>To improve our website </b>
   			<li>We continuously strive to improve our website offerings based on the information and feedback we receive from you.</li>
   			<b>To process transactions</b>
   			<li>Your information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever, without your consent, other than for the express purpose of delivering the purchased product or service requested.</li>
   			<b>To administer a contest, promotion, survey or other site feature</b>

   			<li>The email address provided may be used to conduct online surveys, give latest details about the festival or publicizing Techfest or any of its associates.</li>
   			<b>To send periodic emails</b>
   			<li>The email address you provide for order processing may be used to send you information and updates pertaining to your order, in addition to receiving occasional company news, updates, related product or service information, etc.</li>
   			
   		</ul>
   	</li>
   	<b>Note</b>

   	<li>If at any time you would like to unsubscribe from receiving future emails, you can send us an email at unsubscribe@techfest.org to unsubscribe from the periodic mails.</li>
   	<b>How do we protect your information?</b>

   	<li>We implement a variety of security measures to maintain the safety of your personal information when you place an order.</li>
   	<b></b>

   	<li>We offer the use of a secure server. All supplied sensitive/credit information is transmitted via Secure Socket Layer (SSL) technology and then encrypted into our payment gateway providers database only to be accessible by those authorized with special access rights to such systems, and are required to keep the information confidential.</li>

   	<li>After a transaction, your private information (credit cards, social security numbers, financials, etc.) will not be stored on our servers.</li>
    <b>Do we use cookies?</b>
   	<li>Yes (cookies are small files that a site or its service provider transfers to your computer's hard drive through your web browser (if you allow) that enables the sites or service providers systems to recognize your browser and capture certain information.</li>

   	<li>We use cookies to compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.</li>


   	<li>If you prefer, you can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies via your browser settings. Like most websites, if you turn your cookies off, some of our services may not function properly. However, you can still place orders over the telephone.</li>
   	<b>Do we disclose any information to outside parties?</b>

   	<li>We do not sell, trade, or otherwise, transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, as long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</li>
   	<p>Third party links</p>

   	<li>Occasionally, at our discretion, we may include or offer third party products or services on our website. These third party sites have separate and independent privacy policies. We, therefore, have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.</li>
   	
   	<p>California Online Privacy Protection Act Compliance</p>

   	<li>Because we value your privacy, we have taken the necessary precautions to be in compliance with the California Online Privacy Protection Act. We therefore will not distribute your personal information to outside parties without your consent.</li>
   	<p>Children’s Online Privacy Protection Act Compliance</p>
   	<li>We are in compliance with the requirements of COPPA (Childrens Online Privacy Protection Act), we do not collect any information from anyone under 13 years of age. Our website, products and services are all directed to people who are at least 13 years old.</li>
    <p>Online Privacy Policy Only</p>
    <li>This online privacy policy applies only to information collected through our website and not to information collected offline.</li>
    <li>All of the rights of Techfest 2017-18 website belong to Techfest, IIT Bombay.</li>
    <p>Your Consent</p>
    <p>By using our site, you consent to our online privacy policy.</p>
    <li>Changes to our Privacy Policy</li>
    <li>If we decide to change our privacy policy, we will post those changes on this page. All rights reserved © Techfest 2017-18</li>
    <p>Contact Us :</p>
    <li>If there are any questions regarding privacy policy, you may contact us using the information below:</li>
    <ul>
    	<li>Techfest Office</li>
    	<li>Students' Gymkhana</li>
		<li>IIT Bombay, Powai</li>
		<li>Mumbai, Maharashtra - 400076<br></li>
		India<br>
		info@techfest.org
		<br>
		+91 22 2576 4045
		<br>
		<a href="http://www.techfest.org">www.techfest.org
		</a>
		This policy is powered by Trust Guard PCI compliance Heading
		
    </ul>

   </ul>


</div>
</div>







<!-- lappy -->

<div id="big" class="container hidden-sm hidden-xs"  style="width:80vw; overflow-x: hidden;">

<div  class="col-md-12 col-xs-12 col-sm-12 col-lg-10"  style=" position:absolute; overflow:hidden;height: 60vh; float: left;" >
	<div data-v-5ab1ab80="" class="header col-md-12 col-sm-12 col-lg-12"  style=" position: relative; overflow: hidden; overflow-y: hidden;" >
                                    <h1 class="workshop-name" style="color: #fefefe; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family: pirulen">Privacy Policy<br>
                                    <hr style="margin-top: 10px;border: 1.5px solid #dafcff;
                                 width: 60%; text-align: center;
                                      -webkit-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
                                      -moz-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
                                      box-shadow: 0px 0px 13px 2px rgba(0,131,177,0.77);
                                      "> 

                                    </h1>
                                    </div>
                                  
<div  class="header col-md-12 col-sm-12 col-lg-12" style="scroll-behavior: smooth; margin-top: 2%; float:left; position:relative; overflow:scroll; height: 100%; ">
	<p style="color: lightslategray; opacity: 1; text-align:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 25px;"> Commitment
	</p>

	<p style="color: #fefefe; opacity: 0.9; text-align:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px;">Techfest is committed to protect the privacy and security of your personal information. We want  to share with you how we treat personal information about you that we receive in connection with this Website.</p>


	<p style="color: lightslategray; opacity: 1; text-align:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 25px;"> What information do we collect?
	</p>
	<p style="color: #fefefe; opacity: 0.9; text-align:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px;">We collect information from you when you register on our website or when you register to make the payment. When ordering or registering on our site, as appropriate, you may be asked to enter your name, e-mail address, mailing address, phone number or Credit Card/ Debit Card/Net Banking information (whichever you opted). You may, however, visit our site anonymously.
</p>

	<p style="color: lightslategray; opacity: 1; text-align:left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 25px;">What do we use your information for?
	</p>
	<p style="color: #fefefe; opacity: 0.9; text-align:left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px;">Any information that is collected from you may be used in one of the following ways:

<br>
<br>
> To personalize your experience and to process transactions.
<br>
> Your information helps us to respond better to your individual needs.
<br>
> We continuously strive to improve our website offerings based on the information and feedback we receive from you.
<br>
> To administer a contest, promotion, survey or other site feature
<br>
> The email address provided may be used to conduct online surveys, give latest details about the festival or publicizing Techfest or any of its associates.
<br>
> The email address you provide for order processing may be used to send you information and updates pertaining to your order, in addition to receiving occasional   company news, updates, related product or service information, etc.	
<br>
Your information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever, without your consent, other than for the express purpose of delivering the purchased product or service requested.
</p>

	<p style="color: lightslategray; opacity: 1; text-align:left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 25px;"> Note

	</p>
	<p style="color: #fefefe; opacity: 0.9; text-align: left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px; ">If at any time you would like to unsubscribe from receiving future emails, you can send us an email at unsubscribe@techfest.org to unsubscribe from the periodic mails.

	</p>
	<p style="color: lightslategray; opacity: 1; text-align:left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 25px;"> How do we protect your information?

	</p>
	<p style="color: #fefefe; opacity: 0.9; text-align: left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px; ">We implement a variety of security measures to maintain the safety of your personal information when you place an order.
	<br>
	<br>
	We offer the use of a secure server. All supplied sensitive/credit information is transmitted via Secure Socket Layer (SSL) technology and then encrypted into our payment gateway providers database only to be accessible by those authorized with special access rights to such systems, and are required to keep the information confidential.
	<br>
	<br>
	After a transaction, your private information (credit cards, social security numbers, financials, etc.) will not be stored on our servers.
	</p>
	<p style="color: lightslategray; opacity: 1; text-align:left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 25px;"> Do we use cookies?

	</p>
	<p style="color: #fefefe; opacity: 0.9; text-align: left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px; ">Yes (cookies are small files that a site or its service provider transfers to your computer's hard drive through your web browser (if you allow) that enables the sites or service providers systems to recognize your browser and capture certain information.
	<br>
	<br>
	We use cookies to compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.

	<br>
	<br>
	If you prefer, you can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies via your browser settings. Like most websites, if you turn your cookies off, some of our services may not function properly. However, you can still place orders over the telephone.

	</p>
	<p style="color: lightslategray; opacity: 1; text-align:left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 25px;"> Do we disclose any information to outside parties?

	</p>
	<p style="color: #fefefe; opacity: 0.9; text-align: left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px; ">We do not sell, trade, or otherwise, transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, as long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.

	</p>
<p style="color: lightslategray; opacity: 1; text-align:left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 25px;"> Third party links

	</p>
	<p style="color: #fefefe; opacity: 0.9; text-align: left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px; ">Occasionally, at our discretion, we may include or offer third party products or services on our website. These third party sites have separate and independent privacy policies. We, therefore, have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.

	</p>
	<p style="color: lightslategray; opacity: 1; text-align:left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 25px;"> California Online Privacy Protection Act Compliance

	</p>
	<p style="color: #fefefe; opacity: 0.9; text-align: left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px; ">Because we value your privacy, we have taken the necessary precautions to be in compliance with the California Online Privacy Protection Act. We therefore will not distribute your personal information to outside parties without your consent.

	</p>
	<p style="color: lightslategray; opacity: 1; text-align:left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 25px;"> Children’s Online Privacy Protection Act Compliance
	</p>
	<p style="color: #fefefe; opacity: 0.9; text-align: left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px; ">We are in compliance with the requirements of COPPA (Childrens Online Privacy Protection Act), we do not collect any information from anyone under 13 years of age. Our website, products and services are all directed to people who are at least 13 years old.


	</p>
	<p style="color: lightslategray; opacity: 1; text-align:left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 25px;"> Online Privacy Policy Only
	</p>
	<p style="color: #fefefe; opacity: 0.9; text-align: left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px; ">This online privacy policy applies only to information collected through our website and not to information collected offline.
	<br>
	<br>
All of the rights of Techfest 2017-18 website belong to Techfest, IIT Bombay.
	</p>
	<p style="color: lightslategray; opacity: 1; text-align:left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 25px;">Your Consent
	</p>
	<p style="color: #fefefe; opacity: 0.9; text-align: left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px; ">By using our site, you consent to our online privacy policy.
	</p>
	<p style="color: lightslategray; opacity: 1; text-align:left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 25px;">Changes to our Privacy Policy
	</p>
	<p style="color: #fefefe; opacity: 0.9; text-align: left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px; ">If we decide to change our privacy policy, we will post those changes on this page.<br> All rights reserved © Techfest 2017-18
	</p>
	<p style="color: lightslategray; opacity: 1; text-align:left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 25px;">Contact Us :
	</p>
<p style="color: #fefefe; opacity: 0.9; text-align: left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px; ">If there are any questions regarding privacy policy, you may contact us using the information below:
<br>
<br>
	Techfest Office
	<br>
	<br>
Students' Gymkhana
<br>
IIT Bombay, Powai
<br>
Mumbai, Maharashtra - 400076
<br>
India
<br>
info@techfest.org
<br>
+91 22 2576 4045
<br>
<a href="http://www.techfest.org" style="color:#df9111;">www.techfest.org
</a>
<br>
<br>
<br>
This policy is powered by Trust Guard PCI compliance
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	</p>
                                       
                                </div>
</div>

</div>


@endsection