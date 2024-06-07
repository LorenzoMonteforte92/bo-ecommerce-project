<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newProject = new Product();
            $newProject->user_id = $faker->randomNumber(3);
            $newProject->product_id = $faker->randomNumber(3);
            $newProject->quntity = $faker->randomNumber(3);
            $newProject->total = $faker->randomNumber(3); 
            $newProject->quantity = $faker->randomNumber(4);
            $newProject->category = $faker->word();
            $newProject->save();
        }
    }
}
