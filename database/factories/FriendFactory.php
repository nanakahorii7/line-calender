<?php

use Faker\Generator as Faker;

$factory->define(App\Friend::class, function (Faker $faker) {
    return [
        'date' ,
        'name'=> 'Mark',
        'image',
        'category',
        'memo' => 'myfriend',
    ];
});
