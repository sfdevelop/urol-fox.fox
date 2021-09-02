<?php

namespace App\Model;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'title',
        'description'
    ];
    protected $fillable = [
        'id',
        'public',
        'sort',
        'created_at',
        'updated_at',
    ];

}
