<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
	$this->call([
        	UsersTableSeeder::class,
      	]);
	factory(App\JenisPengeluaran::class,3)->create()->each(function ($jenis) {
		factory(App\Bku::class,4)->create(['jenis_pengeluaran_id' => $jenis->id]);
	});
    }
}
