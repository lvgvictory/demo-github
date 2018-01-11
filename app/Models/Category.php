<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    //
    protected $table = 'categoties';


    public function subCategory ()
    {
    	return $this->hasMany('App\Models\SubCategory','category_id','id');
    }

    public function product()
    {
    	return $this->hasManyThrough('App\Models\Product', 'App\Models\SubCategory', 'category_id', '	subcategory_id', 'id');
    }
}
