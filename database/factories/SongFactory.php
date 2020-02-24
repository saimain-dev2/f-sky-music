<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameMale,
        'artist' => $faker->firstNameMale,
        'category_id' => function () {
            return App\Model\Category::all()->random();
        },
        'album_id'=>function () {
            return App\Model\Album::all()->random();
        },
        'cover'=>$faker->imageUrl($width = 640, $height = 480),
        'lyric'=>$faker->paragraph,
        'source' => $faker->url
    ];
});
