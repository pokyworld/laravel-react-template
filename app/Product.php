<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'availability'
    ];

    protected $hidden = [];

    public function products()
    {
        return $this->hasMany(Account::class);
    }
}
