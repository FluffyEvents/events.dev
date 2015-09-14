<div class="form-group">
    {{ Form::label('name', 'Location Name:') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
    {{ errors_for('name', $errors) }}
</div>

<div class="form-group">
    {{ Form::label('address', 'Address:') }}
    {{ Form::text('address', null, ['class' => 'form-control']) }}
    {{ errors_for('address', $errors) }}
</div>

<div class="form-group">
    {{ Form::label('city', 'City:') }}
    {{ Form::text('city', null, ['class' => 'form-control']) }}
    {{ errors_for('city', $errors) }}
</div>

<div class="form-group">
    {{ Form::label('state', 'State:') }}
    {{ Form::text('state', null, ['class' => 'form-control']) }}
    {{ errors_for('state', $errors) }}
</div>

<div class="form-group">
    {{ Form::label('postal_code', 'Postal Code:') }}
    {{ Form::number('postal_code', null, ['class' => 'form-control']) }}
    {{ errors_for('postal_code', $errors) }}
</div>
