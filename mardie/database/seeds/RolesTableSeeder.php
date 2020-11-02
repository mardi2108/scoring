<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::create([
      		'name' => 'admin'
		]);

		App\Role::create([
		    'name' => 'star_one'
		]);

		App\Role::create([
		    'name' => 'star_two'
		]);

		App\Role::create([
		    'name' => 'star_three'
		]);

		App\Role::create([
		    'name' => 'star_four'
		]);

		App\Role::create([
		    'name' => 'star_five'
		]);
    }
}
