<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    //
    protected $table = 'spcials';

    public function user()
    {
    	return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
