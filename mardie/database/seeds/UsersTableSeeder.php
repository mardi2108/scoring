<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::get([
       'name' => 'Mardi Friyatna',
       'email' => 'mardi_f@yahoo.com',
       'password' => bcrypt('R4idhani'),
       'role_id' => 1
		]);
        
    }
}
