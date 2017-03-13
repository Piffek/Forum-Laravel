<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_has_roles extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id','roles_id'
    ];

}