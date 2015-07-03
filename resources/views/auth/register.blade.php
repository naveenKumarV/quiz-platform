@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h2>Register here</h2>
            {!! Form::open() !!}
            <div class="form-group">
                {!!Form::label('name','Name')!!}
                {!!Form::text('name', null,array('class' => 'form-control'))!!}
            </div>
            <div class="form-group">
                {!!Form::label('username','Username')!!}
                {!!Form::text('username', null,array('class' => 'form-control'))!!}
            </div>
            <div class="form-group">
                {!!Form::label('password','Password')!!}
                {!!Form::password('password',array('class' => 'form-control'))!!}
            </div>
            <div class="form-group">
                {!!Form::label('password_confirmation','Password Confirmation')!!}
                {!!Form::password('password_confirmation',array('class' => 'form-control'))!!}

            </div>

            {!!Form::submit('Register', array('class' => 'btn btn-primary'))!!}
            {!! Form::close() !!}
        </div>
        @include('errors.list')
    </div>
@stop
