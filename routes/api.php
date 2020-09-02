<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('products','ProductApiController',['only' =>[
    'index','store','show','update','destroy'
    ]]);
Route::resource('carts','CartApiController',['only' =>[
    'index','store','show','update','destroy'
    ]]);    


Route::post('/carts/','CartApiController@add')->name('carts.add');
// Route::get('/carts/','CartApiController@index')->name('carts.index');


