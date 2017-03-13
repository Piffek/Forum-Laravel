<?php

use Illuminate\Database\Seeder;
use App\User;

class user_role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$user = new User();
		$user->name = 'Patryk';
		$user->email = 'patryk@kwak.az.pl';
		$user->password = bcrypt('promotion1');
		$user->save();
		$user->roles()->attach(10);
		
		$user = new User();
		$user->name = 'Patryk2';
		$user->email = 'patryk2@kwak.az.pl';
		$user->password = bcrypt('promotion2');
		$user->save();
		$user->roles()->attach(11);
    }
}
