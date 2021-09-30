<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PagesTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'seo_title',
        'seo_key',
        'seo_description',
        'title',
        'description',
    ];
}
