<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
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
            $newProject->name = $faker->word();
            $newProject->description = $faker->sentence();
            $newProject->price = $faker->randomNumber(3); 
            $newProject->quantity = $faker->randomNumber(4);
            $newProject->category = $faker->word();
            $newProject->save();
        }
    }
}
