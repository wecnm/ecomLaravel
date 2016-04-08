<?php

use Illuminate\Database\Seeder;
Use App\adminUser;
class adminUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->delete();

        adminUser::create(array(
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('123456'),
        ));
    }
}
