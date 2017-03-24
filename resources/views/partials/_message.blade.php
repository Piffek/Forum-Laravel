@if(Session::has('success'))
	<strong>{{ Session::get('success') }}</strong>
@endif