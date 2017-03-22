<?php 
namespace App\Services;
use App\User;
use App\Profile;

class UserServices
{
	public function create($data)
	{
		$user = User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' =>$data['password'],
			'randomKey' => $data['randomKey'],
		]);
		
				Profile::create([
				'city' => $data['city'],
				'user_id' => $user->id,
		]);
	return $user->id;
	}
}

?>