<?php namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator {

	protected $rules = [
		'email'    => 'required|email|unique:users',
		'password' => 'required|confirmed',
		'first_name' => 'required|max:255',
		'last_name' => 'required|max:255'

	];

}
