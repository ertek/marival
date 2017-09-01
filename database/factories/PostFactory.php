<?php

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

$factory->define(App\Post::class, function (Faker $faker) {

    return [
        'titulo' => str_limit($faker->text, 50),
        'texto' => $faker->realText(1000),
        'imagen' => "images/". $faker->image('public/storage/images',400,300, null, false),
    ];
});
