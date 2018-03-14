<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Shared\Organizer;


class OrganizerTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('organizer')->delete();

		// addOrganizer
		Organizer::create(array(
				'addressID' => 1,
				'name' => 'Group 6F',
				'phone' => 07777777777,
				'email' => 'test@email.com'
			));
	}
}