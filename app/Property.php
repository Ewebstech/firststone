<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $guarded = [];

    public function getImageNameAttribute($value)
    {
        return 'uploads/property/'.$value;
    }
}
