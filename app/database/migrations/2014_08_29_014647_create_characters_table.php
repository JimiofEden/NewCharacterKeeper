<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('characters', function($table)
    {
      $table->increments('id');
      $table->integer('owner_id')->unsigned();
      $table->string('name');
      $table->string('info');
      $table->binary('description');
      $table->timestamps();
    });

    Schema::table('characters', function($table)
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
