<?php

use Illuminate\Database\Seeder;
use App\UserAddress;

class UserAddressesTableSeeder extends Seeder
{
    public function run()
    {
        // Create an address for each user
        $i = 0;
        for ($u = 0; $u < 10; $u++) {
            UserAddress::create([
                'user_id' => $u + 1,
                'address_id' => (($i * 10) + (($u % 2) + 1)),
            ]); 
            if($u % 2 != 0) $i++;                 
        }
    }
}
