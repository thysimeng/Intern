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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/product', 'ProducrViewController@index')->name('productView');
Route::get('/product-upload', 'UploadController@index')->name('uploadProduct');
Route::post('/product-upload','FormController@store')->name('productUpload');
Route::get('/product-detail/{idProduct}', 'ProductDetailController@index')->name('productDetail');
Route::get('/product-category/{category}', 'ProducrViewController@category')->name('productCategory');
Route::get('/user-delete/{deleteID}', 'FormController@deleteUser')->name('userDelete');
Route::get('/product-delete/{deleteID}', 'FormController@destroy')->name('productDelete');
Route::get('/product-update/{updateID}', 'ProductUpdateController@index')->name('productUpdate');
Route::post('/product-update', 'FormController@edit')->name('productUpdate');

