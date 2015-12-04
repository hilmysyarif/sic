<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model {

    protected $fillable = ['id', 'cust_name', 'tour_name', 'tour_date', 'price', 'status', 'created_at'];

    /*A booking belongs to a trip*/
    function customers()
    {
        return $this->hasMany('Customers');
    }

    function lokasis()
    {
        return $this->belongsTo('app/Lokasi');
    }

}
