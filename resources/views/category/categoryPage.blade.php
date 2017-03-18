@extends('layouts.app')

@section('content')
<div class="container">
	@if(Auth::check())
    	<a class="navbar-text navbar-right" href="{{ route('subjectForm', $newId) }}">Nowy Temat</a>
   	@endif
			@foreach($categoryInSubject as $subjectParam)
				<div class="jumbotron">
	   			    <div class="text-right">
    					Napisał: <b>{{$subjectParam->name}}</b><br>
    					{{$subjectParam->created_at}}
    				</div>
	    			<h5><a href="{{ route('showOneSubject', $subjectParam->id) }}">{{$subjectParam->subject}}</a><br></h5>
    			</div>
    		@endforeach
</div>

@endsection