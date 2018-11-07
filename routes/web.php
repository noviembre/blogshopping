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

Route::get('/', [
    'uses' => 'FrontEndController@index',
    'as' => 'index'
]);



#================== Products Details ===============
Route::get('product/{id}', [

    'uses' => 'FrontEndController@singleProduct',
    'as' => 'product.single'

]);

#=================   Add to Cart   ====================
Route::post('cart/add', [

    'uses' => 'ShoppingController@add_to_cart',
    'as' => 'cart.add'

]);

#=================   Cart Page   ====================
Route::get('/cart', [

    'uses' => 'ShoppingController@cart',
    'as' => 'cart'

]);

#=======   Delete an item from the cart   ==========
Route::get('cart/delete/{id}', [

    'uses' => 'ShoppingController@cart_delete',
    'as' => 'cart.delete'

]);

#=================   decrement   ====================

Route::get('cart/incr/{id}/{qty}', [

    'uses' => 'ShoppingController@incr',
    'as' => 'cart.incr'

]);


Route::get('cart/decr/{id}/{qty}', [

    'uses' => 'ShoppingController@decr',
    'as' => 'cart.decr'

]);

Route::resource('products', 'ProductsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
