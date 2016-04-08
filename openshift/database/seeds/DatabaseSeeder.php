<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 //Eloquent::unguard();
         $this->call(productSeeder::class);
         $this->call(adminUserSeed::class);
         $this->command->info('seed generated');

    }
}
