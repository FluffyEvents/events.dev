<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalendarEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calendar_events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('location_id')->unsigned();
			$table->string('title', 255);
			$table->string('description', 255);
			$table->decimal('price', 10, 2)->nullable();
			$table->boolean('show_google_map')->default(false);
			$table->timestamp('starts_at');
			$table->timestamp('ends_at');
			$table->softDeletes();
			$table->timestamps();
			
			$table->foreign('location_id')->references('id')->on('locations');
   			$table->foreign('user_id')->references('id')->on('users');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('calendar_events');
	}

}
