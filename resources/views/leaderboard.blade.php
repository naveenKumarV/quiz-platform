@extends('layout')

@section('header')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/leaderboard.css') }}" />
    <script type="text/javascript" charset="utf8" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
@stop

@section('jquery')
    $('#table_id').DataTable();
@stop

@section('content')
    @include('menu')
    <div class="container box effect" id="wrapper">
        <h3>LEADER BOARD</h3>
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach($scores as $score)
                    <tr>
                        <td>{{ $score->username }}</td>
                        <td>{{ $score->score }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div id="content">
            <h3>Usage: </h3>
            <ul>
                <li class="left"> The arrow marks beside 'Username' and 'Score' are for arranging the table rows
                    based on the particular column values in either ascending and descending fashion.
                    Play with these arrows by clicking each one of them and find their usage yourself.</li>
                <li class="left">The other features like search, pagination etc are also interesting and user-friendly.</li>
            </ul>
        </div>
    </div>
@stop