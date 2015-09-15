<?php
use Acme\Forms\CalendarEventForm;

class CalendarEventsController extends \BaseController {

	/**
	 * Display a listing of calendarevents
	 *
	 * @return Response
	 */
	 public function __construct(CalendarEventForm $calendarEventForm)
 	 {
 		 parent::__construct();

		 $this->calendarEventForm = $calendarEventForm;

 		 $this->beforeFilter('auth', array('except' => array('index', 'show')));

 	 }
	public function index()
	{
		$events = CalendarEvent::all();

		return View::make('calendar_events.index', compact('events'));
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
		$input = Input::only('name', 'address', 'city', 'state', 'postal_code',
		'start_time', 'end_time', 'title', 'description', 'price');

		//validate:form exceptions handled in start/global.php
		$this->calendarEventForm->validate($input);

		$location = Location::create($input);

		$calendarEvent = CalendarEvent::create(array(
			'start_time' => Input::get('start_time'),
			'end_time' => Input::get('end_time'),
			'title' => Input::get('title'),
			'description' => Input::get('description'),
			'price' => Input::get('price'),
			'location_id' => $location->id,
			'user_id' => Auth::id()
		));


		return Response::json(CalendarEvent::with('user', 'location')->where('user_id', Auth::id())->get());

		// On Successful Creation Show The Event Page
		// return Redirect::action('CalendarEventsController@show', $calendarEvent->id);
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

		return View::make('calendar_events.show', compact('calendarEvent'));
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
