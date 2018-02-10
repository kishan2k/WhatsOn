<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganizerTable extends Migration {

	public function up()
	{
		Schema::create('organizer', function(Blueprint $table) {
			$table->increments('id');
			$table->string('addressID');			
			$table->string('name');
			$table->bigInteger('phone');
			$table->string('email')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('organizer');
	}
}