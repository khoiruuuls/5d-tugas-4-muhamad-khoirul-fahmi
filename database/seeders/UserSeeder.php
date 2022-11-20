<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'kode_mk' => $faker->numerify('IF###'),
                'nama_mk' => $faker->firstName . " " . $faker->lastName,
                'sks' => $faker->randomFloat(2),
                'nama_dosen' => $faker->firstName . " " . $faker->lastName
            ]);
        }
    }
}
