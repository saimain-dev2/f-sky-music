<?php

use App\Http\Resources\Song\SongCollection;
use App\Model\Song;
use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/songs', 'SongController');
