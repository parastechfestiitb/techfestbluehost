<?php

namespace App\Http\Controllers;

class PreviousController extends Controller
{
    public function home(){
        return view('kannu.homepageSpeed');
    }
    public function link($link){

        $links = [
            // main website
            'initiatives'       =>  'kannu.eventPages.initiatives',
            'ideate'            =>  'kannu.eventPages.ideate',
            'competitions'      =>  'kannu.eventPages.competitionGet',
            'workshops'         =>  'kannu.eventPages.final_workshop',
            'lectures'          =>  'kannu.eventPages.final_lecture',
            'exhibitions'       =>  'kannu.eventPages.exhibitions',
            'technoholix'       =>  'kannu.eventPages.techX',
            'mun'               =>  'kannu.eventPages.twmun',
            'ozone'             =>  'kannu.eventPages.ozone_ab',
            'about'             =>  'kannu.adminPages.about',
            'media'             =>  'kannu.adminPages.media',
            'hospitality'       =>  'kannu.adminPages.hospitality',
            'contactus'         =>  'kannu.team',
            'team'              =>  'kannu.team' ,
            'team-17'           =>  'kannu.team-17' ,
            'advanced'          =>  'kannu.adminPages.advanced',
            'sponsors'          =>  'kannu.adminPages.sponsors17',

            // ideate
            'digitalisation'    =>  'kannu.eventPages.ideate.digitalisation',
            'biotechnology'     =>  'kannu.eventPages.ideate.biotechnology',
            'sustainability'    =>  'kannu.eventPages.ideate.sustainability',

            // competitions
            // international
            'robowars'          =>  'kannu.eventPages.competitions.robowars',
            'irc'               =>  'kannu.eventPages.competitions.irc',

            // technorion
            'clutch'            =>  'kannu.eventPages.competitions.clutch',
            'meshmerize'        =>  'kannu.eventPages.competitions.meshmerize',
            'enigma'            =>  'kannu.eventPages.competitions.enigma',

            // contrivance
            'fullthrottle'      =>  'kannu.eventPages.competitions.fullthrottle',
            'codethegame'       =>  'kannu.eventPages.competitions.CodeTheGame',
            'hilti'             =>  'kannu.eventPages.competitions.hilti',

            // speactacle
            'Bajajhackathon'    =>  'kannu.eventPages.competitions.bajaj',
            'CraneOMania'       =>  'kannu.eventPages.competitions.fcons',

            // aerostrike
            'boeing'            =>  'kannu.eventPages.competitions.boeing',
            'oprahat'           =>  'kannu.eventPages.competitions.oprahat',

            // tata pioneer's makerthon
            'automation'        =>  'kannu.eventPages.competitions.tata1',
            'uav'               =>  'kannu.eventPages.competitions.tata2',

            // automating NRB
            'rollcage'          =>  'kannu.eventPages.competitions.rollcage',
            'overwatch'         =>  'kannu.eventPages.competitions.overwatch',

            // workshops
            'summit17'          =>  'kannu.eventPages.summit_n',
            'AutomobileMechanics'   =>  'kannu.workshops.automobilemechanics2',
            'AutomobileMechanics2'  =>  'kannu.workshops.automobilemechanics2',
            'FinancialFitness'  =>  'kannu.workshops.financial',
            'DeepLearning'      =>  'kannu.workshops.deeplearning',
            'capgemini'         =>  'kannu.workshops.capgemini',
            'android'           =>  'kannu.workshops.android2',
            'android2'          =>  'kannu.workshops.android2',
            'NanoMachines'      =>  'kannu.workshops.nanomachines',
            'Gesture'           =>  'kannu.workshops.accelerobotix',
            'UnderwaterRobotics'=>  'kannu.workshops.underwaterrobotics',
            'NAO'               =>  'kannu.workshops.NAO',
            'IoT'               =>  'kannu.workshops.iot',
            'EthicalHacking'    =>  'kannu.workshops.ethicalhacking',
            'AllinCloud'        =>  'kannu.workshops.allincloud',
            'ArduinoBotix'      =>  'kannu.workshops.arduinobotix',
            'DataScience'       =>  'kannu.workshops.datascience',
            'SixthSense'        =>  'kannu.workshops.sixthsense',
            'ZeroEnergyBuilding'=>  'kannu.workshops.ZeroEnergyBuilding',
            'EmbeddedSystems'   =>  'kannu.workshops.embeddedsystems',
            'Solarizer'         =>  'kannu.workshops.solarizer',
            'HPC'               =>  'kannu.workshops.hpc',
            'RCDrone'           =>  'kannu.workshops.rcdrone',
            'vr'                =>  'kannu.workshops.vr',
            'ultrasonic'        =>  'kannu.workshops.ultrasonic',
        ];
        return isset($links[$link])? view($links[$link]) : abort(404);
    }
    public function eventsLink($link){
        $links = [
            'swc'   =>  'kannu.events.swcGet',
        ];
        return view($links[$link]);
    }
}
