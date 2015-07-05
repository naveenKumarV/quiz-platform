<div class="form-group">
    <label>Category of the question:</label><br/>
    <label class="radio-inline">{!!Form::radio('category','history')!!}History</label>
    <label class="radio-inline">{!!Form::radio('category','politics')!!}Politics</label>
    <label class="radio-inline">{!!Form::radio('category','sports')!!}Sports</label>
    <label class="radio-inline">{!!Form::radio('category','science')!!}Science</label>
    <label class="radio-inline">{!!Form::radio('category','literature')!!}Literature</label>
</div>
<div class="form-group">
    {!! Form::label('question','Question') !!}
    {!! Form::textarea("question",null,['class'=>"form-control",'rows'=>'2']) !!}
</div>
<div class="form-group">
    {!! Form::label('option_A','Option A') !!}
    {!! Form::textarea("option_A",null,['class'=>"form-control",'rows'=>'2']) !!}
</div>
<div class="form-group">
    {!! Form::label('option_B','Option B') !!}
    {!! Form::textarea("option_B",null,['class'=>"form-control",'rows'=>'2']) !!}
</div>
<div class="form-group">
    {!! Form::label('option_C','Option C') !!}
    {!! Form::textarea("option_C",null,['class'=>"form-control",'rows'=>'2']) !!}
</div>
<div class="form-group">
    {!! Form::label('option_D','Option D') !!}
    {!! Form::textarea("option_D",null,['class'=>"form-control",'rows'=>'2']) !!}
</div>
<div class="form-group">
    <label>Correct Answer:</label> ( Click on the cross mark )
    <div class="vertical-group">
        <label>
            {!! Form::radio('answer','A') !!} <i></i>
            option A
        </label>
        <label>
            {!! Form::radio('answer','B') !!} <i></i>
            option B
        </label>
        <label>
            {!! Form::radio('answer','C') !!} <i></i>
            option C
        </label>
        <label>
            {!! Form::radio('answer','D') !!}<i></i>
            option D
        </label>
    </div>
</div>
<div class="form-group">
    <label>Difficulty rating of the question:</label>
    <div class="stars">
        {!! Form::radio("difficulty_rating",'1',false,['class'=>'star-1','id'=>'star-1']) !!}
        <label class="star-1" for="star-1">1</label>
        {!! Form::radio("difficulty_rating",'2',false,['class'=>'star-2','id'=>'star-2']) !!}
        <label class="star-2" for="star-2">2</label>
        {!! Form::radio("difficulty_rating",'3',false,['class'=>'star-3','id'=>'star-3']) !!}
        <label class="star-3" for="star-3">3</label>
        {!! Form::radio("difficulty_rating",'4',false,['class'=>'star-4','id'=>'star-4']) !!}
        <label class="star-4" for="star-4">4</label>
        {!! Form::radio("difficulty_rating",'5',false,['class'=>'star-5','id'=>'star-5']) !!}
        <label class="star-5" for="star-5">5</label>
        <span></span>
    </div>
</div>
<div class="form-group">
    {!! Form::submit($submit_text,['class'=>'btn btn-primary form-control']) !!}
</div>
@include('errors.list')




