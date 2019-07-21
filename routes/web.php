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
    return view('guest.index');
});


Route::group(['prefix' => 'admin'], function() {
	Auth::routes();
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('register', 'Peserta\ViewController@register');
Route::get('register-sukses/{id}', 'Peserta\ViewController@registerSukses');
Route::post('register', 'Peserta\PostController@register');


Route::get('/home', 'HomeController@index')->name('home');
