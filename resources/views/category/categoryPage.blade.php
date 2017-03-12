@extends('layouts.app')

@section('content')
<article>
	<div class="row">
		@if(Auth::check())
			
	    	<a class="button_new_subject" href="{{ route('subjectForm', $newId) }}">Nowy Temat</a>
	   	@endif
	   	<div class="col-md-12">
				@foreach($categoryInSubject as $subjectParam)
		   			<div class="my_category_field">
		   			<h5><a href="{{ route('showOneSubject', $subjectParam->id) }}">{{$subjectParam->subject}}<br>
	    					<p class="param_wrtite_user">Napisał: <b>{{$subjectParam->name}}</b><br></p>
	    					{{$subjectParam->created_at}}</a></h5>
	    			</div>
	    		@endforeach
		</div>
	</div>
</article>

@endsection