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

 		 $this->beforeFilter('auth', array('except' => array('index', 'show', 'getAddress')));

 	 }
	public function index()
	{
		$query = CalendarEvent::with('location');

		if (Input::has('q')) {

			$search = Input::get('q');
			$query->where('title', 'like', "%$search%");

		}

		$events = $query->orderBy('start_time', 'asc')->paginate(4);

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
		$locations = ['-1' => 'none'] + Location::lists('name', 'id');
		// $locations = Location::lists('name', 'id');
		// $locations = array_add($locations, '-1', '');
		return View::make('makeEvent', compact('locations'));
	}


	/**
	 * This function will grab input data for both the Location and CalendarEvent models
	 * and store the newly created Location and CalendarEvent
	 * @return Response
	 */
	public function store()
	{
		// Grab the Input data for the everything
		$input = Input::only('name', 'address', 'city', 'state', 'postal_code',
		'start_time', 'end_time', 'title', 'description', 'price');

		//validate:form exceptions handled in start/global.php
		$this->calendarEventForm->validate($input);

		if (Input::get('location') == -1) {

			$location = Location::create($input);

			$locationId = $location->id;

		} else {

			$locationId = Input::get('location');
		}

			$calendarEvent = CalendarEvent::create(array(
				'start_time' => Input::get('start_time'),
				'end_time' => Input::get('end_time'),
				'title' => Input::get('title'),
				'description' => Input::get('description'),
				'price' => Input::get('price'),
				'location_id' => $locationId,
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
	public function show(CalendarEvent $event)
	{
		return View::make('calendar_events.show', compact('event'));
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

	public function getAddress(CalendarEvent $event) {
		$location = Location::findOrFail($event->location_id);
		return Response::json($location);
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
