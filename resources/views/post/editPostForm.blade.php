@extends('layouts.app')

@section('content')
	{!! Form::open(['route' => ['updatePost', $postId],  'method' => 'POST'] ) !!}
		    <div class="form-group">
		      {!! Form::label('text', 'Tekst') !!}
		      {!! Form::textarea('text', $posts->text, ['class' => 'form-control']) !!}
		    </div>
		    <button class="btn btn-success" type="submit">Odpowiedz</button>
	 	{!! Form::close() !!}
@endsection