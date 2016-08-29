@extends('layouts.app')

@section('title', 'Settings | Contact Info')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col m8 offset-m2">

            <div class="form-wrapper ">
                <h3>Your Profile Settings</h3>
                
                @include('partials.site.messages')

                {{ Form::model($user, [
					'route'	=> 'post.profile.settings',
					'method'	=> 'POST',
                    'enctype' => 'multipart/form-data'
               	])}}

                    <div class="input-field ">
                    	{{ Form::text('name', null, ['class' => 'validate'])}}
                    	{{ Form::label('name', 'Your name')}}

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="input-field ">
                    	{{ Form::text('nickname', null, ['class' => 'validate'])}}
                    	{{ Form::label('nickname', 'Your Nickname')}}

                        @if ($errors->has('nickname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nickname') }}</strong>
                            </span>
                        @endif
                    </div>


                    <div class="input-field ">
                    	{{ Form::text('email', null, ['class' => 'validate'])}}
                    	{{ Form::label('email', 'Your Email')}}

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
						<div class="file-field input-field">
							<div class="btn">
								<span>Profile Picture</span>
								<input type="file" name="file">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>           


                        @if ($errors->has('file'))
                            <span class="help-block">
                                <strong>{{ $errors->first('file') }}</strong>
                            </span>
                        @endif  	
                    </div>

                    <button type="submit" class="btn blue darken-1">
                        Save
                    </button>

                </form>
            </div>

			</div>
		</div>
	</div>
@stop
