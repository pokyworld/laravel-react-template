<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'country_code', 'phone', 'facebook_id', 
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function accounts() {
        return $this->hasMany(Account::class, Address::class);
    }
}
