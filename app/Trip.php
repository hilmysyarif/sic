<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model {

    protected $fillable = ['name', 'description', 'price', 'meet_loc', 'num_cap'];


    /*A trip has many bookings*/
    function bookings ()
    {
        return $this->hasMany('app/Booking');
    }

}
