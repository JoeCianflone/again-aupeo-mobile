<?php namespace JoeCianflone\Http\Controllers;

use JoeCianflone\Http\Requests;
use JoeCianflone\Http\Controllers\Controller;

use Illuminate\Http\Request;


class HomeController extends Controller {

   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
      return view('home');
   }
}
