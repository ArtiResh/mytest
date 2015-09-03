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
Route::filter('csrf-ajax', function()
{
    if (Session::token() != Request::header('x-csrf-token'))
    {
        throw new Illuminate\Session\TokenMismatchException;
    }
});
Route::get('/', 'IndexController@index');
Route::post('/show', ['before'=>'csrf-ajax', 'as'=>'show', 'uses'=>'IndexController@show']);
Route::post('/create', ['before'=>'csrf-ajax', 'as'=>'create', 'uses'=>'IndexController@create']);

//Route::get('home', 'HomeController@index');

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
