<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    protected $fillable =[
        'id',
        'title',
        'image',
    ];
}
