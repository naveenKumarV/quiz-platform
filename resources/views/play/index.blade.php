@extends('layout')


@section('header')
    <meta name="csrf-token" content="<?php echo csrf_token() ?>" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/play.css') }}"/>
@stop


@section('content')
    @include('play.response')
    <div id="bg">
        <img src="{{ asset('images/bgs.jpg') }}" alt="">
    </div>

    <?php $submitted = false; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" >
                    @if(count($question)>0)
                        <div class="panel-heading">
                            <h4>Question:</h4>
                            <h2 class="panel-title">{{ $question[0]['question'] }}</h2>
                        </div>
                        <div class="panel-body">
                            <form id="question"
                                  action="{{ URL::action('PlayController@validateAnswer',$question[0]['id']) }}"
                                  method="POST">
                                <div class="choice shadow" id="A">
                                    {!! Form::radio('answer','A') !!}
                                    <b>A. </b> {{ $question[0]['option_A'] }}
                                </div>
                                <div class="choice shadow" id="B">
                                    {!! Form::radio('answer','B') !!}
                                    <b>B. </b>{{ $question[0]['option_B'] }}
                                </div>
                                <div class="choice shadow" id="C">
                                    {!! Form::radio('answer','C') !!}
                                    <b>C. </b>{{ $question[0]['option_C'] }}
                                </div>
                                <div class="choice shadow" id="D">
                                    {!! Form::radio('answer','D') !!}
                                    <b>D. </b>{{ $question[0]['option_D'] }}
                                </div>
                            </form>
                            <div id="response"></div>
                        </div>
                        <div class="panel-footer" style="height:55px;">
                            <button id="post" class="btn btn-primary">Check the correct answer</button>
                            <a href="{{ url(Request::path()) }}" class="btn btn-success" id="next">Next question
                                <span class="glyphicon glyphicon-menu-right"></span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@stop