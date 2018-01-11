<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    //
    protected $table = 'sizes';

    public function productSize()
    {
    	return $this->hasMany('App\Models\ProductSize', 'size_id', 'id');
    }
}
