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
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\SobreNos::class, function (Faker\Generator $faker) {
    return [
        'titulo' => $faker->word,
        'descricao' => $faker->title,
        'icone' => 'fa-plus',
    ];
});


$factory->define(App\Models\Pagina::class, function (Faker\Generator $faker) {
    return [
        'retranca' => $faker->word,
        'titulo' => $faker->sentence,
        'resumo' => $faker->paragraph,
        'texto' => $faker->text,
        'credito' => 'Divulgação',
        'imagem' => '2.png',
        'legenda' => $faker->sentence,
    ];
});