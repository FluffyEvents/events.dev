<?php


class CalendarEvent extends \Eloquent {

	protected $table = 'calendar_events';

	protected $rules = array(
		'start_time' => 'required|max:255',
		'end_time' => 'required|max:255',
		'title' => 'required|max:255',
		'description' => 'required|max:4000',
		'price' => 'integer|max:10'
	);

	protected $fillable = array(
	    'start_time',
	    'end_time',
	    'title',
	    'description',
	    'price',
	    'location_id',
	    'user_id'
	);

	public function getDates()
	{
		return array_merge(parent::getDates(), ['start_time', 'end_time']);
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
