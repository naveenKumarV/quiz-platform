@extends('layout')

@section('header')
    <link href='http://fonts.googleapis.com/css?family=Kurale' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" />
@stop

@section('content')
    <img src="{{ asset('images/flowers.jpg') }}" />
    @include('menu')
    <div id="container">
        <div id="wrapper">
            <div class="header"><h3>WELCOME</h3></div>
            <div class="content">
                <p>Hi guys !! Welcome to my website. This website is basically a <b>quiz platform</b>
                where you can create quiz questions and throw them as challenge for others to
                answer. You can also play quiz by answering questions created by other users.</p>
                <p>There are five categories of questions :<b> History, Politics, Sports, Literature </b>
                and <b>Science</b>. To get started, first sign up if you are a new user or login if
                you have already registered. Explore the different tabs on the navigation menu
                present on the top of this web page. Please check the instructions carefully
                before you start playing or designing the quiz ( click the <b>'Instructions'</b> tab on the
                navigation menu to go to the instructions page ).</p>
                <p>If you click the <b>'Play quiz'</b> tab, you get a list of options showing different
                categories of questions. Choose any one of them and start playing. If you want to
                design quiz questions, head over to <b>'Design Quiz'</b> tab and click it. In the dropdown menu,
                click <b>'Show all my questions'</b> to see all the questions you previously submitted with options for editing and
                deleting. To create a new question, click <b>'Create a new question'</b> in the same dropdown menu.</p>
                <p>You can check the leaderboard containing the scores of all users of this website by
                clicking the <b>'Scores'</b> tab and selecting <b>'Show scores of all users'</b>. Also, you can
                check your score alone by clicking <b>'Show my score alone'</b> in the <b>'Scores'</b> tab.</p>
            </div>
            <div class="footer">
                <div class="footer-content">
                    <h3>Copyrights</h3>
                    <p>This website is developed as a task of Spider Web Development
                    Inductions 2015.</p>
                </div>
            </div>
        </div>
    </div>
@stop