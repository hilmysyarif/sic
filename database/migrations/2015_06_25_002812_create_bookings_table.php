<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                        Schema::create('bookings', function(Blueprint $table)
                        {
                            $table->increments('id');
                            $table->text('cust_name');
                            $table->datetime('tour_name');
                            $table->datetime('tour_date');
                            $table->text('price');
                            $table->integer('status')->unsigned();
                            $table->timestamps();
                        });

    	         Schema::create('customers', function(Blueprint $table)
	         {
                             $table->increments('id');
                             $table->text('cust_name');
                             $table->text('email');
                             $table->text('phone');
                             $table->text('country');
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
                             Schema::drop('bookings');
		Schema::drop('customers');
	}

}
