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

Route::get("/page", function(){
    return view('user.mail.regist_admin');
});

Route::get('/hasilTransaction', 'User\CheckoutController@done');
Route::get('/detailSchedule/{id}', 'User\HomeController@detailSchedule');

Route::get('/snap', 'User\CheckoutController@snap')->name('snap'); 
Route::post('/snaptoken', 'User\CheckoutController@token')->name('snaptoken');
Route::post('/snapFinish', 'User\CheckoutController@finish');

Route::get('/','User\HomeController@index')->name('user.index');
Route::get('/home','User\HomeController@index')->name('user.index');
Route::get('/about','User\HomeController@about')->name('user.about');
Route::get('/speaker','User\HomeController@speaker')->name('user.speaker');
Route::get('/schedule','User\HomeController@schedule')->name('user.schedule');
Route::get('/contact','User\HomeController@contact')->name('user.contact');
Route::post('/registrasi','User\PendaftarController@store')->name('daftar.store');