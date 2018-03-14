<?php

use Illuminate\Database\Seeder;
use App\Models\Shared\Category;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('category')->delete();

		// add_categories
		Category::create(array(
				'name' => 'music',
				'subcategoryID' => 1
			));
	}
}