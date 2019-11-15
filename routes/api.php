<?php

use Illuminate\Http\Request;

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

Route::get('/products', 'api\ProductController@getProducts');
Route::post('/products', 'api\ProductController@postProducts');
Route::put('/products/{product}', 'api\ProductController@putProducts');
Route::delete('/products/{product}', 'api\ProductController@deleteProducts');
