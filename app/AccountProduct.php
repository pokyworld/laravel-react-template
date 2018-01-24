<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountProduct extends Model
{
    public function accountProducts()
    {
        return $this->hasMany(Account::class, Product::class);
    }
}
