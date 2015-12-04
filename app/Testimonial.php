<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
        protected $fillable=[
        'cust_name',
        'testimonial',
        'image'
    ];
}
