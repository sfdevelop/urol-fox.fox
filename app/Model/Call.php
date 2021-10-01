<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'is_see',
    ];
}
