<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/google-response','MainController@googleResponseGet');
Route::post('/login', 'MainController@loginPost')->name('loginPost');

Route::prefix('/accommodation')->group(function(){
    Route::prefix('/allocate')->group(function(){
        Route::get('/hostel','Accommodation\AllocateController@hostelGet');
    });
    Route::post('/rooms','Accommodation\MainController@getRooms');
    Route::put('/rooms','Accommodation\MainController@putRooms');
//    Route::put('/updatekits','Accommodation\MainController@updateKits');
    Route::any('/updatekits','Accommodation\MainController@updateKits');
    Route::prefix('/delete')->group(function(){
        Route::post('/rooms','Accommodation\MainController@deleteRooms');
    });
});
Route::middleware('auth:api')->get('/user', 'MainContoller@authUser');
Route::prefix('/admin')->name('api.admin.')->group(function(){
    Route::prefix('/competitions')->name('competitions.')->group(function(){
        Route::post('/get-registrations','AdminController@getRegistrationsPost')->name('getRegistrationsPost');
        Route::post('/get-details','Admin\CompetitionsController@getDetailsPost')->name('getDetailsPost');
    });
    Route::post('/get-details','AdminController@searchResultPost');
    Route::middleware('admin')->group(function(){
        Route::prefix('/database')->group(function(){
            Route::post('/','AdminController@databasePost');
            Route::get('/event','Admin\DatabaseController@eventGet');
            Route::post('/event','Admin\DatabaseController@eventPost');
            Route::post('/table','Admin\DatabaseController@tablePost');
            Route::get('/payment','Admin\DatabaseController@paymentGet');
            Route::get('/robowars','Admin\DatabaseController@robowarsGet');
            Route::get('/accommodation','Admin\DatabaseController@accommodationGet');
            Route::get('/shirts','Admin\DatabaseController@shirtsGet');
        });
        Route::prefix('/certificate')->group(function(){
            Route::get('/certificates','Certificate\AdminController@certificatesGet');
            Route::post('/certificate','Certificate\AdminController@certificatePost');
            Route::post('/authenticate','Certificate\AdminController@authenticatePost');
            Route::post('/nameInsert','Certificate\AdminController@nameInsertPost');
            Route::prefix('/new')->group(function (){
                Route::get('/certificates','Certificate\AdminController@certificatesGetNew');
                Route::post('/certificate','Certificate\AdminController@certificatePostNew');
                Route::post('/authenticate','Certificate\AdminController@authenticatePostNew');
                Route::post('/nameInsert','Certificate\AdminController@nameInsertPostNew');
            });
        });
        Route::get('/database','AdminController@databaseGet');
    });
});
Route::post('/get-relations','PaymentController@getMembersPost');
Route::post('/get-team-details','PaymentController@getTeamMembersPost');
Route::prefix('/certificate')->group(function(){
    Route::post('/eligible','Certificate\CertificateController@eligiblePost');
    Route::post('/generate','Certificate\CertificateController@generatePost');
    Route::post('/confirm-name','Certificate\CertificateController@confirmNamePost');
    Route::post('/confirm-name/{cid}/{pid}/{secret}','Certificate\CertificateController@confirmMailPost');
    Route::post('/update-name','Certificate\CertificateController@updateNamePost');
    Route::post('/update-name-new','Certificate\CertificateController@updateNameNewPost');
    Route::post('/update-name/{cid}/{pid}/{secret}','Certificate\CertificateController@updateMailPost');
});
Route::prefix('/android')->middleware('cors')->group(function(){
    Route::any('/login/{email}/{id}','Android\MainController@loginPost');
});
Route::post('/payment-response','PaymentController@testPost')->name('testPost');
Route::prefix('/payment')->name('payment.')->group(function(){
    Route::post('/get-link','PaymentController@getLinkPost')->name('getLinkPost');
    Route::post('/status','PaymentController@statusPost')->name('statusPost');
    Route::post('/accomodation/get-link','PaymentController@accomodationGetLinkPost')->name('accomodationGetLinkPost');
});
Route::middleware('cors')->group(function(){
    Route::any('/payment-tcf','PaymentController@paymentTcfPost')->name('paymentTcfPost');
});

Route::post('/get-android-details/{id}','Android\MainController@apiGetDetailsPost')->name('api.getParticipantPost');
Route::post('/get-android-participant/{id}','Android\MainController@apiGetParticipant')->name('api.getParticipantPost');
Route::post('/get-android-status/{id}','Android\MainController@apiGetStatusPost')->name('get-status');
Route::any('/lectures-mail','MainController@lectureResponse');
Route::any('/lectures-mail-2','MainController@lectureResponse2');

Route::get('payment-test','PaymentController@testPost');
Route::get('search','EventController@apiSearchPost')->name('apiSearchPost');
Route::get('check-login','MainController@apiCheckLogin')->name('api.checkLogin');
Route::post('/get-participant','MainController@apiGetParticipant')->name('api.getParticipantPost');
Route::post('/get-details','MainController@apiGetDetailsPost')->name('api.getParticipantPost');
Route::post('/get-status','MainController@apiGetStatusPost')->name('get-status');
Route::post('/get-members','MainController@apiGetMembersPost')->name('get-status');
Route::prefix('/register')->name('api.register')->group(function(){
    Route::post('/technoholix','EventController@apiRegisterTechnoholix')->name('technoholix');
    Route::post('/technoholix/check','EventController@apiRegisterTechnoholixCheckPost')->name('technoholix');
    Route::post('/event','MainController@apiRegisterEventPost')->name('eventPost');
    Route::post('/leader','EventController@apiRegisterLeaderPost')->name('leaderPost');
    Route::post('/check','EventController@apiRegisterCheckPost')->name('checkPost');
    Route::any('/get-team','EventController@apiRegisterGetTeamPost')->name('getTeamPost');
    Route::post('/add-member','EventController@apiRegisterAddMemberPost')->name('addMemberPost');
    Route::post('/remove','EventController@apiRegisterRemovePost')->name('removePost');
    Route::post('/delete-team','EventController@apiRegisterDeletePost')->name('deletePost');
});
Route::get('session-flush','MainController@sessionFlushGet');
Route::prefix('/event')->name('api.event.')->group(function(){
    Route::post('/name/{event}','EventController@nameEventPost')->name('nameEventPost');
    Route::post('/competitions','EventController@competitionsPost')->name('competitionsPost');
    Route::post('/zonals','EventController@zonalsPost')->name('zonalsPost');
    Route::post('/ideates','EventController@ideatesPost')->name('ideatesPost');
    Route::get('/technoholix','EventController@NamePost')->name('namePost');
    Route::post('/name','EventController@NamePost')->name('namePost');
    Route::post('/join-team','MainController@apiJoinTeamPost')->name('joinTeamPost');
    Route::post('/{event}','EventController@eventPost')->name('eventPost');
});
Route::prefix('/workshop')->name('api.workshops.')->group(function(){
    Route::get('/','WorkshopController@Get')->name('Get');
    Route::post('/register','WorkshopController@registerPost')->name('registerPost');
    Route::post('/{id}','WorkshopController@getStatusPost')->name('getStatusPost');
    Route::post('/get-status/{id}','WorkshopController@getStatusPost')->name('getStatusPost');
});
Route::prefix('/admin/accommodation')->group(function(){
    Route::post('/perroom','Accommodation\MainController@perRoom');
    Route::any('/gender','Accommodation\MainController@gender');
    Route::prefix('/context')->group(function(){
        Route::post('/female/{id}','Accommodation\ContextController@femaleGender');
        Route::post('/male/{id}','Accommodation\ContextController@maleGender');
        Route::post('/removeAccommodation/{id}','Accommodation\ContextController@removeAccommodation');
        Route::post('/removeAllocation/{id}','Accommodation\ContextController@removeAllocation');
        Route::post('/giveAccommodation/{id}','Accommodation\ContextController@giveAccommodation');
    });
});