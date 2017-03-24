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