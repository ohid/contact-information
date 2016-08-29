@extends('layouts.app')

@section('title', 'All Friends | Contact Information')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m8 offset-m2">
        	<table class="table">
				
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Pro Pic</th>
					<th>Mobile No.</th>
					<th>Action</th>
				</tr>
        		@if( count( $contacts ) > 0 )
        			@foreach( $contacts as $contact )
		        		<tr>
							<td> {{ $contact->user->name }} </td>
							<td> {{ $contact->user->email }} </td>
							<td> <img src="{{ $contact->user->getImage(40) }}" alt=""> </td>
							<td> {{ $contact->phone }} </td>
							<td> <a href="{{ route('single.friend', $contact->user->id) }}" class="waves-effect waves-light btn"> View profile </a> </td>
		        		</tr>
        			@endforeach
        		@else 
        			<tr>
        				<td colspan="5" align="center">No friends information</td>
        			</tr>
        		@endif 

        	</table>

        	{{ $contacts->render() }}
        </div>
    </div>
</div>
@endsection
