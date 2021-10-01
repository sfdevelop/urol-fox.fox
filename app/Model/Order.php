<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product',
        'vendor',
        'price',
        'name',
        'phone',
    ];
}
