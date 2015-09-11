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

		return View::make('calendarevents.index', compact('events'));
	}

	/**
	 * Show the form for creating a new calendarevent
	 *
	 * @return Response
	 */
	public function create()
	{
		$locations = Location::all();
		return View::make('dev.create', compact('locations'));
	}

	/**
	 * Store a newly created calendarevent in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Input::

		if (!$location->save())
		{
			return Redirect::back()->withErrors()->withInput();
		}

		Calendarevent::create($data);

		return Redirect::route('calendarevents.index');
	}

	/**
	 * Display the specified calendarevent.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$calendarevent = Calendarevent::findOrFail($id);

		return View::make('calendarevents.show', compact('calendarevent'));
	}

	/**
	 * Show the form for editing the specified calendarevent.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$calendarevent = Calendarevent::find($id);

		return View::make('calendarevents.edit', compact('calendarevent'));
	}

	/**
	 * Update the specified calendarevent in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$calendarevent = Calendarevent::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Calendarevent::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$calendarevent->update($data);

		return Redirect::route('calendarevents.index');
	}

	/**
	 * Remove the specified calendarevent from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Calendarevent::destroy($id);

		return Redirect::route('calendarevents.index');
	}

}
