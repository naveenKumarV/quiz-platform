@extends('layout')


@section('header')
    <meta name="csrf-token" content="<?php echo csrf_token() ?>" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/play.css') }}"/>
    <style>
        .effect {
            position:relative;
            padding:15px;
            -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
        }
    </style>
@stop


@section('content')
    @include('play.response')

    @if($category != null)
        <?php $image = 'images/'.$category.'.jpg' ?>
        <div id="bg" class="overlay">
            <img src="{{ asset($image) }}" alt="">
        </div>
    @endif
    @include('menu')
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
                                    A. {{ $question[0]['option_A'] }}
                                </div>
                                <div class="choice shadow" id="B">
                                    {!! Form::radio('answer','B') !!}
                                    B. {{ $question[0]['option_B'] }}
                                </div>
                                <div class="choice shadow" id="C">
                                    {!! Form::radio('answer','C') !!}
                                    C. {{ $question[0]['option_C'] }}
                                </div>
                                <div class="choice shadow" id="D">
                                    {!! Form::radio('answer','D') !!}
                                    D. {{ $question[0]['option_D'] }}
                                </div>
                            </form>
                            <strong>Difficulty level:</strong><br/>
                            @for($i=1;$i<=$question[0]['difficulty_rating'];++$i)
                                <img src="{{ asset('images/star.png') }}"/>
                            @endfor
                            <div id="response"></div>
                        </div>
                        <div class="panel-footer" style="height:55px;">
                            <button id="post" class="btn btn-primary">Check the correct answer</button>
                            <a href="{{ url(Request::path()) }}" class="btn btn-success" id="next">Next question
                                <span class="glyphicon glyphicon-menu-right"></span>
                            </a>
                        </div>
                    @else
                        <div class="effect">
                            <b>Sorry ! We have no new questions.</b>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop