@extends('layout')

@section('header')
    <link rel="stylesheet" href="{{ asset('css/instructions.css') }}" />
@stop

@section('content')
    @include('menu')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h1>INSTRUCTIONS FOR PLAYING QUIZ</h1>
                    </div>
                    <div class="panel-body">
                        <ol>
                            <li>The questions are classified into five categories :<b> History,
                                Politics, Sports, Literature </b>and <b>Science</b>.</li>
                            <li>You can choose any one of these categories. Also you have the option for
                                answering questions belonging to all categories.</li>
                            <li>All questions are of <b>multiple choice type</b> ie, each question has
                                <b>four options</b> and among them, <b>only one is correct</b>.</li>
                            <li>Each question has a <b>difficulty rating</b> given under the options
                                in the form of a <b>five star rating</b>. A question may have difficulty
                                rating ranging from <b>1</b> to <b>5</b>. One star corresponds to difficulty rating 1,
                                two stars correspond to a difficulty rating of 2 and so on.</li>
                            <li>When you create an account in this website, your score will be <b>zero</b>.</li>
                            <li>A <b>correct answer</b> to a question will fetch you the <b>same number of points as the
                                difficulty level</b>. Eg. If you correctly answer a 5 star question, your score
                                will be incremented by 5.</li>
                            <li>Every <b>wrong response</b> will <b>deduct only 1 point</b> from your score <b>no
                                matter what the difficulty level is</b>. Eg. If your score is 20 and you have
                                answered a question wrong, your new score will be 19.</li>
                        </ol>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h1>INSTRUCTIONS FOR DESIGNING QUIZ QUESTIONS</h1>
                    </div>
                    <div class="panel-body">
                        <ol>
                            <li>All fields are <b>required</b></li>
                            <li>Please read the <b>instructions</b> for <b>playing quiz</b>
                                above to better understand what type of questions to submit.</li>
                            <li>As you have read earlier, the question must belong to any one of the
                                five permitted categories.</li>
                            <li>All <b>four options</b> to the question must be <b>different</b>.</li>
                            <li>There should only be <b>one correct answer</b> to the question.</li>
                            <li>Select the appropriate number of stars in the dfficulty rating.
                                <b>Higher number of stars</b> correspond to <b>higher
                                difficulty rating</b>.</li>
                            <li>You have the provision to see all your previously submitted questions.
                                Each question is also provided with options for <b>editing</b>
                                and <b>deleting.</b></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop