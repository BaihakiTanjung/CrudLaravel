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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/coba', function () {
    return view('coba');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/pintumasuk', "TestController@pintuMasuk");


Route::resource('kategori', 'KategoriController');
Route::get('/kategori/{id}/delete', 'KategoriController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
