@extends('layouts.auth')

@section('title', 'Register | Support Pro')


@section('content')
<p class="title">Register now</p>
<div class="the-form register-form">

    {{ Form::open(['url' => 'register', 'method' => 'post'])}}
        <div class="form-group">
            {{ Form::text('first_name', null, ['placeholder' => 'First name', 'class' => 'form-control']) }}

            @if( $errors->any() ) 
                <span class="help-block"> {{ $errors->first('first_name') }} </span>
            @endif
        </div>
        <div class="form-group">
            {{ Form::text('last_name', null, ['placeholder' => 'Last name', 'class' => 'form-control']) }}

            @if( $errors->any() ) 
                <span class="help-block"> {{ $errors->first('last_name') }} </span>
            @endif
        </div>
        <div class="form-group">
            {{ Form::email('email', null, ['placeholder' => 'Email Address', 'class' => 'form-control']) }}

            @if( $errors->any() ) 
                <span class="help-block"> {{ $errors->first('email') }} </span>
            @endif

        </div>
        <div class="form-group">
            {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}

            @if( $errors->any() ) 
                <span class="help-block"> {{ $errors->first('password') }} </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::password('password_confirmation', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) }}
            <span class="help-block"></span>

            @if( $errors->any() ) 
                <span class="help-block"> {{ $errors->first('password_confirmation') }} </span>
            @endif
        </div>

        {{ Form::submit('register', ['class' => 'btn btn-success']) }}

        <div class="help-links">
            <p><a href="login">Already a user? Login here</a></p>
        </div>
        
    {{ Form::close() }}
</div>
@endsection
