<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountUser extends Model
{
    public function accountUsers()
    {
        return $this->hasMany(Account::class, User::class);
    }
}
