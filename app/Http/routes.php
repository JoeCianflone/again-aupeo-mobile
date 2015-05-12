<?php


Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/signup', ['as' => 'signup-admin', 'middleware' => 'auth.basic', 'uses' => 'SignupController@index']);

Route::post('/signup/create', ['as' => 'signup-create', 'uses' => 'SignupController@create']);
