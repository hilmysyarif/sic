<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('charters', function(Blueprint $table)
		{
            $table->increments('id');
            $table->text('name');
            $table->integer('beds')->unsigned();
            $table->integer('bath')->unsigned();
            $table->text('lokasi');
            $table->text('sqft');
            $table->integer('categories')->unsigned();
            $table->text('price');
            $table->text('image');
            $table->text('headline');
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
		Schema::drop('charters');
	}

}
