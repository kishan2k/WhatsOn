<?php

use Illuminate\Database\Seeder;
use \CreateOrganizerTable;

class CreateOrganizerTableTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('organizer')->delete();

		// addOrganizer
		CreateOrganizerTable::create(array(
				'name' => 'Group 6F',
				'phone' => 07777777777,
				'email' => 'test@email.com'
			));
	}
}