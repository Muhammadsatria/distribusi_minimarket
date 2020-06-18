<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', 'ProductController@index')->name('product.index');

Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::post('/product/create','ProductController@store');

Route::get('/product/edit/{id_product}','ProductController@edit');
Route::put('/product/update/{id_product}', 'ProductController@update');
Route::get('/product/delete/{id_product}', 'ProductController@delete');



Route::get('/category','CategoryController@index');
Route::post('/category/create','CategoryController@create');
Route::get('/category/edit/{id}','CategoryController@edit');
Route::put('/category/update/{id}', 'CategoryController@update');
Route::get('/category/delete/{id}', 'CategoryController@delete');

Route::get('/customer','CustomerController@index');
Route::post('/customer/create','CustomerController@create');
Route::get('/customer/edit/{id}','CustomerController@edit');
Route::put('/customer/update/{id}', 'CustomerController@update');
Route::get('/customer/delete/{id}', 'CustomerController@delete');