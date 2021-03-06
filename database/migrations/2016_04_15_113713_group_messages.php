<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('group_messages', function (Blueprint $table){
		  $table->increments('id');
		  $table->integer('group_id');
		  $table->integer('user_id');
		  $table->string('theme');
		  $table->text('body');
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
        Schema::drop('group_messages');
    }
}
