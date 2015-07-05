@extends('layout')

@section('header')
    <script type="text/javascript" src="{{ asset('js/jquery.popconfirm.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".delete").popConfirm({
                title: 'Confirmation',
                content: 'Are you really sure ?',
                placement: 'right',
                container: 'body',
                yesBtn:   'Yes',
                noBtn:    'No'
            });
        });
    </script>
@stop

@section('content')
    <script>j=0;</script>
    <div class="container" style="margin: 20px auto;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($questions as $question)
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div style="margin-bottom: 10px;">
                            <strong>Category:</strong> {{ $question['category'] }}<br/>
                            </div>
                            <a href="">{{ $question['question'] }}</a>
                        </div>
                        <div class="panel-body">
                            <table width="100%">
                                <tbody>
                                <tr width="100%">
                                    <td width="50%"><b>A.</b> {{ $question['option_A'] }} <span id="A" ></span></td>
                                    <td width="50%"><b>B.</b> {{ $question['option_B'] }} <span id="B"></span></td>
                                </tr>
                                <tr width="100%">
                                    <td width="50%"><b>C.</b> {{ $question['option_C'] }} <span id="C"></span></td>
                                    <td width="50%"><b>D.</b> {{ $question['option_D'] }} <span id="D"></span></td>
                                </tr>
                                <script type="text/javascript">
                                    var ans = document.querySelectorAll("#"+"<?php echo $question['answer'] ?>");
                                    ans[j++].innerHTML = '<img src="{{ asset('images/tick.png') }}" />';
                                </script>
                                <tr width="100%" >
                                    <td colspan="2"><strong>Difficulty level:</strong><br/>
                                        @for($i=1;$i<=$question['difficulty_rating'];++$i)
                                            <img src="{{ asset('images/star.png') }}"/>
                                        @endfor
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer" style="text-align: right;">
                            <a href="{{ url('quiz/design/'.$question["id"].'/edit') }}" class="btn btn-success">
                                <span class="glyphicon glyphicon-edit"></span> Edit
                            </a>
                            <div style="display: inline-block;">
                            {!! Form::open(['url'=>'quiz/design/'.$question["id"],
                            'method'=>'DELETE']) !!}
                            <button type="submit" class="btn btn-danger delete" >
                                <span class="glyphicon glyphicon-trash"></span> delete
                            </button>
                            {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop