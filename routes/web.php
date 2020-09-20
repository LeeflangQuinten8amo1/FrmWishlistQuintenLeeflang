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

Route::get('/unused', function () {
    return view('welcome');
});
Route::get('/', 'Maincontroller@home');
Route::get('/wishlist', 'Maincontroller@wishlist');
Route::get('/manage', 'Maincontroller@managements');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/wishposts/list', 'WishPostController@listit');
Route::get('/wishposts', 'WishPostController@index');
Route::get('/wishposts/create', 'WishPostController@create');
Route::post('/wishposts', 'WishPostController@store');
Route::get('/wishposts/{wishpost}', 'WishPostController@show');
Route::get('/wishposts/{wishpost}/edit', 'WishPostController@edit');
Route::patch('/wishposts/{wishpost}', 'WishPostController@update');
Route::delete('/wishposts/{wishpost}', 'WishPostController@destroy');

