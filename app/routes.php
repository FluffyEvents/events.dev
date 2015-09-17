<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

#Home
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']);

#Coming Soon
Route::get('/comingsoon', 'HomeController@showComingSoon');

#Manage Events Dashboard
Route::get('/getlists', 'CalendarEventsController@currentUserEvents');
Route::get('/events/manage', 'HomeController@showManageDashboard');

#Events Resource
Route::model('events', 'CalendarEvent');
Route::resource('events', 'CalendarEventsController');


# Authentication
Route::get('login', ['as' => 'login', 'uses' => 'HomeController@showLogin']);
Route::post('login', ['as' => 'login', 'uses' => 'HomeController@submitLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'HomeController@submitLogout']);
Route::post('/register', ['as' => 'registration.store', 'uses' => 'RegistrationController@store']);
