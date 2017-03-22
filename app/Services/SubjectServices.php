<?php 
namespace App\Services;

use App\Subject;
use App\Posts;
use App\User;

class SubjectServices
{
	public function howAddDataToDB($data)
	{
		$user = User::create([
				'name' => $data['name'],
				'email' => $data['email'],
				'password' =>$data['password'],
				'randomKey' => $data['randomKey'],
		]);
		
		Subject::create([
				'id_user' => $user->id,
				'id_categories' => $data['id_categories'],
				'subject' => $data['subject'],
				'body' => $data['body'],
		]);
	}
}


?>