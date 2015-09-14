<?php

use \Esensi\Model\Model;

class CalendarEvent extends Model {

	protected $table = 'calendar_events';

	protected $rules = array(
		'starts_at' => 'required|email|max:255|unique:users',
		'ends_at' => 'required|max:255',
		'title' => 'required|max:255',
		'description' => 'required|max:4000',
		'price' => 'integer|max:10'
	);

	protected $fillable = array(
	    'starts_At',
	    'ends_at',
	    'title',
	    'description',
	    'price',
	    'location_id',
	    'user_id'
	);

	public function getDates()
	{
		return array_merge(parent::getDates(), ['starts_at', 'ends_at']);
	}

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

	public function location()
	{
		return $this->belongsTo('Location');
	}


}
