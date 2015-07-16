@extends('layout')

@section('content')
    @include('menu')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(count($answered_questions))
                    @foreach($answered_questions as $question)
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div style="margin-bottom: 10px;">
                                    <strong>Category: </strong>{{ $question['category'] }}<br/>
                                </div>
                                {{ $question['pivot']['question'] }}
                            </div>
                            <div class="panel-body">
                                <strong>Your answer: </strong>
                                {{ $question['pivot']['user_response'] }}<br/>
                                <strong>Correct answer: </strong>
                                {{ $question['pivot']['answer'] }}
                            </div>
                        </div>
                    @endforeach
                @else
                    <div style="text-align: center;color:red;">No questions answered yet.</div>
                @endif
            </div>
        </div>
    </div>
@stop