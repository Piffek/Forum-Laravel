@extends('layouts.app')

@section('content')
	<div class="container">
	    @foreach ($subjects as $subject)
	    	<a href="{{ route('showOneSubject', $subject->id) }}">{{$subject->subject}}</a><br>
	    @endforeach
	    {{ $subjects->links()}}
    </div>
@endsection