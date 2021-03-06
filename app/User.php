<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'email', 'password', 'randomKey'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile()
    {
    	return $this->hasOne(Profile::class);
    }
    
    public function roles()
    {
    	return $this->belongsToMany(Roles::class, 'user_has_roles', 'user_id', 'roles_id')->withTimestamps();
    }
    
    public function userRole($roles)
    {
    	if(is_array($roles))
    	{
    		foreach($roles as $role)
    		{
    			if($this->hasRole($role))
    			{
    				return true;
    			}
    		}
    	}else if($this->hasRole($roles))
    	{
    		return true;
    	}
    	return false;
    }
    
    public function hasRole($role)
    {
    	if($this->roles()->where('name', $role)->first())
    	{
    		return true;
    	}
    	return false;
    }
}
