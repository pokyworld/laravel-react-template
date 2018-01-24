<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountUnit extends Model
{
    public function accountUnits()
    {
        return $this->hasMany(Account::class, Unit::class);
    }
}
