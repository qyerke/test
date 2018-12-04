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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/product/{id}', 'IndexController@show')->name('index.show');
Route::resource('/cart', 'CartController');
Route::get('clear', 'CartController@clearCart')->name('cart.clear');
Route::resource('/wishlist', 'WishlistController');
Route::get('/category/{slug}', 'CategoryController@index')->name('index.category');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
