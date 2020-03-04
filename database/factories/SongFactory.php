<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Artist;
use App\Model\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameMale,
        'artist_id' => function () {
            return Artist::all()->random();
        },
        'category_id' => function () {
            return App\Model\Category::all()->random();
        },
        'album_id' => function () {
            return App\Model\Album::all()->random();
        },
        'cover' => 'https://americanmurdersong.com/wp-content/uploads/2018/11/Vinyl-1816-1.jpg',
        'lyric' => $faker->paragraph,
        'source' => public_path('storage/mp3/naruto-shippuden-songs_naruto-shippuden-opening-01-hero-s-come-back.mp3')

    ];
});
