<?php
use Illuminate\Support\Facades\Route;
Route::domain('www.techfest.org')->group(function(){
    Route::any('/',function(){
        return redirect('https://techfest.org');
    });
    Route::any('/{any}',function($any){
        return redirect('https://techfest.org/'.$any);
    });
});



Route::get('/registration','CaController@reg');
Route::post('/regform','CaController@ca_data_update');
Route::get('/dashboard','CaController@dashboard');
Route::get('/tf/logout','CaController@ca_logout')->name('ca_logout');
Route::get('/imgupload/{id}','CaController@imgupload');
Route::post('/imgupload/{id}','CaController@ca_image_upload');

Route::post('/2019/competitions/cozmo/remove/{id}','MainController@cozmo_remove_member');
Route::get('/2019/competitions/cozmo/remove/{id}','MainController@cozmo_remove_member');



Route::get('/adminca','CaController@caevents');
Route::post('/adminca','CaController@adminca');

Route::get('/mail','CaController@mail');

//Route::get('/penaltymail/','CaController@imageverify');
Route::get('/penaltymail/{email}','CaController@imageverify');


Route::domain('m.techfest.org')->name('mobile.')->middleware('minify')->group(function() {
    Route::redirect('/ca', 'https://techfest.org/ca');
});

Route::redirect('/college-ambassador','/ca');
Route::redirect('/CA','/ca');
Route::redirect('/caportal','/ca');
Route::redirect('/cr','/ca');


Route::get('/admins','CaController@cadata');



//testing registration
Route::get('/compireg','MainController@compireg');
Route::post('/compireg','MainController@compireg');
//individual reg button request


//team reg request
Route::post('/reg-ift-createteam','MainController@regift_team');

Route::post('/reg-ift-jointeam','MainController@regift_jointeam');

Route::post('/reg-ift-leaveteam','MainController@regift_leaveteam');

Route::get('/reg_logout','MainController@reg_logout');


Route::get('/enthu_maxx','MainController@test');




Route::get('/admindashboard', 'MainController@adminDashboard');
Route::get('/adminlogin', 'MainController@adminlogin');



Route::get('/kps', 'MainController@kps');











// 2019 links
Route::get('/2019/competitions/logout', 'MainController@competitions_logout');

Route::get('/2019/competitions', 'MainController@competitions');
Route::post('/2019/competitions', 'MainController@competitions');

Route::get('/2019/competitions/cozmo', 'MainController@cozmo');
Route::post('/2019/competitions/cozmo', 'MainController@cozmo');
Route::get('/2019/competitions/meshmerize', 'MainController@meshmerize');
Route::get('/2019/competitions/rowboatics', 'MainController@rowboatics');
Route::get('/2019/competitions/oprahat', 'MainController@oprahat');
Route::get('/2019/competitions/imc', 'MainController@imc');
Route::get('/2019/competitions/codecode', 'MainController@codecode');



Route::get('/2019/competitions/details_form','MainController@details_form');
Route::post('/2019/competitions/details_form','MainController@details_form_reg');

Route::get('/2019/competitions/zonals_form','MainController@zonals_form');
Route::post('/2019/competitions/zonals_form','MainController@zonals_form_reg');



Route::get('/2019/competitions/cozmo/reg','MainController@regcozmo');
Route::get('/2019/competitions/cozmo/jointeam', 'MainController@cozmo_join_team_form');
Route::post('/2019/competitions/cozmo/jointeam', 'MainController@cozmo_join_team_reg');
Route::get('/2019/competitions/cozmo/createteam', 'MainController@cozmo_create_team_form');
Route::post('/2019/competitions/cozmo/createteam', 'MainController@cozmo_create_team_reg');
Route::get('/2019/competitions/cozmo/leaveteam', 'MainController@cozmo_leave_team');
Route::get('/2019/competitions/cozmo/dissolveteam', 'MainController@cozmo_dissolve');




Route::get('/2019/ideate', 'MainController@ideate');
Route::post('/2019/ideate', 'MainController@ideate');

Route::get('/reg-ideate','MainController@regcozmo');


Route::get('/19/summit', 'MainController@summit');
Route::get('/19/esports', 'MainController@esports');
Route::get('/19/workshops', 'MainController@workshops');
Route::get('/19/hospitality', 'MainController@hospitality');
Route::get('/19/schedule', 'MainController@schedule');
Route::get('/19/initiative', 'MainController@initiative');
Route::get('/19/mun', 'MainController@mun');
Route::get('/19/ift', 'MainController@ift');
Route::get('/19/ozone', 'MainController@ozone');
Route::get('/19/techx', 'MainController@techx');














Route::get('/refund-kardo','PaymentController@paidTeams');
Route::get('/give-kardo','PaymentController@removeTicket');
Route::get('/admin/accomodation/123','MainController@accoDekho');

Route::redirect('/HHDL','https://goo.gl/forms/sdM9rPaB1S8xbMzi2');
Route::redirect('/HHDLvisitor','https://goo.gl/forms/2G7MHkuuqUq5T3OJ2');
Route::redirect('/hhdlvisitor','https://goo.gl/forms/2G7MHkuuqUq5T3OJ2');
Route::redirect('/hhdl','https://goo.gl/forms/sdM9rPaB1S8xbMzi2');
Route::get('/404/{name}/{score}','MainController@error404Custom');
Route::redirect('/ic','/innovationchallenge');
Route::redirect('/InnovationChallenge','/innovationchallenge');
Route::get('/create-temp-login',function(){
    session(['admin'=>'test']);
    return redirect('/accommodation');
});
Route::middleware('admin')->group(function() {
    Route::prefix('/admin/accommodation')->group(function () {
        Route::get('/', 'Accommodation\MainController@Get')->name('admin.accommodate');
        Route::get('/accoTable', 'Accommodation\MainController@accoTable')->name('admin.accoTable');
        Route::get('/roomTable', 'Accommodation\MainController@roomTable')->name('admin.accoTable');
        Route::get('/allocate', function () {
            return view('accommodation.allocate');
        })->name('allocate');
        Route::get('/configure', function () {
            $kiu = ['1','22','6','5','51'];
            if(!in_array(session()->get('admin')->id,$kiu)) return abort(403);
            return view('accommodation.configure');
        })->name('configure');
        Route::get('/lol/{id}', 'Accommodation\MainController@getRelations');
        Route::post('/accommodate', 'Accommodation\MainController@accommodate');
        Route::post('/reset', 'Accommodation\MainController@resetAcco');
        Route::get('/documentation', function () {
            return view('accommodation.documentation');
        });
        Route::get('/full-reset', 'Accommodation\MainController@reset');
    });
});
Route::get('/mun-certificate','Certificate\CertificateController@munCertiGet');
Route::post('/mun-certificate','Certificate\CertificateController@munCertiPost');
Route::prefix('/admin/attendance')->group(function(){
    Route::get('/','Attendance\MainController@Get')->name('admin.attendance');
    Route::get('/reset','Attendance\MainController@reset')->name('admin.reset');
    Route::post('/mark/{eid}/{pid}/{slot}','Attendance\MainController@markGet')->name('admin.mark-attendance');
});
Route::get('/link/debug/{ticket}','PaymentController@ticketGet');

Route::post('/summitPost','EventController@summitPost')->name('summitPost');
Route::get('/logout','AdminController@logoutGet')->name('logoutGet');
Route::prefix('/certificate')->name('.certificate')->group(function(){
    Route::get('/verify/{id}/{pid}','Certificate\CertificateController@verify');
    Route::get('/gen/{id}/{pid}/{secret}','Certificate\CertificateController@downloadCertificate');
});
Route::redirect('/summit','/summit18/');
Route::redirect('/events/twmun','/twmun/2018');
Route::redirect('/makerthon','/Tata%20Makerthon%20Challenge/competition');
Route::redirect('/periloscope','/Periloscope%20Challenge%C2%A0/competition');
Route::redirect('/springfield','/Springfield%20Challenge/competition');
Route::redirect('/vision2030','/vision-2030/competition');
Route::redirect('/encodesteel','/Encode%20Steel/competition');
Route::redirect('/tata','/Tata%20Makerthon%20Challenge/competition');
Route::redirect('/irc','/International%20Robotics%20Challenge/competition');
Route::redirect('/oprahat','/Op.%20Rahat/competition');
Route::redirect('/OpRahat','/Op.%20Rahat/competition');
Route::redirect('/Oprahat','/Op.%20Rahat/competition');
Route::redirect('/Op.Rahat','/Op.%20Rahat/competition');
Route::redirect('/op.rahat','/Op.%20Rahat/competition');
Route::redirect('/Op.rahat','/Op.%20Rahat/competition');
Route::redirect('/codecode','/CoDecode/competition');
Route::redirect('/meshmerize','/Meshmerize/competition');
Route::redirect('/cozmoclench','/Cozmo%20Clench/competition');
Route::redirect('/CozmoClench','/Cozmo%20Clench/competition');
Route::redirect('/zero-energy','Zero Energy Building/workshop');
Route::redirect('/reforming','/Reforming%20the%20Past/competition');
Route::redirect('/McCafe','/McCafe%20On%20the%20Go/competition');
Route::redirect('/Mccafe','/McCafe%20On%20the%20Go/competition');
Route::redirect('/mccafe','/McCafe%20On%20the%20Go/competition');
Route::redirect('/mcCafe','/McCafe%20On%20the%20Go/competition');
Route::redirect('/boeing','/Boeing%20Aeromodelling%C2%A0/competition');
Route::redirect('/aeromodelling','/Boeing%20Aeromodelling%C2%A0/competition');
Route::redirect('/Aeromodelling','/Boeing%20Aeromodelling%C2%A0/competition');
Route::redirect('/zonal','/technorion');
Route::redirect('/zonals','/technorion');
Route::redirect('/fullthrottle','/International%20Full%20Throttle/competition');
Route::redirect('/fullthrottle','/International%20Full%20Throttle/competition');
Route::redirect('/Full%20Throttle/competition','/International%20Full%20Throttle/competition');
Route::redirect('/Full Throttle/competition','/International%20Full%20Throttle/competition');
Route::redirect('/FullThrottle','/International%20Full%20Throttle/competition');
Route::redirect('/RowBoatics','/RowBoatics/competition');
Route::redirect('/events/cyclothon/','/cyclothon');
Route::redirect('/accomodation','/accommodation');
Route::redirect('/datathon','/YES%20BANK%20Datathon/competition');
Route::redirect('/Embedded','https://techfest.org/Embedded%20Systems/workshop');
Route::redirect('/DataScience','https://techfest.org/Open%20Data%20Science/workshop');
Route::redirect('/ml','/Machine%20Learning%20in%20Fintech/workshop');
Route::redirect('/ML','/Machine%20Learning%20in%20Fintech/workshop');
Route::redirect('/Automobile','https://techfest.org/Automobile%20Mechanics/workshop');
Route::redirect('/computer-vision','/SAMSUNG%20Computer%20Vision/workshop');
Route::redirect('/alexa','/Voice%20Recognition-%20Alexa/workshop');
Route::redirect('/Nvidia','/Nvidia Deep Learning/workshop');
Route::redirect('/ChatBot','/Chat Bot/workshop');
Route::redirect('/ComputerVision','/SAMSUNG Computer Vision/workshop');
Route::redirect('/CloudComputing','/Cloud Computing/workshop');
Route::redirect('/matlab','/Deep Learning using MATLAB/workshop');
Route::redirect('/NanoTech','/Nano Machine Technology/workshop');
Route::redirect('/DLMATLAB','/Deep Learning using MATLAB/workshop');
Route::redirect('/summit17','https://techfest.org/summit18');
Route::redirect('/redirect','https://techfest.org/segreta/redirect');
Route::redirect('/All in Cloud/workshop','https://techfest.org/Cloud%20Computing/workshop');
Route::redirect('/GestureRobotics','https://techfest.org/Gesture Robotics/workshop');
Route::redirect('/blockchain','https://techfest.org/%C2%A0IBM%20Blockchain%20Decentralisation/workshop');
Route::redirect('/ZeroEnergy','https://techfest.org/Zero%20Energy%20Building/workshop');
Route::redirect('/Underwater','https://techfest.org/Underwater%20Robotics/workshop');

//todo remove the link form url
Route::get('/accommo/123','AdminController@workshopDB');
Route::prefix('/ca')->name('ca.')->group(function(){
    Route::middleware('minify')->group(function(){
        Route::get('/','CaController@indexPost')->name('Get');
        Route::post('/','CaController@indexPost')->name('Post'); //todo remove development and mango from the URL
        Route::get('/referral',function(){
            return view('ca.referral');
        });
        Route::post('/referral','CaController@referralPost');
    });
    Route::post('/profile','CaController@profilePost')->name('profilePost');
    Route::get('/logout','CaController@logoutGet')->name('logoutGet');
    Route::post('/upload','CaController@uploadPost')->name('uploadPost');
    Route::resource('/event','CaEventController');
});
Route::get('/acco/count-all','AdminController@accommodation');
Route::get('/payment-test','PaymentController@sessionCreate');
Route::prefix('/payment')->name('payment.')->group(function(){
    Route::post('/get-relations','PaymentController@getRelations')->name('getRelationsPost');
    Route::get('/direct/{id}','PaymentController@directLinks');
});

Route::prefix('/admin')->name('admin.')->group(function(){
    Route::get('/technoholix','Admin\DatabaseController@techx');
    Route::get('/lolg','PaymentController@addPayment');
    Route::post('/lolg','PaymentController@postPayment');
    Route::prefix('/certificate-last')->group(function(){
       Route::get('/','Certificate\CertificateController@Get');
       Route::post('/send','Certificate\CertificateController@Send');
       Route::post('/teamids','Certificate\CertificateController@teamIds');
       Route::post('/create','Certificate\CertificateController@create');
    });
    Route::get('/generateCas','Certificate\CertificateController@generateCATable');
    Route::get('/certi-test','Certificate\CertificateController@test');
    Route::get('/login','AdminController@loginGet')->name('loginGet');
    Route::post('/login','AdminController@loginPost')->name('loginPost');
    Route::get('/logout','AdminController@logoutGet')->name('logoutGet');
    Route::get('/referal','AdminController@caReferal');
    Route::get('/certificate-dedo','Certificate\CertificateController@certificateSelect');
    Route::middleware('admin.route')->group(function(){
        Route::prefix('/ca')->name('ca.')->group(function(){
            Route::get('/list','AdminController@caListGet')->name('listGet');
            Route::get('/task-create','AdminController@caTaskCreateGet')->name('taskCreateGet');
            Route::get('/image','AdminController@caImageGet')->name('imageVerifyGet');
            Route::post('/task-create','AdminController@caTaskCreatePost')->name('taskCreatePost');
            Route::get('/image/update/{id}/{points}','AdminController@caImageUpdateIdPointsGet')->name('imageUpdateIdPointsGet');
            Route::get('/competitions','AdminController@competitions');
        });
        Route::prefix('/competitions')->name('competitions.')->group(function(){
            Route::get('/registrations','AdminController@competitionsRegistrationsGet')->name('registrationsGet');
        });
    });
//    Route::get('/payment','PaymentController@auth');
    Route::get('/payment',function(){
        return "Sorry the payment portal has closed"; 
    });
    Route::get('/accommodation1','PaymentController@auth');
    Route::middleware('admin')->group(function() {
        Route::get('/kanni','AdminController@kannikafunction');
        Route::any('/admin-admin','PaymentController@paymentTcfPost')->name('paymentTcfPost');
        Route::any('/admin-debug','PaymentController@adminDebug');
        Route::any('/refund','PaymentController@refunded');
        Route::get('/database','AdminController@databaseGet');
        Route::get('/payment-seen','PaymentController@updatePayments');
        Route::get('/team-seen/{k}','PaymentController@getTeams');
        Route::get('/get-all','AdminController@searchResult');
        Route::get('/make-session','AdminController@makeSession');
        Route::get('/kaka','Certificate\CertificateController@caUsers');
        Route::prefix('/certificate')->group(function(){
            Route::get('/','Certificate\AdminController@Get');
            Route::get('/generate/{id}','Certificate\AdminController@generateId');
        });
        Route::prefix('/certificate/new')->group(function(){
            Route::get('/','Certificate\AdminController@GetNew');
            Route::get('/generate/{id}','Certificate\AdminController@generateIdNew');
        });
        Route::any('/old','AdminController@oldAny');
        Route::get('/dashboard', 'AdminController@dashboardGet')->name('dashboardGet');

        Route::prefix('/create')->group(function(){
            Route::get('/{id}','AdminController@createGet')->name('createGet');
            Route::post('/{id}','AdminController@createPost')->name('createPost');
        });
        Route::prefix('/role')->name('role.')->group(function () {
            Route::get('/', 'AdminController@adminRoleGet')->name('Get');
            Route::post('/create', 'AdminController@adminRoleCreatePost')->name('createPost');
            Route::post('/delete','AdminController@adminRoleDeleteIdPost')->name('deleteIdPost');
            Route::get('/{id}', 'AdminController@adminRoleIdGet')->name('idGet');
            Route::post('/{id}', 'AdminController@adminRoleIdPost')->name('idPost');
        });
        Route::prefix('/mail')->name('mail.')->group(function(){
            Route::get('/','Mail\MailController@Get')->name('Get');
            Route::get('/workshopMail','Mail\MailController@workshop')->name('workshop');
            Route::get('/mail/list','Mail\MailController@mailListGet')->name('mail.listGet');
            Route::get('/list','Mail\MailController@listGet')->name('listGet');
            Route::get('/{mail}','Mail\MailController@mailGet')->name('mailGet');
            Route::get('/create/template','Mail\MailController@createTemplateGet')->name('create.templateGet');
            Route::Post('/create/template','Mail\MailController@createTemplatePost')->name('create.templatePost');
            Route::Post('/{mail}/destroy','Mail\MailController@mailDestroyPost')->name('mail.destroyPost');
            Route::get('/{mail}/edit','Mail\MailController@mailEditGet')->name('mail.editGet');
            Route::Post('/send','Mail\MailController@sendPost')->name('sendPost');
            Route::Post('/{mail}/edit','Mail\MailController@mailEditPost')->name('mail.editPost');
            Route::prefix('/recipents')->name('recipents.')->group(function(){
                Route::get('/list','Mail\MailController@recipentlistGet')->name('listGet');
                Route::get('/create','Mail\MailController@recipentCreateGet')->name('createGet');
                Route::post('/create','Mail\MailController@recipentCreatePost')->name('createPost');
                Route::get('/get/{recipent}','Mail\MailController@recipentGet')->name('recipentGet');
                Route::get('{recipent}/update','Mail\MailController@recipentUpdateGet')->name('updateGet');
                Route::get('{recipent}/update','Mail\MailController@recipentUpdateGet')->name('updateGet');
                Route::Post('{recipent}/update','Mail\MailController@recipentUpdatePost')->name('updatePost');
                Route::Post('/{recipent}/delete','Mail\MailController@recipentDestroyPost')->name('deletePost');
            });
        });
        Route::get('/create','AdminController@adminCreateGet')->name('adminCreateGet');
        Route::post('/create','AdminController@adminCreatePost')->name('adminCreatePost');
    });
    Route::prefix('/competitions')->name('competitions.')->group(function(){
        Route::get('/list','Admin\CompetitionsController@listGet')->name('listGet');
    });
});
Route::get('/twmun/2018','EventController@twmunGet');
Route::get('/robowars','EventController@robowarsGet');
Route::get('/innovationchallenge','EventController@icGet');
Route::get('/cyclothon','EventController@cyclothonGet');
Route::post('/robowars/2018','EventController@robowarsPost');
Route::prefix('/2017')->group(function(){
    Route::get('/','PreviousController@home')->name('home');
    Route::get('/events/{link}','PreviousController@eventsLink')->name('events.link');
    Route::get('/{link}','PreviousController@link')->name('link');
});
Route::redirect('/google','https://techfest.org/Google%20Android/workshop');
Route::prefix('/android')->group(function(){
    Route::get('qr/{id}','Android\MainController@qrGen');
});

Route::domain('m.techfest.org')->name('mobile.')->middleware('minify')->group(function(){
    Route::get('/','MobileController@Get')->name('Get');
//    Route::redirect('/ca','/college-ambassador');
//    Route::get('/ca','CaController@indexPost');
    Route::get('/404','MainController@error404');
    Route::get('/twmun/2018','EventController@twmunGet');
    Route::get('/robowars','EventController@robowarsGet');
    Route::get('/register','MainController@registerUrlGet')->name('registerUrlGet');
    Route::post('/register','MainController@registerUrlPost')->name('registerUrlPost');
    Route::post('/profile','CaController@profilePost')->name('profilePost');
    Route::get('/{any}','MobileController@Get')->name('Get1');
    Route::get('/{any}/{any2}','MobileController@Get')->name('Get2');
});
Route::get('/admin/accommodation/lock-code/{id}',function($id){
    return view('lockCode',compact('id'));
});

Route::redirect('/lookback-18','/lookback');

//Route::redirect('/CA','/college-ambassador');
//Route::redirect('/CAPortal','/college-ambassador');
//Route::redirect('/Ca','/college-ambassador');
//Route::redirect('/CR','/college-ambassador');
//Route::redirect('/Cr','/college-ambassador');
//Route::redirect('/ca','/college-ambassador');
//Route::redirect('/cr','/college-ambassador');
Route::redirect('/lookback-18','/lookback');

Route::middleware('minify')->group(function() {
    Route::get('/', 'MainController@Get')->name('Get');
    Route::get('/404', 'MainController@error404')->name('error404Get');
    Route::get('/404-test', 'MainController@error404Test')->name('error404Get');
    Route::any('/successfully-registered','MainController@successfullyRegistered')->name('successfully-registered');
    //Particular Events Pages
    //Registrations
    Route::get('/register', 'MainController@registerUrlGet')->name('registerUrlGet');
    Route::post('/register', 'MainController@registerUrlPost')->name('registerUrlPost');
    Route::get('/register/{test?}/{id?}', 'MainController@registerEventGet')->name('registerEventGet');
    Route::post('/login', 'MainController@loginPost');
    Route::prefix('/event')->name('event.')->group(function () {
        Route::get('/get', 'EventController@getPost')->name('getPost');
        Route::post('/get/{id}', 'EventController@getIdPost')->name('getIdPost');
    });
    Route::post('/templatePostUrl', function () {
        $k = ['category' => 'competition', 'template' => '/2018/competition', 'tags' => 'competition,robowars'];
        return response()->json($k);
    })->name('templateUrlPost');

    //General URLs
    Route::get('/{event}', 'MainController@Get')->name('event');
    Route::get('/{event}/{eventName}', 'MainController@Get')->name('eventEventName');
    Route::get('/{event}/{eventName}/{id}', 'MainController@Get')->name('eventEventNameId');
});


