<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    use TruncateTable;
    use DisableForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->disableForeignKeys();
        $this->call(AuthTableSeeder::class);
        $this->call(AddressTableSeeder::class);
        $this->call(OrganizerTableSeeder::class);
        $this->call(SubcategoryTableSeeder::class);        
        $this->call(CategoryTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->enableForeignKeys();
        Model::reguard();
        
    }
}
