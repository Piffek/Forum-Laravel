@extends('layouts.app')

@section('content')
    <article>

	<div class="row">

			<div class="col m6" id="first">
			<h1>Nowe tematy</h1>
				<div class="card-panel col s12 m8 l6">
				@if(count($subjects) === 0)
						Obecnie nie ma nowych tematów
				@else
					 @foreach ($subjects as $subject)
					   	<div class="card-panel grey lighten-5 z-depth-1">
					   		<div class="row valign-wrapper">
								<div class="col s10">
									<span class="black-text">
											Temat: <a href="{{ route('showOneSubject', $subject->id) }}">{{$subject->subject}}</a>
													<p>Napisał: <b>{{$subject->name}}</b><br></p>
													<p>{{$subject->created_at}}</p>
						    		</span>
								</div>
							</div>
						</div>
				    @endforeach
						@endif

				 </div>
	    	</div>
	    	
			<div class="col m6">
	    		<h1>Nowi użytkownicy</h1>
	    			<div class="card panel col s12 m8 l6">    
					@if(count($users) === 0)
						Obecnie nie ma nowych użytkowników
						@else
				   		@foreach ($users as $user)
				   			<div class="card-panel grey lighten-5 zdepth-1">
				   				<div class="row valign-wrapper">
				   				<div class="col s5">
											<img class="circle responsive-img" src="/logo/{{$user->name}}/{{$user->randomKey}}.jpg">
								</div>
				   					<div class="col s10">
										<span class="black-text">
						    				<p>  <b>{{$user->name}}</b><br></p>
						    				<p>{{$user->created_at}}</p>
						    			</span>
						    		</div>
			    				</div>
			    			</div>
		
			    		@endforeach
					@endif
			    	</div>
		    </div>
		    </div>
	</div>

	 </article>
@endsection