<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoicingDetail extends Model
{
    protected $fillable = [
        'customer_id', 'name', 'organisation', 'email', 'phone', 'address'
    ];
}
