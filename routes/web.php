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
Route::any('/', 'ImageController@index');
Route::any('/displayImage', 'ImageController@displayImage');
Route::any('/image/save', 'ImageController@saveData');
Route::any('/get/product', 'ImageController@fetchProduct');
Route::any('/interiorPage/{id}', 'ImageController@interiorPage')->name('interiorPage');
Route::any('/exteriorPage/{id}', 'ImageController@exteriorPage')->name('exteriorPage');
