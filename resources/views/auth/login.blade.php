@extends('auth.container')

@section('form')
     <div class="panel-heading">
        <h1>SIGN IN</h1>
    </div>
    <div class="panel-body">
        {!! Form::open() !!}
        <div class="form-group">
            {!!Form::label('username','Username')!!}
            {!!Form::text('username', null,array('class' => 'form-control'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('password','Password')!!}
            {!!Form::password('password',array('class' => 'form-control'))!!}
        </div>
        {!!Form::submit('Login', array('class' => 'btn btn-primary'))!!}
        {!! Form::close() !!}
    </div>
@stop