<?php namespace JoeCianflone\Http\Controllers;

use JoeCianflone\Signups;
use JoeCianflone\Http\Requests;
use JoeCianflone\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SignupController extends Controller {

   private $signups;

   public function __construct(Signups $signups)
   {
      $this->signups = $signups;
   }

   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
      return "HELLO";
   }


   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function create(Request $request)
   {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:signups',
      ]);

      $newSignup = $request->only("name", "email", "newsletter_optin");
      $newSignup["newsletter_optin"] = is_null($newSignup["newsletter_optin"]) ? false : $newSignup["newsletter_optin"];

      if (! $this->signups->create($newSignup)) {
         return redirect()->back()->withCreateError("There was a problem signing you up.  Please try again");
      }

      return redirect()->back()->withSuccess("Thanks for signing up");
   }

}
