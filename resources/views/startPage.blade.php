@extends('layouts.app')

@section('content')
    @foreach ($subjects as $subject)
    	{{$subject->subject}}
    @endforeach
@endsection