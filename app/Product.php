<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table ="product";
    protected $fillable = ['nama_product', 'harga_product','category_id'];

    
}
