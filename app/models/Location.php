<?php

use \Esensi\Model\Model;

class Location extends Model {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function calendarEvents()
	{
		return $this->hasMany('CalendarEvent');
	}

}
