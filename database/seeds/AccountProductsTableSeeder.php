<?php

use Illuminate\Database\Seeder;
use App\AccountProduct;

class AccountProductsTableSeeder extends Seeder
{
    public function run()
    {
        $i = 0;
        for ($p = 0; $p < 50; $p++) {
            AccountProduct::create([
                'account_id' => $i + 1,
                'product_id' => $p + 1,
            ]); 
            if($p == (($i + 1) * 10) - 1) $i++; 
        }
    }
}
