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
Route::post('konfigurasi', ['as' => 'konfigurasi.store', 'uses' => 'KonfigurasiController@store']);
Route::get('konfigurasi/update', ['as' => 'konfigurasi.update', 'uses' =>'KonfigurasiController@update']);

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

Route::get('kategori', ['as' => 'kategori.index', 'uses' => 'KategoriController@index']);
Route::get('kategori/create', ['as' => 'kategori.create', 'uses' => 'KategoriController@create']);
Route::post('kategori', ['as' => 'kategori.store', 'uses' => 'KategoriController@store']);
Route::get('kategori/edit/{id_kategori}', ['as' => 'kategori.edit', 'uses' => 'KategoriController@edit']);
Route::put('kategori/edit/{id_kategori}', ['as' => 'kategori.update', 'uses' => 'KategoriController@update']);
Route::get('kategori/delete/{id_kategori}', ['as' => 'kategori.delete', 'uses' => 'KategoriController@delete']);

Route::get('combobox', ['as' => 'combobox.index', 'uses' => 'ComboboxController@index']);
Route::get('combobox/detail', ['as' => 'combobox.detail', 'uses' => 'ComboboxController@detail']);
Route::get('combobox/create', ['as' => 'combobox.create', 'uses' => 'ComboboxController@create']);
Route::post('combobox', ['as' => 'combobox.store', 'uses' => 'ComboboxController@store']);
Route::get('combobox/edit/{id_combobox}', ['as' => 'combobox.edit', 'uses' => 'ComboboxController@edit']);
Route::put('combobox/edit/{id_combobox}', ['as' => 'combobox.update', 'uses' => 'ComboboxController@update']);
Route::get('combobox/delete/{id_combobox}', ['as' => 'combobox.delete', 'uses' => 'ComboboxController@delete']);

Route::get('detail', ['as' => 'detail.index', 'uses' => 'DetailController@index']);
Route::post('detail/create', ['as' => 'soal.create', 'uses' => 'DetailController@create']);
Route::get('detail/edit/{id_detail}', 'DetailController@edit');
Route::put('detail/edit/{id_detail}', ['as' => 'detail.update', 'uses' => 'DetailController@update']);
Route::get('detail/delete/{id_detail}', ['as' => 'detail.delete', 'uses' => 'DetailController@delete']);

Route::get('petunjuk', ['as' => 'petunjuk.index', 'uses' => 'PetunjukController@index']);
Route::get('petunjuk/edit/{id_petunjuk}', ['as' => 'petunjuk.edit', 'uses' => 'PetunjukController@edit']);
Route::put('petunjuk/edit/{id_petunjuk}', ['as' => 'petunjuk.update', 'uses' => 'PetunjukController@update']);

Route::get('soal', ['as' => 'soal.index', 'uses' => 'SoalController@index']);
Route::get('soal/detail', ['as' => 'soal.detail', 'uses' => 'SoalController@detail']);
Route::get('soal/create', ['as' => 'soal.create', 'uses' => 'SoalController@create']);
Route::post('soal', ['as' => 'soal.store', 'uses' => 'SoalController@store']);
Route::get('soal/edit/{id_soal}', ['as' => 'soal.edit', 'uses' => 'SoalController@edit']);
Route::put('soal/edit/{id_soal}', ['as' => 'soal.update', 'uses' => 'SoalController@update']);
Route::get('soal/delete/{id_soal}', ['as' => 'soal.delete', 'uses' => 'SoalController@delete']);

Route::get('jawaban', ['as' => 'jawaban.index', 'uses' => 'JawabanController@index']);
Route::get('jawaban/create', ['as' => 'jawaban.create', 'uses' => 'JawabanController@create']);
Route::post('jawaban', ['as' => 'jawaban.store', 'uses' => 'JawabanController@store']);
Route::get('jawaban/edit/{id_jawaban}', ['as' => 'jawaban.edit', 'uses' => 'JawabanController@edit']);
Route::put('jawaban/edit/{id_jawaban}', ['as' => 'jawaban.update', 'uses' => 'JawabanController@update']);
Route::get('jawaban/delete/{id_jawaban}', ['as' => 'jawaban.delete', 'uses' => 'JawabanController@delete']);