<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'short_desc',
        'description',
        'seo_title',
        'seo_key',
        'seo_description',
    ];
}
