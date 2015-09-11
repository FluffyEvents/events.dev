<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('dev.home');
	}

	public function showLogin()
	{
		if (!Auth::check()) {

			return View::make('dev.login');

		} else Redirect::to('/');
	}

	public function showMakeEvent()
	{
		return View::make('dev.makeEvent');
	}

	public function doLogin()
	{
		$input = array('email' => Input::get('email'), 'password' => Input::get('password'));
		if (Auth::attempt($input)) {
		    return Redirect::intended('/');
		} else {
			//1. display a session flash error
			Session::flash('errorMessage', 'Invalid credentials provided for login.');
			//2. Log email that tried to authenticate
			$email = Input::get('email');
			Log::error("Unable to authenticate $email login attempt.");
			//3. redirect to login page with input
			return Redirect::action('HomeController@showLogin')->withInput();
		}
	}


	public function doLogout()
	{

		Auth::logout();
		return Redirect::to('/');
	}

}
