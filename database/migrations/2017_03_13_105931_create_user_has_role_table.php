<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHasRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_has_user', function (Blueprint $table)
        		{
        	$table->increments('id');
        	$table->integer('user_id')->unsigned();
        	$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        	
        	$table->integer('roles_id');
        	$table->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade');
        	
        	$table->timestamp();
        	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
