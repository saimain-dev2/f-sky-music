<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'album_id' => function () {
            return App\Model\Album::all()->random();
        },
       'artist' => $faker->firstNameMale,
       'lyric' => $faker->realText($maxNbChars = 200, $indexSize = 2),
       'source' => $faker->url,
       'cover' => $faker->imageUrl($width = 640, $height = 480)

    ];
});
