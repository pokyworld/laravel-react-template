<?php

use Illuminate\Database\Seeder;
use App\Address;

class AddressesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
 
        // Create 50 address records
        for ($i = 0; $i < 50; $i++) {
            Address::create([
                'name' => $faker->company,
                'street' => $faker->streetAddress,
                'locality' => $faker->streetSuffix,
                'city' => $faker->companyEmail,
                'state' => $faker->state,
                'state_abbr' => $faker->stateAbbr,
                'postcode' => $faker->postcode,
                'country' => $faker->country,
                'email' => $faker->freeEmail,
                'country_code' => '+'.substr($faker->e164PhoneNumber, 1, 2),
                'phone' => '0'.substr($faker->e164PhoneNumber, -9),                //'country_abbr' => $faker->country_abbr,
            ]);
        }
    }
}
