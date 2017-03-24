@if(Session::has('success'))
	<a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip"><strong>{{ Session::get('success') }}</strong></a>
@endif