@extends('layouts.app')

@section('content')
		<div class="row">
			<div class="col s12 m12">
				<div class="card blue-grey darken-1">
					<div class="card-content white-text">
				@if(Auth::check())
					@foreach($userCreateSubject as $userOfSubject)
							@if(Auth::user()->name === $userOfSubject->name)
								<div style="float:right;"> 
									<a class="waves-effect waves-light btn"  href="{{ route('editSubject', $params->id) }}">Edytuj</a>
									<a class="waves-effect waves-red btn"  href="{{ route('deleteSubject', $params->id) }}">Usuń</a>
								</div>
							@endif
								<br>Dodany przez: {{$userOfSubject->name}}
								@endforeach
					@endif
						<h3>{{$params->subject}}</h3>
							{{$params->body}}
					</div>
				</div>
		</div>
	</div>
		<div class="row">
			<div class="col s12 m6">
				@if(Auth::check())
					{!! Form::open(['route' => 'newPost',  'method' => 'POST'] ) !!}
					      {{ Form::hidden('id_user', Auth::user()->id )}}
					      {!! Form::hidden('id_subject', $params->id) !!}
					
					    <div class="form-group">
					      {!! Form::label('text', 'Tekst') !!}
					      {!! Form::textarea('text', '', ['class' => 'form-control']) !!}
					    </div>
					    <button class="btn waves-effect waves-teal"type="submit">Odpowiedz</button>
					 {!! Form::close() !!}
				@endif
			</div>
			<div class="col s12 m6">
					@foreach($userCreatePosts as $userOfPosts)
						<div style="margin-bottom:100px">
						<div class="col s2 m2">
							<img class="circle responsive-img" src="/logo/{{$userOfPosts->name}}/{{$userOfPosts->randomKey}}.jpg">
						</div>
						<b>{{$userOfPosts->name}}</b><br>
						{{$userOfPosts->text}}<br>
						{{$userOfPosts->created_at}}<br>
						@if(Auth::check())
							@if(Auth::user()->id === $userOfPosts->id_user)
								<a href="{{ route('editPost', $userOfPosts->id) }}">Edytuj</a>
								<a href="{{ route('deletePost', $userOfPosts->id) }}">Usuń</a>
							@endif
						@endif
						<hr>
						</div>
					@endforeach
					{{ $userCreatePosts->links() }}
			</div>
		</div>


@endsection












