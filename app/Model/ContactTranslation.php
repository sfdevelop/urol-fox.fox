<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ContactTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'address',
        'seo_title',
        'seo_key',
        'seo_description',
    ];
}
