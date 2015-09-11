<?php

use \Esensi\Model\Model;

class CalendarEvent extends Model {
	protected $fillable = [];

	protected $table = 'calendar_events';

	protected $rules = array(
	
	);

	protected $fillable = array(

	);

	public function getDates()
	{
		return array_merge(parent::getDates(), 'starts_at', 'ends_at');
	}

	public function creator()
	{
		return $this->belongsTo('User', 'user_id');
	}

	public function location()
	{
		return $this->belongsTo('Location');
	}


}