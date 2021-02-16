<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('ghosts', function (Blueprint $table) {
        $table -> foreign('color_id', 'ghost-color')
               -> references('id')
               -> on('colors');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('ghosts', function (Blueprint $table) {
        $table -> dropForeign('ghost-color');
      });
    }
}
