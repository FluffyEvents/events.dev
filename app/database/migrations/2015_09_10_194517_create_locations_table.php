<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 128);
			$table->string('address', 255);
			$table->string('city');
			$table->string('state');
			$table->string('postal_code', 5);
			$table->string('longitude', 28);
			$table->string('latitude', 28);
			$table->string('website_url', 264)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locations');
	}

}
