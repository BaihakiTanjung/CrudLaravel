<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class KategoriSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 25; $i++) {

            DB::table('kategori')->insert([
                'nama' => $faker->unique()->name,
            ]);
        }
    }
}
