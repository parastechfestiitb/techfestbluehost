<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function Get(){
        $urlName = str_replace('https://techfest.org/','',url()->current());
        $meta = [
            ''=>[
                'title'=> 'Techfest | Asia\'s Largest Science & Technology Festival',
                'description'=> 'Techfest: 14th to 16th December. IIT Bombay presents Asia\'s Largest Science and Technology Festival. Get ready for an awesome adventurous journey.',
                'keywords'=> 'techfest,iit mumbai,tech fest, mumbai,techfest 2019, techfest 2018, asia, visit IIT Bombay, visit Bombay, competitions, workshops, exhibitions, lectures, fun, mumbai, festival, tf2k18, tf2k19, tech entertainment, tech extravaganza, representative, 2018, leader'
            ],
            'home'=>[
                'title'=> 'Techfest | Asia\'s Largest Science & Technology Festival',
                'description'=> 'Techfest: 14th to 16th December. IIT Bombay presents Asia\'s Largest Science and Technology Festival. Get ready for an awesome adventurous journey.',
                'keywords'=> 'techfest,iit mumbai,tech fest, mumbai,techfest 2019, techfest 2018, asia, visit IIT Bombay, visit Bombay, competitions, workshops, exhibitions, lectures, fun, mumbai, festival, tf2k18, tf2k19, tech entertainment, tech extravaganza, representative, 2018, leader'
            ],
            'competitions'=>[
                'title'=>'Competitions | Techfest 2018-19',
                'description'=>'Lorem Ipsum',
                'keywords'=>'lorem ipsum'
            ],
            'lectures'=>[
                'title'=>'Lectures | Techfest 2018-19',
                'description'=>' Lectures, Techfest IIT Bombay celebrates some of the most eminent personalities across the globe showcasing an array of motivational and insightful talks by them. With larger than life names, lectures has proved to be a one-stop destination to procure knowledge and inspiration.',
                'keywords' => ' lectures, lecture series,  late APJ Abdul Kalam, Hamid Karzai India, Hamid Karzai, Sophia, Pranab Mukherjee, lecturer,  academic lectures, IITB , IIT Bombay lectures, motivational lectures, Tanmay Bakshi, IBM Watson lecture, video lecture, video lectures, apple cto, Pranav Mistry, sixth sense, convo lecture, convocation lecture,  convocation lectures, pcsa lecture,  pcsa lecture, prefest, prefest 
                                                      lecture '
            ],
            'technoholix' =>[
                'title' => 'Technoholix | Techfest 2018-19' ,
                'description' => 'Technoholix, or TechX are the techno-cultural nights of Techfest, IIT Bombay which enthral the audience with performances from international artists, all free of cost.',
                'keywords' => 'Best late night, Best night shows, Friday night, Sunday night, Last late night, First late night , late night page, Light night show, Live night show, Night show timings, Concert, EDM, DJ marnik, Sountec, best concert, concert junkie, top concerts, amazing laser show, DJ laser show, edm laser show, biggest tech events, electronic show, new technology events, popular tech shows, best techno mix, lights, lasers, DJ music, DJ techno, artists, artists music, artist network, famous performers, performers, female artists, popular artists, performers, thrill, enthusiasm, fun, enjoy, live performance, sand show, shadow dance, LED, interactive show, laser and light, light dance show, light show event, wonderful light show, Electronic Dance Music, Electronic, Dance, Music, Popular, technology, laser, night, late, last, event, performers,'

            ],
            'media' => [
                'title' => 'Media | Techfest 2018-19',
                'description' => 'A glimpse of the Media attraction that Techfest has received in the past years, ranging from National newspapers to TV channels of various genres to a multitude of media platforms.',
                'keywords' => 'Media, TV Channels, Newspapers, Radio, Publicity, Magazines, Reporters, communication, press, press release, journalist, broadcasting, journalism, print, coverage, headlines, multicast, outreach, News, telecast, streaming, conference, press conference, advertisements'
            ],
            'ozone' => [
                'title' => 'Ozone | Techfest 2018-19',
                'description' => 'Keeping the festive spirit alive, ozone brings out the fun in Techfest in various Entertainment based gadgetry. Ozone plays host to a variety of street artists from around the globe and organises engaging workshops.',
                'keywords' => 'fun, fiesta, ozone, artists, games, ambiance, enjoy, live show, live performance, wall painting, aerial ambiance, installations, lazer tag, convo lawns, international, sac back-lawns, entertainment, VR, AR, workshops, wall art, unconventional, adrenaline, gaming, amusement, informal, stage, lively, youth'

            ],
            'twmun' => [
                'title' => ' Techfest World MUN | Techfest 2018-19' ,
                'description' => 'Techfest World MUN or TWMUN is an international conference organized by Techfest, IIT Bombay. It is an annual simulation of United Nations committees, which invites you to debate, discuss and build a better future.' ,

                'keywords' => ' conferences, meeting, meetings, committee, committees, UN, UNESCO, UNHRC, HRC, Human, Rights, Human Rights Council, COPUOS, Outer, Space, HUNSC, UNSC, Security, Council, Security Council, CSTD, SPECPOL, Police, SOCHUM, CSW, Women, UN-Habitat, DISEC, AU, African, Union, African Union, Disarmament, WTO, World, Trade, Organization, World Trade Organization, International, International Conference, Model, United, Nations, Model United Nations, United Nations, Model UN, Agenda, Agendas, TWMUN, Techfest World MUN, World MUN, TFMUN, TFWMUN, World Model United Nations '
            ],
            'robowars' => [
                'title' => 'Robowars | Techfest 2018-19' ,
                'description' => 'International Robowars is the flagship event of Techfest where two powerful robots will smash each other to pieces in the largest Robowars arena in India' ,
                'keywords' => ' Robot, war, fight, robowar, battlebots, robot wars, transformers, terminator, wall e, battle, FMB , king of bots, clash bots, largest, arena, steel, real steel, largest robowars, largest Asia, robowars, international, international robowars, cage, royal rumble, 120lbs, 120 pounds, 60 kg, 30 lbs, 30 pounds, 15kg, entertainment, flagship event'

            ],
            'ideate' => [
                'title' => 'Ideate | Techfest 2018-19',
                'description' => 'Ideate competition of Techfest IIT Bombay is to encourage youth to come up with innovative ideas to reform and transfigure the present situation in the world.' ,
                'keywords' => 'Ideate competition of Techfest IIT Bombay is to encourage youth to come up with innovative ideas to reform and transfigure the present situation in the world.'

            ],
            'initiatives' => [
                'title' => 'Initiatives | Techfest 2018-19' ,
                'description' => 'Initiatives are doing the right thing without being told. Volunteers, organizations and leaders unite to innovate, strategize and execute measures.' ,
                'keywords' => 'Initiatives, CURED, Save the Souls, Nirbhaya, SHE, Sanitary Health, Education, Taapsee Pannu, Diabetes, Self- Defense'
            ],
            'exhibitions' => [
                'title' => 'Exhbitions | Techfest 2018-19' ,
                'description' => 'Exhibitions at Techfest, IIT Bombay are one of those remarkable avenues where you can experience modern day science & technological innovations including humanoid robots' ,
                'keywords' => 'Exhibitions, Exhi, Expo, Autoexpo, Science Exhibitions,Robot, Artificial intelligence
                                             Cognitive robotics, Humanoid, Drones, AR/VR, Zero Gravity, Gaming Tech, Nanorobotics, 3d printing robot, Electronics, Science, Pure Mechanics, Simulator, army, Navy, DRDO '
            ],
            'hospitality' => [
                'title' => 'Hospitality | Techfest 2018-19' ,
                'description' => 'The hospitality of the guests in Techfest is of paramount importance. Techfest leaves no stone unturned in fulfilling the needs of a secure accommodation away from home. We strive to make your stay comfortable and your experience, a memorable one. Hospitality management would be one of the prime focuses of Team Techfest 2018-19.' ,
                'keywords' => 'Hospitality, Accommodation, Rooms, Hostels, Hotels, Hotel, Hostel, Registration, Desk, QR Code, Kits, Face-wash, Soap, Deodorants, Welcome, Home, Security, Secure, Stay, Comfortable, Unparalleled, Enjoyments, Memories, Cherish, Cafeteria, Participants, Cuisines, Experience, Management, Line, Queue, Hospi, Acco, Food, Speed, Fast, Fastest, Faster'
            ],
            'summit' => [
                'title' => 'Summit | Techfest 2018-19' ,
                'description' => 'Techfest hosts International Summits bringing together professionals, students and startups to deliberate on new and upcoming technologies in the scientific world with notable speakers sharing their thoughts on topics like AI and IoT.' ,
                'keywords' => 'Techfest Summit, Summit, International Summit, International, AI, Gaming, professional, students, startups, youth, technology, inspirational, potential, workshops, hands-on experience, lectures, keynote, speakers, panel discussions, networking'
            ],
            'cozmo%20clench/competition' => [
                'title'=>'Cozmo Clench | Competitions',
                'description'=>'While travelling in time, Nova certainly wishes to carry entities along for conservation, sustainability or even as a souvenir. How about a technological companion of Nova which can grip the object efficiently and transport it anywhere between the past, present and future time zones.',
                'keywords'=>'cozmo clench, gripper,manual bot, ViceClutch, gripping botcompi, competitions,international competition, IRC, Robowar ,tech , robots,steel, making technology, electronics, technorion,Techfest competitions'
            ],
            'codecode/competition' => [
                'title'=>'CoDecode | Competitions',
                'description'=>'The mysterious signs and illustrations of the past eras have left Nova curious. Even the language used for the interaction of robots in the future is difficult to comprehend. He strongly feels that understanding these and successfully solving the underlying problems can prove to be beneficial for mankind. Help Nova in tackling these issues through the present coding techniques and build a better civilisation',
                'keywords'=>'coding, programing, hacking,competitions,international competition, IRC, Robowar ,tech , robots,steel, making technology, electronics, technorion,Techfest competitions'
            ]

        ];
        $metaData = isset($meta[$urlName])?$meta[$urlName]:$meta[''];
        return view('mobile.get')->with(['meta'=>$metaData]);
    }
}
