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




Route::get('/', 'BlogController@index')->name('home');

Route::get('/{slugCategory}', 'BlogController@category')->name('category');
//Route::get('/test/{slugCategory}/{slugMaterial}', 'BlogController@materialTest');
Route::get('/{slugCategory}/{slugMaterial}', 'BlogController@material')->name('material');

Route::post('/show-more-block', 'BlogController@showMoreBlock');
Route::post('/show-more-category', 'BlogController@showMoreCategory');



