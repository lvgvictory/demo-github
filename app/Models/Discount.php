<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $table = 'discounts';

    public function product()
    {
    	return $this->hasMany('App\Models\Product', 'product_id', 'id');
    }
}
