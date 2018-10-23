<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $guarded = [];

    public function getImageNameAttribute($value)
    {
        return 'uploads/investment/'.$value;
    }
}
