<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\CategoriesController;

class UserTest extends TestCase
{

	public function testUserRegistration()
	{
		$name = 'test';
		$email = 'test@kwak3.az.pl';
		$password = bcrypt('test12234');
		$randomKey = '1234';
		User::create([
			'name' 		=> $name,
			'email'		=> $email,
			'password'	=> $password,
			'randomKey' => $randomKey,
		]);
		$this->assertDatabaseHas('users',['name' => $name, 'email' => $email, 'password' => $password, 'randomKey' => $randomKey]);
	}
	
}