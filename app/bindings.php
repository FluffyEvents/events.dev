<?php

/*
|-------------------------------------
| Route Bindings File
|-------------------------------------
*/

Route::bind('events', function($value, $route)
{
    return CalendarEvent::with('location', 'user')->findOrFail($value);
});
