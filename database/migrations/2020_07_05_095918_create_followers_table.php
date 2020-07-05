<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followers', function (Blueprint $table) {
            // $table->bigIncrements('id');
            // $table->foreign('users_id')->references('id')->on('users');
            // $table->foreign('followers_id')->references('id')->on('users');
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('followers_id');
  
        });

        Schema::table('followers', function($table)
        {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('followers_id')->references('id')->on('users');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('followers');
    }
}
