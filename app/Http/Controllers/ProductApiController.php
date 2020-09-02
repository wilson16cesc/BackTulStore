<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index()
    {
      $products = Product::all()->toArray();
      return response()->json($products);
    }

}
