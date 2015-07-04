@extends('auth.container')

@section('form')
    <div class="panel-heading">
        <h1>SIGN UP</h1>
    </div>
    <div class="panel-body">
        <div style="color:limegreen;margin:10px 0px;">All fields are required</div>
        {!! Form::open() !!}
        <div class="form-group">
            {!!Form::label('name','Name')!!}
            {!!Form::text('name', null,array('class' => 'form-control',
            'placeholder'=>'Your full name'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('username','Username')!!}
            {!!Form::text('username', null,array('class' => 'form-control',
            'placeholder'=>'eg. Ram123'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('password','Password')!!}
            {!!Form::password('password',array('class' => 'form-control',
            'placeholder'=>'Minimum six characters'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('password_confirmation','Password Confirmation')!!}
            {!!Form::password('password_confirmation',array('class' => 'form-control',
            'placeholder'=>'Re-enter the password'))!!}
        </div>
        <div class="form-group" style="float:right;">
        {!!Form::submit('Register', array('class' => 'btn btn-primary'))!!}
        {!! Form::close() !!}
        </div>
    </div>
@stop