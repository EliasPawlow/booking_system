<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'customer_id', 'facility_id', 'date', 'time_in', 'time_out'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

}
