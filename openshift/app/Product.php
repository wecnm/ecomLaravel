<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =
    [
    	'product_name',
    	'product_desc',
    	'product_detail',
    	'price',
    	'category_id',
    	'product_available',
    	'picture_path',
	];
}
