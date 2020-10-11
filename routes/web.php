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
    return view('tes');
});

Route::get('/dashboard', 'PegawaiController@index');
Route::get('/pegawai/create', 'PegawaiController@create');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::put('/pegawai/update/{id}', 'PegawaiController@update');
Route::get('/pegawai/delete/{id}', 'PegawaiController@destroy');
Route::get('/tes', 'PegawaiController@index2');

Route::get('/dashboardhitung', 'HitungController@index');
Route::get('/pegawai/hitung/{id}', 'HitungController@edit');
Route::post('/hitung/store', 'HitungController@store');
