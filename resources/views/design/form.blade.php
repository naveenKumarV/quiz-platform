
    <div>
        <div class="form-group">
            {!! Form::label('question','Question') !!}
            {!! Form::text('question',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('option_A','Option A') !!}
            {!! Form::text('option_A',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('option_B','Option B') !!}
            {!! Form::text('option_B',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('option_C','Option C') !!}
            {!! Form::text('option_C',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('option_D','Option D') !!}
            {!! Form::text('option_D',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::radio('answer','A') !!}h
            {!! Form::radio('answer','B') !!}p
            {!! Form::radio('answer','C') !!}sp
            {!! Form::radio('answer','D') !!}s
        </div>
        <div class="form-group">
            {!! Form::radio('category','history') !!}h
            {!! Form::radio('category','politics') !!}p
            {!! Form::radio('category','sports') !!}sp
            {!! Form::radio('category','science') !!}s
            {!! Form::radio('category','literature') !!}l
        </div>
        <div class="form-group">
            {!! Form::text('difficulty_rating',null) !!}
        </div>
        <div class="form-group">
            {!! Form::submit($submit_text,['class'=>'btn btn-primary form-control']) !!}
        </div>
        @include('errors.list')
    </div>


