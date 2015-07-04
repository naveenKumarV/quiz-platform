@extends('layout')

@section('content')
    {!! Form::model($question,['url'=>'quiz/design/'.$question->id,
                               'method'=>'PATCH']) !!}
    @include('design.form',['submit_text'=> 'Update question'])
    {!! Form::close() !!}
@stop