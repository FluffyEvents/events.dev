<?php

use \Esensi\Model\Model;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Model implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $rules = array(
		'email' => 'required|email|max:255|unique:users',
		'first_name' => 'required|max:255',
		'last_name' => 'required|max:255',
		'password' => 'required|confirmed'
	);

	protected $hashable = [ 'password' ];

	public function calendarEvents()
	{
	    return $this->hasMany('CalendarEvent');
	}
}
