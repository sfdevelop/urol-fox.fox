<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CharacteristicProductTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title_character',
    ];
}
