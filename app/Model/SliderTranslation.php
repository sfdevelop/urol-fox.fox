<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SliderTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'slogan',
        'seo_title',
        'seo_key',
        'seo_description',
    ];
}
