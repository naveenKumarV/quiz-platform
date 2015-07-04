@extends('layout')

@section('content')
    @foreach($questions as $question)
        <a href="">{{ $question['question'] }}</a>
    @endforeach
@stop