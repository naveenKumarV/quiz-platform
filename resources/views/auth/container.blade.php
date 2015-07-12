@extends('layout')

@section('header')
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/auth.css') }}" rel='stylesheet' type='text/css'>
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