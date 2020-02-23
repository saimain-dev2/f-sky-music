<?php

use App\Model\Song;
use App\Model\Album;
use Illuminate\Support\Facades\Auth;

Route::get('/d', 'Admin\DashboardController@dashboard');

Route::get('/album/{id}/songs', function ($id) {
    return Album::find($id)->song;
});

Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/home', 'Admin\AdminController@index')->name('admin.home');
});
