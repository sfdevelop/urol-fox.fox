<?php

namespace App\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class CharacteristicProduct extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'title_character',
    ];

    protected $fillable = [
        'characteristic_id',
        'product_id',
    ];

    public function characteristic()
    {
        return $this->belongsTo(Characteristic::class, 'characteristic_id', 'id');
    }
}
