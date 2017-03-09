@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
		   	<div class="col-md-2 col-md-offset-5">
		   		@foreach ($subjects as $subject)
	    			<h3><a href="{{ route('showOneSubject', $subject->id) }}">{{$subject->subject}}</a><br></h3>
	    		@endforeach
	    		{{ $subjects->links()}}
		   	</div>
		</div>
    </div>
@endsection