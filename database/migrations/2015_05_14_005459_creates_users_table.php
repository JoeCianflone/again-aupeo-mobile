<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesUsersTable extends Migration {

   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('users', function(Blueprint $table)
      {
         $table->engine = 'InnoDB';
         $table->increments('id');
         $table->string('email', 100);
         $table->string('password', 120);
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
      Schema::drop('users');
   }

}
