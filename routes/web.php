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