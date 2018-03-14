<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('addressID')->references('id')->on('address')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('organizerID')->references('id')->on('organizer')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('category', function(Blueprint $table) {
			$table->foreign('subcategoryID')->references('id')->on('subcategory')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->foreign('categoryID')->references('id')->on('category')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->foreign('organizerID')->references('id')->on('organizer')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->foreign('addressID')->references('id')->on('address')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('organizer', function(Blueprint $table) {
			$table->foreign('addressID')->references('id')->on('address')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}


	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_addressID_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_organizerID_foreign');
		});
		Schema::table('category', function(Blueprint $table) {
			$table->dropForeign('coach_subcategoryID_foreign');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->dropForeign('booking_organizerID_foreign');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->dropForeign('booking_categoryID_foreign');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->dropForeign('booking_addressID_foreign');		
		});
		Schema::table('organizer', function(Blueprint $table) {
			$table->dropForeign('booking_addressID_foreign');
		});
		
		
		
	}
}