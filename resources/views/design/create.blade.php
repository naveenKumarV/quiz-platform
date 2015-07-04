@extends('layout')

@section('content')
    {!! Form::open(['url'=>'quiz/design']) !!}
    @include('design.form',['submit_text'=>'Add question'])
    {!! Form::close() !!}
@stop