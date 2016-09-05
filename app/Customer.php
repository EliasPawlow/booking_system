<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'organisation', 'email', 'phone', 'address'
    ];

    public function bookings(){
        return $this->hasMany('App\Booking');
    }


}
