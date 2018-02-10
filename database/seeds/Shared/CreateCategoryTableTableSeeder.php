<?php

use Illuminate\Database\Seeder;
use \CreateCategoryTable;

class CreateCategoryTableTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('category')->delete();

		// add_categories
		CreateCategoryTable::create(array(
				'name' => 'music',
				'subcategory' => 1
			));
	}
}