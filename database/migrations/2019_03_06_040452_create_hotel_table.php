<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHotelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotel', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('hotel_name_en', 500)->nullable();
			$table->string('hotel_name_cn', 500);
			$table->string('used_name', 200)->nullable();
			$table->boolean('domestic')->nullable();
			$table->string('country', 100)->nullable();
			$table->integer('province')->nullable();
			$table->integer('city');
			$table->string('address', 200)->nullable();
			$table->string('longitude', 200)->nullable();
			$table->string('latitude', 200)->nullable();
			$table->string('position_type', 100)->nullable();
			$table->string('tel', 100)->nullable();
			$table->string('outer_id', 200);
			$table->integer('star')->nullable();
			$table->dateTime('opening_time')->nullable();
			$table->dateTime('decorate_time')->nullable();
			$table->string('floors', 100)->nullable();
			$table->integer('rooms')->nullable();
			$table->text('description_en', 65535)->nullable();
			$table->text('description_cn', 65535)->nullable();
			$table->text('hotel_facilities', 65535)->nullable();
			$table->text('service', 65535)->nullable();
			$table->text('room_facilities', 65535)->nullable();
			$table->text('pics', 65535)->nullable();
			$table->text('brand', 65535)->nullable();
			$table->string('postal_code', 100)->nullable();
			$table->boolean('is_active');
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
		Schema::drop('hotel');
	}

}
