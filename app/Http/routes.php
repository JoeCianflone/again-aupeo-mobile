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

$app->get('/', function() use ($app) {
    return view('home', [
       'gaCode' => "UA-XXXXX-X"
    ]);
});

$app->post('/signup', function() use($app) {
   $validator = Validator::make(
       [
           'name' => 'required',
           'email' => 'required|email|unique:signup',
       ]
   );

   if ($validator->fails()) {

   }

   if ($validator->passes()) {

   }
});
