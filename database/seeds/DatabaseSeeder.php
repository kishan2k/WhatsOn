<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AuthTableSeeder::class);
        //$this->call(OrganizerTableSeeder::class);
        //$this->call(AddressTableSeeder::class);
        //$this->call(EventsTableSeeder::class);
        //$this->call(CategoryTableSeeder::class);
        //$this->call(SubcategoryTableSeeder::class);

        Model::reguard();
    }
}
