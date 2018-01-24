<?php

use Illuminate\Database\Seeder;
use App\Unit;

class UnitsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
 
        // Create 8 unit records per (5) account
        for ($i = 0; $i < 5; $i++) {
            for ($u = 0; $u < 8; $u++) {
                Unit::create([
                    'name' => $faker->company,
                    'manager_user_id' => $i + $i + 1,
                    'invoice_address_id' => (($i * 10) + $u + 1),
                    'delivery_address_id' => (($i * 10) + $u + 1),
                ]);
            }
        }      
    }
}
