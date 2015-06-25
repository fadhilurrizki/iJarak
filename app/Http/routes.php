<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('getAllLokasi','ApiController@getAllLokasi');

Route::get('getInfoDetail','ApiController@getInfoDetail');

Route::get('getAllFilteredByLocation','ApiController@getAllFilteredByLocation');

Route::get('getAllFilteredByKeterangan','ApiController@getAllFilteredByKeterangan');

Route::get('editLevelKerusakan','ApiController@editLevelKerusakan');

Route::get('editStatusLaporan','ApiController@editStatusLaporan');

Route::get('postLaporan','ApiController@postLaporan');

