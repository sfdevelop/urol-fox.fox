<?php

namespace App\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'title',
    ];

    protected $fillable = [
        'sort',
    ];
}
