<?php namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class CalendarEventForm extends FormValidator {

    protected $rules = array(
		'start_time' => 'required|max:255',
		'end_time' => 'required|max:255',
		'title' => 'required|max:255',
		'description' => 'required|max:4000',
		'price' => 'required|numeric',
        'name' => 'max:100',
		'address' => 'max:255',
		'city' => 'max:100',
		'state' => 'max:30',
		'postal_code' => 'max:5',
        'location' => 'integer'
	);

}
