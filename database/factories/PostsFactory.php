<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title'=>rtrim($faker->sentence(rand(2,5)),"."),
        'body'=>$faker->paragraphs(rand(2,8),true),
    ];
});
