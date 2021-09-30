<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ContactQuestion extends Model
{

    protected $fillable=[
        'title',
        'mail',
        'question',
        'is_see',
    ];

}
