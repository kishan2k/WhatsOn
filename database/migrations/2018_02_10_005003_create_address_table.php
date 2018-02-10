<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressTable extends Migration {

	public function up()
	{
		Schema::create('address', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('address1');
			$table->string('address2')->nullable();
			$table->string('address3')->nullable();
			$table->string('city');
			$table->string('county')->nullable();
			$table->string('postcode');
			$table->string('region')->nullable();
			$table->string('country');
			$table->decimal('lat', 10,8);
			$table->decimal('long', 11,8);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('address');
	}
}