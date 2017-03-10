<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Subject extends Model
{
	protected $fillable = [
			'id', 'id_user', 'id_categories', 'body', 'subject'
	];
	
	public function whoAddSubject($params)
	{
		return DB::table('Subjects')
		->join('users', 'Subjects.id_user', '=', 'users.id')
		->select('users.*')
		->where([
				['Subjects.id','=',$params->id],
		])->get();
	}
}
