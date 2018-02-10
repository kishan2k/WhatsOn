<?php

use Illuminate\Database\Seeder;
use \CreateEventsTable;

class CreateEventsTableTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('events')->delete();

		// first seed
		CreateEventsTable::create(array(
				'name' => 'Event 1',
				'category' => '1',
				'organizer' => '1',
				'source' => 'client',
				'body' => 'test body',
				'cost' => 2.00,
				'addressID' => 1,
				'isVisible' => true,
				'isPublic' => true,
				'slug' => 'first-event',
				'start' => '10/02/2018 16:00',
				'end' => '10/02/2018 18:00',
				'image_url' => 'https://www.w3schools.com/w3css/img_lights.jpg'
			));
	}
}