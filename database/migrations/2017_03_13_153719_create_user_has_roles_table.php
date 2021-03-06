<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHasRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_has_roles', function (Blueprint $table)
        {
        	$table->increments('id');
        	$table->integer('user_id')->unsigned();
        	$table->foreign('user_id')->references('id')->on('users');
        	
        	$table->integer('roles_id')->unsigned();
        	$table->foreign('roles_id')->references('id')->on('roles');
        	
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
        //
    }
}
