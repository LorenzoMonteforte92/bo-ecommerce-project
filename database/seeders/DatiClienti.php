<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\Client;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatiClienti extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();


        for ($i = 0; $i < 10; $i++) {
            Client::create([
                'nome' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'password' =>bcrypt($faker->password()), 
                'telefono' => $faker->phoneNumber(),
            ]);
        }
    }
}
