<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Shipment;

class DatiSpedizione extends Seeder
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
            Shipment::create([
                'ordine_id' => $faker->randomNumber(),
                'stato_spedizione' => $faker->randomElement(['In transito', 'Spedito', 'In attesa']),
                'numero' => $faker->unique()->ean13(),
                'spedito_il' => $faker->date(),
                'arriva' => $faker->date(),
            ]);
        }
    }
}
