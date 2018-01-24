<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'name', 
    ];

    protected $hidden = [];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

}
