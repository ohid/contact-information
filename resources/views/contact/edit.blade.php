@extends('layouts.app')

@section('title', 'Edit your Information | Contact Information')

@section('content')

<div class="container">
    <div class="row">
        <div class="col m8 offset-m2">
            
            <div class="form-wrapper">
                <h3>Your Information</h3>

                @include('partials.site.messages')

                {{ Form::model($contact, [
					'route'	=> ['post.edit.contact.info', $contact->id],
					'method'	=> 'post',
					'role'	=> 'form',
               	])}}
                    {{ csrf_field() }}

                    <div class="input-field ">
						{{ Form::textarea('about', null, ['placeholder' => 'About me', 'class' => 'validate'])}}
						{{ Form::label('about')}}

						@if ($errors->has('about'))
						<span class="help-block">
						    <strong>{{ $errors->first('about') }}</strong>
						</span>
						@endif
                    </div>

                    <div class="input-field ">
						{{ Form::text('phone', null, ['placeholder' => 'Phone', 'class' => 'validate'])}}
						{{ Form::label('phone')}}

						@if ($errors->has('phone'))
						<span class="help-block">
						    <strong>{{ $errors->first('phone') }}</strong>
						</span>
						@endif
                    </div>

                    <div class="input-field ">
						{{ Form::text('telephone', null, ['placeholder' => 'Telephone', 'class' => 'validate'])}}
						{{ Form::label('telephone')}}

						@if ($errors->has('telephone'))
						<span class="help-block">
						    <strong>{{ $errors->first('telephone') }}</strong>
						</span>
						@endif
                    </div>

                    <div class="input-field ">
						{{ Form::text('blood_group', null, ['placeholder' => 'Blood Group', 'class' => 'validate'])}}
						{{ Form::label('blood_group')}}

						@if ($errors->has('blood_group'))
						<span class="help-block">
						    <strong>{{ $errors->first('blood_group') }}</strong>
						</span>
						@endif
                    </div>

                    <div class="input-field ">
						{{ Form::text('current_address', null, ['placeholder' => 'Current address', 'class' => 'validate'])}}
						{{ Form::label('current_address')}}

						@if ($errors->has('current_address'))
						<span class="help-block">
						    <strong>{{ $errors->first('current_address') }}</strong>
						</span>
						@endif
                    </div>

                    <div class="input-field ">
						{{ Form::text('permanent_address', null, ['placeholder' => 'Permanent address', 'class' => 'validate'])}}
						{{ Form::label('permanent_address')}}

						@if ($errors->has('permanent_address'))
						<span class="help-block">
						    <strong>{{ $errors->first('permanent_address') }}</strong>
						</span>
						@endif
                    </div>

                    <div class="input-field ">
						{{ Form::text('batch', null, ['placeholder' => 'Batch', 'class' => 'validate'])}}
						{{ Form::label('batch')}}

						@if ($errors->has('batch'))
						<span class="help-block">
						    <strong>{{ $errors->first('batch') }}</strong>
						</span>
						@endif
                    </div>

                    <div class="input-field ">
						{{ Form::text('shift', null, ['placeholder' => 'Shift', 'class' => 'validate'])}}
						{{ Form::label('shift')}}

						@if ($errors->has('shift'))
						<span class="help-block">
						    <strong>{{ $errors->first('shift') }}</strong>
						</span>
						@endif
                    </div>

                    <div class="input-field ">
						{{ Form::text('department', null, ['placeholder' => 'Department', 'class' => 'validate'])}}
						{{ Form::label('department')}}

						@if ($errors->has('department'))
						<span class="help-block">
						    <strong>{{ $errors->first('department') }}</strong>
						</span>
						@endif
                    </div>

                    <div class="input-field ">
						{{ Form::text('current_study_inst', null, ['placeholder' => 'Current study inst', 'class' => 'validate'])}}
						{{ Form::label('current_study_inst')}}

						@if ($errors->has('current_study_inst'))
						<span class="help-block">
						    <strong>{{ $errors->first('current_study_inst') }}</strong>
						</span>
						@endif
                    </div>

                    <div class="input-field ">
						{{ Form::textarea('hobby', null, ['placeholder' => 'Hobby', 'class' => 'validate'])}}
						{{ Form::label('hobby')}}

						@if ($errors->has('hobby'))
						<span class="help-block">
						    <strong>{{ $errors->first('hobby') }}</strong>
						</span>
						@endif
                    </div>

                    <div class="input-field ">
						{{ Form::textarea('aim_in_life', null, ['placeholder' => 'Aim in life', 'class' => 'validate'])}}
						{{ Form::label('aim_in_life')}}

						@if ($errors->has('aim_in_life'))
						<span class="help-block">
						    <strong>{{ $errors->first('aim_in_life') }}</strong>
						</span>
						@endif
                    </div>


                    <button type="submit" class="btn blue darken-1">
                        Update
                    </button>

                </form>
            </div>

        </div>
    </div>
</div>

@stop
