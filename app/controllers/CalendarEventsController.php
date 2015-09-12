<?php

class CalendarEventsController extends \BaseController {

	/**
	 * Display a listing of calendarevents
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = CalendarEvent::all();

		return View::make('hello', compact('events'));
	}

	/**
	 * Show the Events Dashboard for the User
	 *
	 * @return Response
	 */
	public function currentUserEvents()
	{
		return Response::json(CalendarEvent::with('user', 'location')->where('user_id', Auth::id())->get());
	}

	/**
	 * Show the form for creating a new calendarevent
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('dev.makeEvent');
	}


	/**
	 * This function will grab input data for both the Location and CalendarEvent models
	 * and store the newly created Location and CalendarEvent
	 * @return Response
	 */
	public function store()
	{
		// Grab the Input data for the Location
		$input = Input::only('name', 'address', 'city', 'state', 'postal_code');

		$location = Location::create($input);

		// Redirect Back With Ensensi Errors on Creation Failure
		if (!$location) return Redirect::back()->withErrors($location->getErrors())->withInput();

		// Grab the Input data for the CalendarEvent
		$input = Input::only('starts_at', 'ends_at', 'title', 'description', 'price');

		// add user_id to $input as $data array
		$data = array_add($input, 'user_id', Auth::id());

		// add location_id to $data array
		$data = array_add($data, 'location_id', $location->id);

		$calendarEvent = CalendarEvent::create($data);

		// On Failure Redirect Back With Ensensi Errors and the Created Location
		// TODO Redirect with $location so multiple locations do not get added to DB on calendarEvent creation failure
		if (!$calendarEvent) return Redirect::back()->withErrors($calendarEvent->getErrors())->withInput();

		// On Successful Creation Show The Event Page
		return Redirect::action('CalendarEventsController@show', $calendarEvent->id);
	}

	/**
	 * Display the specified CalendarEvent.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(CalendarEvent $calendarEvent)
	{
		// $calendarEvent = CalendarEvent::findOrFail($id);

		return View::make('calendarevents.show', compact('calendarEvent'));
	}

	/**
	 * Show the form for editing the specified CalendarEvent.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$calendarevent = CalendarEvent::find($id);

		return View::make('calendarevents.edit', compact('calendarEvent'));
	}

	/**
	 * Update the specified CalendarEvent in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$calendarevent = CalendarEvent::findOrFail($id);

		$validator = Validator::make($data = Input::all(), CalendarEvent::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$calendarevent->update($data);

		return Redirect::route('calendarevents.index');
	}

	/**
	 * Remove the specified CalendarEvent from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		CalendarEvent::destroy($id);

		return Redirect::route('calendarevents.index');
	}

}
