<?php

use \Esensi\Model\Model;

class Location extends Model {

	// Add your validation rules here
	protected $rules = [
		'name' => 'required|max:100',
		'address' => 'required|max:255',
		'city' => 'required|max:100',
		'state' => 'required|max:30',
		'postal_code' => 'numeric|required|max:5'

	];

	// Don't forget to fill this array
	protected $fillable = [
		'name',
		'address',
		'city',
		'state',
		'postal_code'
	];

	public function calendarEvents()
	{
		return $this->hasMany('CalendarEvent');
	}

}
