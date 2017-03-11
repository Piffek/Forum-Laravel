@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="jumbotron">
			@foreach($userCreateSubject as $userOfSubject)
			<div class="row">
				<div class="text-right">
					@if(Auth::user()->name === $userOfSubject->name)
						<a style="color:green;" href="{{ route('editSubject', $params->id) }}">Edytuj</a>
						<a style="color:red;" href="{{ route('deleteSubject', $params->id) }}">Usuń</a>
					@endif
				</div>
			</div>
				Dodany przez: {{$userOfSubject->name}}
			@endforeach
				<h3>{{$params->subject}}</h3>
				{{$params->body}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				@if(Auth::check())
					{!! Form::open(['route' => 'newPost',  'method' => 'POST'] ) !!}
					      {{ Form::hidden('id_user', Auth::user()->id )}}
					      {!! Form::hidden('id_subject', $params->id) !!}
					
					    <div class="form-group">
					      {!! Form::label('text', 'Tekst') !!}
					      {!! Form::textarea('text', '', ['class' => 'form-control']) !!}
					    </div>
					    <button class="btn btn-success" type="submit">Odpowiedz</button>
					 {!! Form::close() !!}
				@endif
			</div>
			<div class="col-md-6">
					@foreach($userCreatePosts as $userOfPosts)
						Napisał: {{$userOfPosts->name}}<br>
						{{$userOfPosts->text}}<br>
						{{$userOfPosts->created_at}}
						@if(Auth::user()->id === $userOfPosts->id_user)
							<a style="color:green;" href="{{ route('editPost', $userOfPosts->id) }}">Edytuj</a>
							<a style="color:red;" href="{{ route('deletePost', $userOfPosts->id) }}">Usuń</a>
						@endif
						<hr>
					@endforeach
					{{ $userCreatePosts->links() }}
			</div>
		</div>
	</div>

@endsection