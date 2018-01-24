<?php

use Illuminate\Http\Request;
use App\User;
use App\Product;

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
Route::group(['middleware' => 'api'], function() {

    Route::get('/users', function(){
        return User::latest()->orderBy('name', 'asc')->get();
    });

    Route::post('/login', 'Auth\ApiLoginController@authenticated');

    Route::get('products', 'ProductsController@index');
 
    Route::get('product/{product}', 'ProductsController@show');
     
    Route::post('product', 'ProductsController@store');
     
    Route::put('product/{product}', 'ProductsController@update');

    Route::patch('product/{product}', 'ProductsController@update');
     
    Route::delete('product/{product}', 'ProductsController@destroy');
    
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


