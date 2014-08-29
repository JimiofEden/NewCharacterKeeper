<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersheetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('sheets', function($table)
    {
        $table->increments('id');
        $table->integer('char_id')->unsigned();
        $table->string('url');
        $table->timestamps();
    });
    Schema::table('sheets', function($table)
    {
    	$table->foreign('char_id')->references('id')->on('characters');
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
