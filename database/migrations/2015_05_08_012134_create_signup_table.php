<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignupTable extends Migration {

   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('signups', function($table)
      {
         $table->engine = 'InnoDB';
         $table->increments('id');
         $table->string('name', 100);
         $table->string('email', 160)->unique();
         $table->boolean('newsletter_optin')->default(true);
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::drop('signups');
   }

}
