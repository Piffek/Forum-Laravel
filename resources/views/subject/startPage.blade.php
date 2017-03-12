@extends('layouts.app')

@section('content')
    <article>
		<div class="row">
			<div class="col-md-6">
			<h1>Nowe tematy</h1>
		   		@foreach ($subjects as $subject)
		   			<div class="my_category_field">
		   			<a href="{{ route('showOneSubject', $subject->id) }}">{{$subject->subject}}</a><br>
	    					<p class="param_wrtite_user">Napisał: <b>{{$subject->name}}</b><br></p>
	    					<p>{{$subject->created_at}}</p>
	    			</div>
	    		@endforeach
	    	</div>
	    	
	    	<div class="col-md-6">
	    		    <h1>Nowi użytkownicy</h1>
		   		@foreach ($users as $user)
		   			<div class="my_category_field">
	    					<p class="param_wrtite_user"> <b>{{$user->name}}</b><br></p>
	    					<p>{{$user->created_at}}</p>
	    			</div>
	    		@endforeach
	    	</div>
    		{{ $subjects->links()}}
		</div>
	 </article>
@endsection