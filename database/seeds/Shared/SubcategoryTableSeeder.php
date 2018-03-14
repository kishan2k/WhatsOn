<?php

use Illuminate\Database\Seeder;
use App\Models\Shared\Subcategory;

class SubcategoryTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('subcategory')->delete();

		// addSubcategory
		CreateSubcategoryTable::create(array(
				'name' => 'RNB'
			));
	}
}