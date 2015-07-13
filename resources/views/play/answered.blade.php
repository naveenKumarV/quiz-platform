@extends('layout')

@section('header')

@stop

@section('content')
    @include('menu')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($answered_questions as $question)
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div style="margin-bottom: 10px;">
                                <strong>Category: </strong>{{ $question['category'] }}<br/>
                            </div>
                            {{ $question['question'] }}
                        </div>
                        <div class="panel-body">
                            <strong>Your answer: </strong>
                            {{ $question['option_'.$question['pivot']['user_response']] }}<br/>
                            <strong>Correct answer: </strong>
                            {{ $question['option_'.$question['answer']] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop