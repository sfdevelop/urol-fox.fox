<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostTranslation  extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'description'
    ];
}
