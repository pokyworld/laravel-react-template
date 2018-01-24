<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
 
        // Create 10 product records per account
        for ($i = 0; $i < 5; $i++) {
            for($p = 0; $p < 10; $p++) {
                Product::create([
                    'title' => $faker->company,
                    'description' => $faker->paragraph,
                    'price' => $faker->numberBetween(100, 9999) / 100,
                    'availability' => $faker->boolean()
                ]);    
            }
        }
    }
}
