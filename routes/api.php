<?php

use App\Http\Resources\Song\SongCollection;
use App\Model\Song;
use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/songs', 'SongController');

Route::apiResource('/artist', 'ArtistController');

Route::apiResource('/category', 'CategoryController');

Route::apiResource('/album', 'AlbumController');


Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});
