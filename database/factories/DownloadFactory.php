<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Download;
use Faker\Generator as Faker;

$factory->define(Download::class, function (Faker $faker) {
    return [
        'song_id' =>function () {
            return App\Model\Song::all()->random();
        },
        'link' => $faker->url
    ];
});
