@extends('kannu.topLayer')

@section('title','Ethical Hacking| Workshops ')




@section('styling')

.content-mobile li{font-size: 3vh;padding: 2vh;}

.overlay-content{top:20%;}
.psMobi{width:100%;text-align:center;font-size:2vh;margin: 1vh;margin-top:0.5vh;}
@media (max-width: 62em) and (orientation: landscape){
.parent {
    height: 50%;
}
.heading{margin-top:5}
.headMobile{}

.content-mobile li{font-size: 3vh;padding: 0vh;}
.overlay-content{top:10%;}
.psMobi{margin: 0.1vh;}
.grid{
	position: fixed;
    left: 60%;
}
#mobiPrize{
	<!-- font-size:3vh; -->
	text-align:center;
}
.centerLapi{
		height: 50% !important;
	}
.hrMobi{width:96%;margin-bottom:1vh}
<!-- .overlay-content{top:15%;} -->
}

@endsection

@section('style')
<style type="text/css">

	@media(min-width: 62em){
			body{
				height: 100%;
			}
			html{
				height: 100%;

			}
			#overall{
				height:100%;
			}

	}
	.centerLapi{
		height: 50% !important;
	}

</style>


@endsection
 
@section('centerOne')



<!-- center element left section for laptop compleate -->
<div style="" class="contentLaptop">
	<img src="img/eventFinal/tabImg.png" class="img-responsive" style="max-width: 107%;">
	<div style="position: fixed;
	top: 23vh;
	left: 10vw;
	">

	<h4 style="font-family: 'pirulen';    font-size: 3vh;
	letter-spacing: 3px;color: #fefefe" id="abhinav">Ethical Hacking</h4>
	<hr style="margin-top: 0px;
	border: 1.5px solid #dafcff;
	-webkit-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
-moz-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
box-shadow: 0px 0px 13px 2px rgba(0,131,177,0.77);
">

</div>
<!-- <div class="row" > -->

<!-- first extend  -->
	<div class="col-sm-5 centerLapi" style="position: fixed;
	top: 32vh;font-size: 1.8rem;height: 36%;overflow: scroll;overflow-x: hidden;
	left: 9vw;color: #fefefe;font-family: 'Play', sans-serif;width:50%;
	">

	<div id="kaushik0" class="kaushik" style="display: block;">
		<p class="content-sub-heading" style="font-size:25px;">ABOUT</p>
		<div class="row">
			<div class="col-sm-6"><p style="color: yellow">
		SLOT 1:<br>
		Date: 30th-31st December 2017<br>
      Venue: LA301<br>
      Reporting Time: 8am<br>
    Time: 9am-5pm</p></div>
			<div class="col-sm-6"><p style="color: yellow">
		SLOT 2:<br>
		Date: 30th-31st December 2017<br>
      Venue: LH301<br>
      Reporting Time: 8am<br>
    Time: 9am-5pm</p></div>
		</div>
		<p>
		Penetration tests are employed by organizations that hire certified ethical hackers to penetrate networks and computer systems with the purpose of finding and fixing security vulnerabilities.
		</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">DETAILS</p>
		<p>
		<b> Date:</b> 30-31st December 2017<br>

		<br><b>Duration:</b>  2 Days [8 hrs per day]<br>

		<br><b>Venue:</b> IIT Bombay <br>

		<br><b>Cost of Workshop:</b>₹ 1,500/- per person<br>
        <br><b>No. of Team Members: </b> 1 <br>
        <br><b>Refund Deadline:</b> 1st November 2017, No Refunds will be entertained after the Deadline.<br>
		        <br><b>**Limited number of seats</b><br>
<br><b>**If the Workshop gets cancelled, all the participants will be given full refund, irrespective of the Deadline.</b><br>
		</p>
	</div>	
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTENT</p>
		<p>
				<b>Session 1</b><br>
				<br>
				<b>Ethics & Hacking</b>
				<ul>Hacking history : How it all began
				<li> Why is security needed?</li>
				<li> What is ethical hacking?</li>
				<li> Ethical Hacker Vs Malicious hacker</li>
				<li> Types of Hackers</li>
				<li> Building an approach for ethical hacking</li>
				<li> Steps in Ethical hacking</li>
			</ul>
				<ul><b>Basics of Internet, Networking & Hacking</b>
				<li> What is a Network?</li>
				<li> Types of network – LANs, WANs & WLANs</li>
				<li> What is Internet?</ANs>
				<li> History of the Internet</li>
				<li> Basic Structure</li>
				<li> What is a Server?</li>
				<li> What is an IP Address?</li>
				<li> What is a domain name?</li>
				<li> IP-Domain Relation</li>
				<li> Client-Server Relationship Model</li>
				<li> Internet networking</li>
				<li> What is a port?</li>
				<li> What is Programming?</li>
				<li> Types of programming languages.</li>
				<li> What is a Programming loophole or error?</li>
</ul><br>
				<b>Session 2</b><br>
<br>
				<ul><b>Information gathering & Google Hacking</b>
				<li> Whois access (Demo)</li>
				<li> Maltego (Demo)</li>
				<li> 123people.com (Demo)</li>
				<li> Ip scaning (Demo)</li>
				<li> Port scaning (Demo)</li>
				<li> Network scaning & its tools (Demo)</li>
				<li> What is Google and how does it work?</li>
				<li> Google tricks (Demo)</li>
				<li> Basic hacks (Demo)</li>
				<li> How can Google hacking help an Ethical Hacker? (Demo)</li>
				<li> Accesing online remote cameras</li></ul>
				<ul><b>Windows security</b>
				<li> Windows security (Demo)</li>
				<li> Registry (Demo)</li>
				<li> Port & Services (Demo)</li>
</ul><br>
				<b>Session 3</b><br>
<br>
				<ul><b>SQL injections attacks (Practical)</b>
				<li> Introduction of SQL</li>
				<li> What is SQL injection</li>
				<li> Checking SQL injection vulnerability (demo)</li>
				<li> Basic strategy of SQL injection (Demo)</li>
				<li> Getting login credientials using SQL injections (Live Demo)</li>
				<li> Using SQL to login via middleware language (Demo)</li>
				<li> URL and Forms (Demo)</li>
				<li> SQL Query SELECT, DROP etc. (Demo)</li>
				<li> SQL cheat sheets (Demo)</li>
				<li> Using source changes to bypass client side validation (Demo)</li>
				<li> Live demonstration of the attack (Demo)</li>
				<li> Using SQL injection tools (Demo)</li>
				<li> Importance of server side validation (Demo)</li>
				<li> How to protect your system from SQL Injections (Demo)</li>
</ul>
				<ul><b>Man-in-the-middle attack (MITM Attack) (Practical)</b>
				<li> What is Man-in-the-middle attack?</li>
				<li> What is Backtrack linux (Most common unix system for ethical hacking)?</li>
				<li> Preparation for Man-in-the-middle attack (Demo)</li>
</ul>
				<ul><b>Identifying victim (Demo)</b>
				<li> Cache poisining (Demo)</li>
				<li> Routing table modification (Demo)</li>
				<li> Eveasdroping (Demo)</li>
				<li> Countermeasures against MITM attack (Demo)</li>
</ul><br>


				<b>Session 4</b><br>
<br>
				<ul><b>Phishing, Trojan & Viruses</b>
				<li> What is phishing?</li>
				<li> Social engineering used in phishing (Demo)</li>
				<li> Phishing attack (Demo)</li>
				<li> Phishing sites (Demo)</li>
				<li> Protection against phishing (Demo)</li>
				<li> Viruses: Trojans, Worms, Malware, Spyware</li>
				<li> Modes of spreading</li>
				<li> Different Ways a Trojan can Get into a System (Demo)</li>
				<li> Creation of Trojan using cybergate (Demo)</li>
				<li> Attacking a system using our created trojan (Demo)</li>
				<li> Indications of a Trojan Attack (Demo)</li>
				<li> Some Famous Trojans and Ports They Use (Demo)</li>
				<li> How to Detect Trojans? (Demo)</Demo)<>
				<li> How to Determine which Ports are Listening (Demo)</li>
				<li> Netstat</li>
</ul>
				<ul><b>Session hijacking & Cookie grabbing</b>
				<li> What are cookies? (Demo)</li>
				<li> Reading and writing cookies (Demo)</li>
				<li> Passive Vs Active session hijack (demo)</li>
				<li> TCP sessions and HTTP sessions (Demo)</li>
				<li> TCP session hijacking: Telnet (Demo)</li>
				<li> Stealing Cookies to hijack session using: XSS (Demo)</li>
				<li> Sniffers (Demo) - Spoofing (Demo)</li>
				<li> Spoofing Vs Hijacking</li>
				<li> Types of Hijacking</li>
				<li> Protection against session Hijacking (Demo)</li>
</ul><br>
				<b>Session 5</b><br>
<br>
				<ul><b>Social Network Attacks (Facebook, WhatsApp & Gmail)</b>
				<li> Overview of Social Engineering - Case Study</li>
				<li> Example of Social Engineering Attack</li>
				<li> Java Applet Attack (Demo) -WhatsApp Security -Facebook Security -Gmail Security</li></ul>
				<ul><b>Call & SMS Spoofing</b>
				<li> What is Fake SMS & Call?</li>
				<li> Method of generating fake SMS & Calls (Demo)</li>
</ul>
				<ul><b>DNS Spoofing:</b>
				<li> What is DNS Spoofing?</li>
				<li> How does it work?</li>
				<li> How to secure yourself?</li>
				<li> DNS Spoofing (Demo)</li>
</ul><br>
				<b>Session 6</b><br>
<br>
				<ul><b>Email Forging & Tracing</b>
				<li> How does an email work?</li>
				<li> Tracing an email (Demo)</li>
				<li> Spam</li>
</ul>
				<ul><b>Firewalls & Keyloggers (Demo)</b>
				<li> Detecting fake emails (Demo)</li>
				<li> What is a firewall? & How can it help you</li>
				<li> How a firewall works</li>
				<li> What are key loggers? (Demo)</li>
				<li> Types of key loggers? (Demo)</li>
			</ul><br>
				<b>Session 7</b><br>
<br><ul>
				<li>Understanding of an Organization's IT Environment</li>
				<li>Concept of Zoning – Demilitarized Zone</li>
				<li>Militarized Zone Basic Servers being used in the IT Environment</li>
				<li>Positioning in different Zones</li>
				<li>Brief Insight of the IT Security Devices used</li>
				<li>What is Computer Forensics all about?</li>
				<li>Difference between Computer Crime & Un-authorized activities</li>
				<li>6 steps involved in Computer Forensics</li>
				<li>Description of what is to be carried in each step</li>
				<li>Need for forensics investigator</li>
</ul><br>
				<b>Session 8</b><br>
<br><ul>
				<li>Security Incident Response</li>
				<li>What is a Security Incident?</li>
				<li>Role of the Investigator in investigating a Security Incident Evidence</li>
				<li>Control and Documentation</li>
				<li>Skills and Training of a Forensics Investigator</li>
				<li>Technical, Presentation, Professional</li></ul>
<br>For more detail Content <a href="/resource/workshop/EthicalHacking.pdf">Click Here</a>
		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">RULES</p>
		<p>
			<b>Eligibility :   </b> 
            <br>Participants having a valid ID card of their respective educational institutions are eligible for the workshop. <br>

            <br><b>Team specifications  :</b>	
     		<br>Participants will have to register in a team with maximum of one members in it. <br>
			<br><b>Prerequisites :</b>
			<br>Each participant should bring one laptop with CD-ROM drive, a dongle/Jio and a working laptop Webcam preferably with Windows 8 OS or above (No VISTA).  <br>
			<br><b>Certificate criterion :</b>
            <br>Participants should be present in all the sessions. Failing this, no certificate will be awarded to the participant.<br>
		</p>
	</div>
	<div id="kaushik4" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTACT US</p>
		<div class="col-sm-12">
			Anirudh Poddar<br>
			anirudh@techfest.org<br>
			+91 9920198901<br>
		</div>
		<div class="col-sm-2"></div>
		<!-- <div class="col-sm-5">
			<p>Himanshu Kala<br>
 			Events Manager <br>
			himanshu@techfest.org<br>
			+91 8828290544
		</div> -->
	</div>	

<div style="height:2vh;"></div>
</div>




<div class="row comeon" style="position:relative; left:10vh;">
	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi" >  
				<div class="grid">
					<a  id="compi01" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff;" >
								     DETAILS
							</p>
							<a href="resource/workshop/EthicalHacking.pdf" target="_blank"> 
							<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
								<line class="top" x1="0" y1="0" x2="200" y2="0"/>
								<line class="left" x1="0" y1="0" x2="0" y2="50"/>
								<line class="bottom" x1="0" y1="50" x2="200" y2="50"/>
								<line class="right" x1="200" y1="50" x2="200" y2="0"/>

								<line id="ro01" x1="0" y1="0" x2="200" y2="0"/>
								<line id="ro02" x1="0" y1="0" x2="0" y2="50"/>
								<line id="ro03" x1="0" y1="50" x2="200" y2="50"/>
								<line id="ro04" x1="200" y1="50" x2="200" y2="0"/>
							</svg>
							</a>

						</div>
					</a>
				</div>
		</section>
    </div>
	<div class="col-sm-4">
		<div class="col-sm-12 prize">
			<p class="prizes">Date<br> 30-31st December 2017</p>
		</div>
	</div>
	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi">   
				<div class="grid">
					<a id="compi02" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff" id="compiName02">
								<a href="#" id="compiName02" style="color:#dafdff">CLOSED ! </a>
							</p>
							<a id="compi02" href="#"><!-- ============================================== -->
							<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
								<line class="top" x1="0" y1="0" x2="200" y2="0"/>
								<line class="left" x1="0" y1="0" x2="0" y2="50"/>
								<line class="bottom" x1="0" y1="50" x2="200" y2="50"/>
								<line class="right" x1="200" y1="50" x2="200" y2="0"/>

								<line id="ro01" x1="0" y1="0" x2="200" y2="0"/>
								<line id="ro02" x1="0" y1="0" x2="0" y2="50"/>
								<line id="ro03" x1="0" y1="50" x2="200" y2="50"/>
								<line id="ro04" x1="200" y1="50" x2="200" y2="0"/>
							</svg>
							</a>
						</div>
					</a>
				</div>
		</section>
	</div>
</div>
</div>

<!-- center element left section for laptop compleate -->



<!-- center elements start for mobile -->


<div class="mobileCenter">
	
	<h4 id="heading" class="heading">Ethical Hacking</h4>

	<hr class="hrMobi">  


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>
			<p class="contentMobile">
				<div class="row">
			<div class="col-sm-6"><p style="color: yellow">
		SLOT 1:<br>
		Date: 30th-31st December 2017<br>
      Venue: LA301<br>
      Reporting Time: 8am<br>
    Time: 9am-5pm</p></div>
			<div class="col-sm-6"><p style="color: yellow">
		SLOT 2:<br>
		Date: 30th-31st December 2017<br>
      Venue: LH301<br>
      Reporting Time: 8am<br>
    Time: 9am-5pm</p></div>
		</div>
				Penetration tests are employed by organizations that hire certified ethical hackers to penetrate networks and computer systems with the purpose of finding and fixing security vulnerabilities.
			</p>
		</div>

		<div class="child">
			<p class="headMobile">DETAILS</p>
			<p class="contentMobile">
				<b> Date:</b> 30-31st December 2017<br>

				<br><b>Duration:</b>  2 Days [8 hrs per day]<br>

				<br><b>Venue:</b> IIT Bombay <br>

				<br><b>Cost of Workshop:</b>₹ 1,500/- per person<br>
		        <br><b>No. of Team Members: </b> 1<br>
		        <br><b>Refund Deadline:</b> 1st November 2017, No Refunds will be entertained after the Deadline.<br>
		        <br><b>**Limited number of seats</b><br>
<br><b>**If the Workshop gets cancelled, all the participants will be given full refund, irrespective of the Deadline.</b><br>
		</div>


		<div class="child">
			<p class="headMobile">CONTENT</p>
			<p>
				<ul class="contentMobile" style="list-style-type: none;"> 
			      				<b>Session 1</b><br>
				<br>
				<b>Ethics & Hacking</b>
				<ul>Hacking history : How it all began
				<li> Why is security needed?</li>
				<li> What is ethical hacking?</li>
				<li> Ethical Hacker Vs Malicious hacker</li>
				<li> Types of Hackers</li>
				<li> Building an approach for ethical hacking</li>
				<li> Steps in Ethical hacking</li>
			</ul>
				<ul><b>Basics of Internet, Networking & Hacking</b>
				<li> What is a Network?</li>
				<li> Types of network – LANs, WANs & WLANs</li>
				<li> What is Internet?</ANs>
				<li> History of the Internet</li>
				<li> Basic Structure</li>
				<li> What is a Server?</li>
				<li> What is an IP Address?</li>
				<li> What is a domain name?</li>
				<li> IP-Domain Relation</li>
				<li> Client-Server Relationship Model</li>
				<li> Internet networking</li>
				<li> What is a port?</li>
				<li> What is Programming?</li>
				<li> Types of programming languages.</li>
				<li> What is a Programming loophole or error?</li>
</ul><br>
				<b>Session 2</b><br>
<br>
				<ul><b>Information gathering & Google Hacking</b>
				<li> Whois access (Demo)</li>
				<li> Maltego (Demo)</li>
				<li> 123people.com (Demo)</li>
				<li> Ip scaning (Demo)</li>
				<li> Port scaning (Demo)</li>
				<li> Network scaning & its tools (Demo)</li>
				<li> What is Google and how does it work?</li>
				<li> Google tricks (Demo)</li>
				<li> Basic hacks (Demo)</li>
				<li> How can Google hacking help an Ethical Hacker? (Demo)</li>
				<li> Accesing online remote cameras</li></ul>
				<ul><b>Windows security</b>
				<li> Windows security (Demo)</li>
				<li> Registry (Demo)</li>
				<li> Port & Services (Demo)</li>
</ul><br>
				<b>Session 3</b><br>
<br>
				<ul><b>SQL injections attacks (Practical)</b>
				<li> Introduction of SQL</li>
				<li> What is SQL injection</li>
				<li> Checking SQL injection vulnerability (demo)</li>
				<li> Basic strategy of SQL injection (Demo)</li>
				<li> Getting login credientials using SQL injections (Live Demo)</li>
				<li> Using SQL to login via middleware language (Demo)</li>
				<li> URL and Forms (Demo)</li>
				<li> SQL Query SELECT, DROP etc. (Demo)</li>
				<li> SQL cheat sheets (Demo)</li>
				<li> Using source changes to bypass client side validation (Demo)</li>
				<li> Live demonstration of the attack (Demo)</li>
				<li> Using SQL injection tools (Demo)</li>
				<li> Importance of server side validation (Demo)</li>
				<li> How to protect your system from SQL Injections (Demo)</li>
</ul>
				<ul><b>Man-in-the-middle attack (MITM Attack) (Practical)</b>
				<li> What is Man-in-the-middle attack?</li>
				<li> What is Backtrack linux (Most common unix system for ethical hacking)?</li>
				<li> Preparation for Man-in-the-middle attack (Demo)</li>
</ul>
				<ul><b>Identifying victim (Demo)</b>
				<li> Cache poisining (Demo)</li>
				<li> Routing table modification (Demo)</li>
				<li> Eveasdroping (Demo)</li>
				<li> Countermeasures against MITM attack (Demo)</li>
</ul><br>


				<b>Session 4</b><br>
<br>
				<ul><b>Phishing, Trojan & Viruses</b>
				<li> What is phishing?</li>
				<li> Social engineering used in phishing (Demo)</li>
				<li> Phishing attack (Demo)</li>
				<li> Phishing sites (Demo)</li>
				<li> Protection against phishing (Demo)</li>
				<li> Viruses: Trojans, Worms, Malware, Spyware</li>
				<li> Modes of spreading</li>
				<li> Different Ways a Trojan can Get into a System (Demo)</li>
				<li> Creation of Trojan using cybergate (Demo)</li>
				<li> Attacking a system using our created trojan (Demo)</li>
				<li> Indications of a Trojan Attack (Demo)</li>
				<li> Some Famous Trojans and Ports They Use (Demo)</li>
				<li> How to Detect Trojans? (Demo)</Demo)<>
				<li> How to Determine which Ports are Listening (Demo)</li>
				<li> Netstat</li>
</ul>
				<ul><b>Session hijacking & Cookie grabbing</b>
				<li> What are cookies? (Demo)</li>
				<li> Reading and writing cookies (Demo)</li>
				<li> Passive Vs Active session hijack (demo)</li>
				<li> TCP sessions and HTTP sessions (Demo)</li>
				<li> TCP session hijacking: Telnet (Demo)</li>
				<li> Stealing Cookies to hijack session using: XSS (Demo)</li>
				<li> Sniffers (Demo) - Spoofing (Demo)</li>
				<li> Spoofing Vs Hijacking</li>
				<li> Types of Hijacking</li>
				<li> Protection against session Hijacking (Demo)</li>
</ul><br>
				<b>Session 5</b><br>
<br>
				<ul><b>Social Network Attacks (Facebook, WhatsApp & Gmail)</b>
				<li> Overview of Social Engineering - Case Study</li>
				<li> Example of Social Engineering Attack</li>
				<li> Java Applet Attack (Demo) -WhatsApp Security -Facebook Security -Gmail Security</li></ul>
				<ul><b>Call & SMS Spoofing</b>
				<li> What is Fake SMS & Call?</li>
				<li> Method of generating fake SMS & Calls (Demo)</li>
</ul>
				<ul><b>DNS Spoofing:</b>
				<li> What is DNS Spoofing?</li>
				<li> How does it work?</li>
				<li> How to secure yourself?</li>
				<li> DNS Spoofing (Demo)</li>
</ul><br>
				<b>Session 6</b><br>
<br>
				<ul><b>Email Forging & Tracing</b>
				<li> How does an email work?</li>
				<li> Tracing an email (Demo)</li>
				<li> Spam</li>
</ul>
				<ul><b>Firewalls & Keyloggers (Demo)</b>
				<li> Detecting fake emails (Demo)</li>
				<li> What is a firewall? & How can it help you</li>
				<li> How a firewall works</li>
				<li> What are key loggers? (Demo)</li>
				<li> Types of key loggers? (Demo)</li>
			</ul><br>
				<b>Session 7</b><br>
<br>
				Understanding of an Organization's IT Environment<br><br>
				Concept of Zoning – Demilitarized Zone<br>
				Militarized Zone Basic Servers being used in the IT Environment<br>
				Positioning in different Zones<br>
				Brief Insight of the IT Security Devices used<br>
				What is Computer Forensics all about?<br>
				Difference between Computer Crime & Un-authorized activities<br>
				6 steps involved in Computer Forensics<br>
				Description of what is to be carried in each step<br>
				Need for forensics investigator<br>
<br>
				<b>Session 8</b><br>
<br>
				Security Incident Response<br>
				What is a Security Incident?<br>
				Role of the Investigator in investigating a Security Incident Evidence<br>
				Control and Documentation<br>
				Skills and Training of a Forensics Investigator<br>
				Technical, Presentation, Professional<br>
                </ul>

                <br>For more detail Content <a href="/resource/workshop/EthicalHacking.pdf">Click Here</a>
			</p>
		</div>

		<div class="child">
			<p class="headMobile">RULES</p>

			<p>
				<ul class="contentMobile" style="list-style-type: none;"> 
				<b>Eligibility :   </b> 
            <br>Participants having a valid ID card of their respective educational institutions are eligible for the workshop. <br>

            <br><b>Team specifications  :</b>	
     		<br>Participants will have to register in a team with maximum of one members in it. <br>
			<br><b>Prerequisites :</b>
			<br>Each participant should bring one laptop with CD-ROM drive, a dongle/Jio and a working laptop Webcam preferably with Windows 8 OS or above (No VISTA). <br>
			<br><b>Certificate criterion :</b>
            <br>Participants should be present in all the sessions. Failing this, no certificate will be awarded to the participant.<br>
             </ul>
			</p>

		</div>


		<div class="child">
			<div class="contentMobile">
				<div class="row" style="margin: 5vh;text-align: center;">
					Anirudh Poddar<br>
					anirudh@techfest.org<br>
					+91 9920198901<br>
					</div>
				<!-- <div class="row" style="margin: 5vh;">
				Himanshu Kala<br>
				Events Manager<br>
				himanshu@techfest.org<br>
				+91 8828290544<br>
				</div> -->
			</div>
		</div>

		<div class="child">
			Div Six
		</div>
	
</div>







			<div class="psMobi">
			<!-- <hr style="width:93%">	 		 -->
			<a href="#" style="color:white;"><b>Date: 30-31st December 2017</b></a>
			</div>



		
		<div style="padding-top:0.5vh;" >
				<section class="demo-3" id="mobi" onclick="openNav()">
								<div class="grid" style="position:absolute;left:15%;">
									<div class="box">
									<p class="btnText" style="font-size: 1.5rem;
					text-align: center;
					margin-top: 8%;">Explore More</p>
										<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
											<line class="top" x1="0" y1="0" x2="200" y2="0"/>
											<line class="left" x1="0" y1="0" x2="0" y2="50"/>
											<line class="bottom" x1="0" y1="50" x2="200" y2="50"/>
											<line class="right" x1="200" y1="50" x2="200" y2="0"/>

											<line x1="0" y1="0" x2="200" y2="0"/>
											<line x1="0" y1="0" x2="0" y2="50"/>
											<line x1="0" y1="50" x2="200" y2="50"/>
											<line x1="200" y1="50" x2="200" y2="0"/>
										</svg>
									</div>
								</div>
				</section>
				<section class="demo-3" id="mobi01">
								<div class="grid"  style="position:absolute;right:15%;">
									<div class="box" id="regi">
									<p class="btnText" style="font-size: 1.5rem;
					text-align: center;
					margin-top: 1.5rem;">CLOSED !</p>
					<a id="compi02" href="#"><!-- ============================================== -->
										<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
											<line class="top" x1="0" y1="0" x2="200" y2="0"/>
											<line class="left" x1="0" y1="0" x2="0" y2="50"/>
											<line class="bottom" x1="0" y1="50" x2="200" y2="50"/>
											<line class="right" x1="200" y1="50" x2="200" y2="0"/>

											<line x1="0" y1="0" x2="200" y2="0"/>
											<line x1="0" y1="0" x2="0" y2="50"/>
											<line x1="0" y1="50" x2="200" y2="50"/>
											<line x1="200" y1="50" x2="200" y2="0"/>
										</svg>
										</a>
									</div>
								</div>
				</section>
		</div>



</div>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav(0)">&times;</a>
  <div class="overlay-content">
    <a href="#" onclick="closeNav(1)">About</a>
    <a href="#" onclick="closeNav(2)">Details</a>
    <a href="#" onclick="closeNav(3)">Content</a>
    <a href="#" onclick="closeNav(4)">Rules</a>
    <!-- <a href="#" onclick="closeNav(6)">Rules</a> -->
    <a href="#" onclick="closeNav(5)">Contact Us</a>

  </div>
</div>





<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav(argument) {
	var con = document.getElementsByClassName("child");


	if (argument== 0 ) {
    document.getElementById("myNav").style.width = "0%";
	}
	if (argument== 1 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="block";
    con[1].style.display="none";
    con[2].style.display="none";
    con[3].style.display="none";
    con[4].style.display="none";
    con[5].style.display="none";
	}

	if (argument== 2 ) {
    document.getElementById("myNav").style.width = "0%";
   con[0].style.display="none";
    con[1].style.display="block";
    con[2].style.display="none";
    con[3].style.display="none";
    con[4].style.display="none";
    con[5].style.display="none";
	}
	if (argument== 3 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="block";
    con[3].style.display="none";
    con[4].style.display="none";
    con[5].style.display="none";
	}
	if (argument== 4 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="none";
    con[3].style.display="block";
    con[4].style.display="none";
    con[5].style.display="none";
	}
	if (argument== 5 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="none";
    con[3].style.display="none";
    con[4].style.display="block";
    con[5].style.display="none";
	}
	if (argument== 6 ) {

	window.location.href="/resource/workshop/EthicalHacking.pdf";              // ===================================================
    // document.getElementById("myNav").style.width = "0%";
    // con[0].style.display="none";
    // con[1].style.display="none";
    // con[2].style.display="none";
    // con[3].style.display="none";
    // con[4].style.display="block";
    // con[5].style.display="none";
	}





}

</script>




<!-- center elements ends here  -->


<!-- circular bar  right section start for lapi  -->


<div class="circleLapi" style="width: 25vw;">
	<div style="position: relative; top:8vh;">



	<ul class="mainmenu">
		<li ></li>
		<li>
			<div class="crax-top"></div>
		</li>
		<li>
			<a class="vertical " onclick="btn(0)" >
				<p class="yo" id="yo-0" >ABOUT</p>
				<div class="bro" id="bro-0"></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(1)">
				<p class="yo" id="yo-1">DETAILS</p>
				<div class="bro" id="bro-1" ></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(2)">
				<p class="yo" id="yo-2">CONTENT</p>
				<div class="bro" id="bro-2"></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(3)">
				<p class="yo" id="yo-3">RULES</p>
				<div class="bro" id="bro-3"></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(4)">
				<p class="yo" id="yo-4">CONTACT US</p>
				<div class="bro" id="bro-4"></div>
				<div class="crax"></div>
			</a>
		</li>					


		<li>
			<div class="crax-bottom"></div>
		</li>
	</ul>
	</div>
</div>


@endsection