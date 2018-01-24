<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountAddress extends Model
{
    public function accountAddresses()
    {
        return $this->hasMany(Account::class, Address::class);
    }
}
