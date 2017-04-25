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

Route::get('/', 'CInformasi@index');

Route::get('by_date_cuaca', 'CInformasi@by_date_cuaca');

Route::get('by_date_keadaan_laut', 'CInformasi@by_date_keadaan_laut');

Route::get('by_date_kejahatan', 'CInformasi@by_date_kejahatan');

Route::get('by_date_detail_tangkapan', 'CInformasi@by_date_detail_tangkapan');

Route::get('tes', function () {
    return view('tes-map');
});


