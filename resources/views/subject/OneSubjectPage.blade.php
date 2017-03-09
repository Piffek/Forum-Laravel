@extends('layouts.app')

@section('content')
	<div class="container">
		<h3>{{$params->subject}}</h3>
		{{$params->body}}
	</div>

@endsection