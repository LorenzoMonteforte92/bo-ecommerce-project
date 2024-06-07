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
            $newProduct = new Product();
            $newProduct->name = $faker->word(2);
            $newProduct->image = 'https://picsum.photos/200/300';
            $newProduct->description = $faker->sentence();
            $newProduct->price = $faker->randomNumber(3); 
            $newProduct->quantity = $faker->randomNumber(4);
            $newProduct->slug = Str::slug($newProduct->name, '-');
            $newProduct->save();
        }
    }
}
