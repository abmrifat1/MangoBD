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

Route::get('/', 'MangoBD@index');
Route::get('/shop', 'MangoBD@shop');
Route::resource('admin/category','CategoryController');
Route::get('/admin/category/publish/{unique_id}','CategoryController@publish');
Route::get('/admin/category/unpublish/{unique_id}','CategoryController@unPublish');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
