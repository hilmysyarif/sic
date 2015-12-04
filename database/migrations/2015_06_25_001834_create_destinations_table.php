<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('destinations', function(Blueprint $table)
        {
                                $table->increments('id');
                                $table->text('tujuan');
                                $table->text('description');
                                $table->text('price');
                                $table->text('floors');
                                $table->text('address');
                                $table->text('city');
                                $table->text('state');
                                $table->text('mls');
                                $table->text('quare_feet');
                                $table->text('square_feet');
                                $table->text('bed');
                                $table->text('bath');
                                $table->text('image');
                                $table->text('feature');
                                $table->timestamps();
        });
        Schema::create('schedules', function(Blueprint $table)
		{
                                $table->increments('id');
                                $table->datetime('tour_date');
                                $table->text('trip_length');
                                $table->text('route');
                                $table->text('dept_from');
                                $table->text('arrive_at');
                                $table->text('space');
                                $table->timestamps();
        });

        Schema::create('lokasis', function(Blueprint $table)
        {
                                $table->increments('id');
                                $table->text('name');
                                $table->text('description');
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
                            Schema::drop('destinations');
                            Schema::drop('schedules');
	             Schema::drop('lokasis');
	}

}
