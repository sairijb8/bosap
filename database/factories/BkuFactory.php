<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bku;
use Faker\Generator as Faker;

$factory->define(Bku::class, function (Faker $faker) {
    $name = Str::random(3);
	return [
        'kode_bku' => $name,
        'no_bukti' => $name,
        'tanggal' => now(),
        'uraian' => $faker->paragraph,
        'jumlah' => 100000,
	'jenis_pengeluaran_id' => function() {
            return factory(App\JenisPengeluaran::class)->create()->id;
        },
    ];
});
