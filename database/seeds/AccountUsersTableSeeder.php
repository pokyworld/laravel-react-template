<?php

use Illuminate\Database\Seeder;
use App\AccountUser;

class AccountUsersTableSeeder extends Seeder
{
    public function run()
    {
        $i = 0;
        for ($u = 0; $u < 10; $u++) {
            AccountUser::create([
                'account_id' => $i + 1,
                'user_id' => $u + 1,
            ]); 
            if($u == (($i + 1) * 2) - 1) $i++; 
        }
    }
}
