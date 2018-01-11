<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    //
    protected $table = 'product_sizes';

    public function product()
    {
    	return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }

    public function size()
    {
    	return $this->belongsTo('App\Models\Size', 'size_id', 'id');
    }
}
