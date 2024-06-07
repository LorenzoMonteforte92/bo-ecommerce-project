<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
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
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newOrder = new Order();
            $newOrder->user_id = $faker->randomNumber();
            $newOrder->stato_pagamento = $faker->randomElement(['Pagato', 'In sospeso', 'Annullato']);
            $newOrder->totali = $faker->randomNumber(4);
            $newOrder->stato = $faker->randomElement(['In attesa', 'In elaborazione', 'Spedito', 'Consegnato']); 
            $newOrder->metodo_pagamento = $faker->randomElement(['Carta di credito', 'PayPal', 'Bonifico bancario']);
            $newOrder->save();
        }

    }
    
}
