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

#Email Test
Route::get('/test', function()
{
    $data = [];

    Mail::send('emails.welcome', $data, function($message)
    {
        $message->to('beere.justin@gmail.com')
                ->subject('Hello Justin Beere');
    });

    return View::make('dev.home');

});
#Home
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']);

#Manage Events Dashboard
Route::get('/events/manage', 'CalendarEventsController@currentUserEvents');

#Events Resource
Route::model('events', 'CalendarEvent');
Route::resource('events', 'CalendarEventsController');


# Authentication
Route::get('login', ['as' => 'login', 'uses' => 'HomeController@showLogin']);
Route::post('login', ['as' => 'login', 'uses' => 'HomeController@submitLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'HomeController@submitLogout']);
