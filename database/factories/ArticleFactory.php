<?php

use Faker\Generator as Faker;

$factory->define(\App\Article::class, function (Faker $faker) {
    return [
        'category_id' =>$faker->numberBetween(1,5),
        'title' => $faker->title,
        'body' => $faker->text,
        'created_at' => $faker->dateTimeBetween('-1 years'),
        'updated_at'=>$faker->dateTimeBetween('-1 years'),
    ];
});
