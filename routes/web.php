<?php

use Illuminate\Support\Facades\Route;
use App\helpers as helpers;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewMessage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Landing page:
Route::get('/', function () {
    return view('welcome');

});

Route::get('/footer', function () {
    return view('footer');

});

Route::get('/countries', function () {
    return view('countries');

});

Route::get('/faqs', function () {
    return view('faqs');

});
Route::get('/about-us', function () {
    return view('about');

});


Route::get('/welcome1', function () {
    return view('welcome1');
});


Auth::routes(['verify'=>true]);

// Naveed:
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::prefix('home')->group(function () {

    Route::post('/', 'HomeController@index')->name('home')->middleware('verified'); // Step 1
    Route::post('/english-exam', 'HomeController@english_exam'); // Step 2
    Route::post('/educational-qualification', 'HomeController@educational_qualification'); // Step 3
    Route::post('/work-experience', 'HomeController@work_experience'); // Step 4
    Route::post('/program', 'HomeController@program'); // Step 5
    Route::post('/end', 'HomeController@end'); // End

    // Route::get('/', 'HomeController@index')->name('home');
    Route::get('/english-exam', 'HomeController@english_exam');
    Route::get('/educational-qualification', 'HomeController@educational_qualification');
    Route::get('/work-experience', 'HomeController@work_experience')->name('work_experience');;
    Route::get('/program', 'HomeController@program');
    Route::get('/end', 'HomeController@end');

    // AJAX
    Route::get('/edu-qual-temp', function () {
        return view("templates/edu_qual_template");
    });
    Route::post('/edu-qual-temp', 'HomeController@work_experience');
    Route::get('/work-exp-temp', function () {
        return view("templates/work_exp_template");
    });
    Route::get('/countries', 'HomeController@get_countries');
});

Route::prefix('test')->group(function () {
    Route::get("/", 'testController@index');
    Route::get("/save-basic-info", 'testController@save_basic_info');
    Route::post("/save-basic-info", 'testController@save_basic_info');
});

Route::get('send-email/{email_type?}/{to?}','MailController@send_email'); // plain or html
// Route::get('sendattachmentemail','MailController@attachment_email');

// Auth::routes();

//this is the orange colour
//second change

Route::get('/test-mail', function (){
    Notification::route('mail', 'support@eduquer.com')->notify(new NewMessage());
    return 'Sent';
});
