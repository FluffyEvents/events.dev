@extends('layouts.master')

@section('content')
<hr><hr>
<div class="container-fluid">
    <div class="col-xs-6 col-xs-offset-3">
    {{ Form::open(array('action' => 'CalendarEventsController@store',
        'method' => 'POST', 'class' => 'form-horizontal')) }}


@include('locations.create')
<br>
@include('calendar_events.create')

        <div class="form-group">
            {{ Form::submit('submit', ['class' => 'btn btn-theme btn-theme-lg submit-button form-control']) }}
        </div>

    {{ Form::close() }}
</div>
</div>
@stop
@section('scripts')
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/jquery.datetimepicker.js"></script>
<script src="http://momentjs.com/downloads/moment.min.js"></script>
<script>
    Date.parseDate = function( input, format ){
      return moment(input,format).toDate();
    };
    Date.prototype.dateFormat = function( format ){
      return moment(this).format(format);
    };

    jQuery('#startsAtDateTimePicker').datetimepicker({
        format:'YYYY-MM-DD h:mm:00',
        formatTime:'h:mm a',
        formatDate:'DD-MM-YYYY'
    });
    jQuery('#endsAtDateTimePicker').datetimepicker({
        format:'YYYY-MM-DD h:mm:00',
        formatTime:'h:mm a',
        formatDate:'DD-MM-YYYY'
    });

    $("select").change(function (){
        if ($( "select option:selected" ).val() != -1) {
            $(".new-location").slideUp(500);
        } else {
            $(".new-location").slideDown(500);
        }
    });
</script>
@stop
