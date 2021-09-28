<?php

namespace App\Model;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use Translatable;

    public $translatedAttributes = [
        'address',
        'weekend',
        'time',
        'seo_title',
        'seo_key',
        'seo_description'
    ];

    protected $fillable = [
        'phone1',
        'phone2',
        'phone3',
        'email',
    ];
}
