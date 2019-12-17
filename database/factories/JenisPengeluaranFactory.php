<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\JenisPengeluaran;
use Faker\Generator as Faker;

$factory->define(JenisPengeluaran::class, function (Faker $faker) {
    return [
        'jenis' => Str::random(10),
        'kode' => Str::random(3),
        'pajak' => 0.2,
    ];
});
