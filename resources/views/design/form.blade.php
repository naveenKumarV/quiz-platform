<div class="form-group">
    <label>Category: </label><br/>
    <select name="category" id="category"  required="required">
        <option value="history">History</option>
        <option value="politics">Politics</option>
        <option value="sports">Sports</option>
        <option value="science">Science</option>
        <option value="literature">Literature</option>
    </select>
</div>
<div class="form-group">
    {!! Form::label('question','Question') !!}
    {!! Form::textarea("question",null,['class'=>"form-control",'rows'=>'2','required'=>'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('option_A','Option A') !!}
    {!! Form::textarea("option_A",null,['class'=>"form-control",'rows'=>'2','required'=>'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('option_B','Option B') !!}
    {!! Form::textarea("option_B",null,['class'=>"form-control",'rows'=>'2','required'=>'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('option_C','Option C') !!}
    {!! Form::textarea("option_C",null,['class'=>"form-control",'rows'=>'2','required'=>'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('option_D','Option D') !!}
    {!! Form::textarea("option_D",null,['class'=>"form-control",'rows'=>'2','required'=>'required']) !!}
</div>
<div class="form-group">
    <label>Correct Answer:</label> ( Click on the cross mark )
    <div class="vertical-group">
        <label>
            {!! Form::radio('answer','A',false,['required'=>'required']) !!} <i></i>
            option A
        </label>
        <label>
            {!! Form::radio('answer','B',false,['required'=>'required']) !!} <i></i>
            option B
        </label>
        <label>
            {!! Form::radio('answer','C',false,['required'=>'required']) !!} <i></i>
            option C
        </label>
        <label>
            {!! Form::radio('answer','D',false,['required'=>'required']) !!}<i></i>
            option D
        </label>
    </div>
</div>
<div class="form-group">
    <label>Difficulty rating of the question: </label>( Click on the stars )
    <div class="stars">
        {!! Form::radio("difficulty_rating",'1',false,['class'=>'star-1','id'=>'star-1','required'=>'required']) !!}
        <label class="star-1" for="star-1">1</label>
        {!! Form::radio("difficulty_rating",'2',false,['class'=>'star-2','id'=>'star-2','required'=>'required']) !!}
        <label class="star-2" for="star-2">2</label>
        {!! Form::radio("difficulty_rating",'3',false,['class'=>'star-3','id'=>'star-3','required'=>'required']) !!}
        <label class="star-3" for="star-3">3</label>
        {!! Form::radio("difficulty_rating",'4',false,['class'=>'star-4','id'=>'star-4','required'=>'required']) !!}
        <label class="star-4" for="star-4">4</label>
        {!! Form::radio("difficulty_rating",'5',false,['class'=>'star-5','id'=>'star-5','required'=>'required']) !!}
        <label class="star-5" for="star-5">5</label>
        <span></span>
    </div>
</div>
<div class="form-group">
    {!! Form::submit($submit_text,['class'=>'btn btn-primary form-control','id'=>'submit']) !!}
</div>
@include('errors.list')




