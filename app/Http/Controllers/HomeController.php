<?php namespace JoeCianflone\Http\Controllers;

use JoeCianflone\Http\Requests;
use JoeCianflone\Http\Controllers\Controller;

use Illuminate\Http\Request;


class HomeController extends Controller {

   /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct() {
      //$this->middleware('guest');
   }

   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
      return view('home', [
         'gaCode' => "UA-XXXXX-X"
      ]);
   }
}
