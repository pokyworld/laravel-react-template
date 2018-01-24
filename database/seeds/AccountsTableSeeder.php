<?php

use Illuminate\Database\Seeder;
use App\Account;

class AccountsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
 
        // Create 5 account records
        for ($i = 0; $i < 5; $i++) {
            Account::create([
                'name' => $faker->company,
                'owner_user_id' => $i + $i + 1,
                'invoice_address_id' => ($i * 10) + 1,
                'delivery_address_id' => ($i * 10) + 1,
                'website' => $faker->domainName,
                'business_email' => $faker->companyEmail,
                'country_code' => '+'.substr($faker->e164PhoneNumber, 1, 2),
                'phone' => '0'.substr($faker->e164PhoneNumber, -9),
            ]);
        }
    }
}
