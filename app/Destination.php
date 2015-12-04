<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
        protected $fillable=[
        'tujuan',
        'slug',
        'description',
        'price',
        'floors',
        'address',
        'city',
        'state',
        'mls',
        'quare_feet',
        'square_feet',
        'bed',
        'bath',
        'image',
        'feature',
        'created_at',
        'update_at'
    ];
}
