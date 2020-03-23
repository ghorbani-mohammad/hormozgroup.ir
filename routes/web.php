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

Route::view('/', 'index');

Route::post('fee/bot.php', 'FeeController@control');

Route::get('sitemap',  'PageController@sitemap');

Route::get('لیست-قیمت','PageController@feeList');

Route::get('لیست-قیمت-سینی-کابل','PageController@feeListTraycable');

Route::view('تماس-با-ما', 'contactus');
Route::get('درباره-ما', 'PageController@aboutUs');
Route::get('سینی-کابل', 'PageController@traycable');
Route::get('نردبان-کابل', 'PageController@laddercable');

Route::get('وبلاگ', 'PageController@blog');

Route::auth();

Route::resource('posts', 'PostController');

Route::view('map', 'map');