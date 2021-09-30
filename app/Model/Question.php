<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=[
        'title',
        'mail',
        'question',
        'is_see',
    ];
}
