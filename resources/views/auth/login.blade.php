@extends('layouts.app')

@section('title', 'Login | Contact Information')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m8 offset-m2">
            
            <div class="form-wrapper auth-wrapper">
                <h3>Login</h3>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="input-field ">
                      <input placeholder="Your Email" id="email"  name="email" type="email" class="validate">
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
                    <p>
                        <input type="checkbox" name="remember" id="remember" />
                        <label for="remember">Remember me</label>
                    </p>

                    <p>
                        Don't have an account? <a href="/register">Register here</a>
                    </p>

                    <button type="submit" class="btn blue darken-1">
                        <i class="fa fa-btn fa-sign-in"></i> Login
                    </button>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection
