@extends('layouts.app')

@section('title', $user->name . ' | Contact Information')

@section('content')
<div class="container">
    <div class="row profile">
        <div class="col m8 offset-m2">
			<div class="row">
				<div class="col m6">
					<div class="profile-left">
						<img src="{{ $user->getImage(400) }}" alt="">
						<h2> {{ $user->name }} 
							@if( $user->nickname )
								<span> ({{ $user->nickname }}) </span>
							@endif
						</h2>
						<table class="table">
							<tr>
								<th> Email: </th>
								<td> {{ $user->email }} </td>
							</tr>

							@if( $user->contact )
								<tr>
									<th> Mobile No: </th>
									<td> {{ $user->contact->phone }} </td>
								</tr>

								@if( $user->contact->telephone )
									<tr>
										<th> Telephone: </th>
										<td> {{ $user->contact->telephone }} </td>
									</tr>
								@endif

								<tr>
									<th> Shift: </th>
									<td> {{ $user->contact->shift }} </td>
								</tr>

								<tr>
									<th> Department: </th>
									<td> {{ $user->contact->department }} </td>
								</tr>

								<tr>
									<th> Blood Group: </th>
									<td> {{ $user->contact->blood_group }} </td>
								</tr>
							@endif

						</table>
					</div>
				</div>
				<div class="col m6">
					<div class="list-info">

						@if( $user->contact )
							<div class="s-list">
								<div class="title">
									<b> <i>About {{ $user->name }}, </i> </b>
								</div>
								<div class="content"> {{ $user->contact->about }}
								</div>
							</div>

							<div class="s-list">
								<div class="title">
									<b> <i> Hobby, </i> </b>
								</div>
								<div class="content"> {{ $user->contact->hobby }}
								</div>
							</div>

							<div class="s-list">
								<div class="title">
									<b> <i>Aim in life, </i> </b>
								</div>
								<div class="content"> {{ $user->contact->aim_in_life }}
								</div>
							</div>
							
							<div class="s-list">
								<div class="title">
									<b> <i>Current Study Institution, </i> </b>
								</div>
								<div class="content"> {{ $user->contact->current_study_inst }}
								</div>
							</div>
							
							<div class="s-list">
								<div class="title">
									<b> <i>Current Address, </i> </b>
								</div>
								<div class="content"> {{ $user->contact->current_address }}
								</div>
							</div>
							
							<div class="s-list">
								<div class="title">
									<b> <i>Permanent Address, </i> </b>
								</div>
								<div class="content"> {{ $user->contact->permanent_address }}
								</div>
							</div>
						@endif



					</div>
				</div>
			</div>

			<div class="row">
				<a href="{{ route('single.friend', $next) }}" class="waves-effect waves-light btn link-full-width"> See another friend 
					<i class="fa fa-angle-double-right "></i> 
				</a>
			</div>
        </div>
    </div>
</div>
@endsection
