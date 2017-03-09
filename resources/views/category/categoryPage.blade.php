@extends('layouts.app')

@section('content')
<div class="container">
	@if(Auth::check())
    	<a class="btn btn-success" href="{{ route('subjectForm', $newId) }}">Nowy Temat</a>
   	@endif
	@foreach($categoryInSubject as $subject)
	    <a href="{{ route('showOneSubject', $subject->id) }}">{{ $subject->subject }}</a>
	@endforeach
</div>

@endsection