<?php

use Acme\Forms\RegistrationForm;

class RegistrationController extends \BaseController {

	/**
	 * @var RegistrationForm
	 */
	private $registrationForm;

	/**
	 * @param RegistrationForm $registrationForm
	 */
	function __construct(RegistrationForm $registrationForm)
	{
		$this->registrationForm = $registrationForm;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('email', 'password', 'password_confirmation', 'first_name', 'last_name');

		//form exceptions handled in start/global.php
		$this->registrationForm->validate($input);

		$user = User::create($input);

		Auth::login($user);
		//email new user with pertinent new user info and OBLIGATORY WELCOME TO FLUFFYEVENTS
		// $data = array('user' => $user);
		// Mail::send('emails.welcome', $data, function($message, $user)
	    // {
	    //     $message->to($user->email)
	    //             ->subject('Welcome to FluffyEvents!');
	    // });

		return Redirect::home();
	}

}
