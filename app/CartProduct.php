<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    //
    protected $table = 'products_carts';
    
    protected $fillable = ['product_id', 'cart_id', 'quantity'];

    public $timestamps = true;
    
}
