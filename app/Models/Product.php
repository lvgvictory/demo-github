<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function image()
    {
    	return $this->hasMany('App\Models\Image', 'product_id', 'id');
    }

    public function productSize()
    {
    	return $this->hasMany('App\Models\ProductSize', 'product_id', 'id');
    }

    public function billDetail()
    {
    	return $this->hasMany('App\Models\BillDetail', 'product_id', 'id');
    }

    public function comment()
    {
    	return $this->hasMany('App\Models\Comment', 'product_id', 'id');
    }

    public function subCategory()
    {
    	return $this->belongsTo('App\Models\SubCategory', '	subcategory_id', 'id');
    }

    public function discount()
    {
    	return $this->belongsTo('App\Models\Discount', 'discount_id', 'id');
    }
}
