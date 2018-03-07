<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
class EventsTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('events')->delete();

		// first seed
		$event = factory(App\Models\Shared\Events::class, 50)->create();
		
	}
}