<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ServiceTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'seo_title',
        'seo_key',
        'seo_description',
    ];
}
