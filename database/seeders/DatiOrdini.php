<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\Order;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatiOrdini extends Seeder
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
            Order::create([
                'user_id' => $faker->randomNumber(),
                'stato_pagamento' => $faker->randomElement(['Pagato', 'In sospeso', 'Annullato']),
                'totali' => $faker->randomNumber(4),
                'stato' => $faker->randomElement(['In attesa', 'In elaborazione', 'Spedito', 'Consegnato']),
                'metodo_pagamento' => $faker->randomElement(['Carta di credito', 'PayPal', 'Bonifico bancario']),
            ]);
        }
    }
}
