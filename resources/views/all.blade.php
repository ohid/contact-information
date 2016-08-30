@extends('layouts.app')

@section('title', 'All Friends | Contact Information')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m8 offset-m2">
        	<div class="table-responsive">
	        	<table class="table">
					
					<tr>
						<th>Name</th>
						<th class="hidden">Email</th>
						<th>Pro Pic</th>
						<th class="hidden">Mobile No.</th>
						<th>Action</th>
					</tr>
	        		@if( count( $users ) > 0 )
	        			@foreach( $users as $user )
			        		<tr>
								<td> {{ $user->name }} </td>
								<td class="hidden"> {{ $user->email }} </td>
								<td > <img src="{{ $user->getImage(40) }}" alt=""> </td>
								@if( $user->contact )
									<td class="hidden"> {{ $user->contact->phone }} </td>
								@else
									<td class="hidden">  </td>
								@endif
								<td> <a href="{{ route('single.friend', $user->id) }}" class="waves-effect waves-light btn"> View profile </a> </td>
			        		</tr>
	        			@endforeach
	        		@else 
	        			<tr>
	        				<td colspan="5" align="center">No friends information</td>
	        			</tr>
	        		@endif 

	        	</table>
        	</div>

        	{{ $users->render() }}
        </div>
    </div>
</div>
@endsection
