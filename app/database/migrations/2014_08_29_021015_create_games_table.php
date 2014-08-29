<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('games', function($table)
    {
        $table->increments('id');
        $table->integer('owner_id')->unsigned();
        $table->string('name');
        $table->binary('description');
        $table->timestamps();
    });
    Schema::table('games', function($table)
    {
    	$table->foreign('owner_id')->references('id')->on('users');
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
