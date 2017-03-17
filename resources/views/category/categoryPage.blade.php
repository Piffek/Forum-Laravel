@extends('layouts.app')

@section('content')
<article>
	<div class="row">
		@if(Auth::check())
			<a class="btn-floating btn-large waves-effect waves-light red" href="{{ route('subjectForm', $newId) }}"><i class="material-icons">add</i></a>
	   	@endif
	   	
	   	<div class="col m12">
				<div class="col s12 m8 l12">
					 @foreach($categoryInSubject as $subjectParam)
					   	<div class="card-panel grey lighten-5 z-depth-1">
					   		<div class="row valign-wrapper">
								<div class="col s10">
									<span class="black-text">
							   			<h5><a href="{{ route('showOneSubject', $subjectParam->id) }}">{{$subjectParam->subject}}</a><br>
				    					<p class="param_wrtite_user">Napisał: <b>{{$subjectParam->name}}</b><br></p>
				    					{{$subjectParam->created_at}}</h5>
						    		</span>
								</div>
							</div>
						</div>
				   @endforeach
				 </div>
	    	</div>
</article>

@endsection