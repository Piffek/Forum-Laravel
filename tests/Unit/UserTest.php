<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Profile;
use App\User;
use App\Services\UserServices;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\CategoriesController;

class UserTest extends TestCase
{

	public function UserRegistration()
	{
		$name = 'test';
		$email = 'test@kwak3.az.pl';
		$password = bcrypt('test12234');
		$randomKey = '1234';
		$user = User::create([
				'name' 		=> $name,
				'email'		=> $email,
				'password'	=> $password,
				'randomKey' => $randomKey,
		]);
		
		Profile::create([
				'city' => 'DDZ',
				'user_id' => $user->id,
		]);
		$this->assertDatabaseHas('users',['name' => $name, 'email' => $email, 'password' => $password, 'randomKey' => $randomKey]);
		$this->assertDatabaseHas('profiles',['city' => 'DDZ', 'user_id'=>$user->id]);
	}
	
	public function testrelationTeststUserTable()
	{
		
		$name = 'test';
		$email = 'test@kwak3.az.pl';
		$password = bcrypt('test12234');
		$randomKey = '1234';
		$city = 'DDZ1';
		
		$data = [
				'name' => $name,
				'email' => $email,
				'password' => $password,
				'randomKey' => $randomKey,
				'city' => 'DDZka',
		];
		$userService = new UserServices();
		$userAndProfile = $userService->create($data);
		
		$expected = User::find($userAndProfile);
		$this->assertEquals($expected->id, $userAndProfile);
		
	}
	
}