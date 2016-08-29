@extends('layouts.auth')

@section('title', 'Login | Support Pro')

@section('content')
<p class="title">Login here</p>

<div class="the-form">

    {{ Form::open(['url' => 'login', 'method' => 'post'])}}
        <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon" id="email_addon">
                  <i class="fa fa-user"></i>
              </span>
                {{ Form::email('email', null, ['placeholder' => 'Email', 'class' => 'form-control', 'aria-describedby' => 'email_addon']) }}
            </div>
            @if( $errors->any() ) 
                <span class="help-block"> {{ $errors->first('email') }} </span>
            @endif
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon" id="password_addon">
                    <i class="fa fa-lock"></i>
                </span>
                {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control', 'aria-describedby' => 'password_addon']) }}
            </div>
            @if( $errors->any() ) 
                <span class="help-block"> {{ $errors->first('password') }} </span>
            @endif
        </div>

        {{ Form::submit('login', ['class' => 'btn btn-success']) }}

        <div class="help-links">
            <p><a href="register">Register now</a></p>
            <p><a href="{{ url('/password/reset') }}">Forget password?</a></p>
        </div>
    {{ Form::close() }}
</div>

@endsection
