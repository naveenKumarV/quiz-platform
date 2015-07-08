<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Quiz design routes
Route::resource('quiz/design','QuestionsController');

//Quiz play routes
Route::get('quiz/play/{category?}','PlayController@show');
Route::post('quiz/play/{id}','PlayController@validateAnswer');

//Scores routes
Route::get('quiz/scores','PlayController@displayScores');
Route::get('quiz/scores/user','PlayController@userScore');

//Instructions route
Route::get('quiz/instructions',function(){
    return view('instructions');
});