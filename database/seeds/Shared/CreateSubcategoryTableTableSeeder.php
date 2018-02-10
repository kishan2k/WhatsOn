<?php

use Illuminate\Database\Seeder;
use \CreateSubcategoryTable;

class CreateSubcategoryTableTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('subcategory')->delete();

		// addSubcategory
		CreateSubcategoryTable::create(array(
				'name' => 'RNB'
			));
	}
}