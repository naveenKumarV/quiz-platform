@extends('layout')

@section('header')
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <style>
        h1 {
            font-size: 1.7em;
            color: rgb(6, 106, 117);
            font-family: 'Oswald', sans-serif;
            font-weight: bold;
            text-align: center;
        }
    </style>
@stop

@section('content')
    <div class="container" style="margin:50px auto;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    @yield('form')
                </div>
                @include('errors.list')
            </div>
        </div>
    </div>
@stop