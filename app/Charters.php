<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Charters extends Model
{
        protected $fillable=[
        'name',
        'slug',
        'beds',
        'bath',
        'lokasi',
        'sqft',
        'categories',
        'price',
        'image',
        'headline'
    ];
}
