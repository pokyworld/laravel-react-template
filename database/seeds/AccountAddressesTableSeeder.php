<?php

use Illuminate\Database\Seeder;
use App\AccountAddress;

class AccountAddressesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
 
        // Link 1 address to each of the 5 account records
        for ($i = 0; $i < 5; $i++) {
            AccountAddress::create([
                'account_id' => $i + 1,
                'address_id' => ($i * 10) + 1,
            ]);
        }
    }
}
