@extends('layouts.app')

@section('content')

	{!! Form::open(['route' => 'newSubject',  'method' => 'POST'] ) !!}
		
	      {{ Form::hidden('id_user', Auth::user()->id )}}
	      {!! Form::hidden('id_categories', $id) !!}

	    <div class="form-group">
	      {!! Form::label('text', 'Temat') !!}
	      {!! Form::text('subject', '', ['class' => 'form-control']) !!}
	    </div>
	
	    <div class="form-group">
	      {!! Form::label('text', 'Tekst') !!}
	      {!! Form::textarea('body', '', ['class' => 'form-control']) !!}
	    </div>
	
	    <button class="btn btn-success" type="submit">Dodaj post</button>
	
	 {!! Form::close() !!}

@endsection