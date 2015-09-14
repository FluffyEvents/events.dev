<div class="form-group">
    {{ Form::label('starts_at', 'Event Start Time/Date:') }}
    {{ Form::text('starts_at', null, ['class' => 'form-control']) }}
    {{ errors_for('starts_at', $errors) }}
</div>

<div class="form-group">
    {{ Form::label('ends_at', 'Event End Time/Date:') }}
    {{ Form::text('ends_at', null, ['class' => 'form-control']) }}
    {{ errors_for('ends_at', $errors) }}
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
    {{ Form::number('price', null, ['class' => 'form-control']) }}
    {{ errors_for('price', $errors) }}
</div>

<div class="form-group">
    {{ Form::label('show_google_map', 'Show Google Map:') }}
    {{ Form::checkbox('show_google_map', null, ['class' => 'form-control']) }}
    {{ errors_for('photo', $errors) }}
</div>
