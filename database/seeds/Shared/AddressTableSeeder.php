<?php

use Illuminate\Database\Seeder;
use App\Models\Shared\Address;


class AddressTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('address')->delete();

		// addAddress
		Address::create(array(
				'name' => 'Hometown',
				'address1' => 'Coventry',
				'city' => 'Coventry',
				'county' => 'Warwickshire',
				'postcode' => 'CV1 5JJ',
				'region' => 'West Midlands',
				'country' => 'GB',
				'lat' => 52.40656,
				'long' => -1.51217
			));
	}
}