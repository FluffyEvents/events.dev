@extends('layouts.master')

@section('title')
<title>Login / Register</title>
@stop


@section('content')

<section class="page-section with-sidebar sidebar-right first-section light">

    <div class="container">

        <!-- Content -->
        <section id="content" class="content col-sm-12 col-md-8 col-lg-9">

            <!-- -->
            <hr class="page-divider transparent half">
            <!-- -->


            <!-- -->
            <hr class="page-divider transparent">
            <!-- -->



            <!-- -->
            <hr class="page-divider transparent half2">
            <!-- -->

            <h1 class="section-title">
                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-star fa-stack-1x"></i></span></span>
                <span class="title-inner">Log in <small> / For Fluffy's existing peeps</small></span>
            </h1>

            {{ Form::open(array('action' => 'HomeController@submitLogin', 'method' => 'POST', 'class' => 'registration-form registration-form-alt')) }}
                <div class="row">
                    <div class="col-sm-12 form-alert"></div>
                    <div class="col-sm-6">
                        <div class="form-group with-icon">
                        {{ Form::label('email', 'Email') }}
                            <i class="fa fa-user"></i>
                            {{ Form::text('email', null,
                                array('class' => 'form-control input-email',
                                'id' => 'email',
                                'data-toggle' => 'tooltip',
                                'value' => "{{{ Input::old('email') }}}",
                                'data-original-title' => 'Email is required',
                                'type' => 'text')) }}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group with-icon">
                        {{ Form::label('password', 'Password') }}
                            <i class="fa fa-lock"></i>
                            {{ Form::password('password',
                                array('class' => 'form-control',
                                'type' => 'password',
                                'id' => 'password',
                                'data-toggle' => 'tooltip',
                                'value' => "",
                                'data-original-title' => 'Password is required')) }}
                        </div>
                    </div>

                    <div class="col-md-12 overflowed">
                        <div class="text-center margin-top">
                            <button class="btn btn-theme btn-theme-lg submit-button" type="submit"> Submit <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </div>
                </div>
            {{ Form::close() }}

            <!--  Form -->

            <!-- -->
            <hr class="page-divider line large">
            <!-- -->

            <h1 class="section-title">
                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-plus fa-stack-1x"></i></span></span>
                <span class="title-inner">Not yet a Fluffy peep? <small> Sign up right meow!</small></span>
            </h1>

            {{ Form::open(array('action' => 'RegistrationController@store', 'method' => 'POST', 'class' => 'registration-form registration-form-alt')) }}

                <div class="row">
                    <div class="col-sm-12 form-alert"></div>
                    <div class="col-sm-6">
                        <div class="form-group with-icon">
                            {{ Form::label('first_name', 'First name') }}
                            {{ Form::text('first_name', null,
                                array('class' => 'form-control input-name',
                                'id' => 'first_name',
                                'data-toggle' => 'tooltip',
                                'data-original-title' => 'First name is required',
                                'type' => 'text')) }}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group with-icon">
                            {{ Form::label('last_name', 'Last name') }}
                            {{ Form::text('last_name', null,
                                array('class' => 'form-control input-name',
                                'id' => 'last_name',
                                'data-toggle' => 'tooltip',
                                'data-original-title' => 'Last name is required',
                                'type' => 'text')) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 form-alert"></div>
                    <div class="col-sm-12">
                        <div class="form-group with-icon">
                            {{ Form::label('register_email', 'Email') }}
                            <i class="fa fa-envelope"></i>
                            {{ Form::text('email', null,
                                array('class' => 'form-control input-email',
                                'id' => 'register_email',
                                'data-toggle' => 'tooltip',
                                'data-original-title' => 'Email is required',
                                'type' => 'text')) }}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group with-icon">
                            {{ Form::label('register_password', 'Password') }}
                            <i class="fa fa-lock"></i>
                            {{ Form::password('register_password',
                                array('class' => 'form-control input-password',
                                'id' => 'register_password',
                                'data-toggle' => 'tooltip',
                                'data-original-title' => 'Password is required',
                                'type' => 'text')) }}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group with-icon">
                            {{ Form::label('password_confirmation', 'Retype your password') }}
                            <i class="fa fa-lock"></i>
                            {{ Form::password('password_confirmation',
                                array('class' => 'form-control input-password',
                                'id' => 'password_confirmation',
                                'data-toggle' => 'tooltip',
                                'data-original-title' => 'Password confirmation is required',
                                'type' => 'text')) }}
                        </div>
                    </div>

                    <div class="col-md-12 overflowed">
                        <div class="text-center margin-top">
                            {{ Form::button('Submit <i class="fa fa-arrow-circle-right"></i>', array('class' =>'btn btn-theme btn-theme-lg submit-button', 'type' => 'submit')) }}
                        </div>

                    </div>
                </div>
            </form>


        </section>
        <!-- /Content -->

        <hr class="page-divider transparent visible-xs">

    </div>
</section>


@stop
