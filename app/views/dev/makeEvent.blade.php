@extends('dev.layout')

@section('content')
<div class="container-fluid">
    <div class="col-xs-6 col-xs-offset-3">
    {{ Form::open(array('action' => 'CalendarEventsController@store',
        'method' => 'POST', 'class' => 'form-horizontal')) }}
@include('locations.create')
<br>
@include('calendar_events.create')

        <div class="form-group">
            {{ Form::submit('submit', ['class' => 'btn btn-primary form-control']) }}
        </div>

    {{ Form::close() }}
</div>
</div>
@stop
