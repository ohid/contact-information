@extends('layouts.app')

@section('title', 'Register | Contact Information')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m8 offset-m2">
            
            <div class="form-wrapper auth-wrapper">
                <h3>Register</h3>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="input-field ">
                      <input placeholder="Your Name" id="name" type="text" name="name" class="validate">
                      <label for="name">Your Name</label>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="input-field ">
                      <input placeholder="Your Email" id="email" name="email" type="email" class="validate">
                      <label for="email">Email</label>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="input-field ">
                      <input placeholder="Your Password" id="password"  name="password" type="password" class="validate ">
                      <label for="password">Password</label>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="input-field ">
                      <input placeholder="Your Password" id="password_confirmation"  name="password_confirmation" type="password" class="validate ">
                      <label for="password_confirmation">Confirm Password</label>

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>

                    <p>
                        Already a user? <a href="/login">Login</a>
                    </p>

                    <button type="submit" class="btn blue darken-1">
                        <i class="fa fa-btn fa-sign-in"></i> Register
                    </button>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection
