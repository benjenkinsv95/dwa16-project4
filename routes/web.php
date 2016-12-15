<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/home', 'HomeController@index');
Route::get('/getting_started', 'GettingStartedController@index')->name('getting_started.index');
Route::get('/', 'HomeController@index');

Route::get('/pronunciations', 'PronunciationController@index')->name('pronunciations.index');
Route::get('/pronunciations/create', 'PronunciationController@create')->name('pronunciations.create')->middleware('auth');
Route::post('/pronunciations/create', 'PronunciationController@store')->name('pronunciations.store')->middleware('auth');
Route::get('/pronunciations/{pronunciation}', 'PronunciationController@show')->name('pronunciations.show');
Route::get('/pronunciations/{pronunciation}/edit', 'PronunciationController@edit')->name('pronunciations.edit')->middleware('auth');
Route::put('/pronunciations/{pronunciation}/edit', 'PronunciationController@update')->name('pronunciations.update')->middleware('auth');
Route::post('/pronunciations/{pronunciation}', 'PronunciationController@destroy')->name('pronunciations.destroy')->middleware('auth');

Route::get('/voices', 'VoiceController@index')->name('voices.index');
Route::get('/voices/create', 'VoiceController@create')->name('voices.create')->middleware('auth');
Route::post('/voices/create', 'VoiceController@store')->name('voices.store')->middleware('auth');
Route::get('/voices/{voice}', 'VoiceController@show')->name('voices.show');
Route::get('/voices/{voice}/edit', 'VoiceController@edit')->name('voices.edit')->middleware('auth');
Route::put('/voices/{voice}/edit', 'VoiceController@update')->name('voices.update')->middleware('auth');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth');