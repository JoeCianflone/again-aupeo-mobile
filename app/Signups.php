<?php namespace JoeCianflone;

use Illuminate\Database\Eloquent\Model;

class Signups extends Model  {

   /**
    * The database table used by the model.
    *
    * @var string
    */
   protected $table = 'signups';

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = ['name', 'email', 'newsletter_optin', 'has_printed'];

   /**
    * The attributes excluded from the model's JSON form.
    *
    * @var array
    */
   protected $hidden = [];

  /**
   * The attributes that should be casted to native types.
   *
   * @var array
   */
   protected $casts = [
      'newsletter_optin' => 'boolean',
      'has_printed' => 'boolean',
   ];

}
