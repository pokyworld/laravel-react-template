<?php

use Illuminate\Database\Seeder;
use App\AccountUnit;

class AccountUnitsTableSeeder extends Seeder
{
    public function run()
    {
        // Link 8 units to each of the 5 account records
        $i = 0;
        for ($u = 0; $u < 40; $u++) {
            AccountUnit::create([
                'account_id' => $i + 1,
                'unit_id' => $u + 1,
            ]); 
            if($u == (($i + 1) * 8) - 1) $i++; 
        }
    }
}
