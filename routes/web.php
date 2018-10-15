<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('pgawai','PgawaiController');
Route::resource('pemilik','PemilikController');
Route::resource('pesanan','PesananController');
Route::resource('makanan','MakananController');
Route::resource('mnum','MnumController');