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

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    Route::get('/registrasi', 'Admin\RegistrasiController@index')->name('admin.registrasi');

    Route::group(['preifx' => 'speaker'],function(){
        Route::get('/', 'Admin\SpeakerController@index')->name('admin.speaker');
        Route::get('/getData', 'Admin\SpeakerController@getData')->name('admin.speaker.data');
        Route::get('/store', 'Admin\SpeakerController@store')->name('admin.speaker.store');
    });
   
    
});


