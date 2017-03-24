@if(Session::has('success'))
	<div id="card-alert" class="card green">
		<div class="card-content white-text"><p>{{ Session::get('success') }}</p></div>
	</div>
@elseif(Session::has('delete'))
	<div id="card-alert" class="card red">
		<div class="card-content white-text"><p>{{ Session::get('delete') }}</p></div>
	</div>
@endif