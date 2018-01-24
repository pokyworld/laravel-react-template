<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        "name", "website", "business_email", "country_code", "phone"
    ];

    protected $hidden = [];

    public function accounts()
    {
        return $this->hasMany(Address::class, Product::class, Unit::class, User::class);
    }
}
