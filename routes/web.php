<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});
Route::get('/', function () {
    return view('index');
});

Route::get('/registerBusiness', function () {
    
    return view('registerBusiness');
});
Route::group(['namespace' => 'App\Http\Controllers'], function () {
Route::get('/login', 'LoginController@index')->name('login');
Route::get('/forgotPassword', 'LoginController@forgotPassword')->name('forgotPassword');
Route::get('/resetPassword/{email}', 'LoginController@resetPassword')->name('resetPassword');
Route::post('/reset', 'LoginController@reset')->name('reset');
Route::get('/logout', 'LoginController@signout')->name('logout');
Route::post('/customLogin', 'LoginController@customLogin')->name('login.custom');
Route::middleware(['middleware' => 'auth'])->group(function() {
Route::get('/dashboard', 'LoginController@dashboard')->name('dashboard');
Route::get('/video/{id}', 'LoginController@video')->name('videos');
});
Route::post('/payment', 'HomeController@jazzCash')->name('jazzCash');
Route::post('/payment_placed', 'HomeController@payment')->name('payment');
Route::get('/joinIdea', 'IdeaController@index')->name('joinIdea');
Route::post('/joinIdea', 'IdeaController@register')->name('joinIdea');
Route::get('/appointments', 'AppointmentController@index')->name('appointments');
Route::post('/appointments', 'AppointmentController@detail')->name('appointments');
Route::get('/slots/{date}/{month}/{year}', 'AppointmentController@slots')->name('appointments');
Route::post('reset_password_without_token', 'AccountsController@validatePasswordRequest');
Route::post('reset_password_with_token', 'AccountsController@resetPassword');
});