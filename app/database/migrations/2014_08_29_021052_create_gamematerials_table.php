<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamematerialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('materials', function($table)
    {
        $table->increments('id');
        $table->integer('game_id')->unsigned();
        $table->string('url');
        $table->timestamps();
    });
    Schema::table('materials', function($table)
    {
    	$table->foreign('game_id')->references('id')->on('characters');
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
