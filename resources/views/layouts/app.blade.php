<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
   <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/myCss.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        
    </script>
    <script> $(".dropdown-button").dropdown(); </script>
</head>
<body>
	<ul id="dropdown1" class="dropdown-content">
		<li><a href="{{ route('login') }}">Login</a></li>
		<li><a href="{{ route('register') }}">Register</a></li>
	</ul>
	
	<ul id="logginUserDropdown" class="dropdown-content">
		<li>
			<a href="{{ route('logout') }}"
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
				Logout
			</a>
	
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</li>
	</ul>
	<ul id="dropdown-category" class="dropdown-content">
		@foreach($categories as $category)
			<li><a href="{{route('showCategory', $category->id)}}">{!!$category->name!!}</a>
		@endforeach
	</ul>
	<nav>
	  <div class="nav-wrapper">
	    <a href="/" class="brand-logo">{{ config('app.name', 'Forum 4X4') }}</a>
	    <ul class="right hide-on-med-and-down">
	      <li><a class="dropdown-button" href="#!" data-activates="dropdown-category">Kategorie<i class="material-icons right">arrow_drop_down</i></a></li>
	      @if(Auth::guest())
	      	<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Działaj!<i class="material-icons right">arrow_drop_down</i></a></li>
	      @else
	       <li><a class="dropdown-button" href="#!" data-activates="logginUserDropdown">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
	      @endif
	    </ul>
	  </div>
	</nav>
	<div class="container">
		@include('partials.errors')
		@yield('content')
	</div>
	       

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
   
</body>

</html>
