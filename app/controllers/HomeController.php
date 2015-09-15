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
		return View::make('index');
	}

	public function showLogin()
	{
		if (!Auth::check()) {

			return View::make('login');

		} else Redirect::to('/');
	}

	public function showManageDashboard()
	{
		if (!Auth::check()) {

			return View::make('login');

		} else return View::make('dashboard');
	}

	public function submitLogin()
	{
		$input = Input::only('email', 'password');

		if (!Auth::attempt($input)) {
			//1. display a session flash error
			Session::flash('loginError', 'Invalid Email or Password.');
			//2. Log email that tried to authenticate
			$email = Input::get('email');
			Log::error("Unable to authenticate $email login attempt.");
			//3. redirect to login page with input
			return Redirect::action('HomeController@showLogin')->withInput(Input::except('password'));
		}
		    return Redirect::intended('/');
	}


	public function submitLogout()
	{

		Auth::logout();
		return Redirect::to('/');
	}

}
