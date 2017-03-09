@extends('layouts.app')

@section('content')
<div class="container">
    <li><a class="btn btn-success " href="{{ route('subjectForm', $newId) }}">Nowy Temat</a></li>
	@foreach($categoryInSubject as $subject)
		<h4>{{ $subject->subject }}</h4>
	@endforeach
</div>

@endsection