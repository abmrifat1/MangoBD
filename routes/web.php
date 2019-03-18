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

Route::get('/', 'MangoBD@homepage');
Route::get('/shop', 'MangoBD@shop');
Route::get('/about', 'MangoBD@about');
Route::get('/products/{unique_id}', 'MangoBD@show');
Route::get('/checkout', 'MangoBD@checkout');
Route::get('/payment', 'MangoBD@payment');


Route::resource('/admin/category','CategoryController');
Route::get('/admin/category/publish/{unique_id}','CategoryController@publish');
Route::get('/admin/category/unpublish/{unique_id}','CategoryController@unPublish');

Route::resource('/admin/product','ProductController');
Route::resource('/admin/user','UserController');
Route::post('/website/user','UserController@store1');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
