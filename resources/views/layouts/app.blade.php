<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
	@include('partials._head')
<body>
	@include('partials._nav')
	<div class="container">
		@include('partials._message')
		@include('partials.errors')
		@yield('content')
	</div>
	       
	@include('partials._script')
   
</body>

</html>