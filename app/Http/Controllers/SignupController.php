<?php namespace JoeCianflone\Http\Controllers;

use JoeCianflone\Signups;
use JoeCianflone\Http\Requests;
use JoeCianflone\Http\Controllers\Controller;
use League\Csv\Writer;
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
      $csv = Writer::createFromFileObject(new \SplTempFileObject());
      $csv->insertOne(['Name', 'Email Address', 'Send A Newsletter', 'Signup Date']);

      Signups::all()->each(function($signup) use($csv) {
         $s = $signup->toArray();
         $s['newsletter_optin'] = $s['newsletter_optin'] ? "Yes" : "No";
         $csv->insertOne([
            $s["name"],
            $s["email"],
            $s["newsletter_optin"],
            $s["created_at"]
         ]);
      });

      $csv->output('signups.csv');
   }

   public function latest()
   {
      $csv = Writer::createFromFileObject(new \SplTempFileObject());
      $csv->insertOne(['Name', 'Email Address', 'Send A Newsletter', 'Signup Date']);

      Signups::where('has_printed', 0)->get()->each(function($signup) use($csv) {
         $s = $signup->toArray();
         $s['newsletter_optin'] = $s['newsletter_optin'] ? "Yes" : "No";
         $csv->insertOne([
            $s["name"],
            $s["email"],
            $s["newsletter_optin"],
            $s["created_at"]
         ]);

         $signup->has_printed = true;
         $signup->save();
      });

      $csv->output('signups.csv');
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
         return redirect("/#signup")->withCreateError("There was a problem signing you up.  Please try again")->withInput();
      }

      return redirect("/#signup")->withSuccess("Thanks for signing up");
   }

}
