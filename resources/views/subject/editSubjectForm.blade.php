@extends('layouts.app')

@section('content')
	<div class="container">
		{!! Form::open(['route' => ['updateSubject', $idSubject],  'method' => 'POST'] ) !!}
			    <div class="form-group">
			      {!! Form::label('text', 'Tekst') !!}
			      {!! Form::text('subject', $idSubject->subject, ['class' => 'form-control']) !!}
			      
			      {!! Form::label('text', '') !!}
			      {!! Form::textarea('body', $idSubject->body, ['class' => 'form-control']) !!}
			    </div>
			    <button class="btn btn-success" type="submit">Edytuj</button>
		 {!! Form::close() !!}
	 </div>
@endsection