<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	protected $fillable = [
			'id','text', 'id_subject', 'id_user',
	];
	
	public function whoAddPosts($params)
	{
		return DB::table('Posts')
		->join('users', 'Posts.id_user', '=', 'users.id')
		->select('users.*', 'posts.*')
		->where([['Posts.id_subject','=',$params->id]])
		->orderBy('Posts.created_at', 'DESC')
		->paginate(3);
	}

}
