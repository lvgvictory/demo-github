<?php

namespace App\Models;

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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'users';

    public function bill()
    {
        return $this->hasMany('App\Models\Bill', 'user_id', 'id');
    }

    public function comment()
    {
        return $this->hasMany('App\Models\Comment', 'user_id', 'id');
    }

    public function social()
    {
        return $this->hasMany('App\Models\Social', 'user_id', 'id');
    }

    public function new()
    {
        return $this->hasMany('App\Models\New', 'user_id', 'id');
    }
}
