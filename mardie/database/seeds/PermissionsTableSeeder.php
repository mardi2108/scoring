<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Permission::create([
       'name' => 'view data' // id 1
		]);
		App\Permission::create([
		       'name' => 'create data' // id 2
		]);
		App\Permission::create([
		       'name' => 'edit data' // id 3
		]);
		App\Permission::create([
		       'name' => 'update data' // id 4
		]);
		App\Permission::create([
		       'name' => 'delete data' // id 5
		]);

		$admin = App\Role::where('name', 'admin')->first();
		$admin->permissions()->attach([1, 2, 3, 4, 5]);

		$star_one = App\Role::where('name', 'star_one')->first();
		$star_one->permissions()->attach([1, 2, 3, 4, 5]);

		$star_two = App\Role::where('name', 'star_two')->first();
		$star_two->permissions()->attach([1, 2, 3, 4, 5]);

		$star_two = App\Role::where('name', 'star_two')->first();
		$star_two->permissions()->attach([1, 2, 3, 4, 5]);

		$star_three = App\Role::where('name', 'star_three')->first();
		$star_three->permissions()->attach([1, 2, 3, 4, 5]);

		$star_four = App\Role::where('name', 'star_four')->first();
		$star_four->permissions()->attach([1, 2, 3, 4, 5]);

		$star_five = App\Role::where('name', 'star_five')->first();
		$star_five->permissions()->attach([1, 2, 3, 4, 5]);
    }
}
