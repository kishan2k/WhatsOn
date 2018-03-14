<?php

use Illuminate\Database\Seeder;
use App\Models\Shared\Organizer;
use Illuminate\Support\Facades\DB;

class OrganizerTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('organizer')->delete();

		// addOrganizer
		CreateOrganizerTable::create(array(
				'addressID' => 1,
				'name' => 'Group 6F',
				'phone' => 07777777777,
				'email' => 'test@email.com'
			));
	}
}