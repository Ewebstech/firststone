<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dealsize', 'dealunit', 'amount', 'yieldtarget', 'address', 'status', 'type',
    ];
}
