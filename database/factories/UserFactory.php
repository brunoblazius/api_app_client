<?php

use App\User;
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

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'telefone' => $faker->tollFreePhoneNumber(),
        'cpf' => $faker->randomNumber($nbDigits = 8)
    ];
});

$factory->define(App\Produto::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'qtd' => $faker->randomDigit(7),
        'preco' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'descricao' => $faker->sentence()
    ];
});
