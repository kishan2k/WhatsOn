<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	public function up()
	{
		Schema::create('events', function(Blueprint $table) {
			$table->increments('id');
			$table->string('slug', 100);
			$table->string('name', 50);
			$table->string('category');
			$table->string('organizer');
			$table->string('source')->nullable();
			$table->text('body')->nullable();
			$table->decimal('cost', 8,2);
			$table->string('addressID');
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