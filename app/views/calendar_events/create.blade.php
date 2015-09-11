@section('content')
<div class="container-fluid">
    <div class="col-xs-6 col-xs-offset-3">
    {{ Form::open(array('action' => 'CalendarEventsController@store',
        'method' => 'POST', 'class' => 'form-horizontal')) }}


        <div class="form-group">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
            {{ errors_for('title', $errors) }}
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description:') }}
            {{ Form::text('description', null, ['class' => 'form-control']) }}
            {{ errors_for('description', $errors) }}
        </div>

        <div class="form-group">
            {{ Form::label('price', 'Price:') }}
            {{ Form::number('price', null, ['class' => 'form-control']) }}
            {{ errors_for('price', $errors) }}
        </div>

        <div class="form-group">
            {{ Form::label('show_google_map', 'Show Google Map:') }}
            {{ Form::checkbox('show_google_map', null, ['class' => 'form-control']) }}
            {{ errors_for('photo', $errors) }}
        </div>

        <div class="form-group">
            {{ Form::submit('submit', ['class' => 'btn btn-primary form-control']) }}
        </div>

    {{ Form::close() }}
</div>
</div>
@stop
