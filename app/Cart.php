<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $primaryKey = 'id';

    protected $fillable = ['status'];

    public function products()
    {
        return $this->belongsToMany('App\Product' , 'products_carts')
        ->withPivot('product_id', 'quantity');;
        
    }
    public function itemsProducts(){
        return $this->hasMany('App\Product', 'products_carts');
    }
}
