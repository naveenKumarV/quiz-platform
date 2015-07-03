@extends('layout')
@section('content')
    <div class="col-md-4 col-md-offset-4">
        <h2>Login Form</h2>
        {!! Form::open() !!}
        <div class="form-group">
            {!!Form::label('username','Username')!!}
            {!!Form::text('name', null,array('class' => 'form-control'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('password','Password')!!}
            {!!Form::password('password',array('class' => 'form-control'))!!}
        </div>
        {!!Form::submit('Login', array('class' => 'btn btn-primary'))!!}
        {!! Form::close() !!}
    </div>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
@stop
