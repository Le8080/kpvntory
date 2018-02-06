<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$data = array();
Route::get('/', function () {
    return view('index');
});
#list of products
Route::get('/products', function () {
    $data['page']='products';
    return view('products/products',$data);
});

#form for product
Route::get('/products/{productid}','ProductController@create_update');

#list of categories
Route::get('/categories', function () {
    $data['page']='categories';
    return view('products/categories');
});

#list of categories
Route::get('/categories/{productid}','CategoryController@create_update');