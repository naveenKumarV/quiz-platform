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
/*
Route::filter('authenticated',function(){
    if(!Auth::guest()){
       return redirect('/');
    }
});
Route::get('auth/register',array(
    'before' => 'authenticated',
    'Auth\AuthController@getRegister'
));
*/
Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Quiz designing routes
/*
Route::get('quiz/design','QuestionsController@index');
Route::get('quiz/design/create','QuestionsController@create');
Route::post('quiz/design','QuestionsController@store');
Route::put('quiz/design/{id}','QuestionsController@update');
Route::get('quiz/design/{id}/edit','QuestionsController@edit');
*/
Route::resource('quiz/design','QuestionsController');