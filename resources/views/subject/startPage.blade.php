@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
	   		@foreach ($subjects as $subject)
	   			<div class="jumbotron">
	   			    <div class="text-right">
    					Napisał: <b>{{$subject->name}}</b><br>
    					{{$subject->created_at}}
    				</div>
	    			<h5><a href="{{ route('showOneSubject', $subject->id) }}">{{$subject->subject}}</a><br></h5>
    			</div>
    		@endforeach
    		{{ $subjects->links()}}
		</div>
    </div>
@endsection