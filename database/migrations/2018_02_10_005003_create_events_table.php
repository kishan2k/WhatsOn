<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	public function up()
	{
		Schema::create('events', function(Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('categoryID')->references('id')->on('category');
			$table->unsignedInteger('organizerID')->references('id')->on('organizer')->nullable();
			$table->unsignedInteger('addressID')->references('id')->on('address');
			$table->string('slug', 100);
			$table->string('name', 50);
			$table->string('source')->nullable();
			$table->text('body')->nullable();
			$table->decimal('cost', 8,2);			
			$table->datetime('start');
			$table->datetime('end');
			$table->boolean('isVisible');
			$table->boolean('isPublic');
			$table->string('image_url', 500)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('events');
	}
}