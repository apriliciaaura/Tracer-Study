<?php

use Illuminate\Support\Facades\Route;

Route::get('dashboard', function () {
	return view('dashboard.index');
})->name('dashboard');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login','AuthController@login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::get('profile', ['as' => 'profile.index', 'uses' => 'ProfileController@index']);
Route::get('profile/detail', ['as' => 'profile.detail', 'uses' => 'ProfileController@detail']);
Route::get('profile/cari', 'ProfileController@cari');

Route::get('change-password', 'AuthController@changePassword')->name('change-password');
Route::post('update-password', 'AuthController@updatePassword');

Route::get('konfigurasi', ['as' => 'konfigurasi.index', 'uses' =>'KonfigurasiController@index']);

Route::get('pengaturan', ['as' => 'pengaturan.index', 'uses' => 'PengaturanController@index']);
Route::get('pengaturan/create', ['as' => 'pengaturan.create', 'uses' => 'PengaturanController@create']);
Route::post('pengaturan', ['as' => 'pengaturan.store', 'uses' => 'PengaturanController@store']);
Route::get('pengaturan/edit/{id_user}', ['as' => 'pengaturan.edit', 'uses' => 'PengaturanController@edit']);
Route::put('pengaturan/edit/{id_user}', ['as' => 'pengaturan.update', 'uses' => 'PengaturanController@update']);
Route::get('pengaturan/delete/{id_user}', ['as' => 'pengaturan.delete', 'uses' => 'PengaturanController@delete']);

Route::get('jenis', ['as' => 'jenis.index', 'uses' => 'JenisController@index']);
Route::get('jenis/create', ['as' => 'jenis.create', 'uses' => 'JenisController@create']);
Route::post('jenis', ['as' => 'jenis.store', 'uses' => 'JenisController@store']);
Route::get('jenis/edit/{id_jenis}', ['as' => 'jenis.edit', 'uses' => 'JenisController@edit']);
Route::put('jenis/edit/{id_jenis}', ['as' => 'jenis.update', 'uses' => 'JenisController@update']);