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

    Route::group(['prefix' => 'schedule'], function () {
        Route::get('/', 'Admin\ScheduleController@index')->name('admin.schedule.index');
        Route::get('/getData', 'Admin\ScheduleController@getData')->name('admin.schedule.data');
        Route::get('/getSpeaker', 'Admin\ScheduleController@getSpeaker')->name('admin.schedule.speaker.data');
        Route::post('/store', 'Admin\ScheduleController@store')->name('admin.schedule.store');
        Route::get('/edit/{id}', 'Admin\ScheduleController@edit')->name('admin.schedule.edit');
        Route::put('/update/{id}', 'Admin\ScheduleController@update')->name('admin.schedule.update');
        Route::delete('/delete/{id}', 'Admin\ScheduleController@delete')->name('admin.schedule.delete');
    });
   
    
});


