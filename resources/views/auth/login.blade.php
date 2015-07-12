@extends('auth.container')

@section('form')
     <div class="panel-heading">
        <h1>LOG IN</h1>
    </div>
    <div class="panel-body">
        {!! Form::open() !!}
        <div class="form-group">
            {!!Form::label('username','Username')!!}
        <div class="inner-addon left-addon">
            <i class="glyphicon glyphicon-user"></i>
            {!!Form::text('username', null,array('class' => 'form-control','required' => 'required'))!!}
        </div>
        </div>
        <div class="form-group">
            {!!Form::label('password','Password')!!}
            <div class="inner-addon left-addon">
                <i class="glyphicon glyphicon-lock"></i>
                {!!Form::password('password',array('class' => 'form-control','required' => 'required'))!!}
            </div>
        </div>
        {!!Form::submit('Login', array('class' => 'btn btn-primary'))!!}
        {!! Form::close() !!}
    </div>
@stop