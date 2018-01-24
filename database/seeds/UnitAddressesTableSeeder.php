<?php

use Illuminate\Database\Seeder;
use App\UnitAddress;

class UnitAddressesTableSeeder extends Seeder
{

    public function run()
    {
        // create address for each unit
        $i = 0;
        $j = 0;
        for ($u = 0; $u < 40; $u++) {
            UnitAddress::create([
                'unit_id' => $u + 1,
                'address_id' => (($i * 10) + $j + 1),
            ]); 
            $j++;
            if($j == 8) {
                $j = 0;
                $i++;
            }   
        }
    }
}
