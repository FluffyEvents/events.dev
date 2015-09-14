<?php namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class CalendarEventForm extends FormValidator {

    protected $rules = array(
		'start_time' => 'required|max:255',
		'end_time' => 'required|max:255',
		'title' => 'required|max:255',
		'description' => 'required|max:4000',
		'price' => 'decimal|max:99999999',
        'name' => 'required|max:100',
		'address' => 'required|max:255',
		'city' => 'required|max:100',
		'state' => 'required|max:30',
		'postal_code' => 'required|max:5'
	);

}
