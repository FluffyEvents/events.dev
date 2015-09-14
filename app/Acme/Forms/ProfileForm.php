<?php namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class ProfileForm extends FormValidator {

	protected $rules = [
		'location'         => 'required',
		'bio'              => 'required',
		'first_name'	   => 'required|max:60',
		'last_name'	   	   => 'required|max:60',
		'twitter_username' => '',
		'github_username'  => ''
	];

}
