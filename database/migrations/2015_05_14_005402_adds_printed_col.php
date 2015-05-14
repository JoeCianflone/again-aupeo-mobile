<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddsPrintedCol extends Migration {

   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::table('signups', function($table)
      {
          $table->boolean('has_printed')->default(false);
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::table('signups', function($table)
      {
          $table->dropColumn('has_printed');
      });
   }

}
