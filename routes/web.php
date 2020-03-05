<?php

use App\Model\Song;
use App\Model\Album;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;



Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name('admin.home');
});


Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
