<?php


Route::get('/',                ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/signups/',        ['as' => 'signup-admin', 'middleware' => 'auth.basic', 'uses' => 'SignupController@index']);
Route::get('/signups/latest',  ['as' => 'signup-admin', 'middleware' => 'auth.basic', 'uses' => 'SignupController@latest']);

Route::post('/signups/create', ['as' => 'signup-create', 'uses' => 'SignupController@create']);

