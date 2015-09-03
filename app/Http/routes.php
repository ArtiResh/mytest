<?php


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
Route::get('article/{id}', ['as'=>'read', 'uses'=>'IndexController@read']);


