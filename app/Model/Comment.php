<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'name',
        'email',
        'description',
        'sort',
        'date',
        'is_public',
    ];

    protected $perPage = 18;


}
