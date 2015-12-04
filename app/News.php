<?php

namespace App;

use Lanz\Commentable\Commentable;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{

		use Commentable;

        protected $fillable=[
        'title',
        'category',
        'content',
        'publisher',
        'image'
    ];
}
