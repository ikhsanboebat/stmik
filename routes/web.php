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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home2', 'HomeController@index2')->name('home2');
Route::get('/home3', 'HomeController@index3')->name('home3');

// profile
Route::get('/profile', 'Views\ProfileController@view')->name('profile');

// pengaturan
Route::get('/pengaturan/ubahpassword', 'Views\PengaturanController@cpview')->name('pengaturan.ubahpassword');
Route::post('/pengaturan/ubahpassword/action', 'Src\PengaturanController@cpcont')->name('pengaturan.ubahpassword.cont');
