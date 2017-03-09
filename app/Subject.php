<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	protected $fillable = [
			'id', 'id_user', 'id_categories', 'body', 'subject'
	];
}
