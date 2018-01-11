<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class New extends Model
{
    protected $table = 'news';

    public function user()
    {
    	return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
