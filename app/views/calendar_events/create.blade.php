<div class="form-group">
    {{ Form::label('start_time', 'Event Start Time/Date:') }}
    {{ Form::text('start_time', null, ['class' => 'form-control', 'id' => 'startsAtDateTimePicker']) }}
    {{ errors_for('start_time', $errors) }}
</div>

<div class="form-group">
    {{ Form::label('end_time', 'Event End Time/Date:') }}
    {{ Form::text('end_time', null, ['class' => 'form-control', 'id' => 'endsAtDateTimePicker']) }}
    {{ errors_for('end_time', $errors) }}
</div>

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
    {{ Form::text('price', null, ['class' => 'form-control']) }}
    {{ errors_for('price', $errors) }}
</div>

<div class="form-group">
    {{ Form::label('show_google_map', 'Show Google Map:') }}
    {{ Form::checkbox('show_google_map', null, ['class' => 'form-control']) }}
    {{ errors_for('photo', $errors) }}
</div>
