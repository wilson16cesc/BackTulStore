<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'sku', 'description'];

    public function carts()
    {
        return $this->belongsToMany('App\Cart', 'products_carts');
    }
}
