<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CharacteristicTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
    ];
}
