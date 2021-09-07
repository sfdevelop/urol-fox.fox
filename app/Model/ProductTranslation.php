<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'title',
        'description',
        'seo_title',
        'seo_key',
        'seo_description',
    ];
}
