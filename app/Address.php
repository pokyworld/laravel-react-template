<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        "street", "locality", "city", "state", "postcode"
    ];

    protected $hidden = [];

    public function addresses()
    {
        return $this->hasMany(Unit::class, User::class);
    }
}
