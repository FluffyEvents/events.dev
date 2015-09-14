@extends('layouts.master')


@section('content')


<!--  Form -->
{{ Form::open(array('action' => 'HomeController@submitLogin', 'method' => 'POST', 'class' => 'form-horizontal')) }}


<fieldset>

<!-- Text input-->
<div class="form-group">
    <label class="control-label" for="email">Email</label>
    <div class="">
    {{-- <input id="email" name="email" type="text" value="{{{ Input::old('email') }}}" class="form-control input-md" required=""> --}}
    {{ Form::email('email', null, array('class' => 'form-control input-md')) }}
    </div>
</div>

<!-- Password -->
<div class="form-group">
    <label class="control-label" for="password">Password</label>
    <div class="">
        <input id="password" name="password" type="password" value="" class="form-control input-md" required="">
    </div>
</div>

<!-- Button -->
<div class="form-group">
    @if(Session::has('loginError'))
    <br><div class="alert alert-danger">{{{ Session::get('loginError') }}}</div>
    @endif
    
    <button type="submit" class="btn btn-success ">Login</button>
</div>
</fieldset>
{{ Form::close() }}

@stop
