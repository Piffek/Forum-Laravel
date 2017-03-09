@extends('layouts.app')

@section('content')
<div class="container">
	@if(Auth::check())
    	<a class="navbar-text navbar-right" href="{{ route('subjectForm', $newId) }}">Nowy Temat</a>
   	@endif
		<div clas="row">
   			<div class="col-md-2 col-md-offset-5">
				@foreach($categoryInSubject as $subject)
				    <h3><a href="{{ route('showOneSubject', $subject->id) }}">{{ $subject->subject }}</a></h3>
				@endforeach
			</div>
		</div>
</div>

@endsection