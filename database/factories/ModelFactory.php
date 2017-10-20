<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    $create_time = $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = date_default_timezone_get());
    $title = $faker->sentence($nbWords = 6, $variableNbWords = true);
    return [
        'title' => $title,
        'slug' => strtolower(implode('-', explode(' ', $title))),
        'body' => $faker->paragraphs($nb = 3, $asText = true),
        'published_at' => $faker->dateTimeBetween($startDate = $create_time, $endDate = 'now', $timezone = date_default_timezone_get()),
        'created_at' => $create_time,
        'updated_at' => $faker->dateTimeBetween($startDate = $create_time, $endDate = 'now', $timezone = date_default_timezone_get())
    ];
});

$factory->define(App\Tag::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->word  
    ];
});