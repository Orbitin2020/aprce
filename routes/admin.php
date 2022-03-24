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

    Route::group(['prefix' => 'speaker'], function () {
        Route::get('/', 'Admin\SpeakerController@index')->name('admin.speaker.index');
        Route::get('/getData', 'Admin\SpeakerController@getData')->name('admin.speaker.data');
        Route::post('/store', 'Admin\SpeakerController@store')->name('admin.speaker.store');
        Route::get('/edit/{id}', 'Admin\SpeakerController@edit')->name('admin.speaker.edit');
        Route::put('/update/{id}', 'Admin\SpeakerController@update')->name('admin.speaker.update');
        Route::delete('/delete/{id}', 'Admin\SpeakerController@delete')->name('admin.speaker.delete');
    });
   
    
});


