<?php

use App\Creativity;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Creativity::class, function (Faker $faker) {
    $types = ["Квилинг","Плетени на една кука","Плетени на две куки","Живопис","Декупаж","Щамповани","Дигитални","Други"];
    return [
        'title' => $faker->text(15, 30),
        'image' => 'empty.jpeg',
        'description' => $faker->text(35, 75),
        'user_id' => rand(1, 5),
        'rate' => rand(1, 5),
        'created_at' => now(),
        'type' => $types[rand(0, 7)],
    ];
});
