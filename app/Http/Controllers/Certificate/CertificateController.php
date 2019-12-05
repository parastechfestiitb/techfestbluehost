<?php

namespace App\Http\Controllers\Certificate;

require_once('fpdf.php');

use App\Certificate;
use App\Event;
use App\Teams;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use DB;
use App\Participant;
use QR;
use Mail;

class CertificateController extends Controller
{

    //https://techfest.org/admin/certificate
    public function generate(Certificate $certificate, Participant $participant){
        $i = DB::table('certificate_participant')->where(['certificate_id'=>$certificate->id,'participant_id'=>$participant->id])->first()->id;
        $cid = substr('000000'.$i,-6);
        $vl = 'https://techfest.org/certificate/verify/'.$cid.'/'.$participant->id;
        $qrT = QR::size(350)->format('png')->margin(0)->errorCorrection('H')->generate($vl );
        $image = Image::make(public_path('2018/Certificate/'.$certificate->image))->resize(3500,2475);
        $content = json_decode($certificate->description);
        $p = new \stdClass();
        foreach($content as $t){
            $p->font = $t->font?$t->font:"Play/play.ttf";
            $p->x = $t->x?$t->x:0;
            $p->y = $t->y?$t->y:0;
            $p->size = $t->size?$t->size:62;
            $p->color = $t->color?$t->color:'#000000';
            $p->text = $t->text?$t->text:'';
            $image->text($p->text,$p->x,$p->y,function($a) use ($p) {
                $a->file(public_path('fonts/'.$p->font));
                $a->size($p->size);
                $a->color($p->color);
            });
        }
        $p->font = "Play/play.ttf";
        $p->x = 0;
        $p->y = 0;
        $p->size = 70;
        $p->color = '#000000';
        $image->text($participant->name,330,1135,function($a) use($p){
            $a->file(public_path('fonts/'.$p->font));
            $a->size($p->size);
            $a->color($p->color);
        });

        $p->size = 40;
        $image->text('CID-'.$cid,3000,60,function($a) use($p){
            $a->file(public_path('fonts/'.$p->font));
            $a->size($p->size);
            $a->color($p->color);
        });
        $qr = Image::make("$qrT");
        $qr->resize(250,250);
        $image->insert($qr,"bottom-right",60,80);
        return $image;
    }


    //https://techfest.org/admin/certificate/new
    public function generateTF(Certificate $certificate, Participant $participant){
        $i = DB::table('certificate_participant')->where(['certificate_id'=>$certificate->id,'participant_id'=>$participant->id])->first()->id;
        $cid = substr('000000'.$i,-6);
        $vl = 'https://techfest.org/certificate/verify/'.$cid.'/'.$participant->id;
        $qrT = QR::size(350)->format('png')->margin(0)->errorCorrection('H')->generate($vl);
        $image = Image::make(public_path('2018/Certificate/'.$certificate->image))->resize(3500,2475);
        $content = json_decode($certificate->description);
        $p = new \stdClass();
        foreach($content as $t){
            $p->font = $t->font?$t->font:"Play/play.ttf";
            $p->x = $t->x?$t->x:0;
            $p->y = $t->y?$t->y:0;
            $p->size = $t->size?$t->size:60;
            $p->color = $t->color?$t->color:'#000000';
            $p->text = $t->text?$t->text:'';
            $image->text($p->text,$p->x,$p->y,function($a) use ($p) {
                $a->file(public_path('fonts/'.$p->font));
                $a->size($p->size);
                $a->color($p->color);
            });
        }
        $p->font = "Play/play.ttf";
        $p->x = 100;
        $p->y = 0;
        $p->size = 70;
        $p->color = '#000000';
        $image->text(ucwords(strtolower($participant->name)),2800,2000,function($a) use($p){
            $a->file(public_path('fonts/'.$p->font));
            $a->size($p->size);
            $a->color($p->color);
        });

        $p->size = 40;
        $qr = Image::make("$qrT");
        $qr->resize(250,250);
        $image->insert($qr,"bottom-right",60,80);
        return $image;
    }
    public function generateMun($agenda, $name, $country, Certificate $certificate){
//        $i = DB::table('certificate_participant')->where(['certificate_id'=>$certificate->id,'participant_id'=>$participant->id])->first()->id;
//        $cid = substr('000000'.$i,-6);
//        $vl = 'https://techfest.org/certificate/verify/'.$cid.'/'.$participant->id;
//        $qrT = QR::size(350)->format('png')->margin(0)->errorCorrection('H')->generate($vl);
        $image = Image::make(public_path('2018/Certificate/'.$certificate->image))->resize(3500,2475);
        $content = json_decode($certificate->description);
        $p = new \stdClass();
        foreach($content as $t){
            $p->font = $t->font?$t->font:"Play/play.ttf";
            $p->x = $t->x?$t->x:0;
            $p->y = $t->y?$t->y:0;
            $p->size = $t->size?$t->size:60;
            $p->color = $t->color?$t->color:'#000000';
            $p->text = $t->text?$t->text:'';
            $image->text($p->text,$p->x,$p->y,function($a) use ($p) {
                $a->file(public_path('fonts/'.$p->font));
                $a->size($p->size);
                $a->color($p->color);
            });
        }
        $p->font = "Play/play.ttf";
        $p->x = 0;
        $p->y = 0;
        $p->size = 70;
        $p->color = '#000000';
        //name
        $image->text(ucwords(strtolower($name)),1800,1155,function($a) use($p){
            $a->file(public_path('fonts/'.$p->font));
            $a->size($p->size);
            $a->color($p->color);
        });
        //country
        $image->text(ucwords(strtolower($country)),2175,1285,function($a) use($p){
            $a->file(public_path('fonts/'.$p->font));
            $a->size($p->size);
            $a->color($p->color);
        });
        //committee
        $image->text($agenda,1365,1390,function($a) use($p){
            $a->file(public_path('fonts/'.$p->font));
            $a->size($p->size);
            $a->color($p->color);
        });

        $p->size = 40;
//        $qr = Image::make("$qrT");
//        $qr->resize(250,250);
//        $image->insert($qr,"bottom-right",60,80);
        return $image;
    }
    public function munCertiGet(){
        $ag = ["HUNSC","DISEC","HRC","SPECPOL","UNESCO","UN Habitat","SOCHUM","WTO","CSTD","COPUOS","AU","CSW"];
        sort($ag);
        $country = ["Yugoslavia","Australia","UK","USA","Republic of China","Iraq","Iran","Cuba","Egypt","USSR","Jordan","Belgium","Saudi Arabia","Israel","Peru","Syria","Brazil","People's Republic of China","Colombia","Italy","Indonesia","Kenya","Kazakhstan","Spain","Sweden","Canada","India","Norway","Pakistan","Ethiopia","Mexico","Libya","Botswana","ROK","Chile","Belarus","Azerbaijan","Poland","Japan","Germany","DPRK","Afghanistan","Turkey","Ukraine","Russia","Qatar","Algeria","Angola","Congo","Maldives","Mauritania","Nepal","Myanmar","Malaysia","Nigeria","Burundi","Tunisia","UAE","Bhutan","Sudan","Vietnam","South Africa","Singapore","Yemen","China","France","Kuwait","Sri Lanka","Denmark","Czech Republic","Hungary","Finland","Argentina","Bahrain","Luxembourg","Switzerland","New Zealand","Georgia","Somalia","Bangladesh","Zambia","Thailand","Oman","Haiti","Bolivia","Albania","Cambodia","Cameroon","Greenland","Uruguay","Netherlands","Portugal","Philippines","Jamaica","Austria","Barbados","Mauritius","Seychelles","Antigua and Barbuda","Turkmenistan","Estonia","Greece","Venezuela","Madagascar","Tanzania","Gambia","Cape Verde","Comoros","Djibouti","Senegal","Lesotho","Eritrea","Mozambique","Chad","Togo","Ghana","Benin","Sierra Leone","Ivory Coast","Uganda","Namibia","Swaziland","African Salvation Group","South Sudan","Central African Republic","Ecuador","Mongolia","Guatemala","Nicaragua","Bosnia and Herzegovina","Liechtenstein","Equatorial Guinea","Ireland"];
        sort($country);
        return view('admin.certificate.munCertificate',compact('ag','country'));
    }
    public function munCertiPost(Request $r){
        if(!isset($r->name,$r->country)) return abort(403);
        $k = DB::table('mun_certificates')->where(['name'=>$r->name,'country'=>$r->country,'agenda'=>$r->agenda])->first();
        if($k===null) return "Wrong Details Entered. Please enter your registered name.";
        return view('certificate.certificate')->with(['image'=>$this->generateMun($k->agenda,$k->name,$k->country,Certificate::whereId(74)->first())->encode('data-url')]);
    }
    public function munFiller(){
        $k = "MUSKAAN ABDUL KHALIQUE,HUNSC,Yugoslavia:Karm Oza,HUNSC,Australia:Manav singh,HUNSC,UK:Devak Bhardwaj,HUNSC,USA:Sanjana Khatri,HUNSC,Republic of China :Vinayak Bhattacharya ,HUNSC,Iraq:S.M. Zain Ahmed,HUNSC,Iran:SHUBHAYAN BHATTACHARYA,HUNSC,Cuba:Sachin Chhajer,HUNSC,Egypt:Dhruv Thakker,HUNSC,USSR:Tunmay Mishra,HUNSC,Jordan:Paresh Bawane,HUNSC,Belgium:Mayank Maheshwari,HUNSC,Saudi Arabia:Pranay Punjabi,HUNSC,Israel:Dhruva Sapru,HUNSC,Peru:Sudhanshu Kadre,HUNSC,Syria:Poorna Dixit,DISEC,Brazil:SANYA BARMAN,DISEC,People's Republic of China:Sajal Garg,DISEC,Colombia:Sachhit Nair,DISEC,Italy:Dhruva,DISEC,Indonesia:Rahul Holani,DISEC,Iran:Tushar Maloo,DISEC,Kenya:Jaskaran,DISEC,Kazakhstan:Apoorva bajaj,DISEC,Spain:Samkeet Shah,DISEC,Sweden:Ayush Falor,DISEC,Canada:Siddhanth Bhattacharya ,DISEC,India:Salonii Tari ,DISEC,Norway:Snehi Mehta,DISEC,Iraq:Aniruddha Dwivedi,DISEC,Pakistan:Asha Bulani ,DISEC,Ethiopia:Shreyam Borah,DISEC,Mexico:Dhyey Patel,DISEC,Libya:Revanth S Pasupuleti,DISEC,Botswana:Zahid Sayed,DISEC,ROK:K. Shreenath Bohra,DISEC,Chile:Aadya Pandey,DISEC,Belarus:PREMKUMAR CHANDRABHAN DANAV,DISEC,Egypt:Deepesh Puppala,DISEC,Azerbaijan:Eeshna Shukla,DISEC,Poland:Tushar Rajput,DISEC,Japan:Aditya Dalal,DISEC,Israel:Kamiya Arya,DISEC,Germany:S. Arjun Srivatsan,DISEC,DPRK:V Sriram Ranganath,DISEC,Saudi Arabia:Shreyank Panchasara,DISEC,Afghanistan:A MANISH RAO SIGUNDHE,DISEC,Turkey:Yash Thakare,DISEC,Ukraine:Sahastrarjun Gupta,DISEC,UK:Harsh Shah,DISEC,USA:Kaustav dev,DISEC,Russia:KHAN SANA HUSAIN,HRC,India:DEVYANI SINGH,HRC,Pakistan:Deeksha kingrani ,HRC,Qatar:Debabrat Kanungo,HRC,Algeria:Bhavya Kumari ,HRC,Belgium:G. Uday Kiran,HRC,Angola:Prabhav Khandelwal ,HRC,Congo:Pragati Raj ,HRC,Maldives:Rahul Pandey ,HRC,Mauritania:Ayush Tyagi ,HRC,Nepal:Hrithik Mundra,HRC,Chile:Pratibha Chaudhary,HRC,Myanmar:Hari Bhakar,HRC,Malaysia:Aakash Gupta,HRC,Israel:Atreyee Banerjee,HRC,Afghanistan:Sarthak Patil,HRC,Canada:Himshrey ,HRC,Spain:Katyayani ,HRC,Japan:Dev Modi,HRC,Ethiopia:Om Shukla,HRC,Nigeria:apoorva bajaj,HRC,Syria:Yuvraj Tambaku,HRC,Burundi:Anshuman Singh Rathore,HRC,Australia:Anya Singh,HRC,Tunisia:Sadhya Padmanabhan,HRC,UAE:Nalini Maheshwari,HRC,Bhutan:vignesh reddy,HRC,Germany:Adhyayan Bhatnagar,HRC,Iran:Gayatri Nautiyal,HRC,Sudan:Harshit Bhavnani,HRC,Saudi Arabia:Munish Bhardwaj,HRC,Egypt:PENTA SRUJANA ,HRC,Vietnam:juhi tarde,HRC,Russia:Namyata Nagda,HRC,South Africa:Shriraj Dusane,HRC,Libya:Lakshanprabhu,HRC,Iraq:Eashan Anwekar,HRC,Singapore:Rajat Kalyankar,HRC,Israel:Jasmine Sangma,HRC,Yemen:Atharva Atul Angale,HRC,China:Sagar Bhanushali,HRC,UK :Molika Agrawal,HRC,France:Nikhil Bhansali,HRC,Kuwait:Shruti Sinha,HRC,DPRK:anant krishen khazanchi,SPECPOL,Russia:tanvir mahajan,SPECPOL,UK:rishabh yadav,SPECPOL,Germany:shubhangi borgohain,SPECPOL,UAE:Malvika Kasturirangan,SPECPOL,Kazakhstan:Ananya Iyer,SPECPOL,Kenya:Aayati Ramesh,SPECPOL,Sri Lanka:Ananya Nandakumar,SPECPOL,Denmark:Vidisha Vinit Kumar,SPECPOL,Chile:Arqam Patel,SPECPOL,China:Nikhil Jha ,SPECPOL,Canada:Ayush Gulhane,SPECPOL,Italy:Aarti Gersappa,SPECPOL,ROK:Ekas Singh,SPECPOL,Czech Republic:Hosang Shukla,SPECPOL,India:Pratham Elesh Patel,SPECPOL,Hungary:Jainam Vyas,SPECPOL,Australia:Shlok Sanganeria,SPECPOL,Finland:Siddhant Swain,SPECPOL,Libya:Siddhant Swain,SPECPOL,Argentina:Arush Godha,SPECPOL,Spain:Ishan Unmesh Mahajan,SPECPOL,DPRK:Ayshmita Biswas,SPECPOL,Cuba:Pratyush pravin,SPECPOL,Japan:Malhar Padir,SPECPOL,France:Aditi Gupta,SPECPOL,Brazil:Aditya Nair,SPECPOL,USA:Khwaaish lal,SPECPOL,Pakistan:Soham Sharma,SPECPOL,Bahrain:vedant swamy,SPECPOL,Iran:Aditya Deshpande,SPECPOL,Egypt:Vinayak Gupta,SPECPOL,Luxembourg:Suchit Tilak,SPECPOL,Qatar:Soham Kishor Dharia,SPECPOL,UK:Dhruv Patil,SPECPOL,Saudi Arabia:rahul bhatkar,UNESCO,Iran:ananya mohapatra,UNESCO,Japan:Pia Shetty,UNESCO,Canada:Mansi Anand,UNESCO,Belgium:Sneha Mehta,UNESCO,Switzerland:Priyanka Sharada Kulkarni,UNESCO,Congo:Tanish Jacob-Rego,UNESCO,Mexico:Prem Shah ,UNESCO,Norway:Rishith,UNESCO,Egypt:Samyak Jinturkar,UNESCO,New Zealand:Himagn Malik,UNESCO,India:Divyesh Vishwakarma,UNESCO,Kazakhstan:Aaryan Bhambure,UNESCO,UK:Chandradhar Singh Rathore,UNESCO,France:Muskam,UNESCO,Russia:Subhankita Kar,UNESCO,Georgia:Srushti Saravade,UNESCO,China:Anchala yadav,UNESCO,USA:Nritya Nair,UNESCO,Qatar:Vidhi Pancholi,UNESCO,Libya:Nachiket Gupte,UNESCO,Kuwait:Vanshika Lohana,UNESCO,Kenya:Bhargavi patil,UNESCO,Somalia:Qutubkhan Currimji,UNESCO,South Africa:Abhishek Karve,UNESCO,Turkey:Sakshi Chavan,UNESCO,Pakistan:Siddharth Humraskar,UNESCO,Iraq:Anshika Yadav,UNESCO,Saudi Arabia:Shayan Sareen,UN Habitat,Bangladesh:Kaustubh Manyam,UN Habitat,Argentina:Prahalad Parameshwaran,UN Habitat,Kenya:Sanjay Maji,UN Habitat,India:Ashit Patel,UN Habitat,Indonesia:Manali Chakraborty,UN Habitat,Zambia:Sneheel Sarangi,UN Habitat,Afghanistan:Harkirat Singh Jaggi,UN Habitat,Mexico:Aadira Menon,UN Habitat,Vietnam:Shreya Pramod Jain,UN Habitat,Spain:Sara Kadam,UN Habitat,Japan:Snehil Suman,UN Habitat,Thailand:Harsh Jha,UN Habitat,Iraq:Aman nambiar,UN Habitat,Colombia:keerthivasan b,UN Habitat,Brazil:Rishit Jamkhandikar,UN Habitat,UK:Shashwat Sankranti,UN Habitat,Egypt:sparsh agrawal,UN Habitat,China:Aditya Nandkishor Sawant,UN Habitat,Syria:Tejal Kale,UN Habitat,Myanmar:Neha Joshi,UN Habitat,Oman:Mann Garg,UN Habitat,Saudi Arabia:harsh soni,UN Habitat,Somalia:R.ROHIT,UN Habitat,South Africa:Yash Bharti,UN Habitat,Nigeria:Krishna sharma,UN Habitat,Haiti:Hrishikesh Vangipuram,UN Habitat,Bolivia:TAKSHIL SHAH,UN Habitat,Pakistan:Mihir Hitesh Birani,SOCHUM,Albania:Krishna Sabherwal,SOCHUM,Algeria:Khushi Hindocha,SOCHUM,Belarus:Hrishmita Shah,SOCHUM,Cambodia:Mishty Shah,SOCHUM,Cameroon:Mahek Asher,SOCHUM,Greenland:Lehar Savla,SOCHUM,Cuba:Idhant Nair,SOCHUM,Uruguay:Harsh Patil,SOCHUM,Oman:Atharv Kartik,SOCHUM,Netherlands:Rishabh Ramji,SOCHUM,Yemen:Arnav Kunder,SOCHUM,Peru:Vivaan Chheda,SOCHUM,Libya:Mehul Chandra Joshi,SOCHUM,Nigeria:Arusi Srivastava,SOCHUM,Vietnam:Vaishnavi Vishram Angane,SOCHUM,Somalia:Dalton Fernandes,SOCHUM,Brazil:Soham Santosh Naik,SOCHUM,Colombia:Soumil Jain ,SOCHUM,Bolivia:Avinash Sunitkumar Gupta,SOCHUM,Chile:Aabha Satavase ,SOCHUM,Jordan:Lakshita Jangid,SOCHUM,Bhutan:PRANAVI Menon ,SOCHUM,Spain:Smruti Bhutada,SOCHUM,India:Sayonton Ghosh,SOCHUM,Portugal:Shantanu Sinha,SOCHUM,Kenya:Nistha Hansaria,SOCHUM,Nepal:Takshashila Bhosale,SOCHUM,Bangladesh:Gaurangi Pande,SOCHUM,France:Anushree Sharma,SOCHUM,Singapore:Arjun Kapur,SOCHUM,China:Ryan Jacob,SOCHUM,Japan:Advik Gupta,SOCHUM,Canada:Parv Haria,SOCHUM,Sri Lanka:Afternoon Ahmad,SOCHUM,UK:Kahaan Doshi,SOCHUM,India:Suhani Singh,SOCHUM,South Africa:UTTARA IYER,SOCHUM,USA:MEDHANSH,SOCHUM,Russia:Ayesha Salesm Shaikh,WTO,India:Devyashish Upadhyaya,WTO,Australia:Arpit jain ,WTO,Bangladesh:Aman Agrahari,WTO,Argentina:Sarthak Utangale,WTO,Philippines:Junaid Thange,WTO,Jamaica:Kshitij Yadav,WTO,Austria:Snehil Suman ,WTO,South Africa:Himanshu Damani,WTO,Finland:Ritika Sharma,WTO,Canada:Shreeraj Tumbde,WTO,UK:Ishika Khokhani,WTO,Egypt:Siddhi Vipul Joshi,WTO,Kuwait:Atharva Joshi,WTO,Singapore:Ashish khanna,WTO,Czech Republic:Sandarbh Vikram Singh,WTO,Belgium:Jason Vernon Sequeira,WTO,China:Ashish khanna,WTO,Nigeria:Shrrijiet Roychowdhary,WTO,France:CHANDRALA SOMA KRISHNA VAMSI,WTO,Malaysia:Shubham Pansari,WTO,RoK:Aryan Dhanuka,WTO,Brazil:saket dhake,WTO,USA:Dhruv Garg,WTO,Russia:Saniya Sohoni,WTO,Pakistan:Ridit Nimdia,WTO,Barbados:Archit Srivastava,WTO,Israel:Sidhaant Vivek Bhatt,WTO,Saudi Arabia:Diya Chandna,WTO,Japan:Mannshre Sikchi,WTO,Ukraine:Aabhas Tandon,WTO,Mauritius:Shaurya Mathur,WTO,Seychelles:Vinay Mane,WTO,Antigua and Barbuda:AAFTAB MEHRAJ KHAN,CSTD,South Africa:Bhavesh Gupta,CSTD,Germany:Gaurav Rane,CSTD,Nepal:SA.Gokula krishnan,CSTD,France:Pratyush Trivedi,CSTD,China:Vihaan Purohit,CSTD,Malaysia:Sunniva Channy,CSTD,Sweden:Jehaan Bhadha,CSTD,Thailand:Yash Yadav ,CSTD,Finland:Daniyal Shaikh,CSTD,Netherlands:Mallika Middha ,CSTD,Indonesia:Sakshi Lal,CSTD,Singapore:Kanishka Soni,CSTD,New Zealand:Yash Goyal ,CSTD,Poland:Akanksha Panicker,CSTD,Italy:Bandarupalli Akash,CSTD,Mexico:Shaun Zacharia,CSTD,Peru:Aadi shah,CSTD,Turkmenistan:Ankita Roy,CSTD,Japan:Nehal Mundra,CSTD,Estonia:Satvika Vyavahare,CSTD,Cuba:Aaryan Shah,CSTD,Greece:Ishan Kansal,CSTD,Australia:Priyanka Sharma,CSTD,India:Snehal Majumder,CSTD,Canada:kritika arora,CSTD,Pakistan:Vatsal Dalal,CSTD,Russia:Mani Vasdev,COPUOS,Cuba:Advait Gogate,COPUOS,Sweden:Atharv Kirtikar,COPUOS,Austria:Amaan Hakim,COPUOS,USA:Mahi Nair,COPUOS,Australia:Heer Makhwana,COPUOS,Canada:Swayam Shah,COPUOS,France:Tanishka Phukan,COPUOS,Malaysia:Prisha Sidhwani,COPUOS,Denmark:Yashraj,COPUOS,New Zealand:Rohit Londhe,COPUOS,Kazakhstan:Sidhaant Thakker,COPUOS,Saudi Arabia:Jeet Sawardekar,COPUOS,Italy:Shaurya Saxena,COPUOS,Portugal:Toshan Luktuke,COPUOS,Belarus:Aaryan Nagraj,COPUOS,India:Aditya Hospattankar,COPUOS,Bahrain:Gowtham B,COPUOS,Venezuela:Jayendra Singh,COPUOS,Iran:paras kumar,COPUOS,Japan:Harsh Rathi,COPUOS,Germany:Yatharth Damani,COPUOS,China:Sana Shaikh ,AU,Madagascar:Urusah Irfan,AU,Zambia:Dhimahi Mahesh Walendra,AU,Mauritania:Ashka Pawar,AU,Tanzania:Aadhik,AU,Ethiopia:Amol Pathak,AU,Gambia:Tanush Kumar,AU,Cape Verde:Ishika Rana,AU,Comoros:Piyush Hari,AU,Djibouti:Raam Sharma,AU,Mauritius:Sana Prakash,AU,Senegal:Tanishq Mittal,AU,Lesotho:Astitv Agarwal,AU,Eritrea:Nimit Singh,AU,Burundi:Manisha Rawal,AU,Tunisia:Vidushi Singh,AU,Mozambique:Ragini Satya,AU,Chad:Viren Inaniyan,AU,Togo:Nayantara Siruguri,AU,Ghana:Harshit Bhavnani,AU,Egypt:Priyanka Tibrewal,AU,DRC:Akshat Singh,AU,Benin:Manasi Kulkarni,AU,South Africa:Rujuta Mahendra Ashtekar,AU,Cameroon:Sri Teja T,AU,Sierra Leone:Saksham Sinha,AU,Ivory Coast:DARBHA SAI PRATHUSHA,AU,Uganda:vamsi korada,AU,Libya:nakka bhargav,AU,Namibia:Jimit J Modi,AU,Egypt:Shriya Ray,AU,Nigeria:Pradnya Bawane,AU,Swaziland:Nakshatra Chandghotia,AU,African Salvation Group :Akshat Singh,AU,Benin:Joanna,AU,Sudan:Sunny Sharma,AU,South Sudan:Vijay Sharma,AU,Central African Republic:Ujjwal Batra,AU,Somalia:Chaudhary Nikhat Fatima,CSW,Kenya:ANSARI ZUBI MOHD ASIF.,CSW,Singapore:ALINA ABBAS KHAN,CSW,Canada:Manvinder Arora,CSW,Ecuador:Gaurav Agrawal,CSW,Estonia:Shrey Shah,CSW,Ghana:Rashi Sharma,CSW,Mongolia:Arpita Parwal,CSW,Guatemala:Shivani Dongre,CSW,Colombia:Aditi Goyal,CSW,Nicaragua:Shruti Tripathi,CSW,Bosnia and Herzegovina :Jay Patel,CSW,Comoros:Mishta Arora,CSW,Liechtenstein:Saumya Singh,CSW,Haiti:Keshav Vijay,CSW,Equatorial Guinea:Simran Nair ,CSW,Belgium:Kopal Sharma,CSW,Chile:Shefalee Satpathy ,CSW,Peru:Kuhoo Bajpai,CSW,Qatar:Prerna Hegde,CSW,Bahrain:Surya Pasricha,CSW,Ireland:Varun Kamath,CSW,Japan:Rajashree Hazarika,CSW,Tunisia:Mahek Nagar,CSW,Sri Lanka:Teshi Sharma,CSW,UK:Kunal Advani,CSW,Saudi Arabia:Harshita Mishra,CSW,Brazil:Ananya Khandekar,CSW,Spain:Nihar Parekh,CSW,Russia:Neeyati Fitkariwala,CSW,Somalia:Raghav Shukla,CSW,Norway:BHASKAR CHOUDHARY,CSW,India:Dhwani Waghela,CSW,Sudan:Kartikeya Dhakad,CSW,Iran:Dhvani Bhide,CSW,Iraq:Bhumika Choudhury,CSW,Egypt:Gouri Rinwa,CSW,South Africa:Radhika Shintre,CSW,Malaysia:Jay Sharma,CSW,Libya:Amritansh Soni,CSW,Israel";
        $l = explode(':',$k);
        foreach($l as $ll){
            $a = explode(',',$ll);
            DB::table('mun_certificates')->insert(['name'=>$a[0],'agenda'=>$a[1],'country'=>$a[2]]);
        }
    }
    public function test(){
        $participant = (new Participant)->current();
        $certificate = DB::table('certificates')->whereId(1)->first();
        $image = Image::make(public_path('2018/Certificate/'.$certificate->image))->resize(3500,2475);
        $image->text($participant->name, 450, 1250,function($a){
            $a->file(public_path('fonts/Play/play.ttf'));
            $a->size(60);
        });
        return $image->resize(350*3,247*3)->response('png');
    }
    public function eligiblePost(){
        $participant = (new Participant())->current();
        if($participant->name_changed!==1) return ['participant'=>$participant,'status'=>'change'];
        $certificates = $participant->certificates()->get()->toArray();
        foreach ($certificates as $k=>$c){
            unset($certificates[$k]['image']);
            unset($certificates[$k]['description']);
            unset($certificates[$k]['pivot']);
        }
        $events = $participant->events()->get();
        return ['certificates'=>$certificates,'events'=>$events];
    }
    public function giveCertificate($cid,$pid){
        $c = DB::table('certificate_participant')->where(['certificate_id'=>$cid,'participant_id'=>$pid])->first();
        if($c==-null){
            return DB::table('certificate_participant')->insertGetId(['certificate_id'=>$cid,'participant_id'=>$pid]);
        }
        else return $c->id;
    }
    //function that os ca;;ed when a logged in user requests for certificate
    public function generatePost(Request $request){
        $participant = (new Participant())->current();
        if(DB::table('certificate_participant')->where(['certificate_id'=>$request->cid,'participant_id'=>$participant->id])->count()<=0) return abort(403,"Invalid Access");
        $certificate = Certificate::whereId($request->cid)->first();
        return $this->generate($certificate,$participant)->encode('data-url');
    }

    //Name change or confirm functions
    public function confirmNamePost(){
        Participant::whereId(session()->get('participant')->id)->update(['name_changed'=>1]);
        return "Done";
    }
    public function confirmPost(){
        Participant::whereId(session()->get('participant')->id)->update(['name_changed'=>1]);
        return "Done";
    }
    public function confirmMailPost($cid,$pid,$secret){
        if(md5($cid.'/'.$pid.'asd324q23jw4khluh')!==$secret) abort(403);
        Participant::whereId($pid)->update(['name_changed'=>1]);
        return "Done";
    }
    public function updateNamePost(Request $r){
        Participant::whereId(session()->get('participant')->id)->update(['name_changed'=>1,'name'=>$r->name]);
        return "Done";
    }
    public function updateNameNewPost(Request $r){
        Participant::whereId($r->id)->update(['name_changed'=>1,'name'=>$r->name]);
        return "Done";
    }
    public function updateMailPost($cid,$pid,$secret,Request $r){
        if(md5($cid.'/'.$pid.'asd324q23jw4khluh')!==$secret) abort(403);
        Participant::whereId($pid)->update(['name_changed'=>1,'name'=>$r->name]);
        return "Done";
    }

    //Shows if the certificate is valid or not, returns certificate details
    public function verify($id,$pid){
        if(DB::table('certificate_participant')->where(['id'=>$id,'participant_id'=>$pid])->count()) {
            $participant = Participant::whereId($pid)->first();
            $certificate = Certificate::whereId(DB::table('certificate_participant')->where(['id'=>$id,'participant_id'=>$pid])->first()->certificate_id)->first();
            return view('certificate.verify',compact('participant','certificate'));
        }
        else return abort(403,'No Such Certificate Exists');
    }


    public function mailCertificate($id,$temp){
        $participant = Participant::whereId($id)->first();
        Mail::send('admin.mail.certificateSend',['participant'=>$participant,'id'=>$temp],function($message) use($participant,$temp){
            $message->from('certificate@techfest.org','Certificates | Techfest');
            $message->to($participant->email);
            $message->subject('Your certificate was successfully generated');
        });
    }
    public function downloadCertificate($id, $pid,$secret){
        if(md5($id.'/'.$pid.'asd324q23jw4khluh')!==$secret) abort(403);
        $cert = DB::table('certificate_participant')->where(['id'=>$id,'participant_id'=>$pid])->first();
        if($cert===null)
            return abort(404,'Certificate Not Found');
        $certificate = Certificate::whereId($cert->certificate_id)->first();
        $participant = Participant::whereId($cert->participant_id)->first();
        if(DB::table('certificate_participant')->where(['certificate_id'=>$certificate->id,'participant_id'=>$participant->id])->count()===0) return "Nahi hai";
        if($participant->name_changed!==1) return view('ChangeName')->with(['participant'=>Participant::whereId($pid)->select(['name','email','phone','id'])->first(),'certificate'=>$certificate->id,'cert'=>$cert]);
        return view('certificate.certificate')->with(['image'=>$this->generateTF($certificate,$participant)->encode('data-url')]);
    }

    public function Get(Request $r){
        if(isset($r->slots)){
            $tids = DB::table('event_participant')->where('event_id',$r->event)->whereRaw("`slot1`+`slot2`+`slot3`+`slot4`+`slot5`+`slot6`+`slot7`+`slot8`+`slot9`+`slot10`+`slot11`+`slot12` >= $r->slots")->pluck('participant_id')->toArray();
            return view('admin.certificate.showRes')->with([
                'tids'=>$tids,
                'r'=>$r,
                'image'=>$this->generateTF(Certificate::whereId($r->certificate)->first(),Participant::whereId($tids[0])->first())
            ]);
        }
        $imageFiles  = (array_filter(glob(public_path('2018/Certificate/*.*'))));
        return view('admin.certificate.select')->with(['events'=>Event::get(),'certificates'=>Certificate::get(),'imageFiles'=>$imageFiles]);
    }
    public function Send(Request $r){
        $ids = json_decode($r->ids);
        $cid = $r->cid;
        foreach($ids as $id){
            $temp = $this->giveCertificate($cid,$id);
            $this->mailCertificate($id,$temp);
        }
    }
    public function teamIds(Request $r){
        $tids = preg_split("/\\r\\n|\\r|\\n/", $r->teamids);
        $cid = $r->certificate;
        foreach($tids as $tid){
            $i = (int) preg_replace("/[^0-9]/", "", $tid );
            $pids = DB::table('event_participant')->where('team_id',$i)->pluck('participant_id')->toArray();
            foreach($pids as $id){
                $temp = $this->giveCertificate($cid,$id);
                $this->mailCertificate($id,$temp);
            }
        }
    }
    public function create(Request $r){
        $eventName = $r->name;
        $image = $r->image;
        $name  = $r->name;
        $event_id = $r->event;
        $str = " [{\"size\":60,\"text\":\"$eventName\",\"y\":1270,\"x\":2470}]";
        $message = $r->message;
        DB::table('certificates')->insert(['image'=>$image,'name'=>$name,'event_id'=>$event_id,'description'=>$str,'message'=>$message]);
        return redirect('https://techfest.org/admin/certificate-last');
    }
    public function caUsers(){
        $cas = DB::table('cas')->orderBy('points','DESC')->select('user_id','points')->limit(600)->get();
        return $cas;
    }

    //Certificates for College Ambassadors
    public function portCasToParticipant(){
        $cas = DB::table('cas')->orderBy('points','DESC')->limit(550)->get();
        foreach($cas as $ca){
            $user = User::whereId($ca->user_id)->first();
            if(Participant::whereEmail($user->email)->count()===0){
                Participant::insert([
                    'name'=>$user->name,
                    'email'=>$user->email,
                    'phone'=>$ca->phone,
                    'college'=>$ca->college,
                    'country'=>'India',
                    'dob'=>Carbon::parse($ca->dob),
                    'pin'=>$ca->pin,
                    'address'=>$ca->address,
                    'gender'=>$ca->gender,
                    'name_changed'=>0,
                ]);
            }
            else {}
        }
    }
    public function checkCaParticipant(){
        $cas = DB::table('cas')->orderBy('points','DESC')->limit(550)->pluck('user_id')->toArray();
        $emails = User::whereIn('id',$cas)->pluck('email')->toArray();
        $participants =  Participant::whereIn('email',$emails)->pluck('id')->toArray();
        return $participants;
    }
    public function addToCaTeam(){
        //28314 teamid
        DB::table('event_participant')->where('event_id',93)->delete();
        $cas = DB::table('cas')->orderBy('points','DESC')->limit(550)->pluck('user_id')->toArray();
        $emails = User::whereIn('id',$cas)->pluck('email')->toArray();
        $participants =  Participant::whereIn('email',$emails)->pluck('id')->toArray();
        foreach($participants as $participant){
            DB::table('event_participant')->insert([
                'event_id'=>93,
                'participant_id'=>$participant,
                'team_id'=>28314,
                'slot1'=>1,
                'slot2'=>0,
                'slot3'=>0,
                'slot4'=>0,
                'slot5'=>0,
                'slot6'=>0,
                'slot7'=>0,
                'slot8'=>0,
                'slot9'=>0,
                'slot10'=>0,
                'slot11'=>0,
                'slot12'=>0
            ]);
        }
    }
    public function generateCATable(){
        $pids  = DB::table('event_participant')->where('event_id',93)->pluck('participant_id');
        return Participant::whereIn('id',$pids)->pluck('email')->toArray();
    }
}