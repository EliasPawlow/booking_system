<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
        protected $fillable = [
        'name', 'capacity', 'price'
    ];
    public function bookings(){
        return $this->hasMany('App\Booking');
    }

}
