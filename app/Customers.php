<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
        protected $fillable=[
        'cust_name',
        'email',
        'phone',
        'country',
        'image'
    ];
}
