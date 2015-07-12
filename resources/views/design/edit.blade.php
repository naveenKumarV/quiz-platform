@extends('layout')

@section('header')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/design_form.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropkick.css') }}" />
    <script src="{{ asset('js/dropkick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.autosize.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('textarea').autosize();
            $('#category').dropkick();
            $('#submit').click(function(){
                if(!$('input[name="answer"]').is(':checked'))
                    alert('Please specify the correct answer');
            });
        });
    </script>
@stop

@section('content')
    @include('menu')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>EDIT A QUESTION</h1>
                    </div>
                    <div class="panel-body">
                        {!! Form::model($question,['url'=>'quiz/design/'.$question->id,
                                                   'method'=>'PATCH']) !!}
                        @include('design.form',['submit_text'=> 'Update question'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop