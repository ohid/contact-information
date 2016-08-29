@if( Session::has('message') )
	<div class="alert">
		{{ Session::get('message') }}
	</div>
@endif